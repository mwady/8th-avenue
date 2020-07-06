$(document).ready(function(){
	$(".fancybox").fancybox();

	$(".fancybox")
    .fancybox({
        nextEffect  : 'none',
        prevEffect  : 'none',
        padding     : 0,
        margin      : [20, 60, 20, 60] // Increase left/right margin
    });
    $(".fancyvideo").fancybox({
        type: "iframe",
        padding     : 0,
        margin      : [20, 60, 20, 60]
    })

});
