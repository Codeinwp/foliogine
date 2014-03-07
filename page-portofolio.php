<?php
/*
Template Name: Portofolio
*/
?>
<?php get_header(); ?>
<?php global  $optionsdb; ?>
<section class="title-page-area">
	<div class="container">

		<h1><?php the_title(); ?></h1>

    </div><!-- .container -->
</section><!-- .title-page-area -->

<?php 
	/*
	* Display categories
	*/
	
	if((isset($optionsdb['portofolio_categories']) && $optionsdb['portofolio_categories'] == 'Show') || !isset($optionsdb['portofolio_categories'])):
?>
			<span id="ascuns"><?php _e('Show','cwp'); ?></span>
			<section class="work">
				<div class="container">
					<?php					
					$taxonomy = 'categories';	
					$tax_terms = get_terms($taxonomy);
					?>
					<div class="breadcrumb">
						<a href="#" title="all" class="active categories all" id="catbutton"><?php _e('all','cwp'); ?></a>
						<?php		
						foreach ($tax_terms as $tax_term) {	
							echo ' / <a href="#" title="'.$tax_term->name.'" id="catbutton" class="'.$tax_term->term_id.' categories">' . $tax_term->name.'</a>';
						}
						?>	
					</div><!-- .breadcrumb -->
					<div class="items-work" id="mycontent">	
					</div>    
				
				</div><!-- .container -->
			</section><!-- .work -->					
			<input type="hidden" id="test" value="<?php echo get_template_directory_uri(); ?>" />	
<?php 	
	/*
	* Do not Display categories
	*/
	else:
		
?>
		<span id="ascuns"><?php _e('Hide','cwp'); ?></span>
		<section class="work">
			<div class="container">					
				<div class="items-work mt50" id="mycontent">
					
				</div>    
			</div><!-- .container -->
		</section><!-- .work -->
		<input type="hidden" id="test" value="<?php echo get_template_directory_uri(); ?>" />
<?php 
	endif;
    $id = get_the_ID(); //the current id page

	get_template_part('sections');

get_footer(); ?>