<?php

if (!$item['meta']) {
    return;
}

// Meta
$el = $this->el('div', [

    'class' => [
        'el-meta',
        'uk-text-{meta_style: meta}',
        'uk-{meta_style: h4|h5|h6} uk-margin-remove',
        'uk-text-{meta_color}',
    ],

]);

echo $el($element->props, $item['meta']);
