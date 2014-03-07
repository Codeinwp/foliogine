<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package foliogine
 */
get_header();
global  $optionsdb;
while ( have_posts() ) : the_post();
?>
<section class="title-page-area">
	<div class="container">
		<h1><?php the_title(); ?></h1>
    </div><!-- .container -->
</section><!-- .title-page-area -->

<section class="about">
	<div class="container">
		<?php the_content(); ?>
        <div class="comments">
			<?php 
				if(isset($optionsdb['comments']) && $optionsdb['comments'] == 'Show') {
					comments_template(); 
				}
			?>
		</div>
	</div> <!-- .container -->
</section><!-- .about -->
<?php endwhile; 
$id = get_the_ID(); //the current id page
get_template_part('sections');   
get_footer(); ?>