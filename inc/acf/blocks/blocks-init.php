<?php

function acf_theme_blocks_path($path) {
    return get_template_directory() . '/inc/acf/blocks/' . $path;
}

function gt_block_category_init( $categories, $post ) {
    return array_merge([
            [
                'slug' => 'color section',
                'title' => __('Color section', '_themedomain'),
            ],
        ],
        $categories
    );
}
add_filter( 'block_categories', 'gt_block_category_init', 10, 2 );

function _themeprefix_acf_init_block_types() {
    if(function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'  =>  'section-green',
            'title' =>  __('Section-green', '_themedomain'),
            'description'   =>  __('Block Section-green', '_themedomain'),
            'render_template'   =>  acf_theme_blocks_path('section-green/section-green.php'),
            'category'  =>  'color section',
            'icon'  =>  'format-image',
            'supports'  =>  ['jsx'  =>  true],
            'enqueue_style' => get_template_directory_uri() . '/inc/acf/blocks/section-green/section-green.css',
        ));

        acf_register_block_type(array(
            'name'  =>  'section-red',
            'title' =>  __('Section-red', '_themedomain'),
            'description'   =>  __('Block Section-red', '_themedomain'),
            'render_template'   =>  acf_theme_blocks_path('section-red/section-red.php'),
            'category'  =>  'color section',
            'icon'  =>  'format-image',
            'supports'  =>  ['jsx'  =>  true],
            'enqueue_style' => get_template_directory_uri() . '/inc/acf/blocks/section-red/section-red.css',
        ));
    }
}
add_action( 'acf/init', '_themeprefix_acf_init_block_types' );