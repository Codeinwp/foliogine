<?php
	class cwpConfig{
		public static $admin_page_menu_name ;
		public static  $admin_page_title 	;
		public static  $admin_page_header 	;
		public static  $admin_template_directory ;
		public static  $admin_template_directory_uri ;
		public static  $admin_uri 	;
		public static $admin_path  ;
		public static  $menu_slug 	;
		public static $structure;
		public static function init(){
		
			$all_pages = array();
			$default_pages = array();
			$pages = get_pages(); 
			foreach ( $pages as $page ):
				$all_pages[$page->ID] = $page->post_title;
				array_push($default_pages, $page->ID);
			endforeach;
		
			self::$admin_page_menu_name 	 = "Theme Options";
			self::$admin_page_title 		 = "Theme Options";
			self::$admin_page_header	 	 = "Theme Options";
			self::$admin_template_directory_uri  = get_template_directory_uri() . '/admin/layout';
			self::$admin_template_directory  = get_template_directory() . '/admin/layout';
			self::$admin_uri  		= 	get_template_directory_uri() . '/admin/'; 
			self::$admin_path 	 	= 	get_template_directory() . '/admin/';
			self::$menu_slug  		= 	"theme_options";
			self::$structure	= array(
						array(
							 "type"=>"tab",
							 "name"=>__("General options",'foliogine'),
							 "options"=>array(
								/* Logo */
								array(
									"type"=>"group",
									"name"=>__("Logo",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"image",
											"name"=>__("Logo",'foliogine'),
											"description"=>__("Logo",'foliogine'),
											"id"=>"logo_image",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Logo text",'foliogine'),
											"description"=>__("Logo text",'foliogine'),
											"id"=>"logo_text",
											"default"=>""
										)
									)								
								),
								/* Color */
								array(
									"type"=>"group",
									"name"=>__("Color",'foliogine'),
									"options"=>	array(
										array(
											"type"=>"color",
											"name"=>__("Color",'foliogine'),
											"description"=>__("Choose the site color",'foliogine'),
											"id"=>"colorid",
											"default"=>""
										)
									)	
								),
								/* Download brochure section */
								array(
									"type"=>"group",
									"name"=>__("Download brochure section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"download_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide download brochure section in the archive page.",'foliogine'),
											"id"=>"download_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide download brochure section in the search page.",'foliogine'),
											"id"=>"download_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Download brochure text left side",'foliogine'),
											"description"=>__("Enter a text to appear in the left side of the download brochure button.",'foliogine'),
											"id"=>"download_text",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title for the Download brochure button",'foliogine'),
											"description"=>__("Enter a title to appear on the download brochure button.",'foliogine'),
											"id"=>"download_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Link for the Download brochure button",'foliogine'),
											"description"=>__("Enter the link of the download brochure button.",'foliogine'),
											"id"=>"download_url",
											"default"=>""
										)
									)								
								),
								/* Slider section */
								array(
									"type"=>"group",
									"name"=>__("Slider section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"slider_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide slider section in the archive page.",'foliogine'),
											"id"=>"slider_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide slider section in the search page.",'foliogine'),
											"id"=>"slider_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Slider big title",'foliogine'),
											"description"=>__("Enter a big title for the slider.",'foliogine'),
											"id"=>"slider_bigtitle",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Slider title",'foliogine'),
											"description"=>__("Enter a title for the slider.",'foliogine'),
											"id"=>"slider_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Slider subtitle",'foliogine'),
											"description"=>__("Enter a subtitle for the slider.",'foliogine'),
											"id"=>"slider_subtitle",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>__("Slide image 1",'foliogine'),
											"description"=>__("Slide image 1",'foliogine'),
											"id"=>"slide_image1",
											"default"=> "" 
										),
										array(
									
											"type"=>"image",
											"name"=>__("Slide image 2",'foliogine'),
											"description"=>__("Slide image 2",'foliogine'),
											"id"=>"slide_image2",
											"default"=> "" 
										),
										array(
									
											"type"=>"image",
											"name"=>__("Slide image 3",'foliogine'),
											"description"=>__("Slide image 3",'foliogine'),
											"id"=>"slide_image3",
											"default"=> "" 
										)
									)
								),
								/* Featured work */
								array(
									"type"=>"group",
									"name"=>__("Featured work section options (must have at least 3 products)",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"featured_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide featured work section in the archive page.",'foliogine'),
											"id"=>"featured_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide featured work section in the search page.",'foliogine'),
											"id"=>"featured_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										)
									)
								),
								/* Latest work */
								array(
									"type"=>"group",
									"name"=>__("Latest work section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"latest_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide latest work section in the archive page.",'foliogine'),
											"id"=>"latest_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide latest work section in the search page.",'foliogine'),
											"id"=>"latest_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										)
									)
								),
								/* Our services */
								array(
									"type"=>"group",
									"name"=>__("Our services section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"services_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide our services section in the archive page.",'foliogine'),
											"id"=>"services_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide our services section in the search page.",'foliogine'),
											"id"=>"services_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"image",
											"name"=>__("Image 1",'foliogine'),
											"description"=>"",
											"id"=>"services_image1",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title 1",'foliogine'),
											"description"=>__("Enter the first service title",'foliogine'),
											"id"=>"services_title1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Text 1",'foliogine'),
											"description"=>__("Enter the first service text",'foliogine'),
											"id"=>"services_text1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Link 1",'foliogine'),
											"description"=>__("Enter the first service link",'foliogine'),
											"id"=>"services_link1",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Image 2",'foliogine'),
											"description"=>"",
											"id"=>"services_image2",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title 2",'foliogine'),
											"description"=>__("Enter the second service title",'foliogine'),
											"id"=>"services_title2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Text 2",'foliogine'),
											"description"=>__("Enter the second service text",'foliogine'),
											"id"=>"services_text2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Link 2",'foliogine'),
											"description"=>__("Enter the second service link",'foliogine'),
											"id"=>"services_link2",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Image 3",'foliogine'),
											"description"=>"",
											"id"=>"services_image3",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title 3",'foliogine'),
											"description"=>__("Enter the third service title",'foliogine'),
											"id"=>"services_title3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Text 3",'foliogine'),
											"description"=>__("Enter the third service text",'foliogine'),
											"id"=>"services_text3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Link 3",'foliogine'),
											"description"=>__("Enter the third service link",'foliogine'),
											"id"=>"services_link3",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Image 4",'foliogine'),
											"description"=>"",
											"id"=>"services_image4",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title 4",'foliogine'),
											"description"=>__("Enter the fourth service title",'foliogine'),
											"id"=>"services_title4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Text 4",'foliogine'),
											"description"=>__("Enter the fourth service text",'foliogine'),
											"id"=>"services_text4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Link 4",'foliogine'),
											"description"=>__("Enter the fourth  service link",'foliogine'),
											"id"=>"services_link4",
											"default"=>""
										)
									)
								),
								/* our team */
								array(
									"type"=>"group",
									"name"=>__("Our team section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"team_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide our team section in the archive page.",'foliogine'),
											"id"=>"team_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide our team section in the search page.",'foliogine'),
											"id"=>"team_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"image",
											"name"=>__("Person image 1",'foliogine'),
											"description"=>"",
											"id"=>"team_image1",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Name 1",'foliogine'),
											"description"=>__("Enter the first person's name to appear in the our team area",'foliogine'),
											"id"=>"team_name1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Job 1",'foliogine'),
											"description"=>__("Enter the first person's job to appear in the our team area",'foliogine'),
											"id"=>"team_job1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Link 1",'foliogine'),
											"description"=>__("Enter the first person's link",'foliogine'),
											"id"=>"team_link1",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Person image 2",'foliogine'),
											"description"=>"",
											"id"=>"team_image2",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Name 2",'foliogine'),
											"description"=>__("Enter the second person's name to appear in the our team area",'foliogine'),
											"id"=>"team_name2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Job 2",'foliogine'),
											"description"=>__("Enter the second person's job to appear in the our team area",'foliogine'),
											"id"=>"team_job2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Link 2",'foliogine'),
											"description"=>__("Enter the second person's link",'foliogine'),
											"id"=>"team_link2",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Person image 3",'foliogine'),
											"description"=>"",
											"id"=>"team_image3",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Name 3",'foliogine'),
											"description"=>__("Enter the third person's name to appear in the our team area",'foliogine'),
											"id"=>"team_name3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Job 3",'foliogine'),
											"description"=>__("Enter the third person's job to appear in the our team area",'foliogine'),
											"id"=>"team_job3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Link 3",'foliogine'),
											"description"=>__("Enter the third person's link",'foliogine'),
											"id"=>"team_link3",
											"default"=>""
										),
										array(
											"type"=>"image",
											"name"=>__("Person image 4",'foliogine'),
											"description"=>"",
											"id"=>"team_image4",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Name 4",'foliogine'),
											"description"=>__("Enter the fourth person's name to appear in the our team area",'foliogine'),
											"id"=>"team_name4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Job 4",'foliogine'),
											"description"=>__("Enter the fourth person's job to appear in the our team area",'foliogine'),
											"id"=>"team_job4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Person Link 4",'foliogine'),
											"description"=>__("Enter the fourth person's link",'foliogine'),
											"id"=>"team_link4",
											"default"=>""
										)
										
										
									)
								),
								/* testimonials */
								array(
									"type"=>"group",
									"name"=>__("Testimonials section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"testimonial_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide testimonials section in the archive page.",'foliogine'),
											"id"=>"testimonial_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide testimonials section in the search page.",'foliogine'),
											"id"=>"testimonial_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title",'foliogine'),
											"description"=>__("Enter the title to appear in the testimonials area",'foliogine'),
											"id"=>"testimonial_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Content",'foliogine'),
											"description"=>__("Enter the text to appear in the testimonials area",'foliogine'),
											"id"=>"testimonial_content",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Author",'foliogine'),
											"description"=>__("Enter the author to appear in the testimonials area",'foliogine'),
											"id"=>"testimonial_author",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Info about the author",'foliogine'),
											"description"=>__("Enter a small piece of information to appear after the author name in the testimonials area",'foliogine'),
											"id"=>"testimonial_info",
											"default"=>""
										)
									)
								),
								/* our skills */
								array(
									"type"=>"group",
									"name"=>__("Our skills section options",'foliogine'),
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>__("Select all the pages where you want this section to appear",'foliogine'),
											"description"=>__("Hold down the control (ctrl) button to select multiple options",'foliogine'),
											"id"=>"the_skill_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>__("Archive page",'foliogine'),
											"description"=>__("Show or hide download brochure section in the archive page.",'foliogine'),
											"id"=>"skill_archive",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>__("Search page",'foliogine'),
											"description"=>__("Show or hide download brochure section in the search page.",'foliogine'),
											"id"=>"skill_search",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Title",'foliogine'),
											"description"=>__("Enter the title to appear in the skills area",'foliogine'),
											"id"=>"skill_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("First skill text",'foliogine'),
											"description"=>__("Enter the text to appear in the first skill area",'foliogine'),
											"id"=>"skill_text1",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>__("First skill value",'foliogine'),
											"description"=>__("Enter the value for the first skill area",'foliogine'),
											"id"=>"skill_val1",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Second skill text",'foliogine'),
											"description"=>__("Enter the text to appear in the second skill area",'foliogine'),
											"id"=>"skill_text2",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>__("Second skill value",'foliogine'),
											"description"=>__("Enter the value for the second skill area",'foliogine'),
											"id"=>"skill_val2",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Third skill text",'foliogine'),
											"description"=>__("Enter the text to appear in the third skill area",'foliogine'),
											"id"=>"skill_text3",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>__("Third skill value",'foliogine'),
											"description"=>__("Enter the value for the third skill area",'foliogine'),
											"id"=>"skill_val3",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>__("Fourth skill text",'foliogine'),
											"description"=>__("Enter the text to appear in the fourth skill area",'foliogine'),
											"id"=>"skill_text4",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>__("Fourth skill value",'foliogine'),
											"description"=>__("Enter the value for the fourth skill area",'foliogine'),
											"id"=>"skill_val4",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
									)
								)								
							)
						),	
						array(
							 "type"=>"tab",
							 "name"=>__("Blog + Search + Archive options",'foliogine'),
							 "options"=>array(
										array(
											
											"type"=>"radio",
											"name"=>__("Layout for blog page",'foliogine'),
											"description"=>__("Choose the layout for the blog page, the archive page and the search page",'foliogine'),
											"id"=>"layout_blog",
											"options"=>array(
												"valoare1"=>__("Left sidebar",'foliogine'),
												"valoare2"=>__("Right sidebar",'foliogine'),
												"valoare3"=>__("Both left and right sidebars",'foliogine')
											),
											"default"=>"valoare1"
										),
										array(
											"type"=>"select",
											"name"=>__("Featured image",'foliogine'),
											"description"=>__("Show or hide featured image in the blog page, the archive page and the search page",'foliogine'),
											"id"=>"featured_image",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Date",'foliogine'),
											"description"=>__("Show or hide date in the blog page, the archive page and the search page",'foliogine'),
											"id"=>"date",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Category",'foliogine'),
											"description"=>__("Show or hide category in the blog page, the archive page and the search page",'foliogine'),
											"id"=>"category",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Author",'foliogine'),
											"description"=>__("Show or hide author in the blog page, the archive page and the search page",'foliogine'),
											"id"=>"author",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Tags",'foliogine'),
											"description"=>__("Show or hide tags in the blog page, the archive page and the search page",'foliogine'),
											"id"=>"tags",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										)
							)
						),	
						array(
							 "type"=>"tab",
							 "name"=>__("Single post options",'foliogine'),
							 "options"=>array(
										array(
											
											"type"=>"radio",
											"name"=>__("Layout for single post",'foliogine'),
											"description"=>__("Choose the layout for the single post",'foliogine'),
											"id"=>"layout_single",
											"options"=>array(
												"valoare1"=>__("Left sidebar",'foliogine'),
												"valoare2"=>__("Right sidebar",'foliogine'),
												"valoare3"=>__("Both left and right sidebars",'foliogine')
											),
											"default"=>"valoare1"
										),
										array(
											"type"=>"select",
											"name"=>__("Featured image",'foliogine'),
											"description"=>__("Show or hide featured image in the single post",'foliogine'),
											"id"=>"featured_image_single",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Date",'foliogine'),
											"description"=>__("Show or hide date in the single post",'foliogine'),
											"id"=>"date_single",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Category",'foliogine'),
											"description"=>__("Show or hide category in the single post",'foliogine'),
											"id"=>"category_single",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Author",'foliogine'),
											"description"=>__("Show or hide author in the single post",'foliogine'),
											"id"=>"author_single",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Tags",'foliogine'),
											"description"=>__("Show or hide tags in the single post",'foliogine'),
											"id"=>"tags_single",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Comments",'foliogine'),
											"description"=>__("Show or hide comments in the single post",'foliogine'),
											"id"=>"comments",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										)
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Footer options",'foliogine'),
							 "options"=>array(		
										array(
											"type"=>"select",
											"name"=>__("Footer columns",'foliogine'),
											"description"=>__("How many columns should be displayed in your footer",'foliogine'),
											"id"=>"footer_columns",
											"options"=>array(
												"doi"=>__("Two",'foliogine'),
												"trei"=>__("Three",'foliogine')
											),
											"default"=>"doi"
										),
										array(
									
											"type"=>"image",
											"name"=>__("Logo",'foliogine'),
											"description"=>"",
											"id"=>"logo_footer",
											"default"=>"" 
										),
										array(
											"type"=>"input_text",
											"name"=>__("Logo footer text",'foliogine'),
											"description"=>"",
											"id"=>"logo_footer_text",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Twitter Link",'foliogine'),
											"description"=>__("Enter your twitter account link. If you leave this blank the twitter link in the footer wont be displayed",'foliogine'),
											"id"=>"twitter",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("RSS link",'foliogine'),
											"description"=>__("Enter your RSS link. If you leave this blank the RSS link in the footer wont be displayed",'foliogine'),
											"id"=>"rss",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Linkedin Link",'foliogine'),
											"description"=>__("Enter your Linkedin link. If you leave this blank the linkedin link in the footer wont be displayed",'foliogine'),
											"id"=>"linkedin",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>__("Copyright",'foliogine'),
											"description"=>__("Enter your copyright. If you leave this blank the copyright in the footer wont be displayed",'foliogine'),
											"id"=>"copyright",
											"default"=>""
										),
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Contact options",'foliogine'),
							 "options"=>array(	
								array(
									"type"=>"input_text",
									"name"=>__("Address for google map",'foliogine'),
									"description"=>__("Enter your address for the google map to appear contact page.If you leave this blank the google map wont be displayed",'foliogine'),
									"id"=>"address_map",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>__("Email address",'foliogine'),
									"description"=>__("Enter your email address to appear in footer and contact page.If you leave this blank the email address and the contact form wont be displayed",'foliogine'),
									"id"=>"email",
									"default"=>"test@yahoo.com"
								),
								array(
									"type"=>"input_text",
									"name"=>__("Phone number",'foliogine'),
									"description"=>__("Enter your phone number to appear in footer and contact page.If you leave this blank the phone number wont be displayed",'foliogine'),
									"id"=>"phone",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>__("Address",'foliogine'),
									"description"=>__("Enter your address to appear in footer and contact page.If you leave this blank the address wont be displayed",'foliogine'),
									"id"=>"address",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>__("Subtitle",'foliogine'),
									"description"=>__("Enter a subtitle to appear in contact page.If you leave this blank,WE ARE HERE FOR YOU will be displayed",'foliogine'),
									"id"=>"contact_title",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>__("Contact form title",'foliogine'),
									"description"=>__("Enter a title for the form to appear in contact page.",'foliogine'),
									"id"=>"contact_form",
									"default"=>""
								)
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>__("Portofolio options",'foliogine'),
							 "options"=>array(
										array(
											"type"=>"select",
											"name"=>__("Portofolio categories",'foliogine'),
											"description"=>__("Show or hide categories in the portofolio",'foliogine'),
											"id"=>"portofolio_categories",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Featured image in portofolio single page",'foliogine'),
											"description"=>__("Show or hide featured image in the portofolio single page",'foliogine'),
											"id"=>"featured_image_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Related items in portofolio single page",'foliogine'),
											"description"=>__("Show or hide related items in the portofolio single page",'foliogine'),
											"id"=>"related_items_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Category name in portofolio single page",'foliogine'),
											"description"=>__("Show or hide category name in the portofolio single page",'foliogine'),
											"id"=>"category_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Client name in portofolio single page",'foliogine'),
											"description"=>__("Show or hide client name in the portofolio single page",'foliogine'),
											"id"=>"client_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Purpose in portofolio single page",'foliogine'),
											"description"=>__("Show or hide purpose in the portofolio single page",'foliogine'),
											"id"=>"purpose_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Author name in portofolio single page",'foliogine'),
											"description"=>__("Show or hide author name in the portofolio single page",'foliogine'),
											"id"=>"author_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>__("Tags in portofolio single page",'foliogine'),
											"description"=>__("Show or hide tags in the portofolio single page",'foliogine'),
											"id"=>"tags_portofolio",
											"options"=>array(
												"hide"=>__("Hide",'foliogine'),
												"show"=>__("Show",'foliogine')
											),
											"default"=>"show"
										)
							 )
						)
			
					); 
			 
		}	 
	
	} 
