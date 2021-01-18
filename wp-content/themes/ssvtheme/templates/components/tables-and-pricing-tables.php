		<section class="table__block">
			
			<div class="container">
				  <?php $block_with_table = get_field('block_with_table');
                  	if( $block_with_table ): ?>  
					<h2 class="table__title"><?php echo $block_with_table['title'] ?></h2>
					<div class="table__subtitle"><?php echo $block_with_table['subtitle'] ?></div>
					
					<div class="table__search">
						<label for="table-search">Search:<input type="search" id="table-search" class="form-control" placeholder="" /></label>
					</div>
					<table>
						<thead>
							<tr>
								<th>NAME	</th>
								<th>AGE	</th>
								<th>DATE	</th>
								<th>SALARY</th>
								
							</tr>
						</thead>
						<tbody>
                                 <?php
                                 if( have_rows('block_with_table') ): while ( have_rows('block_with_table') ) : the_row(); 
                                         if( have_rows('list_table') ): while ( have_rows('list_table') ) : the_row(); ?>							
										<tr>											
											<td><?php  echo get_sub_field('name');  ?></td>
											<td><?php  echo get_sub_field('age');  ?></td>
											<td><?php  echo get_sub_field('date');  ?></td>
											<td>$<?php  echo get_sub_field('salary');  ?></td>											
										</tr>
						
                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>  							
							
							
						</tbody>
					</table>
					<div class="table__showing">Showing 4 entries</div>
            	<?php endif; ?>  				
			</div>
			
		</section>


		<section class="table__block table__block--blue">
			
			<div class="container">
					  <?php $block_with_table_1 = get_field('block_with_table_1');
	                  	if( $block_with_table_1 ): ?>  				
							<h2 class="table__title"><?php echo $block_with_table_1['title'] ?></h2>
							<div class="table__subtitle"><?php echo $block_with_table_1['subtitle'] ?></div>
				
				
							<table>
								<thead>
	
									<tr>
										<th>NAME	</th>
										<th>AGE	</th>
										<th>DATE	</th>
									
										
									</tr>


								</thead>
								<tbody>
									
								 <?php
                                 if( have_rows('block_with_table_1') ): while ( have_rows('block_with_table_1') ) : the_row(); 
                                         if( have_rows('list_table') ): while ( have_rows('list_table') ) : the_row(); ?>	
	                                    <tr>
												<td><?php  echo get_sub_field('name');  ?></td>
												<td><?php  echo get_sub_field('age');  ?></td>
												<td><?php  echo get_sub_field('date');  ?></td>										
										</tr>
								 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>
									
									
								</tbody>
							</table>	
							<?php endif; ?>  				
				
			</div>
			
		</section>

		<section class="price__block">
			
			<div class="container">
				<div class="row">
					

	                            <?php   if( have_rows('price_table') ): while ( have_rows('price_table') ) : the_row();                                   
                                         if( have_rows('list_price_table') ): while ( have_rows('list_price_table') ) : the_row(); ?>

									<div class="price__col <?php  echo get_sub_field('class');  ?>">
										<div class="price__inner">
											<h3 class="price__title">
											Standart
											</h3>
											<div class="price__money">
												<span class="price__dollar">
													$
												</span>
												<span class="price__money">
													<?php  echo get_sub_field('money');  ?>
												</span>
												<small class="price__per">
												<?php  echo get_sub_field('per');  ?>
												</small>
											</div>
											<ul>
												<li>
													<?php  echo get_sub_field('content');  ?>
												</li>
												<li>
													<?php  echo get_sub_field('content_1');  ?>
												</li>
											</ul>
											<div class="price__buy">
												<a href="#" title="">
													BUY NOW
												</a>
											</div>
										</div>
									</div>

                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>    


						
					
				</div>
				
			</div>
			
		</section>
		<section class="price__block price__block--bgcolor">
			
			<div class="container">
				<div class="row">
					
	                            <?php   if( have_rows('price_table_1') ): while ( have_rows('price_table_1') ) : the_row();                                   
                                         if( have_rows('list_price_table') ): while ( have_rows('list_price_table') ) : the_row(); ?>

									<div class="price__col">
										<div class="price__inner">
											<h3 class="price__title">
											Standart
											</h3>
											<div class="price__money">
												<span class="price__dollar">
													$
												</span>
												<span class="price__money">
													<?php  echo get_sub_field('money');  ?>
												</span>
												<small class="price__per">
												<?php  echo get_sub_field('per');  ?>
												</small>
											</div>
											<ul>
												<li>
													<?php  echo get_sub_field('content');  ?>
												</li>
												<li>
													<?php  echo get_sub_field('content_1');  ?>
												</li>
											</ul>
											<div class="price__buy">
												<a href="#" title="">
													BUY NOW
												</a>
											</div>
										</div>
									</div>

                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>    
					
				</div>
				
			</div>
			
		</section>
		<section class="price__block price__block--col3">
			
			<div class="container">
				<div class="row">
					
	                            <?php   if( have_rows('price_table_2') ): while ( have_rows('price_table_2') ) : the_row();                                   
                                         if( have_rows('list_price_table') ): while ( have_rows('list_price_table') ) : the_row(); ?>

									<div class="price__col">
										<div class="price__inner">
											<h3 class="price__title">
											Standart
											</h3>
											<div class="price__money">
												<span class="price__dollar">
													$
												</span>
												<span class="price__money">
													<?php  echo get_sub_field('money');  ?>
												</span>
												<small class="price__per">
												<?php  echo get_sub_field('per');  ?>
												</small>
											</div>
											<ul>
												<li>
													<?php  echo get_sub_field('content');  ?>
												</li>
												<li>
													<?php  echo get_sub_field('content_1');  ?>
												</li>
											</ul>
											<div class="price__buy">
												<a href="#" title="">
													BUY NOW
												</a>
											</div>
										</div>
									</div>

                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>    
					
				</div>
				
			</div>
			
		</section>
		<section class="price__block price--bg">

			    <?php $price_table_3 = get_field('price_table_3');
                 if( $price_table_3): ?> 
                     <img class="price__img"  src="<?php echo esc_url($price_table_3['background']);?>" alt="" />
                <?php endif; ?>

			<div class="container">
				<div class="row">
					
	                            <?php   if( have_rows('price_table_3') ): while ( have_rows('price_table_3') ) : the_row();                                   
                                         if( have_rows('list_price_table') ): while ( have_rows('list_price_table') ) : the_row(); ?>

									<div class="price__col">
										<div class="price__inner">
											<h3 class="price__title">
											Standart
											</h3>
											<div class="price__money">
												<span class="price__dollar">
													$
												</span>
												<span class="price__money">
													<?php  echo get_sub_field('money');  ?>
												</span>
												<small class="price__per">
												<?php  echo get_sub_field('per');  ?>
												</small>
											</div>
											<ul>
												<li>
													<?php  echo get_sub_field('content');  ?>
												</li>
												<li>
													<?php  echo get_sub_field('content_1');  ?>
												</li>
											</ul>
											<div class="price__buy">
												<a href="#" title="">
													BUY NOW
												</a>
											</div>
										</div>
									</div>

                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>    
					
					
				</div>
				
			</div>
		</section>
		
		<section class="price__block price--bg price--bg1">
			    <?php $price_table_4 = get_field('price_table_4');
                 if( $price_table_4): ?> 
                     <img class="price__img"  src="<?php echo esc_url($price_table_4['background']);?>" alt="" />
                <?php endif; ?>
			<div class="container">
				<div class="row">
					
					
	                            <?php   if( have_rows('price_table_4') ): while ( have_rows('price_table_4') ) : the_row();                                   
                                         if( have_rows('list_price_table') ): while ( have_rows('list_price_table') ) : the_row(); ?>

									<div class="price__col">
										<div class="price__inner">
											<h3 class="price__title">
											Standart
											</h3>
											<div class="price__money">
												<span class="price__dollar">
													$
												</span>
												<span class="price__money">
													<?php  echo get_sub_field('money');  ?>
												</span>
												<small class="price__per">
												<?php  echo get_sub_field('per');  ?>
												</small>
											</div>
											<ul>
												<li>
													<?php  echo get_sub_field('content');  ?>
												</li>
												<li>
													<?php  echo get_sub_field('content_1');  ?>
												</li>
											</ul>
											<div class="price__buy">
												<a href="#" title="">
													BUY NOW
												</a>
											</div>
										</div>
									</div>

                                 <?php  endwhile; endif;
                                     endwhile; endif;
                                 ?>   
					
					
					
				</div>
				
			</div>
		</section>