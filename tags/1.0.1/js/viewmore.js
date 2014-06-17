$(document).ready(function(e) {
	
	$(".view_more").click(function(){
		$('div.hide:first').show('slow');
		$('div.hide:first').removeClass('hide');
		
		if($('div.hide').length == 0) {
			$(".view_more").addClass('hide');  
		}
	});
});