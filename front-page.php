<?php
/*
 * The template for displaying the front page.
 * @package foliogine
 */

get_header();

$id = get_the_ID(); //the current id page

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		echo '<div class="container">';
			the_content();
		echo '</div>';	
	}
}

get_template_part('sections');
	
get_footer(); ?>