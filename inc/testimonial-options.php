<?php global $optionsdb; ?>
        <section class="testimonials">
			<div class="bg-texture"></div>
			<div class="container">
			
				<div class="content">
					<?php 
						if(isset($optionsdb['testimonial_title']) && $optionsdb['testimonial_title'] != ''):
							echo '<h2>'.htmlentities($optionsdb['testimonial_title']).'</h2>';
						else:
							echo '<h2>'.__('Testimonial title','cwp').'</h2>';
						endif; 
					?>	         
					<div class="testimonial-box">
						<?php 
							if(isset($optionsdb['testimonial_content']) && $optionsdb['testimonial_content'] != ''):
								echo '<p class="text">'.htmlentities($optionsdb['testimonial_content']).'</p>'; 
							else:
								echo '<p class="text">'.__('Testimonial text','cwp').'</p>';
							endif; 
						?>	
						<p class="client-info"><a><?php if(isset($optionsdb['testimonial_author']) && $optionsdb['testimonial_author'] != '') echo htmlentities($optionsdb['testimonial_author']).' '; ?><span><?php if(isset($optionsdb['testimonial_info']) && $optionsdb['testimonial_info'] != '') echo htmlentities($optionsdb['testimonial_info']).' '; ?></span></a></p>
					</div><!-- .testimonial-box -->
				</div><!-- .content -->
				
			</div><!-- .container -->
		</section><!-- .testimonials -->