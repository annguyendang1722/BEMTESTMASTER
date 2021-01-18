


      <section class="progress__hori">
         <?php $horizontal_progress_bars = get_field('horizontal_progress_bars');
         if( $horizontal_progress_bars ): ?>  
           
               
        
                <img src="<?php echo esc_url($horizontal_progress_bars['background']);?>" alt="" />

         <div class="container">
            <h2 class="progress__title"><?php echo $horizontal_progress_bars['title'] ?></h2>
            <p class="progress__subtitle">
               <?php echo $horizontal_progress_bars['subtitle'] ?>
            </p>
                        

               <?php
               if( have_rows('horizontal_progress_bars') ): while ( have_rows('horizontal_progress_bars') ) : the_row(); 
                
                       if( have_rows('progress_line') ): while ( have_rows('progress_line') ) : the_row(); ?>

                                    <div class="progress__item">
                                       <div class="progress__info">
                                          <div class="progress_name">
                                             <?php   echo get_sub_field('progress_name');  ?>
                                          </div>
                                          <div class="progress_per">
                                             <?php echo get_sub_field('progress_per'); ?><span>%</span>
                                          </div>
                                       </div>
                                       <div class="progress__line">
                                          <div class="progress_primary" style="width:<?php echo get_sub_field('progress_per'); ?>%"></div>
                                       </div>
                                    </div>
                           
               <?php  endwhile; endif;
                   endwhile; endif;
               ?>          
                        
         </div>
         <?php endif; ?>         
      </section>
      <section class="progress__hori progress__hori-block">
         <?php $horizontal_progress_bars_with_text_block = get_field('horizontal_progress_bars_with_text_block');
         if( $horizontal_progress_bars_with_text_block): ?> 

         <div class="container">
            <h2 class="progress__title">
               <?php echo $horizontal_progress_bars_with_text_block['title'] ?>
            </h2>
            <p class="progress__subtitle">
               <?php echo $horizontal_progress_bars_with_text_block['subtitle'] ?>
            </p>
            <div class="row">
               <div class="modular_approach progress__col">
                  <h4>
                     <?php echo $horizontal_progress_bars_with_text_block['progress_title'] ?>
                  </h4>
                     <?php echo $horizontal_progress_bars_with_text_block['progress_content'] ?>
               </div>
               <div class="progress__col">
                     <?php
                        if( have_rows('horizontal_progress_bars_with_text_block') ): 
                           while ( have_rows('horizontal_progress_bars_with_text_block') ) : the_row(); 
                         
                                if( have_rows('progress_line') ): while ( have_rows('progress_line') ) : the_row(); ?>

                                             <div class="progress__item">
                                                <div class="progress__info">
                                                   <div class="progress_name">
                                                      <?php   echo get_sub_field('progress_name');  ?>
                                                   </div>
                                                   <div class="progress_per">
                                                      <?php echo get_sub_field('progress_per'); ?><span>%</span>
                                                   </div>
                                                </div>
                                                <div class="progress__line">
                                                   <div class="progress_primary" style="width:<?php echo get_sub_field('progress_per'); ?>%"></div>
                                                </div>
                                             </div>
                                    
                        <?php  endwhile; endif;
                            endwhile; endif;
                        ?>  
                  
                  
               </div>
            </div>
         </div>
         <?php endif; ?> 
      </section>
      <section class="progress__hori progress__hori-block">
         <?php $horizontal_progress_bars_1= get_field('horizontal_progress_bars_1');
         if( $horizontal_progress_bars_1): ?> 
         <div class="container">
            <h2 class="progress__title">
               <?php echo $horizontal_progress_bars_1['title'] ?>

            </h2>
            <p class="progress__subtitle">
               <?php echo $horizontal_progress_bars_1['subtitle'] ?>
            </p>

           
                     <?php
                        if( have_rows('horizontal_progress_bars_1') ): 
                           while ( have_rows('horizontal_progress_bars_1') ) : the_row(); 
                         
                                if( have_rows('progress_line') ): while ( have_rows('progress_line') ) : the_row(); ?>

                                             <div class="progress__item">
                                                <div class="progress__info">
                                                   <div class="progress_name">
                                                      <?php   echo get_sub_field('progress_name');  ?>
                                                   </div>
                                                   <div class="progress_per">
                                                      <?php echo get_sub_field('progress_per'); ?><span>%</span>
                                                   </div>
                                                </div>
                                                <div class="progress__line">
                                                   <div class="progress_primary" style="width:<?php echo get_sub_field('progress_per'); ?>%"></div>
                                                </div>
                                             </div>
                                    
                        <?php  endwhile; endif;
                            endwhile; endif;
                        ?>  
         </div>
         <?php endif; ?>

      </section>
      <section class="progress__hori progress__hori-block progress__circle">
         <?php $circle_progress_bars= get_field('circle_progress_bars');
         if( $circle_progress_bars): ?>  
         <div class="container">
            <h2 class="progress__title">
            <?php echo $circle_progress_bars['title'] ?>
            </h2>
            <p class="progress__subtitle">
               <?php echo $circle_progress_bars['subtitle'] ?>
            </p>
          
            <div class="row">



                     <?php
                        if( have_rows('circle_progress_bars') ): 
                           while ( have_rows('circle_progress_bars') ) : the_row(); 
                         
                                if( have_rows('progress_line') ): while ( have_rows('progress_line') ) : the_row(); ?>

                                           

                                             <div class="progress__circle-card">
                                                <div class="progress__circle-percent">
                                                   <svg>
                                                      <circle cx="70" cy="70" r="70"></circle>
                                                      <circle cx="70" cy="70" r="70" style="stroke-dashoffset: calc(440 - (440 * <?php echo get_sub_field('progress_per'); ?>) / 100);"></circle>
                                                   </svg>
                                                   <div class="progress__circle-number">
                                                      <?php echo get_sub_field('progress_per'); ?><span>%</span>
                                                   </div>
                                                </div>
                                                <div class="progress__circle-text"><?php  echo get_sub_field('progress_name');  ?></div>
                                             </div>                                             
                                    
                        <?php  endwhile; endif;
                            endwhile; endif;
                        ?> 



            </div>
            
         </div>
         <?php endif; ?>
      </section>