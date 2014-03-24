<?php
    global $optionsdb;
    /*
	* Slider section
	*/
    $slider = 0; //don't display this section
	$slider_select = cwp('slider_select');
	if(isset($slider_select) && !empty($slider_select)):
		foreach($slider_select as $p):
			if($id == $p):
				$slider = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($slider == 1):
        get_template_part('/inc/slider');
	endif;

	/*
	* Featured work section
	*/
    $featured = 0; //don't display this section
	$featured_select = cwp('featured_select');
	if(isset($featured_select) && !empty($featured_select)):
		foreach($featured_select as $p):
			if($id == $p):
				$featured = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($featured == 1):
        $count_posts = wp_count_posts('product');
		$nr_portofolio = $count_posts->publish; 
		
		if($nr_portofolio >= 3) : //at least 3 posts
            get_template_part('/inc/featured-work');
		endif;
	endif;
		
	/*
	* Our services
	*/
	$services = 0; //don't display this section
	$services_select = cwp('services_select');
	if(isset($services_select) && !empty($services_select)):
		foreach($services_select as $p):
			if($id == $p):
				$services = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($services == 1):
        get_template_part('/inc/our-services');
	endif;
    /*
	* Our team section(theme options)
	*/

	$team = 0; //don't display this section
	$team_select = cwp('team_select');
	if(isset($team_select) && !empty($team_select)):
		foreach($team_select as $p):
			if($id == $p):
				$team = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($team == 1):
        get_template_part('/inc/our-team');
	endif;
	
	/*
	* Testimonial
	*/
	$testimonial = 0; //don't display this section
	
	if(isset($optionsdb['testimonial_select']) && !empty($optionsdb['testimonial_select'])):
		foreach($optionsdb['testimonial_select'] as $p):
			if($id == $p):
				$testimonial = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($testimonial == 1):
        get_template_part('/inc/testimonial-options');
	endif;

    /*
	* Testimonials section (metabox)
	*/
	$show = get_post_meta($id, 'cwp_dropdown_options'); //show or hide section
	
	$text = get_post_meta($id, 'cwp_text_option'); 
	$title = get_post_meta($id, 'cwp_title_option');
	$author = get_post_meta($id, 'cwp_author_option');
	$info = get_post_meta($id, 'cwp_info_option');
	
	if(isset($show[0]) && $show[0] == 'Show'):
    ?>
        <section class="testimonials">
            <div class="bg-texture"></div>
            <div class="container">
            
                <div class="content">
                    <?php if(isset($title[0]) && $title[0] != ''): ?>
                            <h2>
                            <?php echo htmlentities($title[0]); ?>
                            </h2>
                        <?php endif; ?>	         
                    <div class="testimonial-box">
                        <?php if(isset($text[0]) && $text[0] != ''): ?>
                            <p class="text">
                            <?php echo htmlentities($text[0]); ?>
                            </p>
                        <?php endif; ?>	
                        <p class="client-info"><a><?php if(isset($author[0]) && $author[0] != '') echo htmlentities($author[0]).' '; ?><span><?php if(isset($info[0]) && $info[0] != '') echo htmlentities($info[0]).' '; ?></span></a></p>
                    </div><!-- .testimonial-box -->
                </div><!-- .content -->
                
            </div><!-- .container -->
        </section><!-- .testimonials -->
    <?php
	endif;

    /*
    * Download brochure section
    */

    $broch= 0; //don't display this section
	$download_select = cwp('download_select');
	if(isset($download_select) && !empty($download_select)):
		foreach($download_select as $p):
			if($id == $p):
				$broch = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($broch == 1):
        get_template_part('/inc/brochure');
    endif;

	/*
	* Latest work
	*/
	$latest = 0; //don't display this section
	$latest_select = cwp('latest_select');
	if(isset($latest_select) && !empty($latest_select)):
		foreach($latest_select as $p):
			if($id == $p):
				$latest = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($latest == 1):
	   get_template_part('/inc/latest-work');	
    endif;

	/*
	* OUR SKILLS section
	*/
	$skill = 0; //don't display this section
	
	
	if(isset($optionsdb['skill_select']) && !empty($optionsdb['skill_select'])):
		foreach($optionsdb['skill_select'] as $p):
			if($id == $p):
				$skill = 1; //display the section on this page
				break;
			endif;
		endforeach;
	endif;
	if($skill == 1): 
        get_template_part('/inc/our-skills');
    endif;
?>