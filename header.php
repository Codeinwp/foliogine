<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package foliogine
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<?php global  $optionsdb; ?>
 
<script type="text/javascript">
  var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>
<?php wp_head(); ?>
   
</head>
   
<?php 
    if(isset($optionsdb['address_map']) && $optionsdb['address_map'] != '') :?>				
        <body onLoad="initialize();showAddress('<?php echo $optionsdb['address_map']; ?>');" <?php body_class(); ?>>
<?php		
    else:
?>
        <body <?php body_class(); ?>>		
<?php 
    endif;
?>
    <header>
    
    <span id="test2" style="display:none;"><?php echo get_template_directory_uri(); ?></span> 
        <?php get_template_part('change-color/change-color'); ?>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <?php _e('Homepage','cwp'); ?> <b class="arrow-menu"></b>
          </a>
          <a class="brand" href="<?php echo get_site_url(); ?>" title="<?php bloginfo('name'); ?>">
			<?php
		  
			$logo = cwp('logo_image');
			$logo_text = cwp('logo_text');
			
			if(isset($logo) && $logo != '') :
                if(isset($logo_text) && $logo_text != ''):
                    echo '<img src="'.$logo.'" alt="'.$logo_text.'">';
                else:	
                    echo '<img src="'.$logo.'" alt="'.get_bloginfo('name').'">';
				endif;	
            else:
				echo '<img src="'.get_template_directory_uri().'/img/logo.png" alt="Foliogine">';
			endif;
			?>
          </a>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'top_menu' ) ); ?>
            </nav><!-- #site-navigation -->
          
          
        </div><!-- /.container -->
      </div><!-- /.navbar-inner -->
    </div><!-- /.navbar -->
          
    </header>