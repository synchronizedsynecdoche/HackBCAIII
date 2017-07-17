$(document).ready(function(){
    $(".nav_button span").hover(function(){
        $(this).stop().animate({
			opacity: 1,
			borderBottomWidth: "1vh"
  		}, 250);
    }, function(){
	  	$(this).animate({
		  	opacity: 0.5,
		  	borderBottomWidth: "0vh"
	  	}, 250);   
	});
});
