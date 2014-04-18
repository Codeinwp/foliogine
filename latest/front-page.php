<?php
/*
 * The template for displaying the front page.
 * @package foliogine
 */

get_header();

$id = get_the_ID(); //the current id page

get_template_part('sections');
	
get_footer(); ?>