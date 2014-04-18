<?php
/*
 * The Sidebar containing the main widget areas.
 *
 * @package foliogine
 */
if ( is_active_sidebar('sidebar-1') ):
    dynamic_sidebar('Sidebar');
else:
?>
						<div class="widget">
							<p class="title"><?php _e('Recent posts','cwp'); ?></p>
							<?php
								$args = array(
									'numberposts' => 10,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish',
									'suppress_filters' => true );

									$recent_posts = wp_get_recent_posts($args);
									
									foreach( $recent_posts as $recent ){
										echo '<p><span>'.date('F d,Y',strtotime($recent['post_date'])).'</span><a href="' . get_permalink($recent["ID"]) . '" title="'.esc_attr($recent["post_title"]).'" >' .$recent["post_title"].'</a></p> ';
									}
							?>	
						</div><!-- .widget -->
						
						<div class="widget">
							<p class="title"><?php _e('Recent comments','cwp'); ?></p>
							<?php
								$args = array(
									'status' => 'approve',
									'number' => 10
								);
								$comments = get_comments($args);
								foreach($comments as $comment) :
									echo '<p><span>'.$comment->comment_author.' commented on </span><a href="'.get_permalink($comment->comment_post_ID).'" title="'.get_the_title($comment->comment_post_ID).'">'.get_the_title($comment->comment_post_ID).'</a></p>';
								endforeach;
							?>	
						</div><!-- .widget -->
						<div class="widget archives">
							<p class="title"><?php _e('Archive','cwp'); ?></p>
							<?php
								$args = array(
									'limit'           => 10,
									'format'          => 'custom', 
									'before'          => '<p>',
									'after'           => '</p>',
								);
								wp_get_archives($args); 
							?>		
						</div><!-- .archives -->
						<?php get_search_form(); ?>
<?php
endif;