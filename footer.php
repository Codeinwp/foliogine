<?php
	/*
	*
	* The template for displaying the footer. 
	* 
	* Contains the closing of the id=main div and all content after 
	* 
	* @package foliogine
	*/
?>
<?php
	$footer_columns = cwp('footer_columns');
	$logo_footer = cwp('logo_footer');
	$logo_footer_text = cwp('logo_footer_text');
	$linkedin = cwp('linkedin');
	$rss = cwp('rss');
	$twitter = cwp('twitter');
	$facebook = cwp('facebook');
	$copyright = cwp('copyright');
	
	$address = cwp('address');
	$phone = cwp('phone');
	$email = cwp('email');
?>
<footer>	
	<div class="container">	
	<?php 			
		if(isset($footer_columns)) {				
			if($footer_columns == 'doi') {		
	?>					
				<div class="footer-box">						
				<p class="top">
					<a href="#" title="">						
					<?php							
						if(isset($logo_footer) && $logo_footer != '') {								
							if(isset($logo_footer_text) && $logo_footer_text != '')									
								echo '<img src="'.$logo_footer.'" alt="'.$logo_footer_text.'">';								
							else									
								echo '<img src="'.$logo_footer.'" alt="'.bloginfo('name').'">';							
						}							
					?>						
					</a>
				</p>												
				<?php							
				if(isset($address) && $address != '')								
					echo '<p class="text">'.$address.'</p>';						
				?>												
					<p class="text">						
						<?php							
							if(isset($phone) && $phone != '')								
								echo __( 'Phone','foliogine' ).':'.$phone.'</br>';						
						?>						
						<?php							
							if(isset($email) && $email != '')								
								echo __('Email','foliogine' ).': <a href="mailto:'.$email.'">'.$email.'</a>';						
						?>						
					</p>					
				</div>		
				<?php				
			}				
			else if($footer_columns == 'trei'){		
			?>					
				<div class="footer-box">						
					<p class="top">
						<a href="#" title="">						
							<?php							
							if(isset($logo_footer) && $logo_footer != '') {								
								if(isset($logo_footer_text) && $logo_footer_text != '')									
									echo '<img src="'.$logo_footer.'" alt="'.$logo_footer_text.'">';								
								else									
									echo '<img src="'.$logo_footer.'" alt="">';							
							}							
							?>									
						</a>
					</p>						
					<?php							
						if(isset($address) && $address != '')								
							echo '<p class="text">'.$address.'</p>';						
					?>					
				</div>					
				<div class="footer-box">						
					<p class="top"></p>						
					<p class="text">						
					<?php							
						if(isset($phone) && $phone != '')								
							echo __('Phone','foliogine').':'.$phone.'</br>';						
					?>						
					<?php							
						if(isset($email) && $email != '')								
							echo __('Email','foliogine').': <a href="mailto:'.$email.'">'.$email.'</a>';						
					?>						
					</p>					
				</div>		
				<?php				
			}			
		}		
	?>						
	<div class="footer-box-right">
		<?php	if( (isset($linkedin) && $linkedin != '') || (isset($rss) && $rss != '') || (isset($twitter) && $twitter != '') || (isset($facebook) && $facebook != '')) { ?>		
			<p class="social">
			<?php 	if(isset($linkedin) && $linkedin != '')		
						echo "<a target='_blank' href='".$linkedin."' class='lin'></a>";	
					if(isset($rss) && $rss != '')		
						echo "<a target='_blank' href='".$rss."' class='rss'></a>";	
					if(isset($twitter) && $twitter != '')		
						echo "<a target='_blank' href='".$twitter."' class='tw'></a>";		
					if(isset($facebook) && $facebook != '')		
						echo "<a target='_blank' href='".$facebook."' class='fb'></a>";		
			?>
			</p>
			<?php  }?>
			<?php		if(isset($copyright) && $copyright != ''):		
							echo '<p>'.$copyright.'</p>';	
						else: ?>		
							<p><?php _e('Copyright','foliogine'); ?> &copy; <?php echo date('Y'); ?><br><?php _e('All rights reserved.','foliogine'); ?></p>
						<?php	endif;?>
			
	</div>	
	<div class="clear"></div>
	<div class="poweredby right">
	<a href="http://themeisle.com/themes/foliogine-pro/?utm_source=foliogine-pro&utm_medium=link&utm_campaign=themefooter" target="_blank">Foliogine Pro</a><?php _e(' powered by ','cwp'); ?><a href="http://wordpress.org/" target="_blank"><?php _e('WordPress','cwp'); ?></a>
	</div>
	</div>	
	</footer>
	<?php wp_footer(); ?>
	</body>
	</html>