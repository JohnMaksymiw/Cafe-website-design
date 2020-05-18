$(document).ready(function(){
	$("#eat").mouseover(function(){
		$("#image-1").fadeIn()
		});
	});

$(document).ready(function(){
	$("#eat").mouseout(function(){
		$("#image-1").fadeOut();
	});
});

$(document).ready(function(){
	$("#visit").mouseover(function(){
		$("#image-2").fadeIn();
	});
});

$(document).ready(function(){
	$("#visit").mouseout(function(){
		$("#image-2").fadeOut();
	});
});

$(document).ready(function() {
	$(".bounce1").mouseover(function(){
   		$(".bounce1").effect( "bounce", {times:5}, 1500 );
    });
});

$(document).ready(function() {
	$(".bounce1").mouseout(function(){
   		$(".bounce1").stop();
    });
});		
$(document).ready(function() {
	$(".bounce2").mouseover(function(){
   		$(".bounce2").effect( "bounce", {times:5}, 1500 );
    });
});
	
$(document).ready(function() {
	$(".bounce2").mouseout(function(){
   		$(".bounce2").stop();
    });
});		
$(document).ready(function() {
	$(".bounce3").mouseover(function(){
   		$(".bounce3").effect( "bounce", {times:5}, 1500 );
    });
});
	
$(document).ready(function() {
	$(".bounce3").mouseout(function(){
   		$(".bounce3").stop();
    });
});		