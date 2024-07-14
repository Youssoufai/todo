(function ($) {
	('use strict');

	// Spinner
	var spinner = function () {
		setTimeout(function () {
			if ($('#spinner').length > 0) {
				$('#spinner').removeClass('show');
			}
		}, 1);
	};
	spinner();

	// Initiate the wowjs
	new WOW().init();

	// Sticky Navbar
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('.sticky-top').addClass('shadow-sm').css('top', '0px');
		} else {
			$('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
		}
	});

	// updating the ime at navigation
	function updateTime() {
		const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
		const now = new Date();
		const dayName = days[now.getDay()];
		const hours = now.getHours();
		const minutes = now.getMinutes();
		const ampm = hours >= 12 ? 'PM' : 'AM';
		const formattedHours = hours % 12 || 12;
		const formattedMinutes = minutes.toString().padStart(2, '0');

		$('#day').text(`${dayName} - `);
		$('#time').text(`${formattedHours}:${formattedMinutes} ${ampm}`);
	}

	$(document).ready(function () {
		setInterval(updateTime, 1000);
		updateTime();
	});

	// updating the time at navigation end

	// Back to top button
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			$('.back-to-top').fadeIn('slow');
		} else {
			$('.back-to-top').fadeOut('slow');
		}
	});
	$('.back-to-top').click(function () {
		$('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
		return false;
	});

	// Facts counter
	$('[data-toggle="counter-up"]').counterUp({
		delay: 10,
		time: 2000,
	});

	// Header carousel
	$('.header-carousel').owlCarousel({
		autoplay: true,
		smartSpeed: 1500,
		items: 1,
		dots: true,
		loop: true,
		nav: true,
		navText: [
			'<i class="bi bi-chevron-left"></i>',
			'<i class="bi bi-chevron-right"></i>',
		],
	});

	// Testimonials carousel
	$('.testimonial-carousel').owlCarousel({
		autoplay: true,
		smartSpeed: 1000,
		center: true,
		dots: false,
		loop: true,
		nav: true,
		navText: [
			'<i class="bi bi-arrow-left"></i>',
			'<i class="bi bi-arrow-right"></i>',
		],
		responsive: {
			0: {
				items: 1,
			},
			768: {
				items: 2,
			},
		},
	});

	// Portfolio isotope and filter
	var portfolioIsotope = $('.portfolio-container').isotope({
		itemSelector: '.portfolio-item',
		layoutMode: 'fitRows',
	});
	$('#portfolio-flters li').on('click', function () {
		$('#portfolio-flters li').removeClass('active');
		$(this).addClass('active');

		portfolioIsotope.isotope({ filter: $(this).data('filter') });
	});
})(jQuery);
