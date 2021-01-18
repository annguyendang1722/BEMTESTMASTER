<?php
  // Add style to header.
  function ssvwp_add_styles() {
    wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('styles');
  }
  
  // Add script to footer.
  function ssvwp_add_scripts() {
    global $wp_query;
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
      wp_register_script('slick', get_template_directory_uri() . '/assets/js/lib/slick.js', array('jquery'), '1.0.0'); // Custom scripts
      wp_enqueue_script('slick');
      wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0'); // Custom scripts
      wp_enqueue_script('script');
    }
  }
  
  /*------------*\
      Actions
  \*------------*/
  add_action('wp_enqueue_scripts', 'ssvwp_add_styles'); // Add Theme Stylesheet
  add_action('wp_footer', 'ssvwp_add_scripts'); // Add Custom Scripts to wp_head
?>
