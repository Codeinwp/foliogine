    <?php global  $optionsdb; ?>    
    <section class="our-team">
			<div class="container">
				<h2><?php _e('OUR TEAM','cwp'); ?></h2>
					
				<div class="team-wrap">
					<?php 
						if(isset($optionsdb['team_image1']) && $optionsdb['team_image1'] != ''):
							$img1 = $optionsdb['team_image1'];
						else :
							$img1 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($optionsdb['team_image2']) && $optionsdb['team_image2'] != ''):
							$img2 = $optionsdb['team_image2'];
						else :
							$img2 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($optionsdb['team_image3']) && $optionsdb['team_image3'] != ''):
							$img3 = $optionsdb['team_image3'];
						else :
							$img3 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($optionsdb['team_image4']) && $optionsdb['team_image4'] != ''):
							$img4 = $optionsdb['team_image4'];
						else :
							$img4 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
					?>
					
					<a href="#" title="" style="background-image:url(<?php echo $img1; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($optionsdb['team_name1']) && $optionsdb['team_name1'] != ''):
									echo htmlentities($optionsdb['team_name1']);
								endif;
								if(isset($optionsdb['team_job1']) && $optionsdb['team_job1'] != ''):
									echo '<span>'.htmlentities($optionsdb['team_job1']).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img2; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($optionsdb['team_name2']) && $optionsdb['team_name2'] != ''):
									echo htmlentities($optionsdb['team_name2']);
								endif;
								if(isset($optionsdb['team_job2']) && $optionsdb['team_job2'] != ''):
									echo '<span>'.htmlentities($optionsdb['team_job2']).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img3; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($optionsdb['team_name3']) && $optionsdb['team_name3'] != ''):
									echo htmlentities($optionsdb['team_name3']);
								endif;
								if(isset($optionsdb['team_job3']) && $optionsdb['team_job3'] != ''):
									echo '<span>'.htmlentities($optionsdb['team_job3']).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img4; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($optionsdb['team_name4']) && $optionsdb['team_name4'] != ''):
									echo htmlentities($optionsdb['team_name4']);
								endif;
								if(isset($optionsdb['team_job4']) && $optionsdb['team_job4'] != ''):
									echo '<span>'.htmlentities($optionsdb['team_job4']).'</span>';
								endif;
							?>
						</p>
					</a>
					<div class="arrow arrow-left"></div>
					<div class="arrow arrow-right"></div>                     
				</div><!-- .team-wrap -->
				
			</div><!-- .container -->
		</section><!-- .our-team -->