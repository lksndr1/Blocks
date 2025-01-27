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
    <div class="posts">
        <?php
            $my_posts = get_posts( array(
                'numberposts' => 5,
                'category_name'    => 'singer',
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