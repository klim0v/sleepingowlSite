$(function() {


		// ------ Backgrounds ------
		$('.header').parallax({imageSrc: 'img/main_header_bg.jpg'});
		$('.online_consulting').parallax({imageSrc: 'img/consult_bg.jpg'});
		$('.how_do_we_work').parallax({imageSrc: 'img/process_bg.jpg'});
		$('.skills').parallax({imageSrc: 'img/skills_bg.jpg'});
		$('.footer').parallax({imageSrc: 'img/footer_bg.jpg'});
		// Blog page
		$('.header_blog').parallax({imageSrc: 'img/blog_page_bg_1.jpg'});


		// ------ Sub Menu --------
		$('.hov_submenu').on('click', function(){
			var menu = $(this).find('.submenu');
			if(menu.is(':hidden'))
			{
				menu.slideDown();
			}
		});
		// ----- End Sub Menu -----

		// ------ Search ----------

		$('.search').on('click', function(){
			$('.search_input').fadeIn();
		});

		$(document).mouseup(function (e) {
			var container = $(".search_input");
			var menu = $(".submenu");
			if (container.has(e.target).length === 0){
				container.fadeOut();
			}
			if (menu.has(e.target).length === 0){
				menu.slideUp();
			}
		});


		// ------ End Search ----------


		// ------ Particles -----------

		particlesJS.load('particles-js', '/libs/particles/particles.json', function() {
			console.log('callback - particles.js config loaded');
		});

		// ------ End Particles -----------

		// ------ Menu -----------

		$('#open_menu').on('click', function(){
			$('.sm-navigation').slideDown('slow');
			$("body").css('overflow','hidden');
		});

		$('.close').on('click', function(){
			$('.sm-navigation').slideUp();
			$("body").css({'overflow-y':'auto', 'overflow-x':'hidden'});
		});


		// ------ End Menu -----------

		// ------ Carousel---------
		var owl = $('.owl-carousel');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 500,
			nav: true,
			dots: false,
			navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
			smartSpeed: 1000,

		});

		// ------ End Carousel

		// ------ Question ------

		$('.open_explain').on('click', function(e){

			e.preventDefault();
			e = $(this).find('.explain');
			if(e.is(':hidden')){
				$('.explain').slideUp();
				e.slideDown();
				e.closest('.open_explain').find('.svg-inline--fa').css({"transform":"rotate(90deg)", "color":"#E3DD3D"});
			}
			else{
				e.slideUp();
				e.closest('.open_explain').find('.svg-inline--fa').css({"transform":"rotate(0deg)", "color":"#CDCACA"});
			}


		});

		// ------ End Question ------

	});
