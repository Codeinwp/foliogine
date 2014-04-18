<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package foliogine
 */
?>

<?php get_header(); ?>
<?php 
	$date = cwp('date');
	$the_author = cwp('author');
	$the_category = cwp('category');
	$tags = cwp('tags');
	$featured_image = cwp('featured_image');
?>
<section class="title-page-area">
	<div class="container">

		<h1><?php printf( __( 'Search Results for: %s', 'cwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

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
					
					if(isset($date) && $date == 'show') {
						$d = get_the_date('F j Y','','',false);
						$dt = get_the_date('Y-m-d','','',false);
						echo '<time datetime="'.$dt.'"><span>'.$d.'</span></time>';
					}	
					if(isset($the_author) && $the_author == 'show') {
						$author = get_the_author();
						echo '<p class="hidden-tablet"><span>'.__('Posted by','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
					}
					if(isset($the_category) && $the_category == 'show') {
						
						$category = get_the_category();
						$cats = get_the_category($post->ID); 
						if(!empty($cats)) 
							$tmp = $cats[0]->cat_name;
                        if(isset($tmp) && $tmp != '') {
                            echo '<p class="hidden-tablet"><span>'.__('Posted in','cwp').'</span>';    
				            echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                        }    
					}
					if(isset($tags) && $tags == 'show' && has_tag()) {
						echo '<p class="hidden-tablet"><span>'.__('Tagged with','cwp').'</span>';
						the_tags('');
						echo '</p>';		
					}	
				?>									
				</div><!-- .list-post-info -->
			
				<div <?php post_class('list-post-content'); ?>>
					<div class="post-img">
					<?php if(isset($featured_image) && $featured_image == 'Show') { ?>
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
							if(isset($the_author) && $the_author == 'show') {
								$author = get_the_author();
								echo '<p><span>'.__('Posted by','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
							}
							if(isset($the_category) && $the_category == 'show') {
								
								$category = get_the_category();
								$cats = get_the_category($post->ID); 
								if(!empty($cats)) 
									$tmp = $cats[0]->cat_name;
                                if(isset($tmp) && $tmp != '') {
                                    echo '<p><span>'.__('Posted in','cwp').'</span>';    
								    echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp. '</a></p>';
                                }    
							}
							if(isset($tags) && $tags == 'Show' && has_tag()) {
									echo '<p><span>'.__('Tagged with','cwp').'</span>';
									the_tags('');
									echo '</p>';
							}	
						?>
						</div><!-- .post-info-phone -->
						<p class="bottom-line">
							<a href="<?php echo get_permalink($post->ID);?>" title="Continue reading" class="continue"><?php _e('Continue reading','cwp') ?> ></a>
							<a class="icons comm" title="Comments"><span></span><?php comments_number( '0', '1', '%' ); ?></a>
							<a class="icons eye" title="Views"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>
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
	$slider_search = cwp('slider_search');
	
	if(isset($slider_search) && $slider_search == 'show'):
        get_template_part('/inc/slider');
	endif;

	/*
	* Featured work section
	*/
	$featured_search = cwp('featured_search');
	
	if(isset($featured_search) && $featured_search == 'show'):
        $count_posts = wp_count_posts('product');
		$nr_portofolio = $count_posts->publish; 
		
		if($nr_portofolio >= 3) : //at least 3 posts
            get_template_part('/inc/featured-work');
		endif;
	endif;
		
	/*
	* Our services
	*/
	$services_search = cwp('services_search');
	
	if(isset($services_search) && $services_search == 'show'):
        get_template_part('/inc/our-services');
	endif;
	
    /*
	* Our team section
	*/
	$team_search = cwp('team_search');
	
	if(isset($team_search) && $team_search == 'show'):
        get_template_part('/inc/our-team');
	endif;
	
	/*
	* Testimonial
	*/
	$testimonial_search = cwp('testimonial_search');
	
	if(isset($testimonial_search) && $testimonial_search == 'show'):
        get_template_part('/inc/testimonial-options');
	endif;

    /*
    * Download brochure section
    */
	$download_search = cwp('download_search');
    
	if(isset($download_search) && $download_search == 'show'):
        get_template_part('/inc/brochure');
    endif;

	/*
    * Latest work section
    */
	$latest_search = cwp('latest_search');

	if(isset($latest_search) && $latest_search == 'show'):
		get_template_part('/inc/latest-work');
	endif;

	/*
	* OUR SKILLS section
	*/
	$skill_search = cwp('skill_search');
	
	if(isset($skill_search) && $skill_search == 'show'):
        get_template_part('/inc/our-skills');
    endif;
			
 get_footer(); ?>