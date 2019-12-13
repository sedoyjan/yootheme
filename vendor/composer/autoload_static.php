<?php

// autoload_static.php @generated by Composer

namespace YOOtheme\Autoload;

class ComposerStaticInit7a828d6eb6e8222953fb8e1f3c982a41
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YOOtheme\\Theme\\' => 15,
            'YOOtheme\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YOOtheme\\Theme\\' => 
        array (
            0 => __DIR__ . '/..' . '/yootheme/theme/modules/builder/src',
            1 => __DIR__ . '/..' . '/yootheme/theme/modules/settings/src',
            2 => __DIR__ . '/..' . '/yootheme/theme/modules/styler/src',
            3 => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src',
            4 => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla-modules/src',
            5 => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src',
            6 => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress-widgets/src',
        ),
        'YOOtheme\\' => 
        array (
            0 => __DIR__ . '/..' . '/yootheme/theme/src',
            1 => __DIR__ . '/..' . '/yootheme/framework/src',
            2 => __DIR__ . '/..' . '/yootheme/framework/modules/app/src',
            3 => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src',
            4 => __DIR__ . '/..' . '/yootheme/framework/modules/event/src',
            5 => __DIR__ . '/..' . '/yootheme/framework/modules/view/src',
            6 => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src',
            7 => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src',
            8 => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static $classMap = array (
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'YOOtheme\\Application' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/Application.php',
        'YOOtheme\\Asset' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset.php',
        'YOOtheme\\AssetCollection' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/AssetCollection.php',
        'YOOtheme\\AssetFactory' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/AssetFactory.php',
        'YOOtheme\\AssetInterface' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/AssetInterface.php',
        'YOOtheme\\AssetManager' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/AssetManager.php',
        'YOOtheme\\Asset\\CssImageBase64Filter' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/CssImageBase64Filter.php',
        'YOOtheme\\Asset\\CssImportResolverFilter' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/CssImportResolverFilter.php',
        'YOOtheme\\Asset\\CssRewriteUrlFilter' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/CssRewriteUrlFilter.php',
        'YOOtheme\\Asset\\CssRtlFilter' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/CssRtlFilter.php',
        'YOOtheme\\Asset\\FileAsset' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/FileAsset.php',
        'YOOtheme\\Asset\\FilterInterface' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/FilterInterface.php',
        'YOOtheme\\Asset\\FilterManager' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/FilterManager.php',
        'YOOtheme\\Asset\\StringAsset' => __DIR__ . '/..' . '/yootheme/framework/modules/asset/src/Asset/StringAsset.php',
        'YOOtheme\\Container' => __DIR__ . '/..' . '/yootheme/framework/src/Container.php',
        'YOOtheme\\ContainerTrait' => __DIR__ . '/..' . '/yootheme/framework/src/ContainerTrait.php',
        'YOOtheme\\CsrfProvider' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/CsrfProvider.php',
        'YOOtheme\\Database' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Database.php',
        'YOOtheme\\DatabaseInterface' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/DatabaseInterface.php',
        'YOOtheme\\Encryption' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Encryption.php',
        'YOOtheme\\Encryption\\Library' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Encryption/Library.php',
        'YOOtheme\\Encryption\\McryptLibrary' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Encryption/McryptLibrary.php',
        'YOOtheme\\Encryption\\OpenSSLLibrary' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Encryption/OpenSSLLibrary.php',
        'YOOtheme\\Event' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/Event.php',
        'YOOtheme\\EventInterface' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventInterface.php',
        'YOOtheme\\EventManager' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventManager.php',
        'YOOtheme\\EventManagerInterface' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventManagerInterface.php',
        'YOOtheme\\EventSubscriber' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventSubscriber.php',
        'YOOtheme\\EventSubscriberInterface' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventSubscriberInterface.php',
        'YOOtheme\\EventTrait' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/EventTrait.php',
        'YOOtheme\\HttpClientInterface' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/HttpClientInterface.php',
        'YOOtheme\\Http\\Exception' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Exception.php',
        'YOOtheme\\Http\\Message' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message.php',
        'YOOtheme\\Http\\Message\\InputStream' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/InputStream.php',
        'YOOtheme\\Http\\Message\\Message' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/Message.php',
        'YOOtheme\\Http\\Message\\Request' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/Request.php',
        'YOOtheme\\Http\\Message\\Response' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/Response.php',
        'YOOtheme\\Http\\Message\\ServerRequest' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/ServerRequest.php',
        'YOOtheme\\Http\\Message\\Stream' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/Stream.php',
        'YOOtheme\\Http\\Message\\UploadedFile' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/UploadedFile.php',
        'YOOtheme\\Http\\Message\\Uri' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Message/Uri.php',
        'YOOtheme\\Http\\Request' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Request.php',
        'YOOtheme\\Http\\Response' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Response.php',
        'YOOtheme\\Http\\Uri' => __DIR__ . '/..' . '/yootheme/framework/src/Http/Uri.php',
        'YOOtheme\\Image' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Image.php',
        'YOOtheme\\ImageProvider' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/ImageProvider.php',
        'YOOtheme\\Image\\GDResource' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Image/GDResource.php',
        'YOOtheme\\Image\\Resource' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Image/Resource.php',
        'YOOtheme\\Joomla' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla.php',
        'YOOtheme\\Joomla\\ArticleHelper' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/ArticleHelper.php',
        'YOOtheme\\Joomla\\Database' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/Database.php',
        'YOOtheme\\Joomla\\DateHelper' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/DateHelper.php',
        'YOOtheme\\Joomla\\HttpClient' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/HttpClient.php',
        'YOOtheme\\Joomla\\Option' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/Option.php',
        'YOOtheme\\Joomla\\UrlGenerator' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/UrlGenerator.php',
        'YOOtheme\\Joomla\\UserProvider' => __DIR__ . '/..' . '/yootheme/framework/platforms/joomla/src/Joomla/UserProvider.php',
        'YOOtheme\\Kernel' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/Kernel.php',
        'YOOtheme\\Module' => __DIR__ . '/..' . '/yootheme/framework/src/Module.php',
        'YOOtheme\\ModuleKernel' => __DIR__ . '/..' . '/yootheme/framework/src/ModuleKernel.php',
        'YOOtheme\\ModuleManager' => __DIR__ . '/..' . '/yootheme/framework/src/ModuleManager.php',
        'YOOtheme\\ModuleTrait' => __DIR__ . '/..' . '/yootheme/framework/src/ModuleTrait.php',
        'YOOtheme\\Module\\AutoLoader' => __DIR__ . '/..' . '/yootheme/framework/src/Module/AutoLoader.php',
        'YOOtheme\\Module\\ConfigLoader' => __DIR__ . '/..' . '/yootheme/framework/src/Module/ConfigLoader.php',
        'YOOtheme\\Module\\EventLoader' => __DIR__ . '/..' . '/yootheme/framework/modules/event/src/Module/EventLoader.php',
        'YOOtheme\\Route' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/Route.php',
        'YOOtheme\\RouteCollection' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/RouteCollection.php',
        'YOOtheme\\Router' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/Router.php',
        'YOOtheme\\Theme' => __DIR__ . '/..' . '/yootheme/theme/src/Theme.php',
        'YOOtheme\\Theme\\Builder' => __DIR__ . '/..' . '/yootheme/theme/modules/builder/src/Builder.php',
        'YOOtheme\\Theme\\BuilderElement' => __DIR__ . '/..' . '/yootheme/theme/modules/builder/src/BuilderElement.php',
        'YOOtheme\\Theme\\CacheController' => __DIR__ . '/..' . '/yootheme/theme/modules/settings/src/CacheController.php',
        'YOOtheme\\Theme\\Customizer' => __DIR__ . '/..' . '/yootheme/theme/src/Theme/Customizer.php',
        'YOOtheme\\Theme\\ElementRenderer' => __DIR__ . '/..' . '/yootheme/theme/modules/builder/src/ElementRenderer.php',
        'YOOtheme\\Theme\\Joomla' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla.php',
        'YOOtheme\\Theme\\JoomlaViews' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/JoomlaViews.php',
        'YOOtheme\\Theme\\Joomla\\ChildThemeListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla/ChildThemeListener.php',
        'YOOtheme\\Theme\\Joomla\\ContentListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla/ContentListener.php',
        'YOOtheme\\Theme\\Joomla\\CustomizerListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla/CustomizerListener.php',
        'YOOtheme\\Theme\\Joomla\\SystemCheck' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla/SystemCheck.php',
        'YOOtheme\\Theme\\Joomla\\UrlListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla/src/Joomla/UrlListener.php',
        'YOOtheme\\Theme\\Modules' => __DIR__ . '/..' . '/yootheme/theme/platforms/joomla-modules/src/Modules.php',
        'YOOtheme\\Theme\\StyleController' => __DIR__ . '/..' . '/yootheme/theme/modules/styler/src/StyleController.php',
        'YOOtheme\\Theme\\StyleFontLoader' => __DIR__ . '/..' . '/yootheme/theme/modules/styler/src/StyleFontLoader.php',
        'YOOtheme\\Theme\\Styler' => __DIR__ . '/..' . '/yootheme/theme/modules/styler/src/Styler.php',
        'YOOtheme\\Theme\\SystemCheck' => __DIR__ . '/..' . '/yootheme/theme/src/Theme/SystemCheck.php',
        'YOOtheme\\Theme\\SystemCheckController' => __DIR__ . '/..' . '/yootheme/theme/modules/settings/src/SystemCheckController.php',
        'YOOtheme\\Theme\\ViewHelper' => __DIR__ . '/..' . '/yootheme/theme/src/Theme/ViewHelper.php',
        'YOOtheme\\Theme\\Widgets' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress-widgets/src/Widgets.php',
        'YOOtheme\\Theme\\Wordpress' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress.php',
        'YOOtheme\\Theme\\WordpressQuery' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/WordpressQuery.php',
        'YOOtheme\\Theme\\Wordpress\\Breadcrumbs' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/Breadcrumbs.php',
        'YOOtheme\\Theme\\Wordpress\\ChildThemeListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/ChildThemeListener.php',
        'YOOtheme\\Theme\\Wordpress\\ContentListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/ContentListener.php',
        'YOOtheme\\Theme\\Wordpress\\CustomizerListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/CustomizerListener.php',
        'YOOtheme\\Theme\\Wordpress\\MenuWalker' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/MenuWalker.php',
        'YOOtheme\\Theme\\Wordpress\\SystemCheck' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/SystemCheck.php',
        'YOOtheme\\Theme\\Wordpress\\UpgradeListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/UpgradeListener.php',
        'YOOtheme\\Theme\\Wordpress\\UrlListener' => __DIR__ . '/..' . '/yootheme/theme/platforms/wordpress/src/Wordpress/UrlListener.php',
        'YOOtheme\\Translation\\Interval' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Translation/Interval.php',
        'YOOtheme\\Translation\\PluralizationRules' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Translation/PluralizationRules.php',
        'YOOtheme\\Translation\\Translator' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Translation/Translator.php',
        'YOOtheme\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/Translation/TranslatorInterface.php',
        'YOOtheme\\UrlGenerator' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/UrlGenerator.php',
        'YOOtheme\\UrlTrait' => __DIR__ . '/..' . '/yootheme/framework/modules/app/src/UrlTrait.php',
        'YOOtheme\\User' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/User.php',
        'YOOtheme\\UserInterface' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/UserInterface.php',
        'YOOtheme\\UserProviderInterface' => __DIR__ . '/..' . '/yootheme/framework/platforms/common/src/UserProviderInterface.php',
        'YOOtheme\\Util\\Arr' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Arr.php',
        'YOOtheme\\Util\\Collection' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Collection.php',
        'YOOtheme\\Util\\File' => __DIR__ . '/..' . '/yootheme/framework/src/Util/File.php',
        'YOOtheme\\Util\\FileLocator' => __DIR__ . '/..' . '/yootheme/framework/src/Util/FileLocator.php',
        'YOOtheme\\Util\\Filter' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Filter.php',
        'YOOtheme\\Util\\FilterManager' => __DIR__ . '/..' . '/yootheme/framework/src/Util/FilterManager.php',
        'YOOtheme\\Util\\FilterTrait' => __DIR__ . '/..' . '/yootheme/framework/src/Util/FilterTrait.php',
        'YOOtheme\\Util\\Memory' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Memory.php',
        'YOOtheme\\Util\\MethodTrait' => __DIR__ . '/..' . '/yootheme/framework/src/Util/MethodTrait.php',
        'YOOtheme\\Util\\Path' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Path.php',
        'YOOtheme\\Util\\Str' => __DIR__ . '/..' . '/yootheme/framework/src/Util/Str.php',
        'YOOtheme\\View' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View.php',
        'YOOtheme\\View\\HtmlElement' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View/HtmlElement.php',
        'YOOtheme\\View\\HtmlHelper' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View/HtmlHelper.php',
        'YOOtheme\\View\\MetadataHelper' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View/MetadataHelper.php',
        'YOOtheme\\View\\SectionHelper' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View/SectionHelper.php',
        'YOOtheme\\View\\StrHelper' => __DIR__ . '/..' . '/yootheme/framework/modules/view/src/View/StrHelper.php',
        'YOOtheme\\Wordpress' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress.php',
        'YOOtheme\\Wordpress\\CsrfProvider' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/CsrfProvider.php',
        'YOOtheme\\Wordpress\\Database' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/Database.php',
        'YOOtheme\\Wordpress\\DateHelper' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/DateHelper.php',
        'YOOtheme\\Wordpress\\HttpClient' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/HttpClient.php',
        'YOOtheme\\Wordpress\\Option' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/Option.php',
        'YOOtheme\\Wordpress\\Session' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/Session.php',
        'YOOtheme\\Wordpress\\Update' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/Update.php',
        'YOOtheme\\Wordpress\\UrlGenerator' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/UrlGenerator.php',
        'YOOtheme\\Wordpress\\UserProvider' => __DIR__ . '/..' . '/yootheme/framework/platforms/wordpress/src/Wordpress/UserProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a828d6eb6e8222953fb8e1f3c982a41::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a828d6eb6e8222953fb8e1f3c982a41::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a828d6eb6e8222953fb8e1f3c982a41::$classMap;

        }, null, ClassLoader::class);
    }
}
