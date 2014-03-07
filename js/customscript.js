jQuery(document).ready(function () { 
    
   
    jQuery('ul.sub-menu').parent().addClass('dropdown');
    jQuery('li.dropdown').children('a').addClass('dropdown-toggle');
    jQuery('.dropdown-toggle').append('<b class="arrow-small"></b>');
    
    
    jQuery('#shareme').sharrre({
        share: {
            googlePlus: true,
            facebook: true,
            twitter: true,
        },
        buttons: {
            googlePlus: {size: 'small', annotation:'bubble'},
            facebook: {size: 'small', annotation:'bubble'},
            twitter: {size: 'small', annotation:'bubble'},
        },
              enableHover: false,
              enableCounter: false,
              enableTracking: true
            });
    
   if(typeof(Storage)!=="undefined") {
       if(sessionStorage.color) {
           var url = jQuery('#test2').text() + '/change-color/style-' + sessionStorage.color + '.css';
           if(jQuery("#stylesheet").length == 0) {      
               jQuery('head').append('<link rel="stylesheet" type="text/css" href="' + url + '" id="stylesheet">');
           }    
           else {
                jQuery('link[id="stylesheet"]').remove();
                jQuery('head').append('<link rel="stylesheet" type="text/css" href="' + url + '" id="stylesheet">');
            }
        }
        else {
            var url = jQuery('#test2').text() + '/change-color/style-yellow.css';
            jQuery('head').append('<link rel="stylesheet" type="text/css" href="' + url + '" id="stylesheet">'); 
        }
   }
    else {   
        console.log("Sorry, your browser does not support web storage...");
    }
   
    jQuery('.slider1').bxSlider({
        slideWidth: 920,
        minSlides: 4,
        maxSlides: 4,
        slideMargin: 10,
        pager: false,
        nextText: '',
        prevText: ''
    });
  

	jQuery(window).scroll(function() {
	   if(jQuery(window).scrollTop() + jQuery(window).height() > jQuery(document).height() - 100) {
		    jQuery(window).unbind('scroll');
		    jQuery("#donutchart1").donutchart({'size': 150 });
			jQuery("#donutchart1").donutchart("animate");
			jQuery("#donutchart2").donutchart({'size': 150 });
			jQuery("#donutchart2").donutchart("animate");
			jQuery("#donutchart3").donutchart({'size': 150 });
			jQuery("#donutchart3").donutchart("animate");
			jQuery("#donutchart4").donutchart({'size': 150 });
			jQuery("#donutchart4").donutchart("animate");
	   }
	});
			
	jQuery('.carousel').carousel({
  		interval: 2000,
		pause: "hover"
	})		
	
    var full_width = 0;
    jQuery("ul.menu:first > li").each(function( index ) {    
        if((jQuery(this).width() + full_width) > 760) {
            jQuery(this).remove();
        }
        full_width = full_width + jQuery(this).width(); 
    });
    
    jQuery(function() {
        jQuery("ul.nav-tabs li").each(function(index) {
            jQuery(this).removeClass('active');
        });
        jQuery("ul.nav-tabs li").click(function(index) {
            jQuery("ul.nav-tabs li").each(function(index) {
                jQuery(this).removeClass('active');
            });
            jQuery(this).addClass('active');    
        });
        
        // setup ul.tabs to work as tabs for each div directly under div.panes
        jQuery("ul.nav-tabs").tabs("div.tab-content > div.tab-pane");
    });
    
    jQuery(document).ready(function(){


    jQuery(".button-close").toggle(
        function(){
            jQuery(".box-change-wrap").animate({"margin-right":"-205px"});
            jQuery(".open-btn").removeClass("open-btn");
            jQuery(".button-close").addClass("close-btn");
            
            var closeBox = "closeBtn";
            },
        function(){
            jQuery(".box-change-wrap").animate({"margin-right":"0px"});
            jQuery(".close-btn").removeClass("close-btn");
            jQuery(".button-close").addClass("open-btn");
    
            var closeBox = "openBtn";
        });
    
    });
});