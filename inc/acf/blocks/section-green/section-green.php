<?php

    $block_css_classes = [
        'section-green'
    ];

    echo $is_preview ? '<div class="gt-block-preview"><p style="font-style: italic; background: green;">BLOCK: section-green</p>' : '' ;

    $green_title = get_field('green__title');
    $green_text = get_field('green__text')

?>

<section class='green'>
    <h1><?php echo $green_title ?></h1>
    <p><?php echo $green_text ?></p>
</section>

<?php
    echo $is_preview ? '</div>' : '';
?>