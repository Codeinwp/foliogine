<?php
/*
* Template Name: Contact
*/
?>
<?php get_header(); ?>

<?php 
	$email = cwp('email');
	$contact_title = cwp('contact_title');
	$phone = cwp('phone');
	$address = cwp('address');
	$contact_form = cwp('contact_form');
?>

<?php	if(isset($_POST['submitted'])) :        
			if(trim($_POST['formname']) === ''):               
				$nameError = __('Please enter your first name.','cwp');               
				$hasError = true;        
			else:               
				$name = trim($_POST['formname']);        
			endif;         
			if(trim($_POST['formmail']) === ''):               
				$mailError = __('Please enter your email address.','cwp');               
				$hasError = true;        
			elseif (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['formmail']))) :               
				$mailError = __('You entered an invalid email address.','cwp');               
				$hasError = true;        
			else:               
				$mail = trim($_POST['formmail']);        
			endif;         
			if(trim($_POST['formmessage']) === ''):               
				$messageError = __('Please enter a message.','cwp');               
				$hasError = true;        
			else:               
				if(function_exists('stripslashes')) :                       
					$message = stripslashes(trim($_POST['formmessage']));               
				else:                       
					$message = trim($_POST['formmessage']);               
				endif;        
			endif; 		        
			if(!isset($hasError)): 
				if(isset($email) && $email != ''):
					$emailTo = $email;
				endif;
				$subject = 'From '.$name;               
				$body = "Name: $name \n\nEmail: $mail \n\nMessage: $message";               
				$headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $mail; 				               
				wp_mail($emailTo, $subject, $body, $headers);               
				$emailSent = true;        
			endif;	
		endif;?>
		<script src="//maps.google.com/maps?file=api&amp;v=2.x&amp;key=AIzaSyAUVkczNJx96g0VKfBARFGuLhWoU0BTzDc" type="text/javascript"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/google-map.js"></script>
		<?php	while ( have_posts() ) : the_post();			
					$id = get_the_ID();				
					?>					
					<section class="title-page-area">				
						<div class="container">					
							<h1><?php the_title(); ?></h1>				
						</div><!-- .container -->			
					</section><!-- .title-page-area -->			
					<section class="contact">			
						<div class="container">				
							<div class="left">					
								<div id="map_canvas" style="height: 620px"></div>				
							</div>				
							<div class="right">					
							<div>							
							<?php 	if(isset($contact_title) && $contact_title != ''): ?>									
										<h2><?php echo $contact_title; ?></h2>						
							<?php 	else: ?>											
										<h2><?php _e('We are here for you','cwp'); ?></h2>						
							<?php 	endif; 								
									if((isset($phone) && $phone != '') || (isset($email) && $email != '') || (isset($address) && $address != '')): ?>									
										<address>									
										<?php										
											if(isset($address) && $address != '') :											
												echo '<p><span>Address:</span>'.$address.'</p>';										
											endif;										
											if((isset($phone) && $phone != '') || (isset($email) && $email != '')):									
										?>											
												<p>											
													<?php												
														if(isset($phone) && $phone != ''):													
															echo '<span>'.__('Phone:','cwp').'</span>'.$phone;												
														endif;													
														if(isset($email) && $email != ''):													
															echo '<span>'.__('Email:','cwp').' </span>';													
															echo '<a href="mailto:'.$email.'">'.$email.'</a>';												
														endif;												
													?>											
												</p>									
											<?php endif; ?>										
										</address>								
									<?php endif; ?>						
									<p class="contact-info">							
										<?php echo get_the_content(); ?>						
									</p>						
									<div class="clear"></div>					
							</div> 			
							<?php if(isset($email) && $email != ''): ?>						
									<div class="form-contact">							
									<?php 								
										if(isset($contact_form) && $contact_form != ''):									
											echo '<h2>'.$contact_form.'</h2>';								
										endif;							
									?>							
									<?php if(isset($emailSent) && $emailSent == true) : ?>									
											<p><?php _e('Thanks, your email was sent successfully.','cwp'); ?></p>                            
									<?php elseif(isset($_POST['submitted'])): ?>                                    
											<p><?php _e('Sorry, an error occured.','cwp'); ?><p>                            
									<?php endif; ?>														
									<form action="" id="contactForm" method="post">								
										<label for="formname">									
											<span><?php _e('First name*','cwp'); ?></span>									
											<input type="text" name="formname" id="formname" value="<?php if(isset($_POST['formname'])) echo $_POST['formname'];?>" />																 
											<?php if(isset($nameError) && $nameError != '') { ?>																		 
												<span class="error"><?php echo $nameError;?></span>																 
											<?php } ?>								
										</label>																 								
										<label for="formmail">									
											<span><?php _e('Email address*','cwp'); ?></span>									
											<input type="email" name="formmail" id="formmail" value="<?php if(isset($_POST['formmail']))  echo $_POST['formmail'];?>" />																 
											<?php if(isset($mailError) && $mailError != '') { ?>																		 
												<span class="error"><?php echo $mailError;?></span>																 
											<?php } ?>								
										</label>	 								
										<label for="formmessage">									
											<span><?php _e('Message*','cwp'); ?></span>									
											<textarea name="formmessage" id="formmessage" rows="5">
												<?php 
													if(isset($_POST['formmessage'])) { 
														if(function_exists('stripslashes')) { 
															echo stripslashes($_POST['formmessage']); 
														} else { 
															echo $_POST['formmessage']; 
														} 
													} 
												?>
											</textarea>																 
											<?php if(isset($messageError) && $messageError != '') { ?>																		 
													<span class="error"><?php echo $messageError;?></span>																 
											<?php } ?>								
										</label>											
										<input type="submit" value="<?php _e('Send message','cwp'); ?>" class="btn" name="submit" />																
										<input type="hidden" name="submitted" id="submitted" value="true" />							
									</form>	
								</div><!-- .form-contact -->				
							<?php endif; ?>							
						</div> <!-- .right -->				
					</div> <!-- .container -->
					<div class="mt10"></div>		
				<?php			
				endwhile; 
    $id = get_the_ID(); //the current id page

	get_template_part('sections');

get_footer();?>