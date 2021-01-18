        <section class="form__contact">
           <div class="container">
              <div class="form__title">
                 <?php $contact_form_1= get_field('contact_form_1');
                 if( $contact_form_1): ?>  

                 <h2 class="title">
                     <?php echo $contact_form_1['title'] ?>
                 </h2>
                 <div class="form__subtitle">
                      <?php echo $contact_form_1['subtitle'] ?>
                 </div>
                 <?php endif; ?>
              </div>
              <div class="form__send">
                 <form class="" action="" method="post">
                    <div class="row">
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_name">Name</label>
                          <input type="text" class="form-control" id="form_name" >
                       </div>
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_email">Email</label>
                          <input type="email" class="form-control"   id="form_email">
                       </div>
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_phone">Phone</label>
                          <input type="tel" class="form-control"  id="form_phone">
                       </div>
                       <div class="form__col">
                          <label class="form-control" for="form_textarea">Message</label>
                          <textarea type="text" class="form-control"  rows="7" id="form_textarea"></textarea>
                       </div>
                       <div class="form__col">
                          <button type="submit" class="">SEND FORM</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </section>
        <section class="form__contact form__contact--1">



                 <?php $contact_form_2= get_field('contact_form_2');
                 if( $contact_form_2): ?> 
                 <img src="<?php echo esc_url($contact_form_2['background']);?>" alt="" />
                 <?php endif; ?>


           <div class="container form__info">
              <div class="form__title">
                 <?php $contact_form_2= get_field('contact_form_2');
                 if( $contact_form_2): ?>  

                 <h2 class="title">
                     <?php echo $contact_form_2['title'] ?>
                 </h2>
                 <div class="form__subtitle">
                      <?php echo $contact_form_2['subtitle'] ?>
                 </div>
                 <?php endif; ?>
              </div>
              <div class="form__send">
                 <form class="" action="" method="post">
                    <div class="row">
                       <div class="form__col">
                          <label class="form-control" for="form_email_1">Email</label>
                          <input type="email" class="form-control"   id="form_email_1">
                       </div>
                       <div class="form__col">
                          <label class="form-control" for="form_textarea_1">Message</label>
                          <textarea type="text" class="form-control"  rows="10" id="form_textarea_1"></textarea>
                       </div>
                       <div class="form__col">
                          <button type="submit" class="">SEND FORM</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>



        </section>
        <section class="subscribeform">
           <div class="container">


                 <?php $subscribe_form_1= get_field('subscribe_form_1');
                 if( $subscribe_form_1): ?>  

                 <h2 class="title">
                     <?php echo $subscribe_form_1['title'] ?>
                 </h2>
                 <div class="subscribeform__subtitle">
                      <?php echo $subscribe_form_1['subtitle'] ?>
                 </div>
                 <?php endif; ?>



              <div class="subscribeform__send">
                 <form action="" method="post">
                    <input type="email" class="form-control"  placeholder="Email">
                    <button type="submit">SUBSCRIBE</button>
                 </form>
              </div>
           </div>
        </section>
        <section class="subscribeform subscribeform--1">
           <div class="container">
                 <?php $subscribe_form_2= get_field('subscribe_form_2');
                 if( $subscribe_form_2): ?>  

                 <h2 class="title">
                     <?php echo $subscribe_form_2['title'] ?>
                 </h2>
                 <div class="subscribeform__subtitle">
                      <?php echo $subscribe_form_2['subtitle'] ?>
                 </div>
                 <?php endif; ?>

              <div class="subscribeform__send">
                 <form action="" method="post">
                    <input type="email" class="form-control"  placeholder="Email">
                    <button type="submit">SUBSCRIBE</button>
                 </form>
              </div>
           </div>
        </section>
        <section class="contact">
          <div class="container">
            <div class="row">
              <div class="contact__map contact__col">
                <iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_field('map_3') ?>"></iframe>
              </div>
              <div class="contact__info contact__col"> <h2>
                <?php echo get_field('contact_title') ?>
                </h2>
                <div class="contact__note">
                  <img src="https://res.cloudinary.com/ddiurjjly/image/upload/v1610348109/samples/iconemail_nejyni.png" alt="" />
                  <span> <?php echo get_field('contact_note') ?> </span>
                </div>
                <div class="contact__content">
                  <h3>
                  <?php echo get_field('contact_content') ?>
                  </h3>
                  <p>
                    <?php echo get_field('contact_phone') ?>
                    </br>
                    <?php echo get_field('contact_email') ?>
                  </p>
                  
                </div>
                <div class="contact__form">
                  <form action="" class="row" method="post">
                    <div class="contact__form--item contact__form--col2">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="contact__form--item contact__form--col2">
                      <input type="text" class="form-control"  placeholder="Phone">
                    </div>
                    <div class="contact__form--item">
                      <input type="text" class="form-control" placeholder="Email" required="">
                    </div>
                    <div class="contact__form--item">
                      <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                    </div>
                    <div class="contact__form--item">
                      <button type="submit" class="">SEND MESSAGE</button>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </section>
        <section class="form__contact form__contact--1 form__contact--2">
           <img src="https://img.youtube.com/vi/uNCr7NdOJgw/maxresdefault.jpg" alt="" />
           <div class="container">
              <div class="form__title">
                 <?php $contact_form_3= get_field('contact_form_3');
                 if( $contact_form_3): ?>  

                 <h2 class="title">
                     <?php echo $contact_form_3['title'] ?>
                 </h2>
                 <div class="form__subtitle">
                      <?php echo $contact_form_3['subtitle'] ?>
                 </div>
                 <?php endif; ?>
              </div>
              <div class="form__send">
                 <form class="" action="" method="post">
                    <div class="row">
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_name_2">Name</label>
                          <input type="text" class="form-control" id="form_name_2" >
                       </div>
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_email_2">Email</label>
                          <input type="email" class="form-control"   id="form_email_2">
                       </div>
                       <div class="form__col form__col--col3">
                          <label class="form-control" for="form_phone_2">Phone</label>
                          <input type="tel" class="form-control"  id="form_phone_2">
                       </div>
                       <div class="form__col">
                          <label class="form-control" for="form_textarea_2">Message</label>
                          <textarea type="text" class="form-control"  rows="10" id="form_textarea_2"></textarea>
                       </div>
                       <div class="form__col">
                          <button type="submit" class="">SEND FORM</button>
                       </div>
                    </div>
                 </form>
              </div>
           </div>
        </section>