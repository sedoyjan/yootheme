<?php

namespace YOOtheme;

use YOOtheme\Util\File;
use YOOtheme\Util\Str;

class ImageProvider
{
    const IMAGE = '/<(?:div|img)\s+[^>]*?(\w+-)?src=([\"\'].+?\.(?:gif|png|jpe?g)#.+?[\"\'])[^>]*>/i';

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $route;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var array
     */
    protected $params;

    /**
     * @var array
     */
    protected $loaders = [];

    /**
     * @var array
     */
    protected static $cache = [];

    /**
     * Constructor.
     *
     * @param UrlGenerator $url
     * @param string       $path
     * @param array        $config
     */
    public function __construct($url, $path, array $config = [])
    {
        $this->url = $url;
        $this->path = File::normalizePath($path);
        $this->route = isset($config['route']) ? $config['route'] : '@image';
        $this->secret = isset($config['secret']) ? $config['secret'] : filemtime(__FILE__);
        $this->params = isset($config['params']) ? $config['params'] : [];
    }

    /**
     * Adds a loader callback.
     *
     * @param  callable $loader
     * @return self
     */
    public function addLoader(callable $loader)
    {
        $this->loaders[] = $loader;
        return $this;
    }

    /**
     * Creates an image.
     *
     * @param  string $src
     * @param  bool   $resource
     * @return Image|null
     */
    public function create($src, $resource = true)
    {
        list($file, $params) = $this->parse($src);

        if (Str::endsWith($file, '.svg')) {
            return null;
        }

        $image = new Image($file, $resource);
        $image->setAttribute('src', $src);

        if ($image->getFile()) {

            $image = $image->setAttribute('params', $params);

            foreach ($this->loaders as $loader) {
                $image = $loader($image, $this) ?: $image;
            }

            return $image;
        }
    }

    /**
     * Parse image url.
     *
     * @param  string $url
     * @return array
     */
    public function parse($url)
    {
        $url = urldecode($url);
        $file = parse_url($url, PHP_URL_PATH);
        $data = parse_url($url, PHP_URL_FRAGMENT);

        // replace params
        if ($this->params) {
            $data = strtr($data, $this->params);
        }

        // parse params
        parse_str($data, $params);

        return [$file, $params];
    }

    /**
     * Replace images in HTML.
     *
     * @param  string $text
     * @return string
     */
    public function replace($text)
    {
        if (stripos($text, '<div') !== false || stripos($text, '<img') !== false) {
            return preg_replace_callback(static::IMAGE, [$this, 'replaceCallback'], $text);
        }

        return $text;
    }

    /**
     * Replace image callback.
     *
     * @param  array $matches
     * @return string
     */
    public function replaceCallback($matches)
    {
        list($tag, $prefix, $source) = $matches;

        $src = html_entity_decode(trim($source, "\"'"));

        if ($image = $this->create($src, false)) {

            $attrs = $this->getSrcsetAttrs($image, $prefix);
            $srcAttr = "{$prefix}src";

            // set prefix for width/height
            if (!$prefix && isset($attrs["{$prefix}srcset"])) {
                $prefix = 'data-';
            }

            // set image width
            if (!stripos($tag, 'width=')) {
                $attrs["{$prefix}width"] = $image->width;
            }

            // set image height
            if (!stripos($tag, 'height=')) {
                $attrs["{$prefix}height"] = $image->height;
            }

            // format image attrs
            foreach ($attrs as $key => $value) {
                $attributes[] = sprintf($key != $srcAttr ? '%1$s="%2$s"' : '"%2$s"', $key, htmlspecialchars($value));
            }

            return str_replace($source, join(' ', $attributes), $tag);
        }

        return $tag;
    }

    /**
     * Gets the image hash.
     *
     * @param  string $data
     * @return string
     */
    public function getHash($data)
    {
        return hash_hmac('md5', $data, $this->secret);
    }

    /**
     * Gets the image URL.
     *
     * @param  string|Image $image
     * @return string|null
     */
    public function getUrl($image)
    {
        if (is_string($image)) {

            if (!$image = $this->create($src = $image, false)) {
                return $this->url->to($src);
            }

            $image = $image->apply($image->getAttribute('params'));
        }

        $cached = $image->getHash() ? $image->getFilename($this->path) : null;

        // url to source or cached image
        if (is_null($cached) || (file_exists($cached) && filectime($cached) >= filectime($image->getFile()))) {
            return $this->url->to($cached ?: $image->getFile());
        }

        return $this->url->route($this->route, ['src' => $src = base64_encode($image), 'hash' => $this->getHash($src)]);
    }

    /**
     * Gets the image source set.
     *
     * @param  Image $image
     * @return array
     */
    public function getSrcset($image)
    {
        $params = $image->getAttribute('params');

        if (!isset($params['srcset'])) {
            return [];
        }

        $imageDst = $image->apply($params);
        $maxWidth = min(max($image->width, $imageDst->width), $imageDst->width * 2);
        $maxHeight = min(max($image->height, $imageDst->height), $imageDst->height * 2);

        foreach (explode(',', $params['srcset']) as $value) {

            $resized = $image->apply($params)->resize($value);

            // if oversized, use original image sizes
            if (1 < $scale = max($resized->width / $maxWidth, $resized->height / $maxHeight)) {
                $sizes = [round($resized->width / $scale), round($resized->height / $scale)];
            } else {
                $sizes = [$resized->width, $resized->height];
            }

            // set image parameters
            foreach (['crop', 'resize', 'thumbnail'] as $key) {
                if (isset($params[$key]) && $param = explode(',', $params[$key])) {
                    $resized = $image->apply(array_merge($params, [$key => $sizes + $param]));
                }
            }

            $images[$resized->width] = $resized;
        }

        $images[$imageDst->width] = $imageDst;

        ksort($images);

        return $images;
    }

    public function getSrcsetAttrs(Image $image, $prefix = '')
    {
        $images = $this->getSrcset($image);
        $params = $image->getAttribute('params');
        $image = $image->apply($params);
        $attrs = ["{$prefix}src" => $this->getUrl($image)];

        foreach ($images as $img) {
            $srcset[] = "{$this->getUrl($img)} {$img->width}w";
        }

        if (isset($srcset)) {

            // merge default sizes
            $params = array_merge([
                'sizes' => "(min-width: {$image->width}px) {$image->width}px"
            ], $params);

            // set image srcset/sizes
            $attrs["{$prefix}srcset"] = join(', ', $srcset);
            $attrs["{$prefix}sizes"] = $params['sizes'];

        }

        return $attrs;

    }

    /**
     * Gets the image info.
     *
     * @param  string $file
     * @return array
     */
    public static function getInfo($file)
    {
        if (isset(static::$cache[$file])) {
            return static::$cache[$file];
        }

        if ($info = @getimagesize($file)) {
            return static::$cache[$file] = [$info[0], $info[1], substr($info['mime'], 6)];
        }
    }
}
