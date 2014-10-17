<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package foliogine
 */
?>
<?php get_header(); ?>
<section class="title-page-area">				
	<div class="container">					
		<h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'foliogine' ); ?></h1>				
	</div><!-- .container -->			
</section><!-- .title-page-area -->	
<section>
    <div class="container">
	   <p><?php _e( 'It looks like nothing was found at this location', 'foliogine' ); ?></p>					
    </div>
</section>    
<?php get_footer(); ?>