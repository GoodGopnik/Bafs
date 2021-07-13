(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function () {

			$('a[href*="#"]:not([href*=http])').click(function (event) {
				event.preventDefault();
				var id = $(this).attr('href'),
					top = $(id).offset().top;
				$('body,html').animate({
					scrollTop: top
				}, 800);
			});

			$(".site-header").sticky({
				topSpacing: 0
			});
			
			if ($(window).width() > 992) {
				$("#aside1").sticky({
					topSpacing: 200,
					bottomSpacing: 700
				});
			};

			var owl1 = $(".s-main-home");
			owl1.owlCarousel({
				items: 1,
				loop: true,
				//autoWidth:true,
				margin: 0,
				nav: false,
				navText: true,
				dots: true,
				smartSpeed: 500,
				//autoplay:true,
				autoplayTimeout: 4000,

			});

			var owl2 = $(".about-slider");
			owl2.owlCarousel({
				items: 1,
				loop: true,
				//autoWidth:true,
				margin: 0,
				nav: false,
				navText: true,
				dots: true,
				smartSpeed: 500,
				//autoplay:true,
				autoplayTimeout: 4000
			});

			$('.open-popup').magnificPopup({
				type: 'inline',
				midClick: true
			});

			var teamAll = $(".team-one").length;
			$('body').on('click', '.team-popup-next', function () {
				var curr = $(this).closest('.team-popup').attr('data-index');
				if (teamAll == curr) {
					curr = 1;
				} else {
					curr++;
				}
				$.magnificPopup.open({
					items: {
						src: '#t-' + curr
					},
					type: 'inline'
				});
			});

			var teamN = 1;
			$(".team-one").each(function () {
				var imgURL = $(this).find('.t-img').attr('src');
				var name = $(this).find('.name').html();
				var position = $(this).find('.position').html();
				if (1 == teamN) {
					$(this).parent().find('.team-one:last').find('.team-popup-next .p-img').attr('src', imgURL);
					$(this).parent().find('.team-one:last').find('.team-popup-next .p-name').html(name);
					$(this).parent().find('.team-one:last').find('.team-popup-next .p-position').html(position);
				} else {
					$(this).prev().find('.team-popup-next .p-img').attr('src', imgURL);
					$(this).prev().find('.team-popup-next .p-name').html(name);
					$(this).prev().find('.team-popup-next .p-position').html(position);
				}
				teamN++;
			});

			$(function () {
				$('#forminator-module-168 button.forminator-button-submit').prepend('<i class="fal fa-long-arrow-right"></i>');
			});

			$('.contact-floating .la-times').click(function () {
				$('.contact-floating').css('transform', 'translateX(150%)');
			});

			$(".tab").click(function () {
				$(this).parent().find(".tab").removeClass("active").eq($(this).index()).addClass("active");
				$(this).parent().next().children().hide().eq($(this).index()).fadeIn();
				$(this).closest('.col').next().find('.tab_item').hide().eq($(this).index()).fadeIn();
			}).eq(0).addClass("active");
			$(".tab_item").css('display', 'none');
			$(".tab_item:first-child").css('display', 'block');
			$(".tabs").each(function () {
				$(this).find('.tab:first').addClass("active");
			});

			$(".menu-toggle").click(function () {
				$(this).toggleClass("active");
				$(".ast-mobile-header-content").toggleClass("open");
				$(".contact-floating").toggleClass("active");
			});

			$(".s-dpage h3").click(function () {
				if ($(".s-dpage h3").hasClass("one")) {
					$(".s-dpage h3").not($(this)).removeClass("active");
					$(".s-dpage ol").not($(this).next()).slideUp(300)
				}
				$(".s-dpage ol").slideUp(300)
				$(this).toggleClass("active").next().slideToggle(300);
				// $(".s-dpage h3").removeClass("active ");
				$(this).addClass("one");
			});
			$(".s-dpage h3:nth-child(3)").addClass("active one");
			$(".s-dpage .container ol:nth-child(4)").css('display', 'block');


			if ($(window).width() < 1367) {
				$('#contentToggle').click(function () {
					$('#s-dpage').toggleClass('hide');
					if ($('#s-dpage').hasClass('hide')) {
						$('#contentToggle').html('Load more <i class="fal fa-angle-double-down"></i>');
					} else {
						$('#contentToggle').html('Hide <i class="fal fa-angle-double-up"></i>');
					}
					return false;
				});
			};
			if ($(window).width() < 921) {
				$('#primary-menu > li > .dropdown__subicon').click(function () {
					if (!$(this).parent().hasClass('active')) {
						$('#primary-menu .sub-menu').slideUp();
						$('#primary-menu > li').removeClass('active');
					}
					$(this).prev().slideToggle();
					$(this).parent().toggleClass('active');
				});

				// $(".s-disability .disability-slider, .s-aa .aa-slider").each(function () {
				// 	var th = $(this);
				// 	th.find('.owl-nav').wrap('<div class="nav-bot-slider"></div>');
				// 	th.find('.nav-bot-slider .owl-prev').after(th.find('.owl-dots'));
				// });
			};
			if ($(window).width() < 993) {
				$(".project-one").append("<i class='fal fa-times project-closed'></i>");
				var someLocal = $('.project-closed');
				someLocal.on('click', function () {
					$(this).parent().fadeOut();
				});
				$(".project-one.tab_item:first-child").css('display', 'none');

				$(".s-project__tabs").click(function () {
					$(this).toggleClass("open");
				});

				$("#menu-footer_menu > .menu-item-has-children").append("<i class='fal fa-angle-down dropdown__subicon'></i>");

				$('#menu-footer_menu > li > .dropdown__subicon').click(function () {
					if (!$(this).parent().hasClass('active')) {
						$('#menu-footer_menu .sub-menu').slideUp();
						$('#menu-footer_menu > li').removeClass('active');
					}
					$(this).prev().slideToggle();
					$(this).parent().toggleClass('active');
				});

				var someDiv = $('.core-one__span');
				someDiv.on('click', function () {
					$(this).next().toggleClass('open');
					$(this).next().next().slideToggle();
				});

			};

			//$('.service-one').matchHeight();

		});

		$(window).load(function () {

		});

		$(window).scroll(function () {

		});

	});



})(jQuery, this);