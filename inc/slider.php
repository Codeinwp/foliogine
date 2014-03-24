<?php
	$slide_image1 = cwp('slide_image1');
	$slide_image2 = cwp('slide_image2');
	$slide_image3 = cwp('slide_image3');
	$slider_bigtitle = cwp('slider_bigtitle');
	$slider_title = cwp('slider_title');
	$slider_subtitle = cwp('slider_subtitle');
?>
            <section class="slider">
				<div class="container">
				
					<div class="text"></div>
					<div class="screen hidden-phone">

						<div id="myCarousel" class="carousel slide screen-carousel">
							<div class="carousel-inner">
								<div class="item active">
									<?php
										if(isset($slide_image1) && $slide_image1 != '') :
											echo '<img src="'.$slide_image1.'" alt="'.get_bloginfo('name').'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/image-on-screen-colors.jpg" alt="'.get_bloginfo('name').'">';
										endif;	
									?>
								</div>
								<div class="item">
									<?php
										if(isset($slide_image2) && $slide_image2 != '') :
											echo '<img src="'.$slide_image2.'" alt="'.get_bloginfo('name').'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/img-on-screen-mobile-tablet.jpg" alt="'.get_bloginfo('name').'">';
										endif;	
									?> 
								</div>
								<div class="item">
									<?php
										if(isset($slide_image3) && $slide_image3 != '') :
											echo '<img src="'.$slide_image3.'" alt="'.get_bloginfo('name').'">';
										else:
											echo '<img src="'.get_template_directory_uri().'/img/img-on-screen.jpg" alt="'.get_bloginfo('name').'">';
										endif;	
									?> 
								</div>
							</div>
						</div>

					</div>
					<?php 
						//default options
						if((!isset($slider_bigtitle) || $slider_bigtitle == '') 
							&& (!isset($slider_title) || $slider_title == '')
							&& (!isset($slider_subtitle) || $slider_subtitle == '')):
					?>		
							<div class="welcome-text"><?php _e('Hello and welcome, we are SweetSunday, browse our portfolio.','cwp'); ?></div>
							<div class="ribbon hidden-phone">
								<div class="arrow arrow-left"></div>
								<div class="arrow arrow-right"></div>
								<div class="text"><?php _e('Professional portfolio WordPress theme','cwp'); ?></div>
								<div class="text-yellow hidden-tablet hidden-phone"><?php _e('Fully responsive and retina ready.','cwp'); ?></div>
							</div>
					<?php		
						else:
						
							if(isset($slider_bigtitle) && $slider_bigtitle != ''):
								echo '<div class="welcome-text">'.htmlentities($slider_bigtitle).'</div>';
							endif;	
							if((isset($slider_title) && $slider_title != '') || (isset($slider_subtitle) && $slider_subtitle != '')):
						?>	
								<div class="ribbon hidden-phone">
									<div class="arrow arrow-left"></div>
									<div class="arrow arrow-right"></div>
									<?php
										if(isset($slider_title) && $slider_title != ''):
											echo '<div class="text">'.htmlentities($slider_title).'</div>';
										endif;
										if(isset($slider_subtitle) && $slider_subtitle != ''):
											echo '<div class="text-yellow hidden-tablet hidden-phone">'.htmlentities($slider_subtitle).'</div>';
										endif;		
									?>
								</div>
						<?php endif; 
						endif;
						?>
				</div><!-- .container -->
			</section><!-- .slider -->