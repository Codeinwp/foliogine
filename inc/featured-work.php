            <section>
				<div class="container featured-work">

					<div class="block1">
						<div class="two-cols yellow">
							<p class="fw-title"><?php _e('Featured Work','foliogine'); ?> 
								<span><?php _e('Browse our most creative portofio items.','foliogine'); ?></span>
							</p>
						</div>
					</div><!-- .block1 -->
				
					<div class="block2">
						<div class="one-col black hidden-phone">
							<div class="content portfolio-items">
								<?php
                                    $count_posts = wp_count_posts('product');
		                            $nr_portofolio = $count_posts->publish; 
                                ?>
								<p><?php echo htmlentities($nr_portofolio); ?><span><?php _e('portfolio items','foliogine'); ?></span></p>
							</div>
							<div class="arrow-right"></div>
						</div>

						<div class="one-col yellow category-items hidden-tablet">
							<ul>
							<?php
								$args = array(
								  'orderby' => 'name',
								  'show_count' => 0,
								  'pad_counts' => 0,
								  'hierarchical' => 1,
								  'taxonomy' => 'categories',
								  'title_li' => '',
								  'show_count' => 1,
								  'echo' => 1,
								  'number' => 5
								);
								wp_list_categories($args);
							?>
							</ul>
						</div>
					</div><!-- .block2 -->
					
					<?php
						$args = array( 'post_type' => 'product', 'posts_per_page' => 3 );
						$loop = new WP_Query( $args );
						$count = 1;
						while ( $loop->have_posts() ) : $loop->the_post();
							$d = get_the_date('j F');
							$dt = get_the_date('Y-m-d');
							
							if (has_post_thumbnail( $post->ID ) ):
								$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
							else:
								$image = '';
							endif;	
							
							$terms = get_the_terms($post->ID, 'categories');
							if(!empty($terms)):
								$cat = '';
								foreach ( $terms as $term ) {
									$cat = $term->name;
								}
							endif;	
											
							if($count == 1):
							?>
								<div class="blocks-wrap">
									<div class="block3">
										<div class="one-col black">
											<div class="box-item">
												<p class="category"><?php echo $cat; ?></p>
												<h3><a href="<?php the_permalink($post->ID); ?>" title=""><?php the_title(); ?></a></h3>
												<time datetime="<?php echo $dt; ?>"><?php echo $d; ?></time>
											</div>
											<div class="arrow-right"></div>
										</div>
										<div class="two-cols yellow fw-photo" style="background-image:url(<?php echo $image[0]; ?>)"></div>
									</div>	
							<?php 
							elseif($count == 2):
							?>
									<div class="block5">
										<div class="two-cols yellow fw-photo" style="background-image:url(<?php echo $image[0]; ?>)"></div>
										<div class="one-col black">
											<div class="box-item">
												<p class="category"><?php echo $cat; ?></p>
												<h3><a href="<?php the_permalink($post->ID); ?>" title=""><?php the_title(); ?></a></h3>
												<time datetime="<?php echo $dt; ?>"><?php echo $d; ?></time>
											</div>        
											<div class="arrow-left"></div>
										</div>
									</div><!-- .block5 -->
								</div><!-- .blocks-wrap -->
							<?php 
							elseif($count == 3):
							?>
								<div class="block4"> 
									<div class="one-col black">
										<div class="box-item">
											<p class="category"><?php echo $cat; ?></p>
											<h3><a href="<?php the_permalink($post->ID); ?>" title=""><?php the_title(); ?></a></h3>
											<time datetime="<?php echo $dt; ?>"><?php echo $d; ?></time>
										</div>        
										<div class="arrow-bottom"></div>
										<div class="arrow-right"></div>
									</div>
									<div class="one-col yellow fw-photo block4" style="background-image:url(<?php echo $image[0]; ?>)"></div>                
							   </div><!-- .block4 -->
							<?php
							endif;
							$count++;
						endwhile;
                        wp_reset_postdata();
					?>
			
				</div><!-- .container -->
			</section>