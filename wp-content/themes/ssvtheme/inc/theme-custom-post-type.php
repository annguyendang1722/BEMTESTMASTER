<?php
/* Registrer post menu */
register_post_type('blocks',
  array(
    'labels' => array(
        'add_new_item' => __('Add block', "blocks"),
        'name' => __('Blocks', "blocks"),
        'singular_name' => __('Block', "blocks"),
        'edit_item' => __('Edit Block', "blocks"),
        'view_item' => __('View Block', "blocks"),
        'search_items' => __('Search Blocks', "blocks"),
        'not_found' => __('No Blocks found', "blocks"),
        'not_found_in_trash' => __('No Blocks found in Trash', "blocks"),
    ),
    'public' => true,
    'has_archive' => true,
    'show_in_menu' => true,
    'supports' => array('thumbnail','editor','title','revisions','custom-fields'),
    'show_in_nav_menus' => true,
    'exclude_from_search' => true,
    'rewrite' => array('slug' => ''),
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'capability_type' => 'page',
    'hierarchical' => true,
    'menu_position' => null,
    'menu_icon' => 'dashicons-tagcloud',
  )
);


add_filter( 'manage_edit-blocks_columns', 'my_edit_blocks_columns' ) ;

function my_edit_blocks_columns( $columns ) {
  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Title' , 'blocks'),
    'shortcode' => __( 'Shortcode' , 'blocks'),
    'date' => __( 'Date' , 'blocks'),
  );

  return $columns;
}


add_action( 'manage_blocks_posts_custom_column', 'my_manage_blocks_columns', 10, 2 );
function my_manage_blocks_columns( $column, $post_id ) {
    global $post;
    $post_data = get_post($post_id, ARRAY_A);
    $slug = $post_data['post_name'];
    add_thickbox();
    switch( $column ) {
        case 'shortcode' :
            echo '<textarea style="min-width:100%; max-height:30px; background:#eee;">[block id="'.$slug.'"]</textarea>';
        break;
    }
}



/**
 * Custom block category
 */

function my_blocks_plugin_block_categories( $categories ) {
  return array_merge(
      $categories,
      array(
          array(
              'slug' => 'sdv_components',
              'title' => __( 'SDV Components', 'ssvtheme' ),
              'icon'  => 'wordpress',
          ),
      )
  );
}
add_filter( 'block_categories', 'my_blocks_plugin_block_categories', 10, 2 );

// Register a Block.
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // // register a testimonial block.
        // acf_register_block_type(array(
        //     'name'              => 'Hero',
        //     'title'             => __('Hero'),
        //     'description'       => __('A custom hero block.'),
        //     'render_template'   => 'templates/components/hero.php',
        //     'category'          => 'sdv_components',
        //     'icon'              => 'admin-comments',
        //     'keywords'          => array( 'hero', 'quote' ),
        //     'styles'  => [
        //       [
        //         'name' => 'hero',
        //         'label' => __('Default', 'abc'),
        //         'isDefault' => true,
        //       ],
        //       [
        //         'name' => 'hero-style1',
        //         'label' => __('Hero Style1', 'abc'),
        //       ]
        //     ],
        // ));

        // register a testimonial block.
        acf_register_block_type(array(
          'name'              => 'Banner',
          'title'             => __('Banner'),
          'description'       => __('A custom banner block.'),
          'render_template'   => 'templates/components/banner.php',
          'category'          => 'sdv_components',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'banner', 'quote' ),
          'styles'  => [
            [
              'name' => 'hero',
              'label' => __('Default', 'ssvtheme'),
              'isDefault' => true,
            ],
            [
              'name' => 'banner-style1',
              'label' => __('Banner Style 1', 'ssvtheme'),
            ]
          ],
        ));

        // register a testimonial block.
        acf_register_block_type(array(
          'name'              => 'Call to action',
          'title'             => __('Call to action'),
          'description'       => __('A custom Call to action block.'),
          'render_template'   => 'templates/components/cta.php',
          'category'          => 'sdv_components',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'cta', 'quote' ),
        ));


        // register a testimonial block.
        acf_register_block_type(array(
          'name'              => 'Grid Content',
          'title'             => __('Grid Content'),
          'description'       => __('A custom Grid Content block.'),
          'render_template'   => 'templates/components/grid-content.php',
          'category'          => 'sdv_components',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'grid-content', 'quote' ),
        ));

        // // register a testimonial block.
        // acf_register_block_type(array(
        //   'name'              => 'testimonial',
        //   'title'             => __('Testimonial'),
        //   'description'       => __('A custom testimonial block.'),
        //   'render_template'   => 'templates/components/testimonial.php',
        //   'category'          => 'sdv_components',
        //   'icon'              => 'admin-comments',
        //   'keywords'          => array( 'testimonial', 'quote' ),
        // ));
    }
}
