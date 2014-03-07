
jQuery("document").ready(function() {
 
	
 

    var _custom_media = true,

      _orig_send_attachment = wp.media.editor.send.attachment;



  jQuery('.selector-image').click(function(e) {

    var send_attachment_bkp = wp.media.editor.send.attachment;

    var button =   jQuery(this);

    var id = button.attr('id').replace('_button', '');

    _custom_media = true;

	 wp.media.frames.file_frame = wp.media({
            title: "Select Image",
            button: {
                text: 'Select Image'
            },
            multiple: false
        }); 
    wp.media.editor.send.attachment = function(props, attachment){

      if ( _custom_media ) {

          jQuery("#"+id).val(attachment.url); 
		  jQuery("#"+id+"_image").attr("src",attachment.url).show().parent().css({"background":"",
		  "width":"auto",
			"height":"auto"});

      } else {

        return _orig_send_attachment.apply( this, [props, attachment] );

      };

    }
	
    wp.media.editor.open(button);
	setInterval(function(){
		jQuery('a.media-button-insert').text('Use this Image');
	},100)
    return false;

  });
	
   jQuery(".subo-color-picker").wpColorPicker({  change: function(event, ui){
		var color = ui.color.toCSS();
		var id = jQuery(this).attr('id').replace('_color_selector', '');
	 
		jQuery("#"+id+"_image").hide().parent().css({
			"width":"50px",
			"height":"50px",
			"background":color
		}) 
		jQuery("#"+id).val(color);
   }});
      
  jQuery('.add_media').on('click', function(){

    _custom_media = false;

  });
  jQuery(".tab-section:first").show();
  jQuery("#subo_nav li a").live("click",function(){
	var show = jQuery(this).attr("href");  
	jQuery(".tab-section:visible").fadeOut(200,function(){
		jQuery( show).fadeIn(300);
 
	})
	return false;
  })
  jQuery(".group-in-tab .group-name").live("click",function(){ 
	jQuery(".active-tab").slideUp(200);;
	var cnt = jQuery(this).parent().find(".group-content");
	cnt.addClass("active-tab");
	
  if(cnt.is(":hidden"))
		cnt.slideDown(1000);
	else
		cnt.slideUp(200);
	return false;
  })
  jQuery(".subo_save").live("click",function(){
				var b =  jQuery("#subo_form").serialize();
				jQuery(".subo_save").addClass("button-primary-disabled");
				jQuery(".spinner").show();
                jQuery.post( 'options.php', b ).error( 
                    function() {
						jQuery(".spinner").hide();
						jQuery(".subo_save").removeClass("button-primary-disabled");
                    }).success( function() { 
						jQuery(".spinner").hide();
						jQuery(".subo_save").removeClass("button-primary-disabled"); 
                    });
					
  })
  var options_json = jQuery.parseJSON(options_saved);
  jQuery.each(options_json, function(index, value) {	
				 var element  = jQuery("[name='"+options_name+"["+index+"]']");
				 
				if(element.attr("type") != 'radio'){ 
					element.val(value);
				}
  });
  
  jQuery('#sites input:radio').addClass('input_hidden');
	jQuery('#sites label').click(function() {
		jQuery(this).addClass('selected').siblings().removeClass('selected');
	});
 jQuery('#sites2 input:radio').addClass('input_hidden');
	jQuery('#sites2 label').click(function() {
		jQuery(this).addClass('selected').siblings().removeClass('selected');
	});	
  
});