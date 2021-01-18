<?php
if( have_rows('components') ):
     // loop through the rows of data
  while ( have_rows('components') ) : the_row();
    // Block reference
    get_template_part('templates/components/block-reference');

  endwhile;
endif;?>
