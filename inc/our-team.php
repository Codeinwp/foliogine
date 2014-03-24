<?php	$team_image1 = cwp('team_image1');	$team_image2 = cwp('team_image2');	$team_image3 = cwp('team_image3');	$team_image4 = cwp('team_image4');		$team_name1 = cwp('team_name1');	$team_name2 = cwp('team_name2');	$team_name3 = cwp('team_name3');	$team_name4 = cwp('team_name4');		$team_job1 = cwp('team_job1');	$team_job2 = cwp('team_job2');	$team_job3 = cwp('team_job3');	$team_job4 = cwp('team_job4');?>  
    <section class="our-team">
			<div class="container">
				<h2><?php _e('OUR TEAM','cwp'); ?></h2>
					
				<div class="team-wrap">
					<?php 
						if(isset($team_image1) && $team_image1 != ''):
							$img1 = $team_image1;
						else :
							$img1 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($team_image2) && $team_image2 != ''):
							$img2 = $team_image2;
						else :
							$img2 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($team_image3) && $team_image3 != ''):
							$img3 = $team_image3;
						else :
							$img3 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
						if(isset($team_image4) && $team_image4 != ''):
							$img4 = $team_image4;
						else :
							$img4 = get_template_directory_uri().'/img/team-img1.jpg';
						endif;	
					?>
					
					<a href="#" title="" style="background-image:url(<?php echo $img1; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($team_name1) && $team_name1 != ''):
									echo htmlentities($team_name1);
								endif;
								if(isset($team_job1) && $team_job1 != ''):
									echo '<span>'.htmlentities($team_job1).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img2; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($team_name2) && $team_name2 != ''):
									echo htmlentities($team_name2);
								endif;
								if(isset($team_job2) && $team_job2 != ''):
									echo '<span>'.htmlentities($team_job2).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img3; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($team_name3) && $team_name3 != ''):
									echo htmlentities($team_name3);
								endif;
								if(isset($team_job3) && $team_job3 != ''):
									echo '<span>'.htmlentities($team_job3).'</span>';
								endif;
							?>
						</p>
					</a>
					<a href="#" title="" style="background-image:url(<?php echo $img4; ?>)">
						<p class="background"></p>
						<p class="info">
							<?php 
								if(isset($team_name4) && $team_name4 != ''):
									echo htmlentities($team_name4);
								endif;
								if(isset($team_job4) && $team_job4 != ''):
									echo '<span>'.htmlentities($team_job4).'</span>';
								endif;
							?>
						</p>
					</a>
					<div class="arrow arrow-left"></div>
					<div class="arrow arrow-right"></div>                     
				</div><!-- .team-wrap -->
				
			</div><!-- .container -->
		</section><!-- .our-team -->