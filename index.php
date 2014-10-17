<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

		<h1><?php _e('Blog','foliogine'); ?></h1>

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
						echo '<p class="hidden-tablet"><span>'.__('Posted by','foliogine').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
					}
					if(isset($the_category) && $the_category == 'show') {
						
						$category = get_the_category();
						$cats = get_the_category($post->ID); 
						if(!empty($cats)) 
							$tmp = $cats[0]->cat_name;
                        if(isset($tmp) && $tmp != '') {
                            echo '<p class="hidden-tablet"><span>'.__('Posted in','foliogine').'</span>';    
						    echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                        }    
					}
					if(isset($tags) && $tags == 'show' && has_tag()) {
						echo '<p class="hidden-tablet"><span>'.__('Tagged with','foliogine').'</span>';
						the_tags('');
						echo '</p>';		
					}	
				?>									
				</div><!-- .list-post-info -->
			
				<div <?php post_class('list-post-content'); ?>>
					<div class="post-img">
					<?php if(isset($featured_image) && $featured_image == 'show') { ?>
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
								echo '<p><span>'.__('Posted by ','foliogine').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
							}
							if(isset($the_category) && $the_category == 'show') {
								
								$category = get_the_category();
								$cats = get_the_category($post->ID); 
								if(!empty($cats)) 
									$tmp = $cats[0]->cat_name;
                                if(isset($tmp) && $tmp != '') {
                                    echo '<p><span>'.__('Posted in ','foliogine').'</span>';    
								    echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                                }    
							}
							if(isset($tags) && $tags == 'show' && has_tag()) {
									echo '<p><span>'.__('Tagged with ','foliogine').'</span>';
									the_tags('');
									echo '</p>';
							}	
						?>
						</div><!-- .post-info-phone -->
						<p class="bottom-line">
							<a href="<?php echo get_permalink($post->ID);?>" title="<?php _e('Continue reading','foliogine'); ?>" class="continue"><?php _e('Continue reading','foliogine'); ?> ></a>
							<a class="icons comm" title="<?php _e('Comments ','foliogine'); ?>"><span></span><?php comments_number( '0', '1', '%' ); ?></a>
							<a class="icons eye" title="<?php _e('Views ','foliogine'); ?>"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>
						</p><!-- .bottom-line -->
					</div><!-- .post-img -->
				</div><!-- .list-post-content -->
						
				<div class="clear"></div>
			</div><!-- .list-post-box -->
			<?php endwhile; ?>	

					
			<div class="pagination-wrap">
				
				<p class="right">
					<?php previous_posts_link( __( 'Prev', 'foliogine' ) ); ?>
					<?php next_posts_link( __( 'Next', 'foliogine' ) ); ?>
				</p>
				
			</div><!-- /pagination-->
					
		</div><!-- .left -->
				
				
				
		<div class="sidebar hidden-phone">

			<?php get_sidebar(); ?>
			
		</div><!-- .sidebar --> 	 
	</div><!-- .container -->
</section><!-- .bloglist -->

<?php
get_footer(); ?>