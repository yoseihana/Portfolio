( function ( $ ) {
	"use strict";
	
	$(function(){
		
		$(".skills ol").not(":first").hide();
		
		$(".skills a").click(function(event){
			$('.skills ol:visible').hide();
			$(this).parent().next().show();
			
			event.preventDefault();
		});
		
	});
	
}( jQuery ) );