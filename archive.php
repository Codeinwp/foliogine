<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package foliogine
 */
?>
<?php get_header(); ?>

<?php global  $optionsdb; ?>

<section class="title-page-area">
	<div class="container">
		<h1>
			<?php
			if ( is_category() ) :
				printf( __( 'Category Archives: %s', 'cwp' ), '<span>' . single_cat_title( '', false ) . '</span>' );
			elseif ( is_tag() ) :
				printf( __( 'Tag Archives: %s', 'cwp' ), '<span>' . single_tag_title( '', false ) . '</span>' );
			elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Author Archives: %s', 'cwp' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();
			elseif ( is_day() ) :
				printf( __( 'Daily Archives: %s', 'cwp' ), '<span>' . get_the_date() . '</span>' );

			elseif ( is_month() ) :
				printf( __( 'Monthly Archives: %s', 'cwp' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

			elseif ( is_year() ) :
				printf( __( 'Yearly Archives: %s', 'cwp' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

			elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
				_e( 'Asides', 'cwp' );

			elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
				_e( 'Images', 'cwp');

			elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
				_e( 'Videos', 'cwp' );

			elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
				_e( 'Quotes', 'cwp' );

			elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
				_e( 'Links', 'cwp' );

			else :
				_e( 'Archives', 'cwp' );

			endif;
			?>
		</h1>			
	</div><!-- .container -->
</section><!-- .title-page-area -->

<section class="bloglist">
	<div class="container">
		<div class="left">
		<?php
			while ( have_posts() ) : the_post(); 
				cwp_setPostViews(get_the_ID());
			?>
			<div class="list-post-box">
				<div class="list-post-info">
				<?php
					if(isset($optionsdb['date']) && $optionsdb['date'] == 'Show') {
						$d = get_the_date('F j Y','','',false);
						$dt = get_the_date('Y-m-d','','',false);
						echo '<time datetime="'.$dt.'"><span>'.$d.'</span></time>';
					}	
					if(isset($optionsdb['author']) && $optionsdb['author'] == 'Show') {
						$author = get_the_author();
						echo '<p class="hidden-tablet"><span>'.__('Posted by','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
					}
					if(isset($optionsdb['category']) && $optionsdb['category'] == 'Show') {
						echo '<p class="hidden-tablet"><span>'.__('Posted in','cwp').'</span>';
						$category = get_the_category();
						$cats = get_the_category($post->ID); 
						if(!empty($cats)) 
							$tmp = $cats[0]->cat_name;
						echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
					}
					if(isset($optionsdb['tags']) && $optionsdb['tags'] == 'Show' && has_tag()) {
						echo '<p class="hidden-tablet"><span>'.__('Tagged with','cwp').'</span>';
						the_tags('');
						echo '</p>';		
					}	
				?>									
				</div><!-- .list-post-info -->
			
				<div <?php post_class('list-post-content'); ?>>
					<div class="post-img">
					<?php if(isset($optionsdb['featured_image']) && $optionsdb['featured_image'] == 'Show') { ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php 
							if ( has_post_thumbnail($post->ID) ) {
								echo get_the_post_thumbnail($post->ID, 'blog-small'); 
							}
						?>
						</a>
					<?php } ?>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<p><?php the_excerpt(); ?></p>
						<div class="post-info-phone">
						<?php
							if(isset($optionsdb['author']) && $optionsdb['author'] == 'Show') {
								$author = get_the_author();
								echo '<p><span>'.__('Posted by','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
							}
							if(isset($optionsdb['category']) && $optionsdb['category'] == 'Show') {
								$author = get_the_author();
								echo '<p><span>'.__('Posted in','cwp').'</span>';
								$category = get_the_category();
								$cats = get_the_category($post->ID); 
								if(!empty($cats)) 
									$tmp = $cats[0]->cat_name;
								echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
							}
							if(isset($optionsdb['tags']) && $optionsdb['tags'] == 'Show' && has_tag()) {
									echo '<p><span>'.__('Tagged width','cwp').'</span>';
									the_tags('');
									echo '</p>';
							}	
						?>
						</div><!-- .post-info-phone -->
						<p class="bottom-line">
							<a href="<?php echo get_permalink($post->ID);?>" title="<?php _e('Continue reading','cwp'); ?>" class="continue"><?php _e('Continue reading','cwp'); ?> ></a>
							<a class="icons comm" title="<?php _e('Comments','cwp'); ?>"><span></span><?php comments_number( '0', '1', '%' ); ?></a>
							<a class="icons eye" title="<?php _e('Views','cwp');?>"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>
						</p><!-- .bottom-line -->
					</div><!-- .post-img -->
				</div><!-- .list-post-content -->
						
				<div class="clear"></div>
			</div><!-- .list-post-box -->
			<?php endwhile; ?>	

					

			<div class="pagination-wrap">
				
				<p class="right">
					<?php previous_posts_link( __( 'Prev', 'cwp' ) ); ?>
					<?php next_posts_link( __( 'Next', 'cwp' ) ); ?>
				</p>
				
			</div><!-- /pagination-->
					
		</div><!-- .left -->
				
				
				
		<div class="sidebar hidden-phone">

			<?php get_sidebar(); ?>
			
		</div><!-- .sidebar --> 	 
	</div><!-- .container -->
</section><!-- .bloglist -->				

<?php

    /*
	* Slider section
	*/
	
	if(isset($optionsdb['slider_archive']) && $optionsdb['slider_archive'] == 'Show'):
        get_template_part('/inc/slider');
	endif;

	/*
	* Featured work section
	*/
	
	if(isset($optionsdb['featured_archive']) && $optionsdb['featured_archive'] == 'Show'):
        $count_posts = wp_count_posts('product');
		$nr_portofolio = $count_posts->publish; 
		
		if($nr_portofolio >= 3) : //at least 3 posts
            get_template_part('/inc/featured-work');
		endif;
	endif;
		
	/*
	* Our services
	*/
	
	if(isset($optionsdb['services_archive']) && $optionsdb['services_archive'] == 'Show'):
        get_template_part('/inc/our-services');
	endif;
	
    /*
	* Our team section
	*/
	
	if(isset($optionsdb['team_archive']) && $optionsdb['team_archive'] == 'Show'):
        get_template_part('/inc/our-team');
	endif;
	
	/*
	* Testimonial
	*/
	
	if(isset($optionsdb['testimonial_archive']) && $optionsdb['testimonial_archive'] == 'Show'):
        get_template_part('/inc/testimonial-options');
	endif;

    /*
    * Download brochure section
    */

    
	if(isset($optionsdb['download_archive']) && $optionsdb['download_archive'] == 'Show'):
        get_template_part('/inc/brochure');
    endif;

	/*
    * Latest work section
    */

	if(isset($optionsdb['latest_archive']) && $optionsdb['latest_archive'] == 'Show'):
		get_template_part('/inc/latest-work');
	endif;

	/*
	* OUR SKILLS section
	*/
	
	if(isset($optionsdb['skill_archive']) && $optionsdb['skill_archive'] == 'Show'):
        get_template_part('/inc/our-skills');
    endif;
			
 get_footer(); ?>