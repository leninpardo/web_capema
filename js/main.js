$(window).on('load',function(){
	$("#slider1").responsiveSlides({
        maxwidth: 1000,
        speed: 400
    });
    $('.menuContainer-menucito').click(function(e){
		e.preventDefault();
		$('.menuContainer-lista').slideToggle();
	});

	$('.conocenos').click(function(e){
		e.preventDefault();
		$('.padre').slideToggle();
	});

});