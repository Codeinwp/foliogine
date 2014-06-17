// ajaxLoop.js
jQuery(function ($) {

    var page = 1;

    var loading = true;

    var $window = $(window);

    var $content = $("#mycontent");

    var load_posts = function(categorie,pag){

			if(categorie != '') {				

				$.ajax({

					type       : "GET",

					data       : {action: 'cwp_loop',numPosts : 8, pageNumber: pag, catNumber: categorie},

					dataType   : "html",

					url        : ajaxurl,

					beforeSend : function(data,settings){

						$content.append('<div id="temp_load" style="text-align:center"><img src="' + $('#test').val() + '/img/ajax-loader.gif" /></div>');

						$(".load-more").remove();

					},

					success    : function(data){

						$("#temp_load").remove();

						$data = $(data);

						$content.append($data);
                        
                        

					},

					error     : function(jqXHR, textStatus, errorThrown) {

						$("#temp_load").remove();

						console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);

					}

				});

			}

			else {

				$.ajax({

                type       : "GET",

                data       : {action: 'cwp_loop',numPosts : 8, pageNumber: pag},

                dataType   : "html",

                url        : ajaxurl,

                beforeSend : function(data,settings){

                    $content.append('<div id="temp_load" style="text-align:center"><img src="' + $('#test').val() + '/img/ajax-loader.gif" /></div>');

					$(".load-more").remove();

                },

                success    : function(data){

					$("#temp_load").remove();

                    $data = $(data);

					$content.append($data);


                },

                error     : function(jqXHR, textStatus, errorThrown) {

                    $("#temp_load").remove();

                    console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);

                }

			});

			}

    }

    var iscat = jQuery('#ascuns').text();
    
	if(iscat === 'Show') {

		var cat_curr = 'all';

	}

	else {

		var cat_curr = '';

	}


	$('#catbutton').die("click").live("click",function() {

		$('.categories').each(function() {

			$(this).removeClass('active');

		});

		$(this).addClass('active');

		cat_curr = $(this).attr('class');



		var splitted = cat_curr.split(/\s+/);

		$.each(splitted, function(key, value) {

			if(value === 'all') {

				cat_curr = 'all';

				return false;

			}

		});

		

		

		var content_offset = $content.offset(); 

		$content.empty();

        loading = true;		

		page = 1;		

        load_posts(cat_curr,page);

    });

	

	

	$('.loadmore-article').die("click").live("click",function() {

		var content_offset = $content.offset(); 

        loading = true;

        page++;				

		if(cat_curr != '' && cat_curr != 'all') {			

			

			load_posts(cat_curr, page);		

		}		

		else {

			

			load_posts('',page);		

		}	

       

    });

	

	if(iscat === 'Hide') {

		

		load_posts('',page);

	}	

	else {

		if(cat_curr === 'all') {
            load_posts('',page);
		}

		else {

			load_posts(cat_curr,page);

		}	

	}	

});