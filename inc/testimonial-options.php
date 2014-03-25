<?php 	$testimonial_title = cwp('testimonial_title');	$testimonial_content = cwp('testimonial_content');	$testimonial_author = cwp('testimonial_author');	$testimonial_info = cwp('testimonial_info');?>
        <section class="testimonials">
			<div class="bg-texture"></div>
			<div class="container">
				<div class="content">
					<?php 
						if(isset($testimonial_title) && $testimonial_title != ''):
							echo '<h2>'.htmlentities($testimonial_title).'</h2>';
						else:
							echo '<h2>'.__('Testimonial title','cwp').'</h2>';
						endif; 
					?>	         
					<div class="testimonial-box">
						<?php 
							if(isset($testimonial_content) && $testimonial_content != ''):
								echo '<p class="text">'.htmlentities($testimonial_content).'</p>'; 
							else:
								echo '<p class="text">'.__('Testimonial text','cwp').'</p>';
							endif; 
						?>	
						<p class="client-info"><a><?php if(isset($testimonial_author) && $testimonial_author != '') echo htmlentities($testimonial_author).' '; ?><span><?php if(isset($testimonial_info) && $testimonial_info != '') echo htmlentities($testimonial_info).' '; ?></span></a></p>
					</div><!-- .testimonial-box -->
				</div><!-- .content -->
			</div><!-- .container -->
		</section><!-- .testimonials -->