      <section class="social">
         <div class="container">

           <?php $share_this_page_1 = get_field('share_this_page_1');
                  if( $share_this_page_1 ): ?>  
                  <h2 class="social__title">
                        <?php echo $share_this_page_1['title'] ?>
                  </h2>
                  <div class="social__inner">
                              <ul>
                                 <?php
                                 if( have_rows('share_this_page_1') ): while ( have_rows('share_this_page_1') ) : the_row(); 
                                  
                                         if( have_rows('list_social') ): while ( have_rows('list_social') ) : the_row(); ?>
                                       <li>
                                          <a href="<?php  echo get_sub_field('link');  ?>" title="">
                                           <?php   echo get_sub_field('icon');  ?>
                                          </a>
                                       </li>
                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>                       
                              </ul>
                  </div>
            <?php endif; ?>  



         </div>
      </section>
      <section class="social followus">
         <div class="container">


               <?php $follow_1 = get_field('follow_1');
               if( $follow_1 ): ?>  
                  <h2 class="social__title">
                     <?php echo $follow_1['title'] ?>
                  </h2>
                  <div class="social__inner followus__social">
                     <ul>
                     <?php
                     if( have_rows('follow_1') ): while ( have_rows('follow_1') ) : the_row();                       
                           if( have_rows('list_social') ): while ( have_rows('list_social') ) : the_row(); ?>
                           <li>
                              <a href="<?php   echo get_sub_field('link');  ?>" title="">
                               <?php   echo get_sub_field('icon');  ?>
                              </a>
                           </li>
                     <?php  endwhile; endif;
                         endwhile; endif;
                     ?>                       
                     </ul>
                  </div>
               <?php endif; ?>  

         </div>
      </section>
      <section class="social social--1">
         <div class="container">
           <?php $share_this_page_2 = get_field('share_this_page_2');
                  if( $share_this_page_2 ): ?>  
                  <h2 class="social__title">
                        <?php echo $share_this_page_2['title'] ?>
                  </h2>
                  <div class="social__inner">
                              <ul>
                                 <?php
                                 if( have_rows('share_this_page_2') ): while ( have_rows('share_this_page_2') ) : the_row(); 
                                  
                                         if( have_rows('list_social') ): while ( have_rows('list_social') ) : the_row(); ?>
                                       <li class="<?php  echo get_sub_field('class');  ?>">
                                          <a href="<?php  echo get_sub_field('link');  ?>" title="">
                                           <?php echo get_sub_field('icon');  ?>
                                          </a>
                                       </li>
                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>                       
                              </ul>
                  </div>
            <?php endif; ?>  
         </div>
      </section>
      <section class="social followus followus--1">
         
                 <?php $follow_2= get_field('contact_form_2');
                 if( $follow_2): ?> 
                     <img src="<?php echo esc_url($follow_2['background']);?>" alt="" />
                 <?php endif; ?>

         <div class="container">
               <?php $follow_2 = get_field('follow_2');
               if( $follow_2 ): ?>  
                  <h2 class="social__title">
                     <?php echo $follow_2['title'] ?>
                  </h2>
                  <div class="social__inner followus__social">
                     <ul>
                     <?php
                     if( have_rows('follow_2') ): while ( have_rows('follow_2') ) : the_row();                       
                           if( have_rows('list_social') ): while ( have_rows('list_social') ) : the_row(); ?>
                           <li>
                              <a href="<?php   echo get_sub_field('link');  ?>" title="">
                               <?php   echo get_sub_field('icon');  ?>
                              </a>
                           </li>
                     <?php  endwhile; endif;
                         endwhile; endif;
                     ?>                       
                     </ul>
                  </div>
               <?php endif; ?>  
         </div>
      </section>