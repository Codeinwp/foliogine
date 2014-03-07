<?php
/**
 * The Template for displaying all single posts.
 *
 * @package foliogine
 */
?>
<?php get_header(); ?>
<section class="title-page-area">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div><!-- .container -->
</section><!-- .title-page-area -->

<section class="bloglist">
	<div class="container">
		<div class="left">
			<?php 
			while ( have_posts() ) : the_post(); 
				cwp_setPostViews(get_the_ID());
			?>
			
			<div class="list-post-box post-box">
				<div class="list-post-info">
					<?php
						if(isset($optionsdb['date_single']) && $optionsdb['date_single'] == 'Show') {
							$d = get_the_date('F j Y','','',false);
							$dt = get_the_date('Y-m-d','','',false);
							echo '<time datetime="'.$dt.'"><span>'.$d.'</span></time>';
						}
						if(isset($optionsdb['author_single']) && $optionsdb['author_single'] == 'Show') {
							$author = get_the_author();
							echo '<p class="hidden-tablet"><span>'.__('Posted by','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
						}
						if(isset($optionsdb['category_single']) && $optionsdb['category_single'] == 'Show') {
							
							$category = get_the_category();
							$cats = get_the_category($post->ID); 
							if(!empty($cats)) 
								$tmp = $cats[0]->cat_name;
                            if(isset($tmp) && $tmp != '') {
                                echo '<p class="hidden-tablet"><span>'.__('Posted in','cwp').'</span>';
				                echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                            }    
						}
						if(isset($optionsdb['tags_single']) && $optionsdb['tags_single'] == 'Show' && has_tag()) {
							echo '<p class="hidden-tablet"><span>'.__('Tagged with','cwp').'</span>';
						    the_tags('');
							echo '</p>';		
						} ?>										
				</div><!-- .list-post-info -->
						
				<div <?php post_class('list-post-content'); ?>>
					<div class="post-img">
						<div>
						<?php 
							if(isset($optionsdb['featured_image_single']) && $optionsdb['featured_image_single'] == 'Show') { 
								if ( has_post_thumbnail($post->ID) ) {
									echo get_the_post_thumbnail($post->ID, 'blog-small'); 
								}	
							} 
						?>
						<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
						</div>
					<div>
					<?php the_content(); ?>
				</div>
				<div class="post-info-phone">
					<?php
					if(isset($optionsdb['author_single']) && $optionsdb['author_single'] == 'Show') {
						$author = get_the_author();
						echo '<p><span>'.__('Posted by ','cwp').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
					}
					if(isset($optionsdb['category_single']) && $optionsdb['category_single'] == 'Show') {
						$category = get_the_category();
						$cats = get_the_category($post->ID); 
						if(!empty($cats)) 
							$tmp = $cats[0]->cat_name;
                        if(isset($tmp) && $tmp != '') {
                            echo '<p><span>'.__('Posted in ','cwp').'</span>';    
				            echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                        }    
					}
					if(isset($optionsdb['tags_single']) && $optionsdb['tags_single'] == 'Show' && has_tag()) {
						echo '<p><span>'.__('Tagged with ','cwp').'</span>';
						the_tags('');
						echo '</p>';		
					}	
					?>	
				</div><!-- .post-info-phone -->					
			<div>
				<p class="bottom-line">
					<a href="#" title="<?php _e('Continue reading','cwp'); ?>" class="continue scrollup"><?php _e('Back to top','cwp'); ?> ></a>
					<a href="#" class="icons comm" title="<?php _e('Comments','cwp'); ?>"><span></span><?php comments_number( '0', '1', '%' ); ?></a>
					<a href="#" class="icons eye" title="<?php _e('Views','cwp'); ?>"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>
				</p>
			</div>
			<br class="clear" />
            <div id="socials">
              <div id="shareme" data-url="<?php the_permalink(); ?>" data-text="<?php the_permalink(); ?>"></div>
            </div>            
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="comments">
	<?php 
		if(isset($optionsdb['comments']) && $optionsdb['comments'] == 'Show') {
			comments_template(); 
		}
	?>
</div>

</div>
<?php endwhile; ?>

<div class="sidebar hidden-phone">
	<?php get_sidebar(); ?>
</div>

</div>  
</section>

<?php
    $id = get_the_ID(); //the current id page

	get_template_part('sections');
 get_footer(); ?>