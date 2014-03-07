<?php
	function sb($config_name, $echo = 0){
			$return  = '';
			switch($config_name){ 
				//numele templateului folosit
				case "admin_template_name":
					$return  = "codeinwp";
				break;
					
				//numele in meniu al pagini de theme options
				case "admin_page_menu_name";
				
					$return = "Theme Options";
				
				break;
				//tiltul paginii de theme options
				case "admin_page_title";
					$return = "Theme Options";
				
				break;
				//locatia folderului templates pentru pagina de admin;
				
				case "admin_template_directory":
					$return =  get_template_directory() . '/admin/templates/'.sb("admin_template_name");
					
				break;
				case "admin_template_directory_uri":
					$return =  get_template_directory_uri() . '/admin/templates/'.sb("admin_template_name");
					
				break;
				//locatia meniului;
				
				case "menu_location":
					//Unde va fi situata in meniul de admin pagina de theme options:
					
					/*
						valori disponibile : 
							theme - in submeniul de la appeareance;
							new_menu - in meniul principal;
							
					
					*/
					
					$return = "theme";
				
				break;
				
				//paginile din submeniu daca menu_location este in meniul principal. Este nevoie sa definim functiile pentru fiecare pagin in clasa adminMenuPages pentru fiecare submeniu
				case "submenu_pages":
					$return  = array(
						array(
							"menu_slug"=>"page1",
							"menu_name"=>"Pagina 1",
							"page_title"=>"Pagina 1",
							"function"=> "page2" 
						),
						array(
							"menu_slug"=>"page2",
							"menu_name"=>"Pagina 2",
							"page_title"=>"Pagina 2",
							"function"=> "page2"
						),
						array(
							"menu_slug"=>"page3",
							"menu_name"=>"Pagina 3",
							"page_title"=>"Pagina 3",
							"function"=> "page3"
						) 
					);
					
					
				break;
				//iconul pentru linkul din meniul principal daca se foloseste new_menu pentru menu_location.
				case "menu_icon":
					$return = "";
				break;
				
				//pozitia in meniul principal daca se foloseste new_menu pentru menu_location;
				case "menu_position":
					$return =  null;
				break;
				
				//slugul pentru pagina de meniu:
				case "menu_slug":
				
					$return = "theme_options";
					
				break;
			}
	
			if($echo)
				echo $return;
			else
				return $return;
	
	} 

