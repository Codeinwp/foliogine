<?php

	class suboAdminMenuPages { 
		public $css_path;
		public $js_path;
		public function __construct(){
			$this->css_path = sb("admin_template_directory_uri")."/css/";
			$this->js_path = sb("admin_template_directory_uri")."/js/"; 
		}
		 
		public function main_page(){
			$name = __FUNCTION__;
			
			$render = new suboRenderView();
			
			$render->add_css("main_page_css",$this->css_path."main_page.css");
			$o = get_option( sb("menu_slug").'_optionsdb' ); 
			$render->add_js("main_page_js",$this->js_path."main_page.js");
			$render->add_js("jquery" );
			$render->add_js("media" ); 
			$render->add_js('wp-color-picker' );
			$render->add_css('wp-color-picker' );
			
			/*
			* Colors
			*/
			$colors_tabid = $render->add_tab("Color");
			$render->add_color(
				$colors_tabid,
				"select_color1",
				"Select the first color for the site",
				@$o['select_color1']);
			$render->add_color(
				$colors_tabid,
				"select_color2",
				"Select the second color for the site",
				@$o['select_color2']);
			/*
			* General tab options
			*/
			$general_tabid = $render->add_tab("General options");   
			
			//Logo
			$render->start_group( $general_tabid, "	Logo &#x25BC;");
			$render->add_image_upload(
						$general_tabid,
						"logo",
						"Logo" ,
						@$o['logo']
			);  
			$render->add_input_text(
				$general_tabid,
				"logo_text",
				"Logo text");	
			$render->end_group($general_tabid);
			//END - Logo

            //Download brochure
			$render->start_group( $general_tabid, "	Download brochure section options &#x25BC;");
            $render->add_select_pages(
				$general_tabid,
				'download_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);
            
            $render->add_select_with_description(
				$general_tabid,
				"download_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide download brochure section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"download_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide download brochure section in the search page."	
				);
            
			$render->add_input_text_with_description(
				$general_tabid,
				"download_text",
				"Download brochure text left side",
				"Enter a text to appear in the left side of the download brochure button.");	
				
			$render->add_input_text_with_description(
				$general_tabid,
				"download_title",
				"Title for the Download brochure button",
				"Enter a title to appear on the download brochure button.");
				
			$render->add_input_text_with_description(
				$general_tabid,
				"download_url",
				"Link for the Download brochure button",
				"Enter the link of the download brochure button.");	
            $render->end_group($general_tabid);
            //END - Download brochure
            
			//Slider section
			$render->start_group( $general_tabid, "	Slider section options &#x25BC;");
			
			$render->add_select_pages(
				$general_tabid,
				'slider_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);
            
            $render->add_select_with_description(
				$general_tabid,
				"slider_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide slider section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"slider_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide slider section in the search page."	
				);
			
			$render->add_input_text_with_description(
				$general_tabid,
				"slider_bigtitle",
				"Slider big title",
				"Enter a big title for the slider.");	
			
			$render->add_input_text_with_description(
				$general_tabid,
				"slider_title",
				"Slider title",
				"Enter a title for the slider.");	
				
			$render->add_input_text_with_description(
				$general_tabid,
				"slider_subtitle",
				"Slider subtitle",
				"Enter a subtitle for the slider.");		
			
			$render->add_image_upload(
						$general_tabid,
						"slide_image1",
						"Slide image 1" ,
						@$o['slide_image1']
			);

			$render->add_image_upload(
						$general_tabid,
						"slide_image2",
						"Slide image 2" ,
						@$o['slide_image2']
			);  	
			
			$render->add_image_upload(
						$general_tabid,
						"slide_image3",
						"Slide image 3" ,
						@$o['slide_image3']
			);  
			$render->end_group($general_tabid);	
			//END - Slider section
			
			//Featured work
			$render->start_group( $general_tabid, "	Featured work section options (must have at least 3 products) &#x25BC;");
			$render->add_select_pages(
				$general_tabid,
				'featured_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);
            
            $render->add_select_with_description(
				$general_tabid,
				"featured_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide featured work section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"featured_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide featured work section in the search page."	
				);
			
			$render->end_group($general_tabid);	
			//END - Featured work	
			
			//Latest work
			$render->start_group( $general_tabid, "	Latest work section options &#x25BC;");
			
			$render->add_select_pages(
				$general_tabid,
				'latest_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);		
			
			$render->add_select_with_description(
				$general_tabid,
				"latest_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide latest work section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"latest_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide latest work section in the search page."	
				);	
			$render->end_group($general_tabid);	
			//END - Latest work	
			
			//Our services
			$render->start_group( $general_tabid, "	Our services section options &#x25BC;");

			$render->add_select_pages(
				$general_tabid,
				'services_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);		
            
            $render->add_select_with_description(
				$general_tabid,
				"services_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our services section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"services_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our services section in the search page."	
				);
            
			$render->add_image_upload(
						$general_tabid,
						"services_image1",
						"Image 1" ,
						@$o['services_image1']
			); 
			$render->add_input_text_with_description(
				$general_tabid,
				"services_title1",
				"Title 1",
				"Enter the first service title");
			$render->add_input_text_with_description(
				$general_tabid,
				"services_text1",
				"Text 1",
				"Enter the first service text");	
			$render->add_image_upload(
						$general_tabid,
						"services_image2",
						"Image 2" ,
						@$o['services_image2']
			);
			$render->add_input_text_with_description(
				$general_tabid,
				"services_title2",
				"Title 2",
				"Enter the second service title");	
			$render->add_input_text_with_description(
				$general_tabid,
				"services_text2",
				"Text 2",
				"Enter the second service text");		
			$render->add_image_upload(
						$general_tabid,
						"services_image3",
						"Image 3" ,
						@$o['services_image3']
			); 
			$render->add_input_text_with_description(
				$general_tabid,
				"services_title3",
				"Title 3",
				"Enter the third service title");
			$render->add_input_text_with_description(
				$general_tabid,
				"services_text3",
				"Text 3",
				"Enter the third service text");		
			$render->add_image_upload(
						$general_tabid,
						"services_image4",
						"Image 4" ,
						@$o['services_image4']
			); 
			$render->add_input_text_with_description(
				$general_tabid,
				"services_title4",
				"Title 4",
				"Enter the fourth service title");
			$render->add_input_text_with_description(
				$general_tabid,
				"services_text4",
				"Text 4",
				"Enter the fourth service text");
			$render->end_group($general_tabid);		
			//END - Our services	
			
			//Our team
			$render->start_group( $general_tabid, "	Our team section options &#x25BC;");
			
			$render->add_select_pages(
				$general_tabid,
				'team_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
			);	
            
            $render->add_select_with_description(
				$general_tabid,
				"team_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our team section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"team_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our team section in the search page."	
				);
			
			$render->add_image_upload(
						$general_tabid,
						"team_image1",
						"Person image 1" ,
						@$o['team_image1']
			); 
			$render->add_input_text_with_description(
				$general_tabid,
				"team_name1",
				"Person Name 1",
				"Enter the first person's name to appear in the our team area");
			$render->add_input_text_with_description(
				$general_tabid,
				"team_job1",
				"Person Job 1",
				"Enter the first person's job to appear in the our team area");	
			$render->add_image_upload(
						$general_tabid,
						"team_image2",
						"Person image 2" ,
						@$o['team_image2']
			); 	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_name2",
				"Person Name 2",
				"Enter the second person's name to appear in the our team area");	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_job2",
				"Person Job 2",
				"Enter the second person's job to appear in the our team area");		
			$render->add_image_upload(
						$general_tabid,
						"team_image3",
						"Person image 3" ,
						@$o['team_image3']
			); 	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_name3",
				"Person Name 3",
				"Enter the third person's name to appear in the our team area");	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_job3",
				"Person Job 3",
				"Enter the third person's job to appear in the our team area");		
			$render->add_image_upload(
						$general_tabid,
						"team_image4",
						"Person image 4" ,
						@$o['team_image4']
			); 	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_name4",
				"Person Name 4",
				"Enter the fourth person's name to appear in the our team area");	
			$render->add_input_text_with_description(
				$general_tabid,
				"team_job4",
				"Person Job 4",
				"Enter the fourth person's job to appear in the our team area");
			$render->end_group($general_tabid);
			//END - Our team	
			
			//Our skills
			$render->start_group( $general_tabid, "	Our skills section options &#x25BC;");
			
			$render->add_select_pages(
				$general_tabid,
				'skill_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
				);	
            
            $render->add_select_with_description(
				$general_tabid,
				"skill_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our skills section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"skill_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide our skills section in the search page."	
				);
			
			$render->add_input_text_with_description(
				$general_tabid,
				"skill_title",
				"Title",
				"Enter the title to appear in the skills area");
			$render->add_input_text_with_description(
				$general_tabid,
				"skill_text1",
				"First skill text",
				"Enter the text to appear in the first skill area");
			$render->add_select_with_description(
				$general_tabid,
				"skill_val1",
				"First skill value",
				range(1,100),
				"Select the value for the first skill area"	
				);	
				
			$render->add_input_text_with_description(
				$general_tabid,
				"skill_text2",
				"Second skill text",
				"Enter the text to appear in the second skill area");
			$render->add_select_with_description(
				$general_tabid,
				"skill_val2",
				"Second skill value",
				range(1,100),
				"Select the value for the second skill area"	
				);		
			$render->add_input_text_with_description(
				$general_tabid,
				"skill_text3",
				"Third skill text",
				"Enter the text to appear in the third skill area");
			$render->add_select_with_description(
				$general_tabid,
				"skill_val3",
				"Third skill value",
				range(1,100),
				"Select the value for the third skill area"	
				);		
			$render->add_input_text_with_description(
				$general_tabid,
				"skill_text4",
				"Fourth skill text",
				"Enter the text to appear in the fourth skill area");
			$render->add_select_with_description(
				$general_tabid,
				"skill_val4",
				"Fourth skill value",
				range(1,100),
				"Select the value for the fourth skill area"	
				);	
			$render->end_group($general_tabid);		
			//END - Our skills	
			
			//Testimonials
			$render->start_group( $general_tabid, "	Testimonials section options &#x25BC;");
		
			$render->add_select_pages(
				$general_tabid,
				'testimonial_select',
				"Select all the pages where you want this section to appear",
				"Hold down the control (ctrl) button to select multiple options"
				);
            $render->add_select_with_description(
				$general_tabid,
				"testimonial_archive",
				"Archive page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide testimonial section in the archive page."	
				);
				
			$render->add_select_with_description(
				$general_tabid,
				"testimonial_search",
				"Search page",
				array(
					"Hide"=>"Hide",
					"Show"=>"Show"
					),
				"Show or hide testimonial section in the search page."	
				);
			
			$render->add_input_text_with_description(
				$general_tabid,
				"testimonial_title",
				"Title",
				"Enter the title to appear in the testimonials area");
			$render->add_input_text_with_description(
				$general_tabid,
				"testimonial_content",
				"Content",
				"Enter the text to appear in the testimonials area");	
			$render->add_input_text_with_description(
				$general_tabid,
				"testimonial_author",
				"Author",
				"Enter the author to appear in the testimonials area");	
			$render->add_input_text_with_description(
				$general_tabid,
				"testimonial_info",
				"Info about the author",
				"Enter a small piece of information to appear after the author name in the testimonials area");	
			$render->end_group($general_tabid);
			//END - Testimonials	
				
			//Blog tab options	
			$blog_tabid = $render->add_tab("Blog + Search + Archive options");
			$render->add_radio_with_description(
				$blog_tabid,
				"layout_blog",
				"Layout for blog page",
				array(
					"1"=>"",
					"2"=>"",
					"3"=>""
					),
				"Choose the layout for the blog page, the archive page and the search page"	
				);	
			$render->add_select_with_description(
				$blog_tabid,
				"featured_image",
				"Featured image",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide featured image in the blog page, the archive page and the search page"	
				);
			$render->add_select_with_description(
				$blog_tabid,
				"date",
				"Date",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide date in the blog page, the archive page and the search page"	
				);	
			$render->add_select_with_description(
				$blog_tabid,
				"category",
				"Category",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide category in the blog page, the archive page and the search page"	
				);		
			
			$render->add_select_with_description(
				$blog_tabid,
				"author",
				"Author",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide author in the blog page, the archive page and the search page"	
				);	
			$render->add_select_with_description(
				$blog_tabid,
				"tags",
				"Tags",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide tags in the blog page, the archive page and the search page"	
				);	
				
			//Single post page tab options	
			$single_tabid = $render->add_tab("Single post options");
			$render->add_radio_with_description2(
				$single_tabid,
				"layout_single",
				"Layout for single post",
				array(
					"1"=>"",
					"2"=>"",
					"3"=>""
					),
				"Choose the layout for the single post"	
				);	
			$render->add_select_with_description(
				$single_tabid,
				"featured_image_single",
				"Featured image",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide featured image in the single post"	
				);
			$render->add_select_with_description(
				$single_tabid,
				"date_single",
				"Date",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide date in the single post"	
				);	
			$render->add_select_with_description(
				$single_tabid,
				"category_single",
				"Category",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide category in the single post"	
				);		
			
			$render->add_select_with_description(
				$single_tabid,
				"author_single",
				"Author",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide author in the single post"	
				);	
			$render->add_select_with_description(
				$single_tabid,
				"comments",
				"Comments",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide comments in the single post"	
				);	
			$render->add_select_with_description(
				$single_tabid,
				"tags_single",
				"Tags",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide tags in the single post"	
				);		
			
			//Footer tab options
			$footer_tabid = $render->add_tab("Footer options");
			$render->add_select_with_description(
				$footer_tabid,
				"footer_columns",
				"Footer columns",
				array(
					"2"=>"2",
					"3"=>"3"
					),
				"How many columns should be displayed in your footer"	
				);
				
			$render->add_image_upload(
						$footer_tabid,
						"logo_footer",
						"Logo" ,
						@$o['logo_footer']
			); 
			$render->add_input_text(
				$footer_tabid,
				"logo_footer_text",
				"Logo footer text");
				
			$render->add_input_text_with_description(
				$footer_tabid,
				"twitter",
				"Twitter Link",
				"Enter your twitter account link. If you leave this blank the twitter link in the footer wont be displayed");
			$render->add_input_text_with_description(
				$footer_tabid,
				"rss",
				"RSS link",
				"Enter your RSS link. If you leave this blank the RSS link in the footer wont be displayed");
			$render->add_input_text_with_description(
				$footer_tabid,
				"linkedin",
				"Linkedin Link",
				"Enter your Linkedin link. If you leave this blank the linkedin link in the footer wont be displayed");
			$render->add_input_text_with_description(
				$footer_tabid,
				"copyright",
				"Copyright",
				"Enter your copyright. If you leave this blank the copyright in the footer wont be displayed");	
			
			
			//Contact tab options
			$contact_tabid = $render->add_tab("Contact options");
			$render->add_input_text_with_description(
				$contact_tabid,
				"address_map",
				"Address for google map",
				"Enter your address for the google map to appear contact page.If you leave this blank the google map wont be displayed");
			$render->add_input_text_with_description(
				$contact_tabid,
				"email",
				"Email address",
				"Enter your email address to appear in footer and contact page.If you leave this blank the email address and the contact form wont be displayed");
			$render->add_input_text_with_description(
				$contact_tabid,
				"phone",
				"Phone number",
				"Enter your phone number to appear in footer and contact page.If you leave this blank the phone number wont be displayed");
			$render->add_input_text_with_description(
				$contact_tabid,
				"address",
				"Address",
				"Enter your address to appear in footer and contact page.If you leave this blank the address wont be displayed");
			$render->add_input_text_with_description(
				$contact_tabid,
				"contact_title",
				"Subtitle",
				"Enter a subtitle to appear in contact page.If you leave this blank,WE ARE HERE FOR YOU will be displayed");	
			$render->add_input_text_with_description(
				$contact_tabid,
				"contact_form",
				"Contact form title",
				"Enter a title for the form to appear in contact page.");		

			//Portofolio tab options
			$portofolio_tabid = $render->add_tab("Portofolio options");		
			
			$render->add_select_with_description(
				$portofolio_tabid,
				"portofolio_categories",
				"Portofolio categories",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide categories in the portofolio"	
				);
			
			$render->add_select_with_description(
				$portofolio_tabid,
				"featured_image_portofolio",
				"Featured image in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide featured image in the portofolio single page"	
				);
			$render->add_select_with_description(
				$portofolio_tabid,
				"related_items_portofolio",
				"Related items in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide related items in the portofolio single page"	
				);
			$render->add_select_with_description(
				$portofolio_tabid,
				"category_portofolio",
				"Category name in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide category name in the portofolio single page"	
				);	
			$render->add_select_with_description(
				$portofolio_tabid,
				"client_portofolio",
				"Client name in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide client name in the portofolio single page"	
				);
			$render->add_select_with_description(
				$portofolio_tabid,
				"purpose_portofolio",
				"Purpose in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide purpose in the portofolio single page"	
				);		
			$render->add_select_with_description(
				$portofolio_tabid,
				"author_portofolio",
				"Author name in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide author name in the portofolio single page"	
				);	
			$render->add_select_with_description(
				$portofolio_tabid,
				"tags_portofolio",
				"Tags in portofolio single page",
				array(
					"Show"=>"Show",
					"Hide"=>"Hide"
					),
				"Show or hide tags in the portofolio single page"	
				);	
			
			
			$render->render_view($name);

		}
		
		//adauga aici noile functii pentru submeniu daca pagina este in meniul principal
	
	}