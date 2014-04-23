<?php
/**
 * Codeinwp theme functions and definitions
 *
 * @package foliogine
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

/*
 * Load Jetpack compatibility file.
 */
require( get_template_directory() . '/inc/jetpack.php' );


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function cwp_theme_setup() {
	
	require( get_template_directory() . '/admin/functions.php' );
	
	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/extras.php' );

	/**
	 * Customizer additions
	 */
	require( get_template_directory() . '/inc/customizer.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on Codeinwp theme, use a find and replace
	 * to change 'cwp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cwp', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'top_menu' => __( 'Top Menu', 'cwp' ),
	) );

}

add_action( 'after_setup_theme', 'cwp_theme_setup' );


function cwp_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'codeinwp_theme_custom_background_args', $args );

	
    add_theme_support( 'custom-background', $args );
	
}
add_action( 'after_setup_theme', 'cwp_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function cwp_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cwp' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'cwp_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function cwp_scripts() {

	wp_enqueue_style( 'cwp-style', get_stylesheet_uri() );
	
	wp_enqueue_script('jquery');
    
    wp_enqueue_script( 'sharrre', get_template_directory_uri() . '/js/jquery.sharrre-1.3.4.js', array("jquery"), '20120206', true );
	
	wp_enqueue_script( 'jqcycle', get_template_directory_uri() . '/js/jqcycle.min.js', array(), '20120206', true );

	wp_enqueue_script( 'cwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array("jquery"), '20120206', true );
    
    wp_enqueue_script( 'tabs', get_template_directory_uri() . '/js/tabs.js', array("jquery"), '20120206', true );	
	
	wp_enqueue_script( 'customscript', get_template_directory_uri() . '/js/customscript.js', array("jquery","jqcycle","sharrre"), '20120206', true );
	
	wp_enqueue_script( 'knob', get_template_directory_uri() . '/js/jquery.knob.js', array("jquery"), '20120206', true );
	
	wp_enqueue_script( 'retina', get_template_directory_uri() . '/js/retina.js', array("jquery"), '20120206', true );
	
	wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array("jquery"), '20120206', true );
	
	wp_enqueue_script( 'skills', get_template_directory_uri() . '/js/jquery.donutchart.js', array("jquery"), '20120206', true );

	wp_enqueue_script( 'ajaxLoop', get_template_directory_uri() . '/js/ajaxLoop.js', array("jquery"), '20120206', true );
    
	
	wp_register_style( 'php-style', get_template_directory_uri() . '/css/style.php');
    wp_enqueue_style( 'php-style' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'cwp-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	
	if (current_user_can( 'manage_options' )) {

        wp_register_style('cwp_admin_css', get_template_directory_uri() . '/css/admin.css', array(), '1.0', 'all');
        wp_enqueue_style('cwp_admin_css'); 

    }
}
add_action( 'wp_enqueue_scripts', 'cwp_scripts' );
add_theme_support( 'post-thumbnails' );
/**
 * Implement the Custom Header feature
 */
require( get_template_directory() . '/inc/custom-header.php' );

include("shortcodes.php");
add_filter('widget_text', 'do_shortcode');


add_image_size( 'blog-small', 444, 446, true );
add_image_size( 'blog-large', 616, 613, true );
add_image_size( 'portofolio-thumb', 252, 162, true );
add_image_size( 'portofolio-large', 912,387, true );
add_image_size( 'our-team-photo', 228, 230, true );


function cwp_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
 
		if ( 'div' == $args['style'] ) {
			$tag = 'div';
			$add_below = 'comment';
		} else {
			$tag = 'li';
			$add_below = 'div-comment';
		}
?>
        <div class="comment-box" id="li-comment-<?php comment_ID() ?>">
            <div class="left"><?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['avatar_size'] ); ?></div>
            <div class="right">
                <?php $cid = get_comment_ID(); ?>
                <p>By <span><?php comment_author($cid); ?></span> on <?php echo get_comment_date('F d, Y'); ?></p>
                <p><?php comment_text() ?></p>
                <?php if ($comment->comment_approved == '0') : ?>
                        <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.','cwp') ?></em>
                        <br />
                <?php endif; ?>
                <div class="reply">
                <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                </div>
            </div>
        </div>
<?php    
	
}

add_action( 'init', 'cwp_create_post_type' );
function cwp_create_post_type() {
  register_post_type( 'product',
		array(
			'labels' => array(
				'name' => __( 'Portofolio','cwp' ),
				'singular_name' => __( 'Portofolio','cwp' )
			),
		'public' => true,
		'has_archive' => true,
		'taxonomies' => array('post_tag'),
		'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        	'show_ui' => true,
		)
	);
	flush_rewrite_rules();	
}
add_action( 'init', 'cwp_build_taxonomies', 0 );
 
function cwp_build_taxonomies() {
    register_taxonomy( 'categories', 'product', array( 'hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true ) );
}


add_action('admin_menu', 'cwp_post_options_box');

function cwp_post_options_box() {
	add_meta_box('post_info', 'Testimonial section', 'cwp_custom_post_info', 'page', 'side', 'low');
}

//Adds the actual option box
function cwp_custom_post_info() {
	global $post;
	?>
	<fieldset id="mycustom-div">
	<div>
	<p>
	<label for="cwp_dropdown_options" >Show or hide testimonial on this page/post :</label><br />
	<select name="cwp_dropdown_options" id="cwp_dropdown_options">
	<option<?php selected( get_post_meta($post->ID, 'cwp_dropdown_options', true), 'Hide' ); ?>>Hide</option>
	<option<?php selected( get_post_meta($post->ID, 'cwp_dropdown_options', true), 'Show' ); ?>>Show</option>
	</select>
	<br />
	<br />
	<label for="cwp_title_option">Testimonial title:</label><br />
	<input type="text" name="cwp_title_option" id="cwp_title_option" value="<?php echo get_post_meta($post->ID, 'cwp_title_option', true); ?>">
	<br />
	<label for="cwp_text_option">Testimonial text:</label><br />
	<input type="text" name="cwp_text_option" id="cwp_text_option" value="<?php echo get_post_meta($post->ID, 'cwp_text_option', true); ?>">
	<br />
	<label for="cwp_author_option">Testimonial author:</label><br />
	<input type="text" name="cwp_author_option" id="cwp_author_option" value="<?php echo get_post_meta($post->ID, 'cwp_author_option', true); ?>">
	<br />
	<label for="cwp_info_option">Testimonial author details:</label><br />
	<input type="text" name="cwp_info_option" id="cwp_info_option" value="<?php echo get_post_meta($post->ID, 'cwp_info_option', true); ?>">
	</p>
	</div>
	</fieldset>
	<?php
}


/* ajax load */

add_action('wp_ajax_cwp_loop', 'cwp_loop_callback');
add_action('wp_ajax_nopriv_cwp_loop', 'cwp_loop_callback');

function cwp_loop_callback() {
	global $post;
	
	$numPosts = (isset($_GET['numPosts'])) ? $_GET['numPosts'] : 0;
	$page = (isset($_GET['pageNumber'])) ? $_GET['pageNumber'] : 0;
	$catt = (isset($_GET['catNumber'])) ? $_GET['catNumber'] : -1;
 
	query_posts(array(
       'posts_per_page' => $numPosts,
       'paged'          => $page,
	));
	$cpage = $page; 
	
	if($catt == -1 || $catt == 'all'):
		$args = array( 'post_type' => 'product', 'posts_per_page' => $numPosts, 'paged' => $cpage);
	else:
		$args = array( 'post_type' => 'product', 'posts_per_page' => $numPosts, 'paged' => $cpage, 'tax_query' => array(
			array(
				'taxonomy' => 'categories',
				'field' => 'id',
				'terms' => array($catt)
			)
		));
	endif;
	
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		//get category
		$items = get_the_terms($post->ID, 'categories');
		if(!empty($items)) {
			foreach ( $items as $item ) {
				$cat = $item->name;
				$slug = $item->slug;
				$cat_id = $item->term_id;
			}
		}			
?>
		<div class="item-box photo">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<div class="row-info">
					<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
					<p class="title"><?php the_title(); ?></p>
					<time datetime="<?php $d = get_the_date('Y-m-d'); echo $d; ?>"><?php $data = get_the_date('d F'); echo $data; ?></time>				
				</div>
				<b class="arrow-bottom"></b><b class="arrow-top"></b>
				<div class="row-img">
<?php
					$id = get_the_ID();
					if ( has_post_thumbnail($id) ) {
						echo get_the_post_thumbnail($id,'portofolio-thumb'); 
					}
?>
				</div>
				<div class="hover">
					<p class="category"><?php if(isset($cat) && $cat != ''): echo $cat; else: ''; endif; ?></p>
					<p class="title"><?php the_title(); ?></p>
					<p class="text">
						<?php echo substr(get_the_content(),0,100)."[...]"; ?>
					</p>
				</div>
			</a>
			
			<?php
				$hover_link1 = get_post_meta($id, 'hover_link1');
				$hover_link2 = get_post_meta($id, 'hover_link2');
				
				if(isset($hover_link1[0]) && $hover_link1[0] != ''):
					echo '<a href="'.$hover_link1[0].'" class="link-icon icon-search" title="Search"></a>';
				else:	
					echo '<a href="#" class="link-icon icon-search" title="Search"></a>';
				endif;
				
				if(isset($hover_link2[0]) && $hover_link2[0] != ''):
					echo '<a href="'.$hover_link2[0].'" class="link-icon icon-link" title="Search"></a>';
				else:	
					echo '<a href="#" class="link-icon icon-link" title="Link"></a>';
				endif;
			?>
		</div>
<?php
endwhile;		
	
	if($catt == -1):	 
		
		$all = wp_count_posts('product');		
		$pall = ceil($all->publish/$numPosts);	

	else:		
		
		$posts = get_posts('post_type=product&categories='.$slug.'&post_status=publish'); 		
		$all = count($posts);	
		$pall = ceil($all/$numPosts);			
		
	endif;		
	
	if($cpage<$pall){
?>
	<div class="clear"></div>
	<div class="load-more">
		<a href="javascript:void(0);" title="Load more" class="view_more loadmore-article">
			<p class="circle"></p>
			<p><?php _e('Load more items','cwp'); ?></p>
		</a>
	</div><!-- .load-more -->
<?php }   
	die(); // this is required to return a proper result
}

// function to display number of posts.
function cwp_getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}

// function to count views.
function cwp_setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}


// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'cwp_posts_column_views');
add_action('manage_posts_custom_column', 'cwp_posts_custom_column_views',5,2);
function cwp_posts_column_views($defaults){
    $defaults['post_views'] = __('Views','cwp');
    return $defaults;
}
function cwp_posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo cwp_getPostViews(get_the_ID());
    }
}





//Metabox for client
add_action('admin_menu', 'cwp_client_metabox');
 
function cwp_client_metabox() {
        add_meta_box('post_info', 'Client', 'cwp_client', 'product', 'side', 'high');
}
 
//Adds the actual option box
function cwp_client() {
	global $post;
	?>
	<fieldset id="mycustom-div">
	<div>
	<p>
	<label for="client_option">Client</label><br />
	<input type="text" name="client_option" id="client_option" value="<?php echo get_post_meta($post->ID, 'client_option', true); ?>">
	</p>
	<p>
	<label for="hover_link1">Hover link #1</label><br />
	<input type="text" name="hover_link1" id="hover_link1" value="<?php echo get_post_meta($post->ID, 'hover_link1', true); ?>">
	</p>
	<p>
	<label for="hover_link2">Hover link #2</label><br />
	<input type="text" name="hover_link2" id="hover_link2" value="<?php echo get_post_meta($post->ID, 'hover_link2', true); ?>">
	</p>
	</div>
	</fieldset>
	<?php
}

add_action('save_post', 'cwp_custom_add_save');
function cwp_custom_add_save($postID){
	// called after a post or page is saved
	if($parent_id = wp_is_post_revision($postID))
	{
		$postID = $parent_id;
	}

	if (isset($_POST['cwp_dropdown_options'])) {
		cwp_update_custom_meta($postID, $_POST['cwp_dropdown_options'], 'cwp_dropdown_options');
	}
	if (isset($_POST['cwp_text_option'])) {
		cwp_update_custom_meta($postID, $_POST['cwp_text_option'], 'cwp_text_option');
	}
	if (isset($_POST['cwp_title_option'])) {
		cwp_update_custom_meta($postID, $_POST['cwp_title_option'], 'cwp_title_option');
	}
	if (isset($_POST['cwp_author_option'])) {
		cwp_update_custom_meta($postID, $_POST['cwp_author_option'], 'cwp_author_option');
	}
	if (isset($_POST['cwp_info_option'])) {
		cwp_update_custom_meta($postID, $_POST['cwp_info_option'], 'cwp_info_option');
	}
	if (isset($_POST['client_option'])) {
		cwp_update_custom_meta($postID, $_POST['client_option'], 'client_option');
	}
	if (isset($_POST['hover_link2'])) {
		cwp_update_custom_meta($postID, $_POST['hover_link2'], 'hover_link2');
	}
	if (isset($_POST['hover_link1'])) {
		cwp_update_custom_meta($postID, $_POST['hover_link1'], 'hover_link1');
	}
}

function cwp_update_custom_meta($postID, $newvalue, $field_name) {
	// To create new meta
	if(!get_post_meta($postID, $field_name)){
		add_post_meta($postID, $field_name, $newvalue);
	}else{
		// or to update existing meta
		update_post_meta($postID, $field_name, $newvalue);
	}
}

function cwp_tabs_group( $atts, $content = null ) {  

    $output = do_shortcode($content);
	
    return $output;  
}  

add_shortcode("tabs", "cwp_tabs_group");

function cwp_tabs_names( $atts, $content = null ) {  

    $output  = '<ul class="nav nav-tabs"';

    if(!empty($id))
        $output .= 'id="'.$id.'"';

    $output .='>'.do_shortcode($content).'</ul>';
	
    return $output;  
}  
add_shortcode("tabs_names", "cwp_tabs_names");

function cwp_tab($atts, $content = null) {  
    extract(shortcode_atts(array(  
    'id' => '',
    'title' => '',
    'active'=>'n' 
    ), $atts));  
    if(empty($id))
        $id = 'tab_item_'.rand(100,999);

    $output = '<li class="'.($active == 'y' ? 'active' :'').'">
                <a href="#'.$id.'">'.$title.'</a>
               </li>'; 
				
    
    return $output;
}
add_shortcode("tab", "cwp_tab");

function cwp_tabs_contents($atts, $content = null) {
    
    $output = '<div class="tab-content">'.do_shortcode($content).'</div>';
    
    return $output;
}
add_shortcode("tabs_contents", "cwp_tabs_contents");

function cwp_content($atts, $content = null) {
    extract(shortcode_atts(array(  
    'id' => '',
    ), $atts)); 
    if(empty($id))
        $id = 'tab_item_'.rand(100,999);
    
    $output = '<div class="tab-pane" id="'.$id.'">'.$content.'</div>';
    
    return $output;
}
add_shortcode("content", "cwp_content");

function cwp_add_editor_styles() {
    add_editor_style( '/css/custom-editor-style.css' );
}
add_action( 'init', 'cwp_add_editor_styles' ); 

