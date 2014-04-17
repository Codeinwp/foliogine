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
							 "name"=>"General options",
							 "options"=>array(
								/* Logo */
								array(
									"type"=>"group",
									"name"=>"Logo",
									"options"=>	array(
										array(
									
											"type"=>"image",
											"name"=>"Logo",
											"description"=>"Logo",
											"id"=>"logo_image",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Logo text",
											"description"=>"Logo text",
											"id"=>"logo_text",
											"default"=>""
										)
									)								
								),
								/* Color */
								array(
									"type"=>"group",
									"name"=>"Color",
									"options"=>	array(
										array(
											"type"=>"color",
											"name"=>"Color",
											"description"=>"Choose the site color",
											"id"=>"colorid",
											"default"=>""
										)
									)	
								),
								/* Download brochure section */
								array(
									"type"=>"group",
									"name"=>"Download brochure section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"download_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide download brochure section in the archive page.",
											"id"=>"download_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide download brochure section in the search page.",
											"id"=>"download_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>"Download brochure text left side",
											"description"=>"Enter a text to appear in the left side of the download brochure button.",
											"id"=>"download_text",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Title for the Download brochure button",
											"description"=>"Enter a title to appear on the download brochure button.",
											"id"=>"download_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Link for the Download brochure button",
											"description"=>"Enter the link of the download brochure button.",
											"id"=>"download_url",
											"default"=>""
										)
									)								
								),
								/* Slider section */
								array(
									"type"=>"group",
									"name"=>"Slider section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"slider_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide slider section in the archive page.",
											"id"=>"slider_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide slider section in the search page.",
											"id"=>"slider_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>"Slider big title",
											"description"=>"Enter a big title for the slider.",
											"id"=>"slider_bigtitle",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Slider title",
											"description"=>"Enter a title for the slider.",
											"id"=>"slider_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Slider subtitle",
											"description"=>"Enter a subtitle for the slider.",
											"id"=>"slider_subtitle",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Slide image 1",
											"description"=>"Slide image 1",
											"id"=>"slide_image1",
											"default"=> "" 
										),
										array(
									
											"type"=>"image",
											"name"=>"Slide image 2",
											"description"=>"Slide image 2",
											"id"=>"slide_image2",
											"default"=> "" 
										),
										array(
									
											"type"=>"image",
											"name"=>"Slide image 3",
											"description"=>"Slide image 3",
											"id"=>"slide_image3",
											"default"=> "" 
										)
									)
								),
								/* Featured work */
								array(
									"type"=>"group",
									"name"=>"Featured work section options (must have at least 3 products)",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"featured_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide featured work section in the archive page.",
											"id"=>"featured_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide featured work section in the search page.",
											"id"=>"featured_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										)
									)
								),
								/* Latest work */
								array(
									"type"=>"group",
									"name"=>"Latest work section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"latest_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide latest work section in the archive page.",
											"id"=>"latest_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide latest work section in the search page.",
											"id"=>"latest_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										)
									)
								),
								/* Our services */
								array(
									"type"=>"group",
									"name"=>"Our services section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"services_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide our services section in the archive page.",
											"id"=>"services_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide our services section in the search page.",
											"id"=>"services_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
									
											"type"=>"image",
											"name"=>"Image 1",
											"description"=>"",
											"id"=>"services_image1",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Title 1",
											"description"=>"Enter the first service title",
											"id"=>"services_title1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Text 1",
											"description"=>"Enter the first service text",
											"id"=>"services_text1",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Image 2",
											"description"=>"",
											"id"=>"services_image2",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Title 2",
											"description"=>"Enter the second service title",
											"id"=>"services_title2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Text 2",
											"description"=>"Enter the second service text",
											"id"=>"services_text2",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Image 3",
											"description"=>"",
											"id"=>"services_image3",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Title 3",
											"description"=>"Enter the third service title",
											"id"=>"services_title3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Text 3",
											"description"=>"Enter the third service text",
											"id"=>"services_text3",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Image 4",
											"description"=>"",
											"id"=>"services_image4",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Title 4",
											"description"=>"Enter the fourth service title",
											"id"=>"services_title4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Text 4",
											"description"=>"Enter the fourth service text",
											"id"=>"services_text4",
											"default"=>""
										)
									)
								),
								/* our team */
								array(
									"type"=>"group",
									"name"=>"Our team section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"team_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide our team section in the archive page.",
											"id"=>"team_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide our team section in the search page.",
											"id"=>"team_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
									
											"type"=>"image",
											"name"=>"Person image 1",
											"description"=>"",
											"id"=>"team_image1",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Name 1",
											"description"=>"Enter the first person's name to appear in the our team area",
											"id"=>"team_name1",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Job 1",
											"description"=>"Enter the first person's job to appear in the our team area",
											"id"=>"team_job1",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Person image 2",
											"description"=>"",
											"id"=>"team_image2",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Name 2",
											"description"=>"Enter the second person's name to appear in the our team area",
											"id"=>"team_name2",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Job 2",
											"description"=>"Enter the second person's job to appear in the our team area",
											"id"=>"team_job2",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Person image 3",
											"description"=>"",
											"id"=>"team_image3",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Name 3",
											"description"=>"Enter the third person's name to appear in the our team area",
											"id"=>"team_name3",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Job 3",
											"description"=>"Enter the third person's job to appear in the our team area",
											"id"=>"team_job3",
											"default"=>""
										),
										array(
									
											"type"=>"image",
											"name"=>"Person image 4",
											"description"=>"",
											"id"=>"team_image4",
											"default"=> "" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Name 4",
											"description"=>"Enter the fourth person's name to appear in the our team area",
											"id"=>"team_name4",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Person Job 4",
											"description"=>"Enter the fourth person's job to appear in the our team area",
											"id"=>"team_job4",
											"default"=>""
										)
										
										
									)
								),
								/* testimonials */
								array(
									"type"=>"group",
									"name"=>"Testimonials section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"testimonial_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide testimonials section in the archive page.",
											"id"=>"testimonial_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide testimonials section in the search page.",
											"id"=>"testimonial_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>"Title",
											"description"=>"Enter the title to appear in the testimonials area",
											"id"=>"testimonial_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Content",
											"description"=>"Enter the text to appear in the testimonials area",
											"id"=>"testimonial_content",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Author",
											"description"=>"Enter the author to appear in the testimonials area",
											"id"=>"testimonial_author",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Info about the author",
											"description"=>"Enter a small piece of information to appear after the author name in the testimonials area",
											"id"=>"testimonial_info",
											"default"=>""
										)
									)
								),
								/* our skills */
								array(
									"type"=>"group",
									"name"=>"Our skills section options",
									"options"=>	array(
										array(
									
											"type"=>"multiselect",
											"name"=>"Select all the pages where you want this section to appear",
											"description"=>"Hold down the control (ctrl) button to select multiple options",
											"id"=>"the_skill_select",
											"options"=> $all_pages,
											"default"=> $default_pages
										),
										array(
											"type"=>"select",
											"name"=>"Archive page",
											"description"=>"Show or hide download brochure section in the archive page.",
											"id"=>"skill_archive",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"select",
											"name"=>"Search page",
											"description"=>"Show or hide download brochure section in the search page.",
											"id"=>"skill_search",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"hide"
										),
										array(
											"type"=>"input_text",
											"name"=>"Title",
											"description"=>"Enter the title to appear in the skills area",
											"id"=>"skill_title",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"First skill text",
											"description"=>"Enter the text to appear in the first skill area",
											"id"=>"skill_text1",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>"First skill value",
											"description"=>"Enter the value for the first skill area",
											"id"=>"skill_val1",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>"Second skill text",
											"description"=>"Enter the text to appear in the second skill area",
											"id"=>"skill_text2",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>"Second skill value",
											"description"=>"Enter the value for the second skill area",
											"id"=>"skill_val2",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>"Third skill text",
											"description"=>"Enter the text to appear in the third skill area",
											"id"=>"skill_text3",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>"Third skill value",
											"description"=>"Enter the value for the third skill area",
											"id"=>"skill_val3",
											"max"=>100,
											"min"=>1, 
											"step"=>1,
											"default"=>"1"
										),
										array(
											"type"=>"input_text",
											"name"=>"Fourth skill text",
											"description"=>"Enter the text to appear in the fourth skill area",
											"id"=>"skill_text4",
											"default"=>""
										),
										array(
											"type"=>"input_number",
											"name"=>"Fourth skill value",
											"description"=>"Enter the value for the fourth skill area",
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
							 "name"=>"Blog + Search + Archive options",
							 "options"=>array(
										array(
											
											"type"=>"radio",
											"name"=>"Layout for blog page",
											"description"=>"Choose the layout for the blog page, the archive page and the search page",
											"id"=>"layout_blog",
											"options"=>array(
												"valoare1"=>"Left sidebar",
												"valoare2"=>"Right sidebar",
												"valoare3"=>"Both left and right sidebars"
											),
											"default"=>"valoare1"
										),
										array(
											"type"=>"select",
											"name"=>"Featured image",
											"description"=>"Show or hide featured image in the blog page, the archive page and the search page",
											"id"=>"featured_image",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Date",
											"description"=>"Show or hide date in the blog page, the archive page and the search page",
											"id"=>"date",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Category",
											"description"=>"Show or hide category in the blog page, the archive page and the search page",
											"id"=>"category",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Author",
											"description"=>"Show or hide author in the blog page, the archive page and the search page",
											"id"=>"author",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Tags",
											"description"=>"Show or hide tags in the blog page, the archive page and the search page",
											"id"=>"tags",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										)
							)
						),	
						array(
							 "type"=>"tab",
							 "name"=>"Single post options",
							 "options"=>array(
										array(
											
											"type"=>"radio",
											"name"=>"Layout for single post",
											"description"=>"Choose the layout for the single post",
											"id"=>"layout_single",
											"options"=>array(
												"valoare1"=>"Left sidebar",
												"valoare2"=>"Right sidebar",
												"valoare3"=>"Both left and right sidebars"
											),
											"default"=>"valoare1"
										),
										array(
											"type"=>"select",
											"name"=>"Featured image",
											"description"=>"Show or hide featured image in the single post",
											"id"=>"featured_image_single",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Date",
											"description"=>"Show or hide date in the single post",
											"id"=>"date_single",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Category",
											"description"=>"Show or hide category in the single post",
											"id"=>"category_single",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Author",
											"description"=>"Show or hide author in the single post",
											"id"=>"author_single",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Tags",
											"description"=>"Show or hide tags in the single post",
											"id"=>"tags_single",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Comments",
											"description"=>"Show or hide comments in the single post",
											"id"=>"comments",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										)
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>"Footer options",
							 "options"=>array(		
										array(
											"type"=>"select",
											"name"=>"Footer columns",
											"description"=>"How many columns should be displayed in your footer",
											"id"=>"footer_columns",
											"options"=>array(
												"doi"=>"Two",
												"trei"=>"Three"
											),
											"default"=>"doi"
										),
										array(
									
											"type"=>"image",
											"name"=>"Logo",
											"description"=>"",
											"id"=>"logo_footer",
											"default"=>"" 
										),
										array(
											"type"=>"input_text",
											"name"=>"Logo footer text",
											"description"=>"",
											"id"=>"logo_footer_text",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Twitter Link",
											"description"=>"Enter your twitter account link. If you leave this blank the twitter link in the footer wont be displayed",
											"id"=>"twitter",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"RSS link",
											"description"=>"Enter your RSS link. If you leave this blank the RSS link in the footer wont be displayed",
											"id"=>"rss",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Linkedin Link",
											"description"=>"Enter your Linkedin link. If you leave this blank the linkedin link in the footer wont be displayed",
											"id"=>"linkedin",
											"default"=>""
										),
										array(
											"type"=>"input_text",
											"name"=>"Copyright",
											"description"=>"Enter your copyright. If you leave this blank the copyright in the footer wont be displayed",
											"id"=>"copyright",
											"default"=>""
										),
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>"Contact options",
							 "options"=>array(	
								array(
									"type"=>"input_text",
									"name"=>"Address for google map",
									"description"=>"Enter your address for the google map to appear contact page.If you leave this blank the google map wont be displayed",
									"id"=>"address_map",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>"Email address",
									"description"=>"Enter your email address to appear in footer and contact page.If you leave this blank the email address and the contact form wont be displayed",
									"id"=>"email",
									"default"=>"test@yahoo.com"
								),
								array(
									"type"=>"input_text",
									"name"=>"Phone number",
									"description"=>"Enter your phone number to appear in footer and contact page.If you leave this blank the phone number wont be displayed",
									"id"=>"phone",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>"Address",
									"description"=>"Enter your address to appear in footer and contact page.If you leave this blank the address wont be displayed",
									"id"=>"address",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>"Subtitle",
									"description"=>"Enter a subtitle to appear in contact page.If you leave this blank,WE ARE HERE FOR YOU will be displayed",
									"id"=>"contact_title",
									"default"=>""
								),
								array(
									"type"=>"input_text",
									"name"=>"Contact form title",
									"description"=>"Enter a title for the form to appear in contact page.",
									"id"=>"contact_form",
									"default"=>""
								)
							)
						),
						array(
							 "type"=>"tab",
							 "name"=>"Portofolio options",
							 "options"=>array(
										array(
											"type"=>"select",
											"name"=>"Portofolio categories",
											"description"=>"Show or hide categories in the portofolio",
											"id"=>"portofolio_categories",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Featured image in portofolio single page",
											"description"=>"Show or hide featured image in the portofolio single page",
											"id"=>"featured_image_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Related items in portofolio single page",
											"description"=>"Show or hide related items in the portofolio single page",
											"id"=>"related_items_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Category name in portofolio single page",
											"description"=>"Show or hide category name in the portofolio single page",
											"id"=>"category_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Client name in portofolio single page",
											"description"=>"Show or hide client name in the portofolio single page",
											"id"=>"client_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Purpose in portofolio single page",
											"description"=>"Show or hide purpose in the portofolio single page",
											"id"=>"purpose_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Author name in portofolio single page",
											"description"=>"Show or hide author name in the portofolio single page",
											"id"=>"author_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										),
										array(
											"type"=>"select",
											"name"=>"Tags in portofolio single page",
											"description"=>"Show or hide tags in the portofolio single page",
											"id"=>"tags_portofolio",
											"options"=>array(
												"hide"=>"Hide",
												"show"=>"Show"
											),
											"default"=>"show"
										)
							 )
						)
			
					); 
			 
		}	 
	
	} 
