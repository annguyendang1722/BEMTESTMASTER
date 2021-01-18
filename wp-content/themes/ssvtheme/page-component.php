<?php  
  /* 
  Template Name: Components Page
  */  
?>
<?php get_header(); ?>
  <main role="main">
    <?php
      // Block reference
      get_template_part('templates/components/banner');
      get_template_part('templates/components/cta');
      get_template_part('templates/components/grid-content');
      get_template_part('templates/components/maps');
      get_template_part('templates/components/progress-blocks');
      get_template_part('templates/components/social-blocks');
      get_template_part('templates/components/tables-and-pricing-tables');
      get_template_part('templates/components/forms');
      get_template_part('templates/components/footers');
      get_template_part('templates/components/testimonial');
    ?>
  </main>
<?php get_footer(); ?>
