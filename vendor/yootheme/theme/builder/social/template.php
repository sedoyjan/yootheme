<?php

$el = $this->el('div', [
    'id' => $element['id'],
    'class' => $element['class'],
]);

// Grid
$grid = $this->el('div', [

    'class' => [
        'uk-child-width-auto',
        'uk-grid-{gutter}',
        'uk-flex-{text_align}[@{text_align_breakpoint} [uk-flex-{text_align_fallback}]]',
    ],

    'uk-grid' => true,
]);

// Icon
$icon = $this->el('a', [

    'class' => [
        'el-link',
        'uk-icon-link {@!link_style}',
        'uk-icon-button {@link_style: button}',
        'uk-link-{link_style: muted|text|reset}',
    ],

    'target' => ['_blank {@link_target}'],
]);

?>

<?= $el($element->props, $element['attrs']) ?>
    <?= $grid($element->props) ?>

    <?php foreach (array_filter($element['links'] ?: []) as $link) : ?>
        <div>
            <?= $icon($element->props, ['href' => $link, 'uk-icon' => [
                "icon: {$this->e($link, 'social')};",
                'ratio: {icon_ratio}; {@!link_style: button}',
            ]], '') ?>
        </div>
    <?php endforeach ?>

    </div>
</div>
