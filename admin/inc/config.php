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
							 "name"=>"Color",
							 "options"=>array(
								array(
									
									"type"=>"color",
									"name"=>"Select the first color for the site",
									"description"=>"Select the first color for the site",
									"id"=>"select_color1",
									"default"=>"#dasd"
								),
								array(
									
									"type"=>"color",
									"name"=>"Select the second color for the site",
									"description"=>"Select the second color for the site",
									"id"=>"select_color2",
									"default"=>"#dasd"
								)
							 )
						),
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
											"description"=>"Show or hide download brochure section in the archive page.",
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
											"description"=>"Show or hide download brochure section in the search page.",
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
											"description"=>"Show or hide download brochure section in the archive page.",
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
											"description"=>"Show or hide download brochure section in the search page.",
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
											"description"=>"Show or hide download brochure section in the archive page.",
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
											"description"=>"Show or hide download brochure section in the search page.",
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
											"description"=>"Show or hide download brochure section in the archive page.",
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
											"description"=>"Show or hide download brochure section in the search page.",
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
											"description"=>"Show or hide download brochure section in the archive page.",
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
											"description"=>"Show or hide download brochure section in the search page.",
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
								/* our skills */
								array(
									"type"=>"group",
									"name"=>"Our skills section options",
									"options"=>	array(
										
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
									)
								)		
							)
						),	
						array(
							 "type"=>"tab",
							 "name"=>"Un exemplu de tab",
							 "options"=>array(
								array(
									"type"=>"input_text",
									"name"=>"Un exemplu de input text",
									"description"=>"Descriere input text",
									"id"=>"input_textid",
									"default"=>"default"
								),
								array(
									
									"type"=>"input_number",
									"name"=>"Un exemplu de input numar",
									"description"=>"Descriere input numar",
									"id"=>"input_numberid",
									"max"=>20,
									"min"=>1, 
									"step"=>1,
									"default"=>"0"
								),
								array(
									
									"type"=>"select",
									"name"=>"Un exemplu de select",
									"description"=>"Descriere select",
									"id"=>"selectid",
									"options"=>array(
										"valoare1"=>"nume1",
										"valoare2"=>"nume2",
										"valoare3"=>"nume3",
										"valoare4"=>"nume4",
									),
									"default"=>"valoare1"
								),
								array(
									
									"type"=>"multiselect",
									"name"=>"Un exemplu de multiselect",
									"description"=>"Descriere multiselect",
									"id"=>"multiselectid",
									"options"=>array(
										"valoare1"=>"nume1",
										"valoare2"=>"nume2",
										"valoare3"=>"nume3",
										"valoare4"=>"nume4",
									),
									"default"=>array("valoare1")
								),
								array(
									
									"type"=>"radio",
									"name"=>"Un exemplu de radio",
									"description"=>"Descriere radio",
									"id"=>"radioid",
									"options"=>array(
										"valoare1"=>"nume1",
										"valoare2"=>"nume2",
										"valoare3"=>"nume3",
										"valoare4"=>"nume4",
									),
									"default"=>"valoare1"
								),
								array(
									
									"type"=>"checkbox",
									"name"=>"Un exemplu de checkbox",
									"description"=>"Descriere checkbox",
									"id"=>"checkboxid",
									"options"=>array(
										"valoare1"=>"nume1",
										"valoare2"=>"nume2",
										"valoare3"=>"nume3",
										"valoare4"=>"nume4",
									),
									"default"=>array("valoare1")
								),
								array(
									"type"=>"title",
									"name"=>"Exemplu de titlu"
								)
								,
								array(
									
									"type"=>"image",
									"name"=>"Un exemplu de imagine",
									"description"=>"Descriere imagine",
									"id"=>"imageid",
									"default"=>"/img/" 
								),
								array(
									
									"type"=>"color",
									"name"=>"Un exemplu de color",
									"description"=>"Descriere color",
									"id"=>"colorid",
									"default"=>"#dasd"
								),
								array(
									
									"type"=>"textarea",
									"name"=>"Un exemplu de textarea",
									"description"=>"Descriere textarea",
									"id"=>"textareaid",
									"default"=>"ssda"
								),
								array(
									
									"type"=>"textarea_html",
									"name"=>"Un exemplu de textarea ce poate contine taguri HTML",
									"description"=>"Descriere textarea ce poate contine taguri HTML",
									"id"=>"textareaidhtml",
									"default"=>"ssda"
								),
								array(
									
									"type"=>"editor",
									"name"=>"Un exemplu de editor",
									"description"=>"Descriere editor",
									"id"=>"editorid",
									"default"=>"sda" 
								),
								array(
									
									"type"=>"group",
									"name"=>"Un exemplu grup",
									"options"=>	array(
										array(
											"type"=>"typography",
											"name"=>"Un exemplu de tipgrafie",
											"description"=>"Descriere tipgrafie",
											"id"=>"typoid",
											"default"=>array(
												"font" => "arial",
												"style" => "normal",
												"size" => "12",
												"color" => "#sadads", 
											)
										),
										array(
											"type"=>"background",
											"name"=>"Un exemplu de background",
											"description"=>"Descriere background",
											"id"=>"bgid",
											"default"=>array(
												"bgcolor"=>"background",
												"bgimage"=>"/sda/",
												"bgrepeat"=>"repedaat",
												"bgposition"=>"asda",
												"bgattachment"=>"scrasdall"
											)
										)
									
									)								
								)
							 )
						),
						array(
							"type"=>"tab",
							"name"=>"Alt tab",
							"options"=>array(
										array(
											"type"=>"background",
											"name"=>"Un exemplu de background",
											"description"=>"Descriere background",
											"id"=>"bgid2",
											"default"=>array(
												"bgcolor"=>"background",
												"bgimage"=>"/sda/",
												"bgrepeat"=>"repeat",
												"bgposition"=>"center center",
												"bgattachment"=>"scroll"
											)
										))
						)
			
					); 
			 
		}	 
	
	} 
