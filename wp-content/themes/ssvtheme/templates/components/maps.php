
		<section class="map">		
			<iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_field('map_1') ?>"></iframe>		
		</section>
		<section class="map map__center">			
			<div class="container">
				<iframe  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo get_field('map_2') ?>"></iframe>
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