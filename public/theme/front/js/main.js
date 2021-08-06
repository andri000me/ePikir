/* =====================================
Template Name: Radix
Author: Themelamp
Description: Radix is a multipurpose business & Consulting HTML5 Template. it's perfect for any business, corporate, consulting & agency websites.
Version: 1.0
=======================================*/
/*======================================
[Start Activation Code]
========================================
	* Sticky Header JS
	* Mobile Menu JS
	* Search Form JS
	* Wow JS
	* Main Slider JS
	* Service Slider JS
	* Service Single Slider JS
	* Portfolio Single Slider JS
	* About Slider JS
	* Testimonial Slider JS
	* Blog Slider JS
	* Parallax JS
	* Nice Select JS
	* Scroll JS
	* Counter JS
	* Video Popup JS
	* Faqs JS
	* Extra JS
	* Preloader JS
========================================
[End Activation Code]
========================================*/ 
(function ($) {
	"use strict";
    $(document).ready(function(){
		/*====================================
			Sticky Header JS
		======================================*/ 
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});
		
		/*====================================
			Onepage Nav JS
		======================================*/ 
		if ($.fn.onePageNav) {
			$('.onepage .mainmenu .nav').onePageNav({
				currentClass: 'active',
				scrollSpeed: 1000,
				easing: 'easeInOutQuart'
			});
		}
		
		/*==============================
			Mobile Menu JS
		================================*/ 	
		$('.menu').slicknav({
			prependTo:".mobile-menu",
		});
		/*====================================
			Search Form JS
		======================================*/ 	
		$('.search-form .icon').on( "click", function(){
			$('.search-form').toggleClass('active');
		});	
		$('.mobile-arrow').on( "click", function(){
			$('.mobile-menu').toggleClass('active');
		});	
		
		/*====================================
			Wow JS
		======================================*/		
		var window_width = $(window).width();   
			if(window_width > 767){
            new WOW().init();
		}
		
		/*====================================
			Main Slider JS
		======================================*/ 	
		$(".slider-area").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 700,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			margin:30,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			items:1,
			dots:true,
			nav:true,
			navText: ['<i class="fa fa-angle-up" aria-hidden="true"></i>', '<i class="fa fa-angle-down" aria-hidden="true"></i>'],
			responsive:{
				320: {
					dots:false,
					nav:false,
				},
				768: {
					dots:true,
					nav:true,
				},
				1170: {
					dots:true,
					nav:true,
				},
			}
		});	
		
		/*====================================
			Service Slider JS
		======================================*/ 
		$(".service-slider").slick({
			autoplay:true,
			speed: 800,
			autoplaySpeed: 3500,
			slidesToShow: 4,
			pauseOnHover: true,
			centerMode: true,
			centerPadding: '0px',
			dots: false,
			arrows:true,
			cssEase: 'ease',
			speed: 700,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>',
				responsive: [{
					breakpoint: 800,
					settings: {
						arrows:true,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows:false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows:false,
						slidesToShow: 1,
					}
				},
			]
		});
		
		/*====================================
			Service Single Slider JS
		======================================*/ 	 		
		$(".service-single-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 700,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			margin:0,
			items:1,
			dots:true,
			nav:false ,
		});				
		
		/*====================================
			Portfolio Single SLider JS
		======================================*/ 		
		$(".portfolio-single-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 700,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			margin:0,
			items:1,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
		});			
		
		/*====================================
			About SLider JS
		======================================*/ 		
		$(".about-slider").owlCarousel({
			loop:true,
			autoplay:true,
			smartSpeed: 700,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			margin:0,
			items:1,
			dots:false,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				1170: {
					nav:true,
				},
				320: {
					nav:false,
				},
			}
		});				
		
		/*====================================
			Testimonial Slider JS
		======================================*/	
		$('.testimonial-nav').slick({
			 slidesToShow: 5,
			 slidesToScroll: 1,
			 asNavFor: '.testimonial-content',
			 autoplay:true,
			 focusOnSelect: true,
			 arrows:true,
			 centerMode:true,
			 speed: 700,
			 autoplaySpeed: 3500,
			 centerPadding: '0px',
			 prevArrow: '<button class="Prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>',
			responsive: [{
					breakpoint: 800,
					settings: {
						arrows:true,
						slidesToShow: 4,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows:false,
						slidesToShow: 3,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows:false,
						slidesToShow: 3,
					}
				},
			]
		});
		$('.testimonial-content').slick({
			 slidesToShow: 1,
			 slidesToScroll: 1,
			 autoplay:true,
			 fade: true,
			 arrows:false,
			 centerMode:true,
			 speed: 700,
			 autoplaySpeed: 3500,
			 centerPadding: '0px',
			 asNavFor: '.testimonial-nav'
		});
	
		/*====================================
			Blog Slider JS
		======================================*/ 
		$(".blog-slider").slick({
			autoplay:true,
			speed: 700,
			autoplaySpeed: 3500,
			slidesToShow: 3,
			pauseOnHover: true,
			dots: false,
			arrows:true,
			cssEase: 'ease',
			speed: 500,
			arrows:true,
			draggable: true,
			prevArrow: '<button class="Prev"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></button>',
			nextArrow: '<button class="Next"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>',
				responsive: [{
					breakpoint: 800,
					settings: {
						arrows:true,
						slidesToShow: 2,
					}
				},
				{
					breakpoint: 600,
					settings: {
						arrows:false,
						slidesToShow: 1,
					}
				},
				{
					breakpoint: 350,
					settings: {
						arrows:false,
						slidesToShow: 1,
					}
				},
			]
			});	
		
		/*======================================
			Parallax JS
		======================================*/ 
		$(window).stellar({
            responsive: true,
			horizontalOffset: 0,
			verticalOffset: 0,
        });
		
		/*====================================
			Nice Select JS
		======================================*/	
		$('select').niceSelect();
		
		/*======================================
			Scroll JS
		======================================*/ 
		$('.header.onepage .slicknav_nav li a').on('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top -0 
			}, 1000, 'easeInOutQuart');
			event.preventDefault();
		});
		/*====================================
			Counter JS
		======================================*/ 
		$('.count').counterUp({
			time: 1000
		});
		
		/*====================================
			Extra JS
		======================================*/
		$('.top-arrow .btn').on('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 20 
			}, 1000, 'easeInOutQuart');
			event.preventDefault();
		});
		
    });	
		/*=====================================
			Video Popup JS
		======================================*/ 
		$('.video-popup').magnificPopup({
			type: 'iframe',
			removalDelay: 300,
			mainClass: 'mfp-fade'
		});
		/*====================================
			Faqs JS
		======================================*/ 
		$('#accordion-one .single-faq').on('click', function() {
            $("#accordion-one .single-faq").removeClass("active");
            $(this).addClass("active");
		});
		$('#accordion-two .single-faq').on('click', function() {
            $("#accordion-two .single-faq").removeClass("active");
            $(this).addClass("active");
		});
		
		/*====================================
			Preloader JS
		======================================*/
		$(window).load(function(){
				$('.preloader').fadeOut('slow', function(){
				$(this).remove();
			});
		});
})(jQuery);	