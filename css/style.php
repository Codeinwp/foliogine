<?php

include_once "../../../../wp-load.php";

header("Content-type: text/css");

global  $optionsdb;

	

if(isset($optionsdb['layout_blog']) && $optionsdb['layout_blog'] == '1') {

?>

	body.search .sidebar, body.blog .sidebar, body.archive .sidebar {

		display:none !important;

	}

	body.search section.bloglist .left, body.blog section.bloglist .left, body.archive section.bloglist .left {

		width:100% !important;

	}

<?php

}	

else if (isset($optionsdb['layout_blog']) && $optionsdb['layout_blog'] == '2') {

?>

	body.search .list-post-info, body.blog .list-post-info, body.archive .list-post-info   {

		display:none !important;

	}

	body.search .list-post-content, body.blog .list-post-content, body.archive .list-post-content {

		width:100% !important;

	}

<?php	

}



if(isset($optionsdb['layout_single']) && $optionsdb['layout_single'] == '1') {

?>

    body.single .sidebar {

		display:none !important;

	}

	body.single section.bloglist .left {

		width:100% !important;

	}

	

<?php

}

else if(isset($optionsdb['layout_single']) && $optionsdb['layout_single'] == '2') {

?>

	body.single .list-post-info   {

		display:none !important;

	}

	body.single .list-post-content {

		width:100% !important;

	}

<?php

}



if(!isset($optionsdb['address_map']) || $optionsdb['address_map'] == '') {

?>

	.contact .left {

		display:none !important;

	}

	.contact .right {

		width:100% !important;

	}

<?php

}



/*

if(isset($optionsdb['select_color1']) && $optionsdb['select_color1'] != '') {

	$curr_color1 = $optionsdb['select_color1'];

}

else

	$curr_color1 = '#e83838';

	

if(isset($optionsdb['select_color2']) && $optionsdb['select_color2'] != '') {

	$curr_color2 = $optionsdb['select_color2'];

}

else

	$curr_color2 = '#000000';	

?>



.main-navigation ul ul, .main-navigation a:hover, ::selection,.ribbon .text-yellow,

.featured-work .yellow,

.box-service .icon,

.testimonial-box,

.box-service:hover,

.box-office,

.yellow-btn,

.breadcrumb a.active, .breadcrumb a:hover,

section.work .item-box .hover,

.load-more p.circle,

section.download,

.featured-img-top .text,

section.item-details .content .left blockquote,

section.related-items .pagination a.current, section.related-items .pagination a:hover,

.navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus,

.navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle,

.dropdown-menu,

.pagination-wrap a.current, .pagination-wrap a:hover,

.price_block:hover .price,

.price_block:hover .action_button,

.special-content,

.nav-tabs > li > a,

.nav-tabs > li > a:hover, .nav-tabs > li > a:focus,

.table-hover tbody tr:hover > td,.table-hover tbody tr:hover > th,

div.line-yellow,

address p a, address p a:hover,

.bottom-line a.icons span,

.search input[type="submit"],

.widget a.eye-icon span,

.widget a.heart-icon span {

	background-color:<?php echo $curr_color1; ?>;

}



::-moz-selection,footer a, footer a:hover,

.box-item h3 a,

section.latest-work .text-box p.title,

.team-wrap a p.info,

section.work .item-box p.title,

.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus,.dropdown-submenu:hover > a,.dropdown-submenu:focus > a,

.navbar .btn-navbar:hover,.navbar .btn-navbar:focus,.navbar .btn-navbar:active,.navbar .btn-navbar.active,.navbar .btn-navbar.disabled,.navbar .btn-navbar[disabled],

.dropdown-menu > li > a:hover,.dropdown-menu > li > a:focus,.dropdown-submenu:hover > a,.dropdown-submenu:focus > a,

.navbar .nav > li > a:focus,.navbar .nav > li > a:hover,

section.download a.button,

.list-post-info time,

.widget p.title,

.widget a.view-all,

.widget a:hover,

.comments .title,

.list-post-content h3,

.package_name,

.action_button,

.testimonial-box p.client-info a,

button.btn, input[type="submit"].btn,

.nav-tabs > .active > a, .nav-tabs > .active > a:hover, .nav-tabs > .active > a:focus,.main-navigation ul ul a:hover

{

	color:<?php echo $curr_color1; ?>;

}	



.sidebar .widget-title, .list-post-info time span, .comments .title span, .form-contact input[type="submit"].btn, .testimonial-box p.client-info a, .widget p.title, section.work .item-box p.title, .box-item h3 a, .team-wrap a p.info, .footer-box a, section.download a.button, .nav-tabs a.current { 

	color:<?php echo $curr_color1; ?> !important;

}



footer,

section.latest-work,

.image-wrap,



.ribbon, .team-wrap {

    border-color: <?php echo $curr_color1; ?>;

}



.list-post-content .post-img img:first-child,

.arrow-menu{

	border-color: <?php echo $curr_color1; ?>;

}





.box-service:hover .icon,

.navbar-inner,

footer,

.ribbon,

.featured-work .black,

section.download a.button,

section.work .item-box .row-info,

section.work .item-box:hover .link-icon,

.list-post-info time,

.comments .title,

.list-post-content h3,

.comment-box .right .reply,

.testimonial-box p.client-info,

.form-contact button.btn, .form-contact input[type="submit"].btn,

section.item-details .content .left time, .main-navigation ul ul a:hover, .form-submit #submit, .nav-tabs a.current 

{

	background-color: <?php echo $curr_color2; ?>;

}



.main-navigation a:hover, .main-navigation ul ul a, .list-post-info a, .post-info-phone a {

	color:<?php echo $curr_color2; ?>;

}	



.featured-work .arrow-right {

	border-left:8px solid <?php echo $curr_color2; ?>

}



.image-wrap .arrow-right, .ribbon .arrow-right, .team-wrap .arrow-right {

	border-left:8px solid <?php echo $curr_color1; ?>

}



section.work .item-box .arrow-bottom,.featured-work .arrow-bottom{

	border-top:8px solid <?php echo $curr_color2; ?>

}

.arrow-small{

	border-top:4px solid <?php echo $curr_color1; ?>

}


section.work .item-box .arrow-top,.featured-work .arrow-top{

	border-bottom:8px solid <?php echo $curr_color2; ?>

}



.featured-work .arrow-left {

	border-right:8px solid <?php echo $curr_color2; ?>

}



 .image-wrap .arrow-left, .ribbon .arrow-left, .team-wrap .arrow-left{

	border-right:8px solid <?php echo $curr_color1; ?>

 }



.form-submit #submit {

    border-color:<?php echo $curr_color2; ?>

}
*/
