<?php
	$services_image1 = cwp('services_image1');
	$services_title1 = cwp('services_title1');
	$services_text1 = cwp('services_text1');
	$services_link1 = cwp('services_link1');
	
	$services_image2 = cwp('services_image2');
	$services_title2 = cwp('services_title2');
	$services_text2 = cwp('services_text2');
	$services_link2 = cwp('services_link2');

	$services_image3 = cwp('services_image3');
	$services_title3 = cwp('services_title3');
	$services_text3 = cwp('services_text3');
	$services_link3 = cwp('services_link3');

	$services_image4 = cwp('services_image4');
	$services_title4 = cwp('services_title4');
	$services_text4 = cwp('services_text4');
	$services_link4 = cwp('services_link4');
?>
        <section class="services">
			<div class="bg-texture"></div>
			<div class="container">
			
				<div class="content">
					<h2><?php _e('OUR SERVICES','foliogine'); ?></h2>
					
    				
					<a <?php if(isset($services_link1) && $services_link1 != ''): ?> href="<?php echo $services_link1; ?>" <?php endif; ?> class="box-service">
					
						<?php if(isset($services_image1) && $services_image1 != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $services_image1; ?>)"></div>
						<?php else: ?>	
							<div class="icon puzzle-icon"></div>
						<?php endif; ?>	
						<div class="content-text">
							<?php 
								if(isset($services_title1)):
									echo '<p class="title">'.htmlentities($services_title1).'</p>';
								endif;
							?>
							<?php 
								if(isset($services_text1)):
									echo '<p class="text">'.htmlentities($services_text1).'</p>';
								endif;
							?>
						</div>
    				</a> <!-- .box-service -->
					<a <?php if(isset($services_link2) && $services_link2 != ''): ?> href="<?php echo $services_link2; ?>" <?php endif; ?> class="box-service">
						<?php if(isset($services_image2) && $services_image2 != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $services_image2; ?>)"></div>
						<?php else: ?>	
							<div class="icon work-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($services_title2)):
									echo '<p class="title">'.htmlentities($services_title2).'</p>';
								endif;
							?>
							<?php 
								if(isset($services_text2)):
									echo '<p class="text">'.htmlentities($services_text2).'</p>';
								endif;
							?>
						</div>
    				</a> <!-- .box-service -->
					<a <?php if(isset($services_link3) && $services_link3 != ''): ?> href="<?php echo $services_link3; ?>" <?php endif; ?> class="box-service">
						<?php if(isset($services_image3) && $services_image3 != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $services_image3; ?>)"></div>
						<?php else: ?>	
							<div class="icon direction-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($services_title3)):
									echo '<p class="title">'.htmlentities($services_title3).'</p>';
								endif;
							?>
							<?php 
								if(isset($services_text3)):
									echo '<p class="text">'.htmlentities($services_text3).'</p>';
								endif;
							?>
						</div>
    				</a> <!-- .box-service -->
					<a <?php if(isset($services_link4) && $services_link4 != ''): ?> href="<?php echo $services_link4; ?>" <?php endif; ?> class="box-service">
						<?php if(isset($services_image4) && $services_image4 != '') : ?>
							<div class="icon" style="background-image:url(<?php echo $services_image4; ?>)"></div>
						<?php else: ?>	
							<div class="icon friends-icon"></div>
						<?php endif; ?>
						<div class="content-text">
							<?php 
								if(isset($services_title4)):
									echo '<p class="title">'.htmlentities($services_title4).'</p>';
								endif;
							?>
							<?php 
								if(isset($services_text4)):
									echo '<p class="text">'.htmlentities($services_text4).'</p>';
								endif;
							?>
						</div>
    				</a> <!-- .box-service -->

				</div><!-- .content -->

			</div><!-- .container -->
		</section><!-- .services -->
