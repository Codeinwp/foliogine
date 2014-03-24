<?php



 



add_action( 'admin_menu', 'subo_options_add_page' );

 

function subo_options_add_page() {

	$pages = new suboAdminMenuPages();

	switch(sb("menu_location")){

		case "theme":

			add_theme_page( __( sb("admin_page_title"), 'subo' ), __( sb("admin_page_menu_name"), 'subo' ), 'edit_theme_options', sb("menu_slug"), array($pages,'main_page') );

		break;

	}

	

}





add_action( 'admin_init', 'subo_theme_options_init' );

 



 



function subo_theme_options_init(){ 

	$validator = new suboOptionsValidator();

	register_setting( sb("menu_slug").'_optionsdb', sb("menu_slug").'_optionsdb',  array($validator,"main_page")  );

	if(sb("menu_location") == 'new_theme'){

		$submenus = sb("submenu_pages");

		foreach($submenus as $submenu){



				register_setting( sb("menu_slug")."_".$submenu['menu_slug'].'_optionsdb', sb("menu_slug")."_".$submenu['menu_slug'].'_optionsdb', array($validator,$submenu['function'])  );

		}

	}

}



 