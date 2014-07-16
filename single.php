<?php
/**
 * The Template for displaying all single posts.
 *
 * @package foliogine
 */
?>
<?php get_header(); ?>
<?php 
	$date_single = cwp('date_single');
	$author_single = cwp('author_single');
	$category_single = cwp('category_single');
	$tags_single = cwp('tags_single');
	$featured_image_single = cwp('featured_image_single');
	$comments = cwp('comments');
?>
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
						if(isset($date_single) && $date_single == 'show') {
							$d = get_the_date('F j Y','','',false);
							$dt = get_the_date('Y-m-d','','',false);
							echo '<time datetime="'.$dt.'"><span>'.$d.'</span></time>';
						}
						if(isset($author_single) && $author_single == 'show') {
							$author = get_the_author();
							echo '<p class="hidden-tablet"><span>'.__('Posted by','foliogine').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
						}
						if(isset($category_single) && $category_single == 'show') {
							
							$category = get_the_category();
							$cats = get_the_category($post->ID); 
							if(!empty($cats)) 
								$tmp = $cats[0]->cat_name;
                            if(isset($tmp) && $tmp != '') {
                                echo '<p class="hidden-tablet"><span>'.__('Posted in','foliogine').'</span>';
				                echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                            }    
						}
						if(isset($tags_single) && $tags_single == 'show' && has_tag()) {
							echo '<p class="hidden-tablet"><span>'.__('Tagged with','foliogine').'</span>';
						    the_tags('');
							echo '</p>';		
						} ?>										
				</div><!-- .list-post-info -->
						
				<div <?php post_class('list-post-content'); ?>>
					<div class="post-img">
						<div>
						<?php 
							if(isset($featured_image_single) && $featured_image_single == 'show') { 
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
					if(isset($author_single) && $author_single == 'show') {
						$author = get_the_author();
						echo '<p><span>'.__('Posted by ','foliogine').'</span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' )).'">'.$author.'</a></p>';
					}
					if(isset($category_single) && $category_single == 'show') {
						$category = get_the_category();
						$cats = get_the_category($post->ID); 
						if(!empty($cats)) 
							$tmp = $cats[0]->cat_name;
                        if(isset($tmp) && $tmp != '') {
                            echo '<p><span>'.__('Posted in ','foliogine').'</span>';    
				            echo '<a href="'.get_category_link($category[0]->cat_ID).'">'.$tmp.'</a></p>';
                        }    
					}
					if(isset($tags_single) && $tags_single == 'show' && has_tag()) {
						echo '<p><span>'.__('Tagged with ','foliogine').'</span>';
						the_tags('');
						echo '</p>';		
					}	
					?>	
				</div><!-- .post-info-phone -->					
			<div>
				<p class="bottom-line">
					<a href="#" title="<?php _e('Back to top','foliogine'); ?>" class="continue scrollup"><?php _e('Back to top','foliogine'); ?> ></a>
					<a href="javascript: void(0)" class="icons comm" title="<?php _e('Comments','foliogine'); ?>"><span></span><?php comments_number( '0', '1', '%' ); ?></a>
					<a href="javascript: void(0)" class="icons eye" title="<?php _e('Views','foliogine'); ?>"><span></span><?php echo cwp_getPostViews(get_the_ID()); ?></a>
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
		if(isset($comments) && $comments == 'show') {
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