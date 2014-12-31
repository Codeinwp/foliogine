<?php

include_once "../../../../wp-load.php";

header("Content-type: text/css");

$layout_blog = cwp('layout_blog');
$layout_single = cwp('layout_single');
$address_map = cwp('address_map');	

if(isset($layout_blog) && ($layout_blog == 'valoare1')) {

?>

	body.search .sidebar, body.blog .sidebar, body.archive .sidebar {

		display:none !important;

	}

	body.search section.bloglist .left, body.blog section.bloglist .left, body.archive section.bloglist .left {

		width:100% !important;

	}

<?php

}	

else if (isset($layout_blog) && ($layout_blog == 'valoare2')) {

?>

	body.search .list-post-info, body.blog .list-post-info, body.archive .list-post-info   {

		display:none !important;

	}

	body.search .list-post-content, body.blog .list-post-content, body.archive .list-post-content {

		width:100% !important;

	}

<?php	

}



if(isset($layout_single) && ($layout_single == 'valoare1')) {

?>

    body.single .sidebar {

		display:none !important;

	}

	body.single section.bloglist .left {

		width:100% !important;

	}

	

<?php

}

else if(isset($layout_single) && $layout_single == 'valoare2') {

?>

	body.single .list-post-info   {

		display:none !important;

	}

	body.single .list-post-content {

		width:100% !important;

	}

<?php

}



if(!isset($address_map) || ($address_map == '')) {

?>

	.contact .left {

		display:none !important;

	}

	.contact .right {

		width:100% !important;

	}

<?php

}


$colorid = cwp('colorid');
if(!isset($colorid) || (isset($colorid) && $colorid == "")):
	$colorid = '#eddf00';
endif;
?>

.sidebar .widget-title, .list-post-info time span, .comments .title span, .form-contact input[type="submit"].btn, .testimonial-box p.client-info a, .widget p.title, section.work .item-box p.title, .box-item h3 a, .team-wrap a p.info, .footer-box a, section.download a.button, .nav-tabs a.current, .action_button {
	color: <?php echo $colorid; ?> !important;
}
.main-navigation ul ul, .main-navigation a:hover, .ribbon .text-yellow, .featured-work .yellow, .box-service .icon, .testimonial-box, .box-service:hover, .box-office, .yellow-btn, .breadcrumb a.active, .breadcrumb a:hover, section.work .item-box .hover, .load-more p.circle, section.download, .featured-img-top .text, section.item-details .content .left blockquote, section.related-items .pagination a.current, section.related-items .pagination a:hover, .navbar .nav > .active > a, .navbar .nav > .active > a:hover, .navbar .nav > .active > a:focus, .navbar .nav li.dropdown.open > .dropdown-toggle, .navbar .nav li.dropdown.active > .dropdown-toggle, .navbar .nav li.dropdown.open.active > .dropdown-toggle, .dropdown-menu, .pagination-wrap a.current, .pagination-wrap a:hover, .price_block:hover .price, .price_block:hover .action_button, .special-content, .nav-tabs > li > a, .nav-tabs > li > a:hover, .nav-tabs > li > a:focus, .table-hover tbody tr:hover > td, .table-hover tbody tr:hover > th, div.line-yellow, address p a, address p a:hover, .bottom-line a.icons span, .search input[type="submit"], .widget a.eye-icon span, .widget a.heart-icon span {
	background-color:<?php echo $colorid; ?>;
}
footer, section.latest-work, .image-wrap, .ribbon, .team-wrap{
	border-color: <?php echo $colorid; ?>;
}	
.image-wrap .arrow-left, .ribbon .arrow-left, .team-wrap .arrow-left{
	border-right: 8px solid  <?php echo $colorid; ?>;
}
.image-wrap .arrow-right, .ribbon .arrow-right, .team-wrap .arrow-right{
	border-left: 8px solid <?php echo $colorid; ?>;
}
.arrow-small{
	border-top: 4px solid <?php echo $colorid; ?>;
}
