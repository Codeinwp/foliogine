        <?php global  $optionsdb; ?>    
        <section class="services">
			<div class="bg-texture"></div>
			<div class="container">
			
				<div class="content">
					<h2><?php _e('OUR SERVICES','cwp'); ?></h2>
					
					<a href="#" title="" class="box-service">
						<?php if(isset($optionsdb['services_image1']) && $optionsdb['services_image1'] != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $optionsdb['services_image1']; ?>)"></div>
						<?php else: ?>	
							<div class="icon puzzle-icon"></div>
						<?php endif; ?>	
						<div class="content-text">
							<?php 
								if(isset($optionsdb['services_title1'])):
									echo '<p class="title">'.htmlentities($optionsdb['services_title1']).'</p>';
								endif;
							?>
							<?php 
								if(isset($optionsdb['services_text1'])):
									echo '<p class="text">'.htmlentities($optionsdb['services_text1']).'</p>';
								endif;
							?>
						</div>
					</a><!-- .box-service -->
					<a href="#" title="" class="box-service">
						<?php if(isset($optionsdb['services_image2']) && $optionsdb['services_image2'] != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $optionsdb['services_image2']; ?>)"></div>
						<?php else: ?>	
							<div class="icon work-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($optionsdb['services_title2'])):
									echo '<p class="title">'.htmlentities($optionsdb['services_title2']).'</p>';
								endif;
							?>
							<?php 
								if(isset($optionsdb['services_text2'])):
									echo '<p class="text">'.htmlentities($optionsdb['services_text2']).'</p>';
								endif;
							?>
						</div>
					</a><!-- .box-service -->
					<a href="#" title="" class="box-service">
						<?php if(isset($optionsdb['services_image3']) && $optionsdb['services_image3'] != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $optionsdb['services_image3']; ?>)"></div>
						<?php else: ?>	
							<div class="icon direction-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($optionsdb['services_title3'])):
									echo '<p class="title">'.htmlentities($optionsdb['services_title3']).'</p>';
								endif;
							?>
							<?php 
								if(isset($optionsdb['services_text3'])):
									echo '<p class="text">'.htmlentities($optionsdb['services_text3']).'</p>';
								endif;
							?>
						</div>
					</a><!-- .box-service -->
					<a href="#" title="" class="box-service">
						<?php if(isset($optionsdb['services_image4']) && $optionsdb['services_image4'] != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $optionsdb['services_image4']; ?>)"></div>
						<?php else: ?>	
							<div class="icon friends-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($optionsdb['services_title4'])):
									echo '<p class="title">'.htmlentities($optionsdb['services_title4']).'</p>';
								endif;
							?>
							<?php 
								if(isset($optionsdb['services_text4'])):
									echo '<p class="text">'.htmlentities($optionsdb['services_text4']).'</p>';
								endif;
							?>
						</div>
					</a><!-- .box-service -->

				</div><!-- .content -->

			</div><!-- .container -->
		</section><!-- .services -->