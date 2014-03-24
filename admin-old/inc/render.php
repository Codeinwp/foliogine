<?php

	class suboRenderView {
		public $data = array();
		private $css = array();
		private $js = array();
		public   $tabs = array();
		
		public function __construct(){
		
		}
		public function add_css($name,$location =''){
			if($location!='')
				wp_register_style($name, $location, array(), "201306" ); 
			$this->css[] = $name;
		} 
		public function add_js($name,$location = '',$deps = array()){
			
			if($location!='')
				wp_register_script($name, $location, $deps, "201306", true ); 
			$this->js[] = $name;
			
		}
		
		public function render_view($name){
			$this->data["tabs"] = $this->tabs;
			foreach($this->data as $k=>$v){
				$$k = $v;
			}
			foreach($this->css as $file){
				 wp_enqueue_style($file);
			}
			foreach($this->js as $file){
				if($file == "media"){
					
						wp_enqueue_media(); 
				}
				 wp_enqueue_script($file) ;
			}
			require_once(sb("admin_template_directory")."/".$name.".php");
		} 
		public function add_tab($name){
			$id = strtolower(preg_replace("/[^a-zA-Z0-9]|\s/", "_",$name)); 
			$this->tabs[] = 
				array(
					"name"=>$name,
					"id" =>$id,
					"elements"=>array()
					);
					
			return count($this->tabs) - 1;
		}
		public function add_input_text($tabid,$name,$title,$value = ""){ 
			$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div> <input class="of-input " name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" type="text" value="'.$value.'"></div>';
			
			$this->tabs[$tabid]["elements"][] = array("type"=>"input_text",
				"html"=>$html
			);
			
		}
		
		public function add_radio_with_description($tabid,$name,$title,$options,$desc,$value=""){
			 
				$html = '
				<div class="controls1">
				<div class="explain">'.$title.'</div>
				<div class="description">'.$desc.'</div>';
				$html .='<div id="sites">';
					$count = 0;
					foreach($options as $k=>$v){
						$id='id-'.$count; 
						if($count == 0)
							$img = 'left.png';
						else if($count == 1)
							$img = 'right.png';
						else if($count == 2)
							$img = 'both.png';	
							
						$html.='<input id="'.$id.'" '.(empty($value) ? "" : "checked").'  name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" type="radio" value="'.$k.'"  />'.$v;
						$html.='<label for="'.$id.'"><img src="'.get_template_directory_uri().'/img/'.$img.'" alt="" /></label>';
						$count++;
						
					}
				
				$html .="</div></div>";
				 
				$this->tabs[$tabid]["elements"][] = array("type"=>"radio",
															"html"=>$html 
										);
		}
		public function add_radio_with_description2($tabid,$name,$title,$options,$desc,$value=""){
			 
				$html = '
				<div class="controls1">
				<div class="explain">'.$title.'</div>
				<div class="description">'.$desc.'</div>';
				$html .='<div id="sites2">';
					$count = 0;
					foreach($options as $k=>$v){
						$id='idd-'.$count; 
						if($count == 0)
							$img = 'left.png';
						else if($count == 1)
							$img = 'right.png';
						else if($count == 2)
							$img = 'both.png';	
							
						$html.='<input id="'.$id.'" '.(empty($value) ? "" : "checked").'  name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" type="radio" value="'.$k.'"  />'.$v;
						$html.='<label for="'.$id.'"><img src="'.get_template_directory_uri().'/img/'.$img.'" alt="" /></label>';
						$count++;
						
					}
				
				$html .="</div></div>";
				 
				$this->tabs[$tabid]["elements"][] = array("type"=>"radio",
															"html"=>$html 
										);
		}
		
		public function add_input_text_with_description($tabid,$name,$title,$desc,$value = ""){ 
			$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div>
				<div class="description">'.$desc.'</div>
				<input class="of-input " name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" type="text" value="'.$value.'"></div>';
			
			$this->tabs[$tabid]["elements"][] = array("type"=>"input_text",
				"html"=>$html
			);
			
		}
		
		
		public function add_textarea($tabid,$name,$title,$value = ""){ 
			$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div> <textarea class="of-input " name="'.sb("menu_slug").'_optionsdb'.'['.$name.']">'.$value.'</textarea>';
			
			$this->tabs[$tabid]["elements"][] = array("type"=>"textarea",
				"html"=>$html
			);
			
		}
		
		public function add_textarea_with_description($tabid,$name,$title,$desc,$value = ""){ 
			$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div>
				<div class="description">'.$desc.'</div>
				<textarea class="of-input " name="'.sb("menu_slug").'_optionsdb'.'['.$name.']">'.$value.'</textarea>';
			
			$this->tabs[$tabid]["elements"][] = array("type"=>"textarea",
				"html"=>$html
			);
			
		}
		
		public function add_input_number($tabid,$name, $title, $min = false, $max = false, $step = false, $value = ""){ 
			$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div> <input type="number" name="'.sb("menu_slug").'_optionsdb'.'['.$name.']"  
					'.($min === false ? '' : ' min = "'.$min.'" ').'
					'.($max === false ? '' : ' max = "'.$max.'" ').'
					'.($step === false ? '' : ' step = "'.$step.'" ').'
				> </div>';
			
			$this->tabs[$tabid]["elements"][] = array("type"=>"input_number",
				"html"=>$html
			);
			
		}
		
		public function add_select($tabid,$name,$title,$options,$value=""){
	 
				$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div> <select name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" > ';
					foreach($options as $k=>$v){
						
						$html.="<option value='".$k."' ".($value == $k ? 'selected' : '').">".$v."</option>";
					}
				
				$html .='</select></div>';
				$this->tabs[$tabid]["elements"][] = array("type"=>"select",
															"html"=>$html 
										);
		}
		public function add_select_pages($tabid,$name,$title,$desc,$value=""){
	 
				$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div><div class="description">'.$desc.'</div> <select multiple size="2" name="'.sb("menu_slug").'_optionsdb'.'['.$name.'][]"> ';
					 $args = array(
						'sort_order' => 'ASC',
						'sort_column' => 'post_title',
						'hierarchical' => 0,
						'exclude' => '',
						'include' => '',
						'meta_key' => '',
						'meta_value' => '',
						'authors' => '',
						'child_of' => 0,
						'parent' => -1,
						'exclude_tree' => '',
						'number' => '',
						'offset' => 0,
						'post_type' => 'page',
						'post_status' => 'publish'
					); 
					$pages = get_pages($args); 
					foreach ( $pages as $page ) {
						$option = '<option value="' . $page->ID . '">';
						$option .= $page->post_title;
						$option .= '</option>';
						$html .= $option;
					}
            
                    $args_post = array(
						'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'orderby'          => 'post_date',
                        'order'            => 'DESC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '',
                        'meta_value'       => '',
                        'post_type'        => array('post','product'),
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true
						
					); 
					$pages_post = get_posts($args_post); 
                
					foreach ( $pages_post as $page_post ) {
						$option = '<option value="' . $page_post->ID . '">';
						$option .= $page_post->post_title;
						$option .= '</option>';
						$html .= $option;
					}
					
					
				
				$html .='</select></div>';
				$this->tabs[$tabid]["elements"][] = array("type"=>"select",
															"html"=>$html 
										);
		}
		public function add_select_with_description($tabid,$name,$title,$options,$desc,$value=""){
	 
				$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div>
				<div class="description">'.$desc.'</div><select name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" > ';
					foreach($options as $k=>$v){
						
						$html.="<option value='".$k."' ".($value == $k ? 'selected' : '').">".$v."</option>";
					}
				
				$html .='</select></div>';
				$this->tabs[$tabid]["elements"][] = array("type"=>"select",
															"html"=>$html 
										);
		}
		
		public function add_image_upload($tabid,$name,$title,$value = ''){
		$html = '
				<div class="controls">
				<div class="explain">'.$title.'</div>
				<input type="hidden" id="'.$name.'" name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" value="'.$value.'"/>
				<img src="'.$value.'" id="'.$name.'_image" class="image-preview-input"/><br/>
				<a id="'.$name.'_button" class="selector-image button"  >Select Image</a>
										
									</div>';
		 
		 
				$this->tabs[$tabid]["elements"][] = array("type"=>"image",
															"html"=>$html 
										);
		}
		public function add_image_color($tabid,$name,$title,$value = '' ){
		$type = '';
		
		if(strlen($value)>7)
			$type = 'image';
		if(strlen($value) == 7)
			$type = 'color';
		$html = '
				<div class="controls image-color-control">
				<div class="explain">'.$title.'</div>
				<input type="hidden" id="'.$name.'" name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" value="'.$value.'"/>';
				if($type == 'color')
					$html .= '<div class="image-selector-wrapper" style="background:'.$value.';width:50px;height:50px;"><img src="" id="'.$name.'_image" class="image-preview-input"/></div></br>';
				
				if($type == 'image')
					$html .= '<div class="image-selector-wrapper"  ><img src="'.$value.'" id="'.$name.'_image" class="image-preview-input"/></div></br>';
				
				if($type == '')
					$html .= '<div class="image-selector-wrapper" ><img src="" id="'.$name.'_image" class="image-preview-input"/></div></br>';
				
				$html .='<a id="'.$name.'_button" class="selector-image button"  >Select Image</a><br/>
				<input type="text" name=""	class="subo-color-picker" id="'.$name.'_color_selector" value="'.$value.'"/>				<br/>	
									</div>';
		 
		 
				$this->tabs[$tabid]["elements"][] = array("type"=>"image_color",
															"html"=>$html 
										);
		}
		public function add_color($tabid,$name,$title,$value =  ''){
		 

		$html = '
				<div class="controls  ">
				<div class="explain">'.$title.'</div>
				<input type="hidden" id="'.$name.'" name="'.sb("menu_slug").'_optionsdb'.'['.$name.']" value="'.$value.'"/> </br> 
				<input type="text" name=""	class="subo-color-picker" id="'.$name.'_color_selector" value="'.$value.'" />				<br/>	
									</div>';
		 
		 
				$this->tabs[$tabid]["elements"][] = array(	"type"=>"color",
															"html"=>$html 
										);
		}
		public function add_text_format($tabid,$name,$title,$value=array() ){
			
		if(!isset($value['color']))
			$value['color'] = '';
		if(!isset($value['weight']))
			$value['weight'] = '';
		if(!isset($value['size']))
			$value['size'] = '';
		if(!isset($value['font']))
			$value['font'] = '';
			$sizes = array(
				"9px"=>"9px",
				"10px"=>"10px",
				"11px"=>"11px",
				"12px"=>"12px",
				"13px"=>"13px",
				"14px"=>"14px",
				"15px"=>"15px",
				"16px"=>"16px",
				"17px"=>"17px",
				"18px"=>"18px",
				"19px"=>"19px",
				"20px"=>"20px",
				"21px"=>"21px",
				"22px"=>"22px",
				"23px"=>"23px",
				"24px"=>"24px",
				"25px"=>"25px",
				"26px"=>"26px",
				"27px"=>"27px",
				"28px"=>"28px",
				"29px"=>"29px",
				"30px"=>"30px",
				"31px"=>"31px",
				"32px"=>"32px",
				"33px"=>"33px",
				"34px"=>"34px",
				"35px"=>"35px",
				"36px"=>"36px",
				"37px"=>"37px",
				"38px"=>"38px",
				"39px"=>"39px",
				"40px"=>"40px",
				"41px"=>"41px",
				"42px"=>"42px",
				"43px"=>"43px",
				"44px"=>"44px",
				"45px"=>"45px",
				"46px"=>"46px",
				"47px"=>"47px",
				"48px"=>"48px",
				"49px"=>"49px",
				"50px"=>"50px",
				"51px"=>"51px",
				"52px"=>"52px",
				"53px"=>"53px",
				"54px"=>"54px",
				"55px"=>"55px",
				"56px"=>"56px",
				"57px"=>"57px",
				"58px"=>"58px",
				"59px"=>"59px" 
			);
			$weights = array(
				 "normal" => "Normal",
				 "italic" => "Italic",
				 "bold" => "Bold",
				 "italic_bold"=>"Italic Bold"
			);
			$fonts = array(
					"arial" => "Arial",
					"times_new_roman" => "Times new roman",
					"verdana" => "Verdana"
			);
			$html = '<div class="controls  grouped-controls">
				<div class="explain">'.$title.'</div><div class="clear"></div>
				<div class="text-format-element">
				<p>Size : </p>	
				<select  class="select_sizes"  name="'.sb("menu_slug").'_optionsdb'.'[sizes_'.$name.']" > ';
					foreach($sizes as $k=>$v){
						
						$html.="<option value='".$k."' ".($value['size'] == $k ? 'selected' : '').">".$v."</option>";
					}
				
				$html .='</select>				
				</div>
				<div class="text-format-element">
				<p>Font : </p>	
				<select  class="select_fonts"  name="'.sb("menu_slug").'_optionsdb'.'[font_'.$name.']" > ';
					foreach($fonts as $k=>$v){
						
						$html.="<option value='".$k."' ".($value['font'] == $k ? 'selected' : '').">".$v."</option>";
					}
				
				$html .='</select>				
				</div>
				<div class="text-format-element">
				<p>Weight : </p>	
				<select class="select_weights" name="'.sb("menu_slug").'_optionsdb'.'[weights_'.$name.']" > ';
					foreach($weights as $k=>$v){
						
						$html.="<option value='".$k."' ".($value['weights'] == $k ? 'selected' : '').">".$v."</option>";
					}
				
				$html .='</select>				
				</div>
				<div class="text-format-element color-select-format">
				<p>Color : </p>	
				<input type="hidden" id="color_'.$name.'" name="'.sb("menu_slug").'_optionsdb'.'[color_'.$name.']" value="'.$value['color'].'"/>  
				<input type="text" name=""	class="subo-color-picker" id="color_'.$name.'_color_selector" value="'.$value['color'].'" />				<br/>	
									
				</div>
				</div>';
									
				$this->tabs[$tabid]["elements"][] = array(	"type"=>"text_format",
															"html"=>$html 
										);
		}
		public function add_title($tabid,$name){
				$html = '<h1 class="tab-title-area">'.$name.'</h1>';
				$this->tabs[$tabid]["elements"][] = array(
						"type"=>"title",
						"html"=>$html
				);
				 
		}
		
		public function start_group($tabid, $name){
				$html = '<div class="group-in-tab">
						<p class="group-name">'.$name.'</p>
						<div class="group-content">
				';
				$this->tabs[$tabid]["elements"][] = array(
						"type"=>"group_start",
						"html"=>$html
				);
		}
		public function end_group($tabid){
				$html = '</div></div>
				';
				$this->tabs[$tabid]["elements"][] = array(
						"type"=>"end",
						"html"=>$html
				);
		}
	}