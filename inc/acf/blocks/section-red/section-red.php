<?php

    $block_css_classes = [
        'section-red'
    ];

    echo $is_preview ? '<div class="gt-block-preview"><p style="font-style: italic; background: red;">BLOCK: section-red</p>' : '' ;

    $red_title = get_field('red__title');
    $red_text = get_field('red__text')

?>

<section class='red'>
    <h1><?php echo $red_title ?></h1>
    <p><?php echo $red_text ?></p>
</section>

<?php
    echo $is_preview ? '</div>' : '';
?>