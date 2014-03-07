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

<?php global  $optionsdb; ?>

<footer>	

	<div class="container">	

	<?php 			

		if(isset($optionsdb['footer_columns'])) {				

			if($optionsdb['footer_columns'] == '2') {		

	?>					

				<div class="footer-box">						

				<p class="top">

					<a href="#" title="">						

					<?php							

						if(isset($optionsdb['logo_footer']) && $optionsdb['logo_footer'] != '') {								

							if(isset($optionsdb['logo_footer_text']) && $optionsdb['logo_footer_text'] != '')									

								echo '<img src="'.$optionsdb['logo_footer'].'" alt="'.$optionsdb['logo_footer_text'].'">';								

							else									

								echo '<img src="'.$optionsdb['logo_footer'].'" alt="'.bloginfo('name').'">';							

						}							

					?>						

					</a>

				</p>												

				<?php							

				if(isset($optionsdb['address']) && $optionsdb['address'] != '')								

					echo '<p class="text">'.$optionsdb['address'].'</p>';						

				?>												

					<p class="text">						

						<?php							

							if(isset($optionsdb['phone']) && $optionsdb['phone'] != '')								

								echo 'Phone:'.$optionsdb['phone'].'</br>';						

						?>						

						<?php							

							if(isset($optionsdb['email']) && $optionsdb['email'] != '')								

								echo 'Email: <a href="mailto:'.$optionsdb['email'].'">'.$optionsdb['email'].'</a>';						

						?>						

					</p>					

				</div>		

				<?php				

			}				

			else if($optionsdb['footer_columns'] == '3'){		

			?>					

				<div class="footer-box">						

					<p class="top">

						<a href="#" title="">						

							<?php							

							if(isset($optionsdb['logo_footer']) && $optionsdb['logo_footer'] != '') {								

								if(isset($optionsdb['logo_footer_text']) && $optionsdb['logo_footer_text'] != '')									

									echo '<img src="'.$optionsdb['logo_footer'].'" alt="'.$optionsdb['logo_footer_text'].'">';								

								else									

									echo '<img src="'.$optionsdb['logo_footer'].'" alt="">';							

							}							

							?>									

						</a>

					</p>						

					<?php							

						if(isset($optionsdb['address']) && $optionsdb['address'] != '')								

							echo '<p class="text">'.$optionsdb['address'].'</p>';						

					?>					

				</div>					

				<div class="footer-box">						

					<p class="top"></p>						

					<p class="text">						

					<?php							

						if(isset($optionsdb['phone']) && $optionsdb['phone'] != '')								

							echo 'Phone:'.$optionsdb['phone'].'</br>';						

					?>						

					<?php							

						if(isset($optionsdb['email']) && $optionsdb['email'] != '')								

							echo 'Email: <a href="mailto:'.$optionsdb['email'].'">'.$optionsdb['email'].'</a>';						

					?>						

					</p>					

				</div>		

				<?php				

			}			

		}		

	?>						

	<div class="footer-box-right">

		<?php	if( (isset($optionsdb['linkedin']) && $optionsdb['linkedin'] != '') || (isset($optionsdb['rss']) && $optionsdb['rss'] != '') || (isset($optionsdb['twitter']) && $optionsdb['twitter'] != '')) { ?>		

			<p class="social">

			<?php 	if(isset($optionsdb['linkedin']) && $optionsdb['linkedin'] != '')		

						echo "<a href='".$optionsdb['linkedin']."' class='lin'></a>";	

					if(isset($optionsdb['rss']) && $optionsdb['rss'] != '')		

						echo "<a href='".$optionsdb['rss']."' class='rss'></a>";	

					if(isset($optionsdb['twitter']) && $optionsdb['twitter'] != '')		

						echo "<a href='".$optionsdb['twitter']."' class='tw'></a>";		

			?>

			</p>

			<?php  }?>

			<?php		if(isset($optionsdb['copyright']) && $optionsdb['copyright'] != ''):		

							echo '<p>'.$optionsdb['copyright'].'</p>';	

						else: ?>		

							<p><?php _e('Copyright','cwp'); ?> &copy; <?php the_date('Y'); ?><br><?php _e('All rights reserved.','cwp'); ?></p>

						<?php	endif;?>		

	</div>	

	</div>	

	</footer>

	<?php wp_footer(); ?>

	</body>

	</html>