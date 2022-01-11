$(function(){

	/* slick slider (connect it in general template)*/
	if($(".youtube-recent").length) {
		$('.youtube-recent').slick({
			dots: false,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			autoplay: false,
			autoplaySpeed: 3000,
			fade: false,
			cssEase: 'linear',
			arrows: true,
			prevArrow: ".youtube-slider-arrow-prev",
			nextArrow: ".youtube-slider-arrow-next",
			responsive: [{
				breakpoint: 560,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 420,
				settings: {
					slidesToShow: 1,
				}
			}] 
		});
	}

		/* fancybox (connect it in general template)*/
		$(".youtube-fancybox").fancybox({
			openEffect	: 'elastic',
			closeEffect	: 'elastic',
		});

});