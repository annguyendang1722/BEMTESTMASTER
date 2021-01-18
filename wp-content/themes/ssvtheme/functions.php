<?php
/*
 *  Author: Sentius Group
 *  URL: sentiustdigital.com | @ssvtheme
 *  Custom functions, support, custom post types and more.
 */

  require get_template_directory() . '/inc/init.php';
  add_filter('use_block_editor_for_post', '__return_false');
?>
<?php
// create menu
if (!function_exists('register_menu_menu')) {
    function register_menu_menu()
    {
        register_nav_menus(
            array(
                'menu-recent-news' => __('Menu Recent News'),
                'menu-categories' => __('Menu Categories'),
                'menu-address' => __('Menu Address'),
                'menu-contacts' => __('Menu Contacts'),
                'menu-links' => __('Menu Links'),
                'menu-feedback' => __('Menu Feedback'),
                'menu-logo' => __('Menu Logo'),
                'menu-social' => __('Menu Social'),   
            )
        );
    }
    add_action('init', 'register_menu_menu');
}
?>