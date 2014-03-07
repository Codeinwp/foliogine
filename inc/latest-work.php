<?php
        $args = array(
			'numberposts' => 1,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'post_type' => 'product',
			'post_status' => 'publish');

		$recent_posts = wp_get_recent_posts( $args);

		if(!empty($recent_posts)):

	?>
			<section class="latest-work">
				<div class="bg-texture"></div>
				<div class="container">
					
					<div class="content"> 
						<h2><?php _e('LATEST WORK','cwp'); ?></h2>
						
						<?php $fi = wp_get_attachment_url( get_post_thumbnail_id($recent_posts[0]['ID']));?>
						<div class="screen"><a class="img-on-screen" style="background-image:url(<?php echo $fi; ?>)"></a></div>
						<div class="text-box">

							<p class="title">
							<?php echo $recent_posts[0]['post_title']; ?>
							</p>

							<p><?php echo substr($recent_posts[0]['post_content'],0,30); ?></p>

							<!-- <a href="#" title="Buy here" class="yellow-btn">BUY HERE</a> -->
							<a href="<?php echo get_permalink($recent_posts[0]['ID']); ?>" title="" class="browse"><?php _e('Browse all of our portfolio >','cwp'); ?> </a>

						</div><!-- .text-box -->
					</div><!-- .content -->
					
				</div><!-- .container -->
			</section><!-- .latest-work -->
	<?php 		
		endif;
    ?>