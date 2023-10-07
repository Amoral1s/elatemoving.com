jQuery(document).ready(function ($) {
	
	const linkHead = document.querySelectorAll('head link[rel="next"]');
	if (linkHead.length > 0) {
		linkHead.forEach(e => {
			e.remove();
		});
	}
	$('.call-callback').on('click', function() {
		$('.popup-callback').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.call-offer').on('click', function() {
		$('.popup-offer').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.call-seo').on('click', function() {
		$('.popup-seo').fadeIn(300);
		$('.overlay').fadeIn(300);
	});
	$('.call-video').on('click', function() {
		$('.popup-video iframe').attr('src', $(this).attr('data-src'));
		$('.popup-video').fadeIn(300);
		$('.overlay').fadeIn(300);
	});



	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.roulette').fadeOut(300);
		$(this).fadeOut(300);
		$('.popup-video iframe').attr('src', '');
	});
	$('.close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.roulette').fadeOut(300);
		$('.overlay').fadeOut(300);
		$('.popup-video iframe').attr('src', '');
	});

	$(window).scroll(function() { 
		if ($(window).scrollTop() > 20) {
			$('.up-arr').fadeIn(100);
		} else {
			$('.up-arr').fadeOut(100);
		}
	});

	const ctxBests = document.querySelector('.ctx-best');

	if (ctxBests) {
		const ctxPC = document.querySelector('.ctx-best-pc'),
					ctxMob = document.querySelector('.ctx-best-mob');

		if (window.screen.width <= 768) {
			ctxPC.remove();
			const ctxMobItem = document.querySelectorAll('.ctx-best-mob-wrap-item');
			ctxMobItem.forEach((el, i) => {
				if (i == 0) {
					let next = el.querySelector('.ctx-best-content');
					let btn = el.querySelector('.ctx-btn');
					$(next).slideDown(200);
					btn.classList.add('active');
				}
				el.addEventListener('click', (e) => {
					if (e.target.closest('.ctx-btn')) {
						var content = $(e.target.closest('.ctx-btn'));
						content.next().slideToggle(200);
						content.toggleClass('active');
					}
				});
			});
		} else {
			ctxMob.remove();
		}
	}

	//cf7
	jQuery(".wpcf7").on('wpcf7mailsent', function(event){
		//alert('GOOD');
		jQuery('#thx').fadeIn(200);
		//Скрытие поп окна автоматически, через 5,5 секнд
		jQuery('.overlay').fadeIn(300);
		jQuery('.popup').fadeOut(300);
		setTimeout(function(){
			jQuery('.overlay').fadeOut(300);
			jQuery('#thx').fadeOut(200);
		},2500);  //3500 = 3,5 секунды
		
		setTimeout(function(){jQuery('.popup').fadeOut(300);},2700); 
		setTimeout(function(){jQuery('#calc').fadeOut(300);},2700); 
		
		setTimeout(function(){jQuery('.overlay').fadeOut(300);},2700);
	});

	jQuery(".wpcf7").on('wpcf7invalid', function(event){
		alert('Заполните поля правильно и повторите попытку!');
	});
	jQuery(".wpcf7").on('wpcf7mailfailed', function(event){
		alert('Ошибка при отправке! Попробуйте отправить заявку еще раз!');
	});

	const checks = document.querySelectorAll('small input[type="checkbox"]');

	if (checks.length > 0) {
		checks.forEach((e) => {
			e.addEventListener('change', () => {
				let submit = e.parentElement.parentElement.querySelector('input[type="submit"]');

				if (e.checked == true) {
					submit.classList.remove('disabled');
				} else {
					submit.classList.add('disabled');
				}
			});
		});
	}

	const howTabs = document.querySelectorAll('.how-wrap-tabs-item');

	if (howTabs.length > 0) {
		if (window.screen.width > 992) {
			const howContent = document.querySelectorAll('.how-wrap-contents');
			howTabs.forEach((e, i) => {
				e.addEventListener('click', () => {
					howTabs.forEach((e) => {
						e.classList.remove('how-active');
					});
					howContent.forEach((e) => {
						e.classList.remove('how-content-active');
					});
					
					howContent[i].classList.add('how-content-active');
					e.classList.add('how-active');
				});
			});
		} else {
			const howContentMob = document.querySelectorAll('.how-mob-wrap-contents');
			const howTabsMob = document.querySelectorAll('.how-mob-wrap-tabs-item');

			howTabsMob.forEach((e, i) => {
				e.addEventListener('click', () => {
					if (e.classList.contains('how-active')) {
						e.classList.remove('how-active');
						$('.how-mob-wrap-contents').slideUp(200);
					} else {
						howTabsMob.forEach((e) => {
							e.classList.remove('how-active');
						});
						$('.how-mob-wrap-contents').slideUp(200);
						$(howContentMob[i]).slideDown(200);
						
						e.classList.add('how-active');
					}
				});
			});
		}
	}


	
	$('.cases-wrap').slick({
		dots: false,
		arrows: true,
		infinite: true,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1
	});
	$('.trust-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		centerMode: false,
		centerPadding: '0',
		slidesToShow: 5,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1290,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 578,
				settings: {
					slidesToShow: 2
				}
			}
		]
	});
	
	$('.who-wrap-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		centerMode: false,
		centerPadding: '0',
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 578,
				settings: {
					slidesToShow: 1,
					arrows: false,
					centerMode: true,
					centerPadding: '80px'
				}
			}
		]
	});


	//Всплывающее меню
	if (window.screen.width > 992) {
		jQuery('.header-toggle-menu-left-item').hover(function(){
			jQuery(this).find('.header-toggle-menu-left-ul').slideDown(0);
		}, function(){
			jQuery(this).find('.header-toggle-menu-left-ul').slideUp(0);
		});
		jQuery('.header-toggle').hover(function(){
			jQuery(this).find('.header-toggle-menu').slideDown(0);
		}, function(){
			jQuery(this).find('.header-toggle-menu').slideUp(0);
		});
	}



	if (window.screen.width <= 767) {
		$('.seo-plan-wrap-item b').on('click', function() {
			if ($(this).parent().hasClass('active')) {
				$('.seo-plan-wrap-item b').parent().removeClass('active');
				$('.seo-plan-wrap-item b').next().slideUp(200);
			} else {
				$('.seo-plan-wrap-item b').parent().removeClass('active');
				$('.seo-plan-wrap-item b').next().slideUp(200);
				$(this).parent().addClass('active');
				$(this).next().slideDown(200);
			}
		});
		$('.seo-audit-wrap-left-item b').on('click', function() {
			if ($(this).parent().hasClass('active')) {
				$('.seo-audit-wrap-left-item b').parent().removeClass('active');
				$('.seo-audit-wrap-left-item b').next().slideUp(200);
			} else {
				$('.seo-audit-wrap-left-item b').parent().removeClass('active');
				$('.seo-audit-wrap-left-item b').next().slideUp(200);
				$(this).parent().addClass('active');
				$(this).next().slideDown(200);
			}
		});

		const servWrap = document.querySelectorAll('.services-wrap');

		if (servWrap.length > 0) {
			servWrap.forEach((e) => {
				let btnMoar = document.createElement('div');
				btnMoar.classList.add('button');
				btnMoar.textContent = 'Показать все';
				btnMoar.addEventListener('click', () => {
					btnMoar.previousElementSibling.classList.add('services-open');
					btnMoar.remove();
				});
				e.parentElement.appendChild(btnMoar);
			});
		}
		$('.con-format-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.set-top-item ul').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.dev-strategy-wrap-feat').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.ao-left ul').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.seo-why-wrap ul').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.con-need-wrap-left ul').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.ctx-sale-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.ctx-before-text ul').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.ctx-click-feat').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.ctx-know-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		const ao = document.querySelector('.ao-left');

		if (ao) {
			const p = ao.querySelector('p');
			const newEl = document.querySelector('.ao-right');

			ao.insertBefore(newEl, p.nextElementSibling);

		}
	}
	
	if (window.screen.width <= 578) {
		$('.profit-wrap').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.page-who .who-wrap').slick({
			dots: false,
			arrows: true,
			infinite: false,
			centerMode: false,
			centerPadding: '0',
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 578,
					settings: {
						slidesToShow: 1,
						arrows: false,
						centerMode: true,
						centerPadding: '80px'
					}
				}
			]
		});
	}

	if (window.screen.width > 992) {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 320) {
				$('.header').addClass('header-scroll');
				$('.header-toggle-menu').addClass('header-t-scroll');
				document.body.style.marginTop = Math.round($('.header').outerHeight() + 30) + 'px';
			} else {
				$('.header').removeClass('header-scroll');
				$('.header-toggle-menu').removeClass('header-t-scroll');
				document.body.style.marginTop = 0;
			}
		 });
	}

	if (window.screen.width < 992) {

		$('.mob-close').on('click', function() {
			$('.mob-open').slideUp(200);
		});
		$('.burger').on('click', function() {
			$('.mob-open').slideDown(200);
		});
		$('.mob-toggle>a').on('click', function(e) {
			e.preventDefault();
			if ($(this).hasClass('mob-toggle-active')) {
				window.location.href = $(this).attr('href');
				$('.mob-toggle-menu').slideUp(100);

			} else {
				$(this).toggleClass('mob-toggle-active');
				$('.mob-toggle-menu').slideDown(100);
			}
		});


		if ($(this).hasClass('mob-toggle-active')) {
			$('.mob-toggle-menu-left-item b').on('click', function() {
				$(this).removeClass('mob-toggle-active');
				$(this).next().slideUp(100);
			});
		} else {
			$('.mob-toggle-menu-left-item b').on('click', function() {
				if ($(this).hasClass('mob-toggle-activess')) {
					$(this).removeClass('mob-toggle-activess');
					$(this).next().slideUp(100);
				} else {
					$('.mob-toggle-menu-left-item b').removeClass('mob-toggle-activess');
					$('.mob-toggle-menu-left-ul').slideUp(100);

					$(this).toggleClass('mob-toggle-activess');
					$(this).next().slideToggle(100);
				}
			});
		}
		$('.ctx-vid-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.course-feat-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.adv-web-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.scor-task-row').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.scor-num').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.scor-feat-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}
	
	const caseLi = document.querySelectorAll('.page-cases-nav ul li');

	if (caseLi.length > 0) {
		let countActive = 0;
		caseLi.forEach((e, i) => {
			if (!e.classList.contains('active')) {
				countActive++;
				if (countActive == caseLi.length) {
					caseLi[0].classList.add('active');
				}
			}
		});
	}
	const feedSlider = document.querySelector('.feed-wrap.slider');

	if (feedSlider) {
		$('.feed-wrap.slider').slick({
			dots: false,
			arrows: true,
			infinite: true,
			centerMode: false,
			centerPadding: '0',
			slidesToShow: 5,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 767,
					settings: {
						slidesToShow: 2
					}
				},
				{
					breakpoint: 578,
					settings: {
						slidesToShow: 1,
						arrows: false,
						centerMode: true,
						centerPadding: '80px'
					}
				}
			]
		});

		const allSlides = document.querySelectorAll('.feed-wrap-item img');

		const newGallery = document.createElement('div');
		newGallery.classList.add('feed-gallery');

		allSlides.forEach((e, i) => {
			let newA = document.createElement('a');
			let newImg = document.createElement('img');
			newA.href = e.src;
			newImg.src = e.src;
			newA.appendChild(newImg);
			newGallery.appendChild(newA);
			document.body.appendChild(newGallery);
			const newGalleryA = document.querySelectorAll('.feed-gallery a');
			e.addEventListener('click', () => {
				newGalleryA[i].click();
			});
		});
		$('.feed-gallery').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: true
			}
			// other options
		});
	}


	
	const feedCTX = document.querySelector('.ctx-feed');

	if (!feedCTX) {
		$('.text-feed-wrap').slick({
			dots: true,
			arrows: false,
			infinite: true,
			centerMode: false,
			centerPadding: '0',
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1290,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1
					}
				},
				{
					breakpoint: 578,
					settings: {
						slidesToShow: 1,
						arrows: false,
						adaptiveHeight: true,
						centerMode: true,
						centerPadding: '40px'
					}
				}
			]
		});
	} else { 
		$('.text-feed-wrap').slick({
			dots: true,
			arrows: false,
			infinite: true,
			centerMode: false,
			centerPadding: '0',
			slidesToShow: 3,
			slidesToScroll: 1,
			responsive: [
				{
					breakpoint: 1290,
					settings: {
						slidesToShow: 3
					}
				},
				{
					breakpoint: 992,
					settings: {
						slidesToShow: 1
					}
				},
				{
					breakpoint: 578,
					settings: {
						slidesToShow: 1,
						arrows: false,
						adaptiveHeight: true,
						centerMode: true,
						centerPadding: '40px'
					}
				}
			]
		});
	}
	

	const singleCasesImg = document.querySelectorAll('.single-cases-feed-right img');

	if (singleCasesImg.length > 0) {
		const allSlides = document.querySelectorAll('.feed-wrap-item img');

		const newGalleryCase = document.createElement('div');
		newGalleryCase.classList.add('feed-gallery-case');

		singleCasesImg.forEach((e, i) => {
			let newA = document.createElement('a');
			let newImg = document.createElement('img');
			newA.href = e.dataset.src;
			newImg.src = e.dataset.src;
			newA.appendChild(newImg);
			newGalleryCase.appendChild(newA);
			document.body.appendChild(newGalleryCase);
			const newGalleryA = document.querySelectorAll('.feed-gallery-case a');
			e.addEventListener('click', () => {
				newGalleryA[i].click();
			});
		});
		$('.feed-gallery-case').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: true
			}
			// other options
		});
	}

	const singleNav = document.querySelector('.single-nav');

	if (singleNav) {
		const anchors = document.querySelectorAll('.single-content p');

		let anchorsIndexes = 0;

		anchors.forEach((e) => {
			if (e.id != '') {
				const newA = document.createElement('a');
				newA.href = '#' + e.id;
				newA.classList.add('click');
				newA.textContent = e.id.replace(/\-/g, ' ');
				singleNav.appendChild(newA);

				let checkNav = document.querySelectorAll('.single-nav a');

				if (checkNav.length == 0) {
					singleNav.style.display = 'none';
				} else {
					singleNav.style.display = 'block';
				}
				anchorsIndexes++;
			}
		});

		if (anchorsIndexes == 0) {
			singleNav.remove();
		}

		$(".click").click(function () {
			var elementClick = $(this).attr("href");
			var destination = $(elementClick).offset().top - 100;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
			return false;
		});
	}

	const singleContentImg = document.querySelectorAll('.single .wp-block-gallery figure img');
	if (singleContentImg.length > 0) {
		const allSlides2 = document.querySelectorAll('.feed-wrap-item img');

		const newGalleryCase2 = document.createElement('div');
		newGalleryCase2.classList.add('single-gallery');

		singleContentImg.forEach((e, i) => {
			let newA2 = document.createElement('a');
			let newImg2 = document.createElement('img');
			newA2.href = e.dataset.src;
			newImg2.src = e.dataset.src;
			newA2.appendChild(newImg2);
			newGalleryCase2.appendChild(newA2);
			document.body.appendChild(newGalleryCase2);
			const newGalleryA2 = document.querySelectorAll('.single-gallery a');
			e.addEventListener('click', () => {
				newGalleryA2[i].click();
			});
			
		});
		$('.single-gallery').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: true
			}
			// other options
		});
		
	}

	if (window.screen.width < 768) {
		const progStart = document.querySelectorAll('.programm-wrap .start');

		if (progStart.length > 0) {
			progStart.forEach(e=>{
				e.remove();
			});
		}
		const progFinish = document.querySelectorAll('.programm-wrap .finish');

		if (progFinish.length > 0) {
			progFinish.forEach(e=>{
				e.remove();
			});
		}
		$('.programm-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '0px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		const feedText = document.querySelectorAll('section.text-feed');

		if (feedText.length > 0) {
			feedText.forEach((e) => {
				let feedBtn = e.querySelector('a.button');

				if (feedBtn) {
					e.classList.add('feed-btn-on');
				}
				if (!e.classList.contains('bg-gray')) {
					e.classList.add('feed-on');
				}
			});
		}
	}
	
	const contactsLeftItem = document.querySelectorAll('.contacts-left-item');
	const contactsCenter = document.querySelectorAll('.contacts-center');
	const contactsMap = document.querySelectorAll('.contacts-map-item');

	if (contactsLeftItem.length > 0) {
		const contactsFrame = document.querySelector('.contacts-map iframe');
		contactsCenter[0].style.display = 'flex';

		contactsFrame.src = contactsMap[0].textContent;
		contactsLeftItem.forEach((e, i) => {
			e.addEventListener('click', () => {
				contactsLeftItem.forEach(e => {
					e.classList.remove('contacts-active');
				});
				e.classList.add('contacts-active');
				contactsCenter.forEach(e => {
					e.style.display = 'none';
				});
				contactsCenter[i].style.display = 'flex';
				contactsFrame.src = contactsMap[i].textContent;
			});
		});
	}
	
	const comments = document.querySelectorAll('.comment-content');

	if (comments.length > 0) {
		comments.forEach((e) => {
			let star = e.querySelectorAll('.dashicons-star-filled');
			if (star.length > 0) {
				star.forEach((e) => {
					e.parentElement.classList.add('have-comment');
				});
			}
		});
	}

	const postRating = document.querySelector('.post-rating');

	if (postRating) {
		const newRating = document.querySelector('.news-rating-right');

		newRating.appendChild(postRating);
		newRating.style.display = 'block';
	}
	$('.comment-reply-link').on('click', function() {
		$(this).parent().parent().next().children('form').find('.comments-rating').remove();
	});
	$('.comment-form-cookies-consent label')
	.text('Сохранить моё имя и email в этом браузере для последующих моих комментариев.');

	
const ctxBestCheck = document.querySelector('.ctx-best-right-btns');

if (ctxBestCheck) {
	const ctxBtns = document.querySelectorAll('.ctx-best-right-btns .ctx-btn');

	ctxBtns.forEach((e, i) => {
		if (i == 0) {
			e.classList.add('active');
		}

		e.addEventListener('click', () => {
			ctxBtns.forEach((e) => {
				e.classList.remove('active');
			});
			e.classList.add('active');

			ctxImgs.forEach((e) => {
				e.style.display = 'none';
			});
			ctxTxt.forEach((e) => {
				e.style.display = 'none';
			});
			ctxImgs[i].style.display = 'block';
			ctxTxt[i].style.display = 'block';


		});
	});
	const ctxImgs = document.querySelectorAll('.ctx-best-right-img');

	ctxImgs.forEach((e, i) => {
		if (i == 0) {
			e.style.display = 'block';
		}
	});
	const ctxTxt = document.querySelectorAll('.ctx-best-left-text');

	ctxTxt.forEach((e, i) => {
		if (i == 0) {
			e.style.display = 'block';
		}
	});
}


	const slideItemCheck = document.querySelector('.ctx-before-slider-item');

	if (slideItemCheck) {
		$(".ctx-before-slider-item").twentytwenty();

	}

	$('.ctx-before-slider').slick({
		dots: false,
		arrows: true,
		infinite: true,
		swipe: false,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1
	});

	const ctxEthaps = document.querySelector('.ctx-ethaps-top');

	if (ctxEthaps) {
		const ctEthapsItem = document.querySelectorAll('.ctx-ethaps-top-item');
		const ctxEthapsContent = document.querySelectorAll('.ctx-ethaps-bot-item');
		const ctxEthapsPrev = document.querySelector('.ctx-ethaps-btns .prev');
		const ctxEthapsNext = document.querySelector('.ctx-ethaps-btns .next');
		const ctxEthapsmobItem = document.querySelectorAll('.ctx-ethaps-mob-item');

		const ethLength = ctEthapsItem.length;
		let currEth = 0;

		const clearEth = () => {
			ctEthapsItem.forEach((e) => {
				e.classList.remove('active');
			});
			ctxEthapsmobItem.forEach((e) => {
				e.classList.remove('active');
			});
			ctxEthapsContent.forEach((e) => {
				e.style.display = 'none';
			});
		};

		const showEthapBTN = function(index) {
			if (index == 0) {
				ctxEthapsPrev.classList.add('disabled');
				ctxEthapsNext.classList.remove('disabled');
			} else if (index == ethLength - 1) {
				ctxEthapsPrev.classList.remove('disabled');
				ctxEthapsNext.classList.add('disabled');
			} else {
				ctxEthapsPrev.classList.remove('disabled');
				ctxEthapsNext.classList.remove('disabled');
			}
			
		};

			ctEthapsItem.forEach((e, i) => {
				if (i == 0) {
					clearEth();
					ctxEthapsmobItem[0].classList.add('active');
					ctEthapsItem[0].classList.add('active');
					ctxEthapsContent[0].style.display = 'flex';
					ctxEthapsPrev.classList.add('disabled');
				}
				e.addEventListener('click', () => {
					clearEth();
					showEthapBTN(i);
					ctxEthapsmobItem[i].classList.add('active');
					ctEthapsItem[i].classList.add('active');
					ctxEthapsContent[i].style.display = 'flex';
					currEth = i;
				});
			});

		ctxEthapsNext.addEventListener('click', () => {
			currEth++;
			clearEth();
			ctEthapsItem[currEth].classList.add('active');
			ctxEthapsmobItem[currEth].classList.add('active');
			ctxEthapsContent[currEth].style.display = 'flex';
			showEthapBTN(currEth);
		});
		ctxEthapsPrev.addEventListener('click', () => {
			clearEth();
			ctxEthapsmobItem[currEth].classList.add('active');
			ctEthapsItem[currEth].classList.add('active');
			ctxEthapsContent[currEth].style.display = 'flex';
			showEthapBTN(currEth);
			currEth--;

		});

		
		
	}

	if (window.screen.width < 768) {
		const ctxFeatsItem = document.querySelectorAll('.ctx-feat-wrap-item'),
					featWrap = document.querySelector('.ctx-feat-mob');

			ctxFeatsItem.forEach((e) => {
				let newItem = e.cloneNode(true);
				featWrap.appendChild(newItem);
			});
			const ctxFeatWrap = document.querySelector('.ctx-feat-wrap');

			if (ctxFeatWrap) {
				ctxFeatWrap.remove();
			}
			
			$('.ctx-feat-mob').slick({
				dots: true,
				arrows: false,
				infinite: false,
				centerMode: false,
				adaptiveHeight: true,
				centerPadding: '0px',
				slidesToShow: 1,
				slidesToScroll: 1
			});
			$('.dev-services .services-wrap').slick({
				dots: true,
				arrows: false,
				infinite: false,
				centerMode: false,
				adaptiveHeight: true,
				centerPadding: '0px',
				slidesToShow: 1,
				slidesToScroll: 1
			});
			$('.dev-strategy-wrap-top').slick({
				dots: true,
				arrows: false,
				infinite: false,
				centerMode: false,
				adaptiveHeight: true,
				centerPadding: '0px',
				slidesToShow: 1,
				slidesToScroll: 1
			});

	}
	const dgStrat = document.querySelector('.dg-strat');
	if (dgStrat) {
		const stepServices = document.querySelectorAll('.step-services');
		
		if (stepServices.length > 0) {
			const stepImgs = document.querySelectorAll('.ctx-it-wrap');
			stepServices[0].classList.add('active');
			stepImgs.forEach((e,i) => {
				if (i == 0) {
					e.style.display = 'flex';
				} else {
					e.style.display = 'none';
				}
			});
			$('.ctx-it-wrap-right').magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
					enabled: false
				}
				// other options
			});
			stepServices.forEach((e, i) => {

			
			
			e.addEventListener('click', () => {
				stepServices.forEach(e => {
					e.classList.remove('active');
				});
				e.classList.add('active');
				stepImgs.forEach(e => {
					e.style.display = 'none';
				});
				stepImgs[i].style.display = 'flex';
			});
			});
			}
	} else {
		const stepServices = document.querySelectorAll('.step-services');

		if (stepServices.length > 0) {
			const stepImgs = document.querySelectorAll('.ctx-it-wrap-right img');
			stepServices[0].classList.add('active');
			stepImgs.forEach((e,i) => {

				if (i == 0) {
					e.style.display = 'block';
				} else {
					e.style.display = 'none';
				}
			});
			$('.ctx-it-wrap-right').magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
					enabled: false
				}
				// other options
			});
			stepServices.forEach((e, i) => {

			
			
			e.addEventListener('click', () => {
				stepServices.forEach(e => {
					e.classList.remove('active');
				});
				e.classList.add('active');
				stepImgs.forEach(e => {
					e.style.display = 'none';
				});
				stepImgs[i].style.display = 'block';
			});
			});
			}
	}

	
	const seoFeeds = document.querySelectorAll('.seo-feeds');

	if (seoFeeds.length > 0) {
		seoFeeds.forEach((e,i) => {
			if (i > 0) {
				e.remove(0);
			}
		});
	}

	$('.seo-answer-wrap-item>b').on('click', function() {
		if ($(this).parent().hasClass('active')) {
			$('.seo-answer-wrap-item>b').parent().removeClass('active');
			$('.seo-answer-wrap-item>b').next().slideUp(200);
		} else {
			$('.seo-answer-wrap-item>b').parent().removeClass('active');
			$('.seo-answer-wrap-item>b').next().slideUp(200);
			$(this).parent().addClass('active');
			$(this).next().slideDown(200);
		}
	});

	const googIt = document.querySelector('#goog-gt-tt');

	if (googIt) {
		const h1 = googIt.querySelector('h1');
		h1.remove();
	}

	const caseFeedLink = document.querySelector('.single-cases-feat-item a');

	if (caseFeedLink) {
		$(caseFeedLink).on('click', function(e) {
			e.preventDefault();
			document.querySelector('.single-cases-feed-right img').click();
		});
	}
	

	const blogPage = document.querySelector('.single h1.title');

	if (blogPage) {
		const bkDiv = document.querySelector('.bk-div');
		const newLink = document.createElement('span');
		if (bkDiv) {
			newLink.innerHTML = `<a href="/blog/">Блог </a><b class="bk-div">» </b>`;
			bkDiv.nextElementSibling.insertBefore(newLink, bkDiv.nextElementSibling.childNodes[0]); 
		}
		
	}

	$('.scor-task-row-item').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});
	$('.scor-ex-mix-exel-left-gallery').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});
	$('.scor-ex-mix-exel-right').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});
	$('.scor-prior-wrap-right').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});

	const scorMixExelWrap = document.querySelectorAll('.scor-ex-mix-exel');

	if (scorMixExelWrap.length > 0 && window.screen.width <= 992) {
		scorMixExelWrap.forEach((element, index) => {
			const allSlides = element.querySelectorAll('img');
			const sliderWrap = document.createElement('div');
			const price = element.querySelector('.scor-ex-mix-exel-left-price');
			sliderWrap.classList.add('mob-exel-slider');
			allSlides.forEach(e => {
				let newSlide = document.createElement('a');
				newSlide.href = e.dataset.src;
				newSlide.appendChild(e);
				sliderWrap.appendChild(newSlide);
			});
			price.parentNode.insertBefore(sliderWrap, price);
			$(sliderWrap).magnificPopup({
				delegate: 'a', // child items selector, by clicking on it popup will open
				type: 'image',
				gallery: {
					enabled: true
				}
				// other options
			});
			$(sliderWrap).slick({
				dots: true,
				arrows: false,
				infinite: false,
				centerMode: false,
				adaptiveHeight: true,
				centerPadding: '0px',
				slidesToShow: 1,
				slidesToScroll: 1
			});

		});


		const impWrapper = document.querySelectorAll('.imp-wrapper');

		if (impWrapper.length > 0) {
			impWrapper.forEach((e,i) => {
				if (i == 0) {
					$(e).children('ul').slideDown(200);
					$(e).addClass('active');
				}
			});
			$('.imp-wrapper b').on('click', function() {
				if ($(this).parent().hasClass('active')) {
					$('.imp-wrapper').removeClass('active');
					$('.imp-wrapper ul').slideUp(200);
				} else {
					$('.imp-wrapper').removeClass('active');
					$('.imp-wrapper ul').slideUp(200);
	
					$(this).next().slideDown(200);
					$(this).parent().addClass('active');
				}
				
			});
		}
	}

	if (window.screen.width < 768) {
		const scorWrap = document.querySelector('.scor-task-wrap');
		const cont = document.querySelectorAll('.scor-top .cont');

		if (scorWrap) {
			if (scorWrap.scrollHeight > 500) {
				scorWrap.classList.add('hides');
				const btn = document.createElement('div');
					btn.classList.add('cont-btn');
					btn.textContent = 'Развернуть';
					btn.addEventListener('click', () => {
						scorWrap.classList.remove('hides');
						btn.remove();
					});
					scorWrap.parentNode.insertBefore(btn, scorWrap.nextElementSibling); 
			}
		}

		if (cont.length > 0) {
			cont.forEach((e, i) => {
				if (e.scrollHeight > 200) {
					e.classList.add('hides');
					const btn = document.createElement('div');
					btn.classList.add('cont-btn');
					btn.textContent = 'Развернуть';
					btn.addEventListener('click', () => {
						e.classList.remove('hides');
						btn.remove();
					});
					e.parentNode.insertBefore(btn, e.nextElementSibling);
				}
			});
		}

		const advResWrap = document.querySelector('.adv-res-wrap');

		if (advResWrap) { 
			if (advResWrap.scrollHeight > 400) {
				advResWrap.classList.add('hides');
				const btn = document.createElement('div');
					btn.classList.add('cont-btn');
					btn.textContent = 'Показать весь текст';
					btn.addEventListener('click', () => {
						advResWrap.classList.remove('hides');
						btn.remove();
					});
					advResWrap.parentNode.insertBefore(btn, advResWrap.nextElementSibling); 
			}
		}

	}
	$('.dev-cases-wrap').slick({
		dots: false,
		arrows: true,
		infinite: true,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1
	});
	$('.dev-allcases-wrap-slider').slick({
		dots: false,
		arrows: true,
		infinite: false,
		centerMode: false,
		adaptiveHeight: false,
		centerPadding: '0',
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 578,
				settings: {
					slidesToShow: 1,
					dots: true,
					arrows: false
				}
			}
		]
	});
	$('.sem-result-wrap-item-right').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});


	$('.sem-result-wrap').slick({
		dots: false,
		arrows: true,
		infinite: false,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			}
		]
	});

	const semWrap = document.querySelector('.sem-seo-wrap');

	if (semWrap) {
		const indexSeo = document.querySelector('.index-seo');
		if (semWrap.scrollHeight > 700 && !indexSeo) {
			semWrap.classList.add('height');
			const dubleBtn = document.createElement('div');
			dubleBtn.classList.add('d-btn');
			dubleBtn.innerHTML = `
			<img alt="icon" src="/wp-content/themes/main/img/icons/chevron_duo_down.svg"> 
			<span>Показать весь текст</span>
			`;
			dubleBtn.addEventListener('click', () => {
				semWrap.classList.remove('height');
				dubleBtn.remove();
			});
			semWrap.parentElement.appendChild(dubleBtn);

		} else if (semWrap.scrollHeight > 200 && indexSeo) {
			semWrap.classList.add('height-index');
			const dubleBtn = document.createElement('div');
			dubleBtn.classList.add('d-btn');
			dubleBtn.innerHTML = `
			<img alt="icon" src="/wp-content/themes/main/img/icons/chevron_duo_down.svg"> 
			<span>Показать весь текст</span>
			`;
			dubleBtn.addEventListener('click', () => {
				semWrap.classList.remove('height-index');
				dubleBtn.remove();
			});
			semWrap.parentElement.appendChild(dubleBtn);
		}
	}


	if (window.screen.width < 993) {
		const semOffer = document.querySelector('.sem-offer');
		if (semOffer) {
			const semImg = document.querySelector('.sem-offer-wrap-right img');
			const semLeft = document.querySelector('.sem-offer-wrap-left');

			let newImg = semImg.cloneNode(true);
			const semUl = semLeft.querySelector('ul');

			semLeft.insertBefore(newImg, semUl);
			semImg.parentElement.remove();
		}
		
	}
	if (window.screen.width < 768) {
		$('.sem-goal-wrap-feat').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.sem-gar-wrapper').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}

	const semCalc = document.querySelector('.sem-calc');

	if (semCalc) {
		let arrPrices = [];
		
		arrPrices[100] = 6500;
    arrPrices[110] = 6500;
    arrPrices[120] = 6500;
    arrPrices[130] = 6500;
    arrPrices[140] = 6500;
    arrPrices[150] = 6500;
    arrPrices[160] = 6500;
    arrPrices[170] = 6500;
    arrPrices[180] = 6500;
    arrPrices[190] = 6500;
    arrPrices[200] = 6650;
    arrPrices[210] = 6650;
    arrPrices[220] = 6650;
    arrPrices[230] = 6650;
    arrPrices[240] = 6650;
    arrPrices[250] = 6650;
    arrPrices[260] = 6650;
    arrPrices[270] = 6650;
    arrPrices[280] = 6650;
    arrPrices[290] = 6650;
    arrPrices[300] = 6800;
    arrPrices[310] = 6800;
    arrPrices[320] = 6800;
    arrPrices[330] = 6800;
    arrPrices[340] = 6800;
    arrPrices[350] = 6800;
    arrPrices[360] = 6800;
    arrPrices[370] = 6800;
    arrPrices[380] = 6800;
    arrPrices[390] = 6800;
    arrPrices[400] = 6950;
    arrPrices[410] = 6950;
    arrPrices[420] = 6950;
    arrPrices[430] = 6950;
    arrPrices[440] = 6950;
    arrPrices[450] = 6950;
    arrPrices[460] = 6950;
    arrPrices[470] = 6950;
    arrPrices[480] = 6950;
    arrPrices[490] = 6950;
    arrPrices[500] = 7000;
    arrPrices[600] = 8000;
    arrPrices[700] = 9000;
    arrPrices[800] = 10000;
    arrPrices[900] = 11000;
    arrPrices[1000] = 12000;
    arrPrices[1100] = 12900;
    arrPrices[1200] = 13800;
    arrPrices[1300] = 14700;
    arrPrices[1400] = 15600;
    arrPrices[1500] = 16000;
    arrPrices[1600] = 16450;
    arrPrices[1700] = 16850;
    arrPrices[1800] = 17250;
    arrPrices[1900] = 17650;
    arrPrices[2000] = 18000;

		
		const semCheckboxCalc = () => { 
			summDopMax = 0;
			
			semMaxCheckbox.forEach((e, i) => {
				if (e.checked && !e.dataset.val) {
					if (e.value < 100) {
						summDopMax += Math.round((e.value * numMax.value));
					} else {
						summDopMax += Math.round(e.value);
					}
				} else if (e.checked && e.dataset.val > 0 && +numMax.value >= 2000) {
					summDopMax += Math.round(+e.dataset.val * numMax.value);
				} else if (e.checked && e.dataset.val > 0 && +numMax.value < 2000) {
					summDopMax += Math.round(e.value * numMax.value);
				} 
				
					const eText = e.parentElement.querySelector('b');
					let eTextContent = eText.textContent.replace(/\D/g, '');
					if (+eTextContent.trim() > 0) {
						if (!e.dataset.val) {
							if (e.value < 100) {
								eText.textContent = Math.round((e.value * numMax.value)) + ' руб.';
							} 
						} else if (e.dataset.val > 0 && +numMax.value >= 2000) {
							eText.textContent = Math.round(+e.dataset.val * numMax.value) + ' руб.';
						} else if (e.dataset.val > 0 && +numMax.value < 2000) {
							eText.textContent = Math.round(e.value * numMax.value) + ' руб.';
						}
					} 

				

				
				
			});

			maxCost.textContent = summDopMax; 

			if (rangeMax.value / rangeMax.max * 100 < 50) {
				semMaxLLinesss[1].style.width = `
				calc(${rangeMax.value / rangeMax.max * 100}% - 4px)
				`;
			} else {
				semMaxLLinesss[1].style.width = `
				calc(${rangeMax.value / rangeMax.max * 100}% - ${rangeMax.max / 1000}px)
				`;
			}
		};

		const semMaxLLinesss = document.querySelectorAll('.sem-calc-input .liness');
		

		const semCalsTabs = document.querySelectorAll('.sem-calc-tab-item');
		const semCalsContents = document.querySelectorAll('.sem-calc-content-item');

		semCalsTabs.forEach((e, i) => {
			e.addEventListener('click', () => {
				semCalsTabs.forEach(e => {
					e.classList.remove('active');
				});
				e.classList.add('active');
				semCalsContents.forEach(e => {
					e.classList.remove('active');
				});
				semCalsContents[i].classList.add('active');
			});
		});

		//range min
		const rangeMin = document.querySelector('#range-min'),
					numMin = document.querySelector('#num-min'),
					minCost = document.querySelector('.sem-calc-price-min b');

		minCost.textContent = 7000;

			
		rangeMin.addEventListener('input', () => {
			numMin.value = rangeMin.value;

			if (rangeMin.value > 2000) {
				minCost.textContent = Math.round(9 * rangeMin.value); 

			} else {
				minCost.textContent =  Math.round(arrPrices[rangeMin.value]);

			}
			if (rangeMin.value / rangeMin.max * 100 < 50) {
				semMaxLLinesss[0].style.width = `
				calc(${rangeMin.value / rangeMin.max * 100}% - 4px)
				`;
			} else {
				semMaxLLinesss[0].style.width = `
				calc(${rangeMin.value / rangeMin.max * 100}% - ${rangeMin.max / 1000}px)
				`;
			}
			numMax.value = numMin.value;
			rangeMax.value = numMin.value;
			semCheckboxCalc();
		});

		numMin.addEventListener('change', () => {
			if (numMin.value < 100) {
				numMin.value = 100;
				numMax.value = 100;
			} else if (numMin.value > 9000) {

				rangeMin.value = 9000;
				minCost.textContent = numMin.value;

				if (rangeMin.value > 2000) {
					minCost.textContent = Math.round(9 * numMin.value); 
				} else {
					minCost.textContent =  Math.round(arrPrices[numMin.value]);
				}
				if (rangeMin.value / rangeMin.max * 100 < 50) {
					semMaxLLinesss[0].style.width = `
					calc(${9000 / 9000 * 100}% - 4px)
					`;
				} else {
					semMaxLLinesss[0].style.width = `
					calc(${9000 / rangeMin.max * 100}% - ${9000 / 1000}px)
					`;
				}
				numMax.value = numMin.value;
				rangeMax.value = numMin.value;
				semCheckboxCalc();

			} else {
				rangeMin.value = numMin.value;
				minCost.textContent = numMin.value;

				if (rangeMin.value > 2000) {
					minCost.textContent = Math.round(9 * rangeMin.value); 
				} else {
					minCost.textContent =  Math.round(arrPrices[rangeMin.value]);
				}
				if (rangeMin.value / rangeMin.max * 100 < 50) {
					semMaxLLinesss[0].style.width = `
					calc(${rangeMin.value / rangeMin.max * 100}% - 4px)
					`;
				} else {
					semMaxLLinesss[0].style.width = `
					calc(${rangeMin.value / rangeMin.max * 100}% - ${rangeMin.max / 1000}px)
					`;
				}
				numMax.value = numMin.value;
				rangeMax.value = numMin.value;
				semCheckboxCalc();

			}
			
		});
		const semLines = document.querySelectorAll('.sem-calc-input-line div');

		semLines.forEach((e, i) => {
			
			
			if (i == 1) {
				e.style.left = `9%`;
			}
			if (i == 2) {
				e.style.left = `19%`;
			}
			if (i == 3) {
				e.style.left = `30%`;
			}
			if (i == 4) {
				e.style.left = `41%`;
			}
			if (i == 5) {
				e.style.left = `52%`;
			}
			if (i == 6) {
				e.style.left = `63%`;
			}
			if (i == 7) {
				e.style.left = `74%`;
			}
			if (i == 8) {
				e.style.left = `85%`;
			}
			if (i == 9) {
				e.style.left = `90%`;
			}
			if (i == 9) {
				e.style.left = `95%`;
			}
			
		});

		//range max

		/*
		arrOptions.tariff_base = { checked: true };
    arrOptions.tariff_analysis = { checked: false };
    arrOptions.tariff_collection = { checked: true, useBase: true };
    arrOptions.tariff_structure = { checked: true, price: 12.5 };
    arrOptions.tariff_specification = { checked: false, price: 50 };
    arrOptions.tariff_content = { checked: false, price: 40 };
    arrOptions.tariff_analytics = { checked: false };
		*/

		const rangeMax = document.querySelector('#range-max'),
					numMax = document.querySelector('#num-max'),
					maxCost = document.querySelector('.sem-calc-price-max b');

		maxCost.textContent = 0;

		const semMaxCheckbox = document.querySelectorAll('.sem-calc-content-item-dop-item input');

		let allSummMax = 0;
		let summDopMax = 0;

			
		
		semCheckboxCalc();

		
		semMaxCheckbox.forEach((e) => {
			e.addEventListener('change', () => {
				semCheckboxCalc();
			});
		});
		rangeMax.addEventListener('input', () => {
			numMax.value = rangeMax.value;
			semCheckboxCalc();
		});

		numMax.addEventListener('change', () => { 
			if (numMax.value < 100) {
				numMin.value = 100;
				numMax.value = 100;
				} else if (numMax.value > 9000) {
					rangeMax.value = 9000;
					maxCost.textContent = numMax.value;

				if (rangeMin.value > 2000) {
					maxCost.textContent = Math.round(9 * numMax.value); 
				} else {
					maxCost.textContent =  Math.round(arrPrices[numMax.value]);
				}
				if (rangeMin.value / rangeMin.max * 100 < 50) {
					semMaxLLinesss[0].style.width = `
					calc(${9000 / 9000 * 100}% - 4px)
					`;
				} else {
					semMaxLLinesss[0].style.width = `
					calc(${9000 / rangeMin.max * 100}% - ${9000 / 1000}px)
					`;
				}
				numMin.value = numMax.value;
				rangeMax.value = 9000;
				semCheckboxCalc();
				} else {
				rangeMax.value = numMax.value;
				semCheckboxCalc();

			 }
			
		});




		//
		const semLinesMax = document.querySelectorAll('.sem-calc-input-line-max div');

		semLinesMax.forEach((e, i) => {
			
			
			if (i == 1) {
				e.style.left = `9%`;
			}
			if (i == 2) {
				e.style.left = `19%`;
			}
			if (i == 3) {
				e.style.left = `30%`;
			}
			if (i == 4) {
				e.style.left = `41%`;
			}
			if (i == 5) {
				e.style.left = `52%`;
			}
			if (i == 6) {
				e.style.left = `63%`;
			}
			if (i == 7) {
				e.style.left = `74%`;
			}
			if (i == 8) {
				e.style.left = `85%`;
			}
			if (i == 9) {
				e.style.left = `90%`;
			}
			if (i == 9) {
				e.style.left = `95%`;
			}
			
		});





		$('.sem-calc-text-item-title').on('click', function() {

			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$(this).next().slideUp(200);
			} else {
				$(this).addClass('active');
				$(this).next().slideDown(300);
			}
		});



	}


	if (window.screen.width < 768) {
		$('.adv-who-wrap').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
		$('.mark-why-wrap').slick({
			dots: true,
			arrows: false,
			infinite: false,
			centerMode: false,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}

	$('.cases-wrap-item-right').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});

	if (window.screen.width > 992) {
		const markWrap = document.querySelector('.market-wich');

		if (markWrap) {
			const markItem = document.querySelectorAll('.market-wich-wrap-item');
			let markHeight;

			if (window.screen.width < 1290) {
				markHeight = [150,250,70,281,190,0,0,0,0,0,0,0,0];
			} else {
				markHeight = [150,150,150,141,150,0,0,0,0,0,0,0,0];
			}
			
			markItem.forEach((el) => {
				let markItemContent = el.querySelectorAll('.market-wich-wrap-item-content');

				markItemContent.forEach((e,i) => {
					if (markHeight[i] < e.scrollHeight) {
						markHeight[i] = e.scrollHeight;
					}
				});
				markItemContent.forEach((elem, index) => {
					elem.style.height = +markHeight[index] + 'px';
				});
				
			});
		}
	} else {
		$('.market-wich-wrap-item-title').on('click', function() {
			$(this).parent().toggleClass('active');
			$(this).parent().children('.market-wich-wrap-item-content').slideToggle(200);
		});
	}
	const courseOffer = document.querySelector('.course-offer');

	if (courseOffer) {
		$(".click").click(function () {
			var elementClick = $(this).attr("href");
			var destination = $(elementClick).offset().top - 100;
			$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
			return false;
		});
	}
	
	const coursePriceMax = document.querySelector('.match-wrap-left .btns strong');
	const priceForm = document.querySelector('.course-form .talk-submit .right b');
	const coursePriceMin = document.querySelector('.match-wrap-right .btns strong');

	if (coursePriceMax && priceForm) {
		priceForm.textContent = coursePriceMax.textContent;

		const courseRadios = document.querySelectorAll('.course-form-check input');

		courseRadios.forEach((e,i) => {
			e.addEventListener('change', () => {
				if (e.checked) {
					if (e.value == 'Полный курс') {
						priceForm.textContent = coursePriceMax.textContent;
					} else if (e.value == 'Только семантика') {
						priceForm.textContent = coursePriceMin.textContent;
					}
				}
			});
		});
	}

	
	if (window.screen.width < 579) {
		const semCalcRight = document.querySelectorAll('.sem-calc-right');

		if (semCalcRight.length > 0) {
			semCalcRight.forEach(e => {
				let newItem = e.cloneNode(true);
				console.log(newItem);
				console.log(e.previousElementSibling);
				const newItemWrap = e.previousElementSibling.querySelector('.sem-calc-btns');
				newItemWrap.appendChild(newItem);
				e.remove();
			});
		}
	}

	const pageCourse = document.querySelector('.page-course');

	if (pageCourse) {
		const aoTitle = document.querySelector('.ao-left .title');
		if (aoTitle) {
			aoTitle.textContent = 'Об авторе курса';
		}
	}
	$('.scr-mobi-wrap').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: true
		}
		// other options
	});
	$('.scr-sec-item').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});
	$('.scr').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});

	const fckPopup = document.querySelector('.fucking-popup');

	if (fckPopup) {
		let fckCitys = [
			'Волгограда',
			'Москвы',
			'Воронежа',
			'Архангельска',
			'Санкт-петербурга',
			'Екатеринбурга'
		];
		let fckCourses = [
			'Полный курс'
		];

			const fckCity = fckPopup.querySelector('b');
			fckCity.textContent = fckCitys[Math.floor(Math.random() * fckCitys.length)];
		$('.fucking-popup .close').on('click', function() {
			$(this).parent().fadeOut(200);
		});

		if (window.screen.width > 992) {
			setTimeout(() => {
				$(fckPopup).fadeIn(200);
			}, 15000);
		}
	}









	const roulette = document.querySelector('.roulette');

	if (roulette) {

		let month = [
			'Январьский аттракцион!',
			'Февральский аттракцион!',
			'Аттракцион марта!',
			'Апрельский аттракцион!',
			'Майский аттракцион!',
			'Июньский аттракцион!',
			'Июльский аттракцион!',
			'Аттракцион августа!',
			'Сентябрьский аттракцион!',
			'Октябрьский аттракцион!',
			'Ноябрьский аттракцион!',
			'Декабрьский аттракцион!'
		];

		

		let now = new Date();

		const formTitle = document.querySelector('.r-t');

		formTitle.textContent = month[now.getMonth()];
		
		const getCookie = function(name) {
			let matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		};
		const setCookie =  function(name, value, options = {}) {

			options = {
				path: '/'
			};
		
			if (options.expires instanceof Date) {
				options.expires = options.expires.toUTCString();
			}
		
			let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
		
			for (let optionKey in options) {
				updatedCookie += "; " + optionKey;
				let optionValue = options[optionKey];
				if (optionValue !== true) {
					updatedCookie += "=" + optionValue;
				}
			}
		
			document.cookie = updatedCookie;
		};
		
		if (getCookie('roulette') != 1) {
			setTimeout(() => {
				$(roulette).fadeIn(200);
				$('.overlay').fadeIn(200);
				setCookie('roulette', '1', {secure: true, 'max-age': 36000});
			}, 30000);
		} 
		
		let formSevices = [
			'Аудит семантики и структуры вашего сайта',
			'скидка 5000 рублей на SEO продвижение',
			'Региональная стратегия в подарок',
			'10 часов SEO-специалиста в подарок',
			'8 000 рублей скидка на юзабилити аудит сайта',
			'Бесплатный аудит коммерческих факторов',
			'-10% на любую услугу',
			'Бесплатная консультация 30 мин'
		];

		const rouletteBtn = document.querySelector('.roulette-wrap-right div.button');
		const rouletteBtnInput = document.querySelector('.roulette-wrap-right input.button');

		const formRandomizer = function() {

			const inputText = document.querySelector('.roulette-wrap-right input[name="y-name"]');
			const inputTel = document.querySelector('.roulette-wrap-right input[name="y-tel"]');
			console.log();
			console.log();

			if (inputText.value != '' && inputTel.value != '') {
				const rouletteImg = document.querySelector('.roulette-wrap-left .rtext');
				const rouletteTrigger = document.querySelector('.roulette-wrap-left .roll');
				const hiddenInput = document.querySelector('.roulette-wrap-right input.hidden');
	
				let num = Math.floor(Math.random() * formSevices.length);
				rouletteTrigger.style.display = 'block';
				rouletteImg.classList.add(`active`);
				rouletteImg.classList.add(`active-${num}`);
				hiddenInput.value = formSevices[num];
	
	
	
	
				rouletteBtn.remove();
				rouletteBtnInput.style.display = 'block';
				setTimeout(() => {
					rouletteBtnInput.click();
				}, 4500);
			} else {
				alert('Заполните имя и телефон для работы рулетки!');
			}
			
		};



		rouletteBtn.addEventListener('click', () => {
			formRandomizer();
		});

		let overlayDiv = document.querySelector('.cook');

		if (getCookie('cookies') != 1) {
			overlayDiv.style.display = 'flex';
			document.getElementById('hide_popup')
				.addEventListener('click', function() { 
						setCookie('cookies', '1', {secure: true, 'max-age': 36000});
						overlayDiv.style.display='none';
			});
		} else {
			overlayDiv.style.display = 'none';
		}


	}

	$('.sem-calc-text-item-content .gallery-item .gallery-icon').magnificPopup({
		delegate: 'a', // child items selector, by clicking on it popup will open
		type: 'image',
		gallery: {
			enabled: false
		}
		// other options
	});

	const fp7file = document.querySelector('.wpcf7-file');

	if (fp7file) {
		document.querySelector('.wpcf7-file').addEventListener('change', function(){
			if( this.value ){
				this.parentElement.classList.add('active');
				console.log( "Оппа, выбрали файл!" );
				console.log( this.value );
			} else { // Если после выбранного тыкнули еще раз, но дальше cancel
				console.log( "Файл не выбран" ); 
			}
		});
	}
	
	
	const figures = document.querySelectorAll('figure.wp-block-image');

	if (figures.length > 0) {
		figures.forEach((e) => {
			let newA = document.createElement('a');
			let img = e.querySelector('img');
			newA.href = img.dataset.src;
			let newImg = img.cloneNode(true);
			newA.appendChild(newImg);
			e.appendChild(newA);
			img.remove();
		});
		$('figure.wp-block-image').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: false
			}
			// other options
		});
	}
	const ethaps = document.querySelectorAll('.how-wrap-contents-items');
	const ethapsMob = document.querySelectorAll('.how-mob-wrap-contents-items');

	if (ethaps.length > 0) {
		ethaps.forEach((e,i) => {
			let span = e.querySelector('span span');

			span.textContent = i + 1;
		});
	}
	if (ethapsMob.length > 0) {
		ethapsMob.forEach((e,i) => {
			let span = e.querySelector('span span');

			span.textContent = i + 1;
		});
	}

	const contScor = document.querySelectorAll('.scor-top .cont');

	if (contScor.length > 0) {
		contScor.forEach(e => {
			const contP = e.querySelectorAll('a img');
			if (contP.length > 0) {
				contP.forEach((el) => {
					el.parentElement.parentElement.classList.add('cont-gallery');
				});
			}
		});
		$('.cont-gallery').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: false
			}
			// other options
		});
		
	}
	
	const indexTrack = document.querySelectorAll('.services-wrap-item-title b');
	const index = document.querySelectorAll('.index-track');

	if (indexTrack.length > 0) {
		indexTrack.forEach(e => {
			if (e.textContent.trim() == 'Продвижение сайтов') {
				e.closest('.services-wrap-item').href = '/';
			}
			
		});
	}


	const blogMain = document.querySelector('.news-main-right b');

	if (blogMain) {
		const blogDouble = document.querySelectorAll('.news-wrap-item b');

		if (blogDouble.length > 0) {
			blogDouble.forEach(e => {
				if (e.textContent.trim() == blogMain.textContent.trim()) {
					e.closest('.news-wrap-item').remove();
				}
			});
		}
	}





$('.video-our-wrap').slick({
		dots: false,
		arrows: true,
		infinite: true,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1
	});

$('.video-cases-wrap').slick({
		dots: false,
		arrows: true,
		infinite: true,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 1,
					arrows: false,
					dots: true
				}
			}
		]
	});

if (window.screen.width < 578) {
	$('.video-strat-wrap').slick({
		dots: true,
		arrows: false,
		infinite: true,
		centerMode: false,
		adaptiveHeight: true,
		centerPadding: '0',
		slidesToShow: 1,
		slidesToScroll: 1
	});
}

if (window.screen.width <= 992) {
	$('.br_eth_wrap_item .eth_title').on('click', function() {
		$(this).next().slideToggle(200);
	})
}
$('.pr_stat_wrap_right_gall').magnificPopup({
			delegate: 'a', // child items selector, by clicking on it popup will open
			type: 'image',
			gallery: {
				enabled: true
			}
			// other options
		});
	
	if (window.screen.width < 579) {
		$('.pr_stat_wrap_right_gall').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}
	
	
		
	
	
	const semWrap2 = document.querySelector('.sem-seo.srss .sem-seo-wrap');

	if (semWrap2) {
		const indexSeo2 = document.querySelector('.sem-seo.srss .index-seo');
		if (semWrap2.scrollHeight > 500) {
			semWrap2.classList.add('height');
			const dubleBtn2 = document.createElement('div');
			dubleBtn2.classList.add('d-btn');
			dubleBtn2.innerHTML = `
			<img alt="icon" src="/wp-content/themes/main/img/icons/chevron_duo_down.svg"> 
			<span>Показать весь текст</span>
			`;
			dubleBtn2.addEventListener('click', () => {
				semWrap2.classList.remove('height');
				dubleBtn2.remove();
			});
			semWrap2.parentElement.appendChild(dubleBtn2);

		} 
	}
	if (window.screen.width < 768) {
		$('.profit.smm-profit.pro-ethaps-gray .profit-wrap-item-title').on('click', function() {
		$(this).next().slideToggle(200);
	})
	}
	if (window.screen.width < 579) {
		$('.profit.smm-profit.pro-ethaps-gray .profit-wrap').slick('unslick');
		
	}
	
	
	$('.plan_wrap_right').slick({
		dots: false,
		arrows: false,
		infinite: false,
		adaptiveHeight: true,
		centerMode: true,
		centerPadding: '180px',
		slidesToShow: 1,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1290,
				settings: {
					centerPadding: '100px'
				}
			},
			{
				breakpoint: 578,
				settings: {
					centerPadding: '60px'
				}
			}
		]
	});
	
if (window.screen.width <= 992 && window.screen.width >= 579) {
		$('.profit-wrap.three-profit').slick({
			dots: false,
			arrows: false,
			infinite: false,
			centerMode: true,
			adaptiveHeight: true,
			centerPadding: '60px',
			slidesToShow: 1,
			slidesToScroll: 1
		});
	}
	
	
	
}); //end