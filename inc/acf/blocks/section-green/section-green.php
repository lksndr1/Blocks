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
    <div class="posts">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 5,
                'category_name'    => 'writer',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );

            global $post;

            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                <?php
            }

            wp_reset_postdata();
        ?>
    </div>
</section>

<?php
    echo $is_preview ? '</div>' : '';
?>