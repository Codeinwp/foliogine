<?php
/*
  SHORTCODES
*/


/*
* Bootstrap Columns
*/
 
/* 
* [row][span1] content here[/span1][/row]	
*/
function cwp_row( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
		$code = '<div class="row-fluid clearfix">' . do_shortcode( $content ) . '</div>';
	return $code;
}
add_shortcode('row', 'cwp_row');
 
 
/* Span1 */
function cwp_span1( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span1">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span1', 'cwp_span1');
 
/* Span2 */
function cwp_span2( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span2">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span2', 'cwp_span2');
 
/* Span3 */
function cwp_span3( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span3">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span3', 'cwp_span3');
 
/* Span4 */
function cwp_span4( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span4">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span4', 'cwp_span4');
 
/* Span5 */
function cwp_span5( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span5">'.do_shortcode($content).'</div>';
		
	return $code;
}
add_shortcode('span5', 'cwp_span5');
 
/* Span6 */
function cwp_span6( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span6">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span6', 'cwp_span6');
 
/* Span7 */
function cwp_span7( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span7">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span7', 'cwp_span7');
 
/* Span8 */
function cwp_span8( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span8">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span8', 'cwp_span8');
 
/* Span9 */
function cwp_span9( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span9">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span9', 'cwp_span9');
 
/* Span10 */
function cwp_span10( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span10">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span10', 'cwp_span10');
 
/* Span11 */
function cwp_span11( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span11">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span11', 'cwp_span11');
 
/* Span12 */
function cwp_span12( $atts, $content = null ) {
	extract( shortcode_atts( array(), $atts ) );
	
		$code = '<div class="span12">' . do_shortcode( $content ) . '</div>';
		
	return $code;
}
add_shortcode('span12', 'cwp_span12');
  
/*
*	Alerts
*/

function cwp_alerts( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => '1',
	), $atts ) );
 
	switch ($style) {
	 case 1:
			$alert_style = 'error';
			break;
	 case 2:
	 		$alert_style = 'success';
			break;
 
	 case 3:
	 		$alert_style = 'info';
			break;					
	}
	
	$code =  '<div class="alert alert-' . $alert_style . '"><button class="close" data-dismiss="alert" type="button">x</button>' . do_shortcode( $content ) . '</div>';
 	
	return $code;
}
add_shortcode('alert', 'cwp_alerts');

/*
* Line
*/
function cwp_line( $atts, $content = null ) {

    $code =  '<div class="line-yellow"></div>';
 	
	return $code;
}
add_shortcode('line', 'cwp_line');
 
/*
*	Progress Bars
*/
			
function cwp_progress( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'percent' => '30',
		'style' => '1'
 
	), $atts ) );
 
	switch ($style) {
	 case 1:
			$progress_style = '';
			break;
	 case 2:
	 		$progress_style = 'success';
			break;
 
	 case 3:
	 		$progress_style = 'warning';
			break;		
						
	 case 4:
	 		$progress_style = 'danger';
			break;					
 
	}
 
	if ( $style == 1 ) { $code = '<div class="progress progress-striped active"><div class="bar" style="width: ' . $percent . '%;"></div></div>'; }
	else { $code = '<div class="progress progress-striped active"><div class="bar bar-' . $progress_style . '" style="width: ' . $percent . '%;"></div></div>'; }
		
		
	return $code;
}
add_shortcode('progress', 'cwp_progress');
 
 
/*
*	Buttons
*/
			
function cwp_buttons( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'style' => '1',
		'link' => 'url',
		'caption' => 'Button'
 
	), $atts ) );
 
	switch ($style) {
	 case 1:
			$button_style = '';
			break;
	 case 2:
	 		$button_style = 'primary';
			break;
 
	 case 3:
	 		$button_style = 'info';
			break;		
						
	 case 4:
	 		$button_style = 'success';
			break;					
 
	 case 5:
	 		$button_style = 'warning';
			break;					
 
	 case 6:
	 		$button_style = 'danger';
			break;					
 
	 case 7:
	 		$button_style = 'inverse';
			break;					
 
	 case 8:
	 		$button_style = 'link';
			break;					
 
	}
 
	if ( $style == 1 ) { $code = '<div class="btn"><a href="' . $link . '">'. $caption .'</a></div>'; }
	else { $code = '<div class="btn btn-' . $button_style . '"><a href="' . $link . '">' . $caption . '</a></div>'; }
		
		
	return $code;
}
add_shortcode('button', 'cwp_buttons');
	
/*
* Text and image
*/

function text_image($atts, $content = null) {
	extract( shortcode_atts( array(
		'title' => '',
		'image' => '',
		'alt' => '',
		'text' => ''
	), $atts ) );
	
	$code = '<div class="bottom"><h2>';
	$code .= $title.'</h2><div class="box-office"><div class="text">';
	$code .= $text.'</div><div class="img"><img src="'.$image.'" alt="'.$alt.'">';
	$code .= '</div></div></div>';
	
	return $code;
}
add_shortcode('text_and_image', 'text_image'); 
 
 
/*
* ADD SHORTCODES TO THE WP EDITOR	
*/
 
 
add_action('media_buttons','cwp_add_sc_select',11);
function cwp_add_sc_select(){
    echo '&nbsp;<select id="sc_select">';
            
            echo "<option value=''>".__('List of shortcodes','foliogine')."</option>";
    
            /* Columns */
            echo "<option value='[row]".__( 'here must be shortcodes for spans','foliogine' )."[/row]'>".__( 'Row ( Container for Spans )','foliogine' )."</option>";            
            echo "<option value='[span1]".__( 'content here','foliogine' )."[/span1]'>".__( '1 Column','foliogine' )."</option>";
            echo "<option value='[span2]".__( 'content here','foliogine' )."[/span2]'>".__( '2 Columns','foliogine' )."</option>";            
            echo "<option value='[span3]".__( 'content here','foliogine' )."[/span3]'>".__( '3 Columns','foliogine' )."</option>";                        
            echo "<option value='[span4]".__( 'content here','foliogine' )."[/span4]'>".__( '4 Columns','foliogine' )."</option>";                        
            echo "<option value='[span5]".__( 'content here','foliogine' )."[/span5]'>".__( '5 Columns','foliogine' )."</option>";                        
            echo "<option value='[span6]".__( 'content here','foliogine' )."[/span6]'>".__( '6 Columns','foliogine' )."</option>";                        
            echo "<option value='[span7]".__( 'content here','foliogine' )."[/span7]'>".__( '7 Columns','foliogine' )."</option>";                        
            echo "<option value='[span8]".__( 'content here','foliogine' )."[/span8]'>".__( '8 Columns','foliogine' )."</option>";                        
            echo "<option value='[span9]".__( 'content here','foliogine' )."[/span9]'>".__( '9 Columns','foliogine' )."</option>";                        
            echo "<option value='[span10]".__( 'content here','foliogine' )."[/span10]'>".__( '10 Columns','foliogine' )."</option>";                        
            echo "<option value='[span11]".__( 'content here','foliogine' )."[/span11]'>".__( '11 Columns','foliogine' )."</option>";
            echo "<option value='[span12]".__( 'content here','foliogine' )."[/span12]'>".__( '12 Columns','foliogine' )."</option>";
    
            /* Text and image */
            echo "<option value='[text_and_image title=\"\" image=\"\" alt=\"\" text=\"\"]'>".__( 'Image and text','foliogine' )."</option>";
        
            /* Line */
            echo "<option value='[line][/line]'>".__( 'Line','foliogine' )."</option>";	
    
            /* Alert */                        
            echo "<option value='[alert style=\"1\"]".__( 'content here','foliogine' )."[/alert]'>".__( 'Alerts','foliogine' )."</option>";		   		   		   		   		   		   
 
            /* Progress Bars */                        
            echo "<option value='[progress percent=\"30\" style=\"1\"]'>".__( 'Progress Bars','foliogine' )."</option>";		   		   		   		   		   		   
 
            /* Buttons */                        
            echo "<option value='[button style=\"1\" caption=\"Button\" link=\"button_url\"][/button]'>".__( 'Buttons','foliogine' )."</option>";	
    
            /* Tabs */
            echo "<option value='[tabs][tabs_names][tab title=\"tab1\" active=\"Enter y or n for active tab or none\" id=\"tab1_id\"][/tab][tab title=\"tab2\" active=\"Enter y or n for active tab or none\" id=\"tab2_id\"][/tab]Enter as much tabs names you want in here[/tabs_names][tabs_contents][content id=\"tab1_id\"]content1[/content][content id=\"tab2_id\"]content2[/content]Enter content for every tab entered[/tabs_contents][/tabs]'>".__( 'Tabs','foliogine' )."</option>";                                    
 
     
		              
    echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function(){
       jQuery("#sc_select").change(function() {
              send_to_editor(jQuery("#sc_select :selected").val());
                  return false;
        });
    });
    </script>';
}
 
?>