
      <section class="testimonialslist">
         <div class="container">
            
            <?php $what_our_fantastic_users_say= get_field('what_our_fantastic_users_say');
               if( $what_our_fantastic_users_say): ?> 


                  
                  <h2 class="testimonialslist__title">
                    <?php echo $what_our_fantastic_users_say['title'] ?>
                  </h2>
                  <div class="testimonialslist__subtitle">
                       <?php echo $what_our_fantastic_users_say['subtitle'] ?>
                  </div>

                  
                  
                  
                  <div class="row testimonialslist_row">

                        <?php
                           if( have_rows('what_our_fantastic_users_say') ): while ( have_rows('what_our_fantastic_users_say') ) : the_row();    
                              if( have_rows('list_testimonials') ): while ( have_rows('list_testimonials') ) : the_row(); 
                        ?>   


                           <div class="testimonialslist__item col-12 col-md-6 col-lg-4">
                              
                              <div class="testimonialslist__img">
                                 
                                  <img src="<?php  echo get_sub_field('avatar');  ?>" alt="">
                                 
                              </div>
                              <div class="testimonialslist__content">
                                 <p>
                                   <?php  echo get_sub_field('content');  ?>
                                 </p>
                                 <div class="testimonialslist__author">
                                     <?php  echo get_sub_field('author');  ?>
                                 </div>
                                 <small class="testimonialslist__work">
                                        <?php  echo get_sub_field('work');  ?>
                                 </small>
                              </div>
                              
                           </div>
                        
                     <?php  
                        endwhile; endif;
                        endwhile; endif;
                     ?>                      
                     
                     
                  </div>
            <?php endif; ?> 

         </div>
      </section>
      <section class="personalopinion">

       <?php $personal_opinion= get_field('personal_opinion');
            if( $personal_opinion): ?> 
            <div class="container">
               <div class="row">
                  <div class="personalopinion__content personalopinion__item">
                     <p class="personalopinion__expert">
                        <?php echo $personal_opinion['expert'] ?>
                     </p>
                     <p class="personalopinion__author">
                        <?php echo $personal_opinion['author'] ?>
                     </p>
                     <p class="personalopinion__work">
                        <?php echo $personal_opinion['work'] ?>
                     </p>
                  </div>
                  <div class="personalopinion__img personalopinion__item" style="width: 130%;">                   
                     <img  src="<?php echo $personal_opinion['avatar'] ?>" alt="" />
                  </div>
               </div>
            </div>
         <?php endif; ?> 
      </section>
      <section class="whatour">
         
                 <?php $what_our_fantastic_users_say_1= get_field('what_our_fantastic_users_say_1');
                 if( $what_our_fantastic_users_say_1): ?> 
                     <img class="whatour__bg" src="<?php echo esc_url($what_our_fantastic_users_say_1['background']);?>" alt="" />
                 <?php endif; ?>

         <div class="container">
            <?php $what_our_fantastic_users_say_1= get_field('what_our_fantastic_users_say_1');
               if( $what_our_fantastic_users_say_1): ?>

                  <h2 class="whatour__title">
                    <?php echo $what_our_fantastic_users_say_1['title'] ?>
                  </h2>
                  <div class="whatour__subtitle">
                       <?php echo $what_our_fantastic_users_say_1['subtitle'] ?>
                  </div>


                  <div class="row">
                     
                     
                     <div class="whatour__item">
                        <div class="row">
                           <div class="whatour__image">
                              
                              <img src="http://dev-ssv-wpbase.pantheonsite.io/component/assets/images/face3.jpg">
                              
                           </div>
                           <div class="whatour__content">
                              
                              <p class="whatour__expert">
                                 <em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nostrum, quos voluptas fugiat blanditiis, temporibus expedita cumque doloribus ea, officiis consequuntur repellat minus ad veritatis? Facere similique accusamus, accusantium sunt!"</em>
                              </p>
                              
                              <div class="whatour__author">
                                 Helen
                              </div>
                              <div class="whatour__work">
                                 DESIGNER
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="whatour__item">
                        <div class="row">
                           
                           <div class="whatour__image">
                              <img src="http://dev-ssv-wpbase.pantheonsite.io/component/assets/images/face1.jpg">
                           </div>
                           
                           <div class="whatour__content">
                              
                              <p class="whatour__expert">
                                 <em>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nostrum, quos voluptas fugiat blanditiis, temporibus expedita cumque doloribus ea, officiis consequuntur repellat minus ad veritatis? Facere similique accusamus, accusantium sunt!"</em>
                              </p>
                              
                              <div class="whatour__author">
                                 Linda
                              </div>
                              <div class="whatour__work">
                                 DEVELOPER
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            <?php endif; ?>                    
         </div>
      </section>


      <section class="testimonialslist testimonialslist--slider1">
         <div class="container">      
            <?php $what_our_fantastic_users_say_2= get_field('what_our_fantastic_users_say_2');
               if( $what_our_fantastic_users_say_2): ?>      
                  <h2 class="testimonialslist__title">
                     <?php echo $what_our_fantastic_users_say_2['title'] ?>
                  </h2>
                        
                  <div class="sliders1">
                        <?php
                           if( have_rows('what_our_fantastic_users_say_2') ): while ( have_rows('what_our_fantastic_users_say_2') ) : the_row();    
                              if( have_rows('list_testimonials') ): while ( have_rows('list_testimonials') ) : the_row(); 
                        ?> 
                        
                              <div class="testimonialslist__item ">
                              
                                    <div class="testimonialslist__img">
                                       
                                       <img src="<?php  echo get_sub_field('avatar');  ?>">
                                       
                                    </div>
                                    <div class="testimonialslist__content">
                                       <?php  echo get_sub_field('content');  ?>
                                       <div class="testimonialslist__author">
                                         <?php  echo get_sub_field('author');  ?>
                                       </div>
                                       <small class="testimonialslist__work">
                                          <?php  echo get_sub_field('work');  ?>
                                       </small>
                                    </div>
                              
                              </div>
                     
                                          
                     <?php  
                        endwhile; endif;
                        endwhile; endif;
                     ?>                    

                                         
                  </div>
             <?php endif; ?>
      </section>

      <section class="personalopinion personalopinion--black">
         <div class="container">
            <?php $personal_opinion_1 = get_field('personal_opinion_1');
               if( $personal_opinion_1): ?> 
                  <div class="row">
                     <div class="personalopinion__img personalopinion__item" style="width: 130%;">
                        <img  src="<?php echo $personal_opinion_1['avatar'] ?>" alt="" />
                     </div>
                     <div class="personalopinion__content personalopinion__item">
                        <p class="personalopinion__expert">
                           <?php echo $personal_opinion_1['expert'] ?>
                        </p>
                        <p class="personalopinion__author">
                           <?php echo $personal_opinion_1['author'] ?>
                        </p>
                        <p class="personalopinion__work">
                           <?php echo $personal_opinion_1['work'] ?>
                        </p>
                     </div>
                  </div>
             <?php endif; ?>
         </div>
      </section>
      <section class="personalopinion personalopinion--bg">

            <?php $personal_opinion_2= get_field('personal_opinion_2');
                 if( $personal_opinion_2): ?> 
                     <img class="personalopinion__bg" src="<?php echo esc_url($personal_opinion_2['background']);?>" alt="" />
            <?php endif; ?>
         <div class="container">
            <?php $personal_opinion_2 = get_field('personal_opinion_2');
               if( $personal_opinion_2): ?> 
                  <div class="row">
                     <div class="personalopinion__content personalopinion__item">
                        <p class="personalopinion__expert">
                                                      <?php echo $personal_opinion_2['expert'] ?>
                        </p>
                        <p class="personalopinion__author">
                           <?php echo $personal_opinion_2['author'] ?>
                        </p>
                        <p class="personalopinion__work">
                           <?php echo $personal_opinion_2['work'] ?>
                        </p>
                     </div>
                     <div class="personalopinion__img personalopinion__item" style="width: 130%;">
                        <img src="<?php echo $personal_opinion_2['avatar'] ?>">
                     </div>
                  </div>
            <?php endif; ?>
         </div>
      </section>
      <section class="testimonialslist testimonialslist--slider5">
         <div class="container">   
               <?php $our_clients= get_field('our_clients');
                  if( $our_clients): ?> 

                    
                     <h2 class="testimonialslist__title">
                        <?php echo $our_clients['title'] ?>
                     </h2>
                     <div class="testimonialslist__subtitle">
                        <?php echo $our_clients['subtitle'] ?>
                     </div>         
                     <div class="sliders5">
                        <?php
                        if( have_rows('our_clients') ): while ( have_rows('our_clients') ) : the_row();    
                           if( have_rows('list_logo') ): while ( have_rows('list_logo') ) : the_row(); 
                        ?>  
                                             <div class="item">
                                                <img src="<?php  echo get_sub_field('image_logo');  ?>" alt="">
                                             </div>
                                             
                     <?php  
                        endwhile; endif;
                        endwhile; endif;
                     ?>                                                
                  
               <?php endif; ?>  

         </div>
      </section>
      <section class="testimonialslist testimonialslist--slider1 testimonialslist--bg">
      

            <?php $what_our_fantastic_users_say_3= get_field('what_our_fantastic_users_say_3');
                 if( $what_our_fantastic_users_say_3): ?> 
                     <img class="testimonialslist__bg" src="<?php echo esc_url($what_our_fantastic_users_say_3['background']);?>" alt="" />
            <?php endif; ?>

         <div class="container">    
            <?php $what_our_fantastic_users_say_3= get_field('what_our_fantastic_users_say_3');
               if( $what_our_fantastic_users_say_3): ?>          
                  <h2 class="testimonialslist__title">
                     <?php echo $what_our_fantastic_users_say_3['title'] ?>
                  </h2>
                        
                  <div class="sliders1">
                     <?php
                        if( have_rows('what_our_fantastic_users_say_3') ): while ( have_rows('what_our_fantastic_users_say_3') ) : the_row();    
                           if( have_rows('list_testimonials') ): while ( have_rows('list_testimonials') ) : the_row(); 
                     ?>
                        <div class="testimonialslist__item ">
                              
                                    <div class="testimonialslist__img">
                                       
                                         <img src="<?php  echo get_sub_field('avatar');  ?>">
                                       
                                    </div>
                                    <div class="testimonialslist__content">
                                       <?php  echo get_sub_field('content');  ?>
                                       <div class="testimonialslist__author">
                                           <?php  echo get_sub_field('author');  ?>
                                       </div>
                                       <small class="testimonialslist__work">
                                             <?php  echo get_sub_field('work');  ?>
                                       </small>
                                    </div>
                              
                        </div>
                     
                     <?php  
                        endwhile; endif;
                        endwhile; endif;
                     ?>                                          
                  

                                         
                  </div>
            <?php endif; ?>  
      </section>
       <section class="whatour whatour--1">
         

            <?php $what_our_fantastic_users_say_4= get_field('what_our_fantastic_users_say_4');
                 if( $what_our_fantastic_users_say_4): ?> 
                     <img class="whatour__bg" src="<?php echo esc_url($what_our_fantastic_users_say_4['background']);?>" alt="" />
            <?php endif; ?>

         <div class="container">
            <?php $what_our_fantastic_users_say_4= get_field('what_our_fantastic_users_say_4');
               if( $what_our_fantastic_users_say_4): ?>  
                  <h2 class="whatour__title">
                        <?php echo $what_our_fantastic_users_say_4['title'] ?>
                  </h2>
                  <div class="whatour__subtitle">
                     <?php echo $what_our_fantastic_users_say_4['subtitle'] ?>

                  </div>
                  <div class="row">
                     <?php
                        if( have_rows('what_our_fantastic_users_say_4') ): while ( have_rows('what_our_fantastic_users_say_4') ) : the_row();    
                           if( have_rows('list_testimonials') ): while ( have_rows('list_testimonials') ) : the_row(); 
                     ?>                     
                     
                        <div class="whatour__item">
                           <div class="row">
                              <div class="whatour__image">
                                 <img src="<?php  echo get_sub_field('avatar');  ?>">
                                 
                                 
                              </div>
                              <div class="whatour__content">
                                 
                                 <div class="whatour__expert">
                                    <?php  echo get_sub_field('content');  ?>
                                 </div>
                                 
                                 <div class="whatour__author">
                                   <?php  echo get_sub_field('author');  ?>

                                 </div>
                                 <div class="whatour__work">
                                   <?php  echo get_sub_field('work');  ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php  
                        endwhile; endif;
                        endwhile; endif;
                     ?>   
                  </div>
            <?php endif; ?>
         </div>
      </section>