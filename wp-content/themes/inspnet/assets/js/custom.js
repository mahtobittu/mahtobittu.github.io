$(document).ready(function(){
	
	
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: true,
       
    });
	
	

	
	$('ul.slimmenu').slimmenu(
	{
	    resizeWidth: '767',
	    collapserTitle: 'Main Menu',
	    easingEffect:'easeInOutQuint',
	    animSpeed:'medium',
	    indentChildren: true,
	    childrenIndenter: '&raquo;'
	});
	$('ul.slimmenu ul.sub-menu li a').on('click', function(e){
		//e.preventDefault();
		var goToSection = '#'+$(this).attr('href').split('#')[1],
			headerHeight = $('.main_header').outerHeight()+50;
		console.log(goToSection, headerHeight);
		$('html, body').animate({
	        scrollTop: $(goToSection).offset().top - headerHeight
	    }, 2000);
	})
});
