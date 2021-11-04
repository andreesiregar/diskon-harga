$('.hero-slider').owlCarousel({
	loop: true,
	dots: true,
    nav: true,
    animateOut: 'fadeOut',
    autoplay: true,
    animateIn: 'fadeIn',
    navText: ["<i class='ion ion-ios-arrow-back'></i>","<i class='ion ion-ios-arrow-forward'></i>"], 
	responsive:{
        0:{
            items: 1,
            nav: false   
        },
        768:{
            items: 2   
        },
        992:{
            items: 1,
            loop: true
        }
    }
});


$('.select').niceSelect();