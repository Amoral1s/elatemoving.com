jQuery(document).ready(function ($) {
	
	
	//Sliders
	const reviewsSlider = document.querySelectorAll('.reviews-wrap.swiper');
	if (reviewsSlider.length > 0) {
		reviewsSlider.forEach(elem => {
			const arrPrev = elem.parentElement.querySelector('.arr-prev');
			const arrNext = elem.parentElement.querySelector('.arr-next');
			new Swiper(elem, {
				/* pagination: {
					el: '.project-pagination',
				}, */
				navigation: {
					nextEl: arrNext,
					prevEl: arrPrev,
				},
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 10,
					},
					768: {
						slidesPerView: 2,
						spaceBetween: 20,
					}
				},
			});
		});
		
	}
	const howWorkSlider = document.querySelector('.how-wrap-slider.swiper');
	if (howWorkSlider) {
		new Swiper(".how-wrap-slider.swiper", {
			navigation: {
				nextEl: '.how .arr-next',
				prevEl: '.how .arr-prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 10,
				},
				768: {
					slidesPerView: 2,
					spaceBetween: 20,
				},
				992: {
					slidesPerView: 3,
					spaceBetween: 20,
				}
			},
		});
	}
	const teamSlider = document.querySelector('.team-slider.swiper');
	if (teamSlider) {
		new Swiper(".team-slider.swiper", {
			navigation: {
				nextEl: '.team .arr-next',
				prevEl: '.team .arr-prev',
			},
			breakpoints: {
				300: {
					slidesPerView: 1,
					spaceBetween: 20,
				},
				579: {
					slidesPerView: 2,
					spaceBetween: 10,
				},
				992: {
					slidesPerView: 4,
					spaceBetween: 20,
				},
				1245: {
					slidesPerView: 5,
					spaceBetween: 20,
				}
			},
		});
	}

	if (window.screen.width <= 992) {
		const blogSlider = document.querySelector('.blog-slider.swiper');
		if (blogSlider) {
			new Swiper(".blog-slider.swiper", {
				breakpoints: {
					300: {
						slidesPerView: 1,
						spaceBetween: 10,
					},
					767: {
						slidesPerView: 2,
						spaceBetween: 10,
					}
				},
			});
		}
	}
	//Sliders end
	
/* 
	$('.magnific-about').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});
*/

/* const links = document.querySelectorAll('a');

if (links) {
	links.forEach((elem) => {
		if (elem.href.indexOf('#') != -1) {
			elem.classList.add('click');
		}
	});
} */



		
  $(".wpcf7").on('wpcf7mailsent', function(event){

		if (event.detail.contactFormId == '426') {
			$('#thx-sub').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx-sub').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		} else {
			$('#thx').fadeIn(200);
			$('.popup').addClass('popup-thx');
			$('#thx').removeClass('popup-thx');
			$('.overlay').fadeIn(300);
		}
   
    /* setTimeout(function(){
      $('.overlay').fadeOut(300);
      $('.popup').fadeOut(300);
      $('#thx').fadeOut(200);
    },2500);   */
  });
  $(".wpcf7").on('wpcf7invalid', function(event){
    alert('Fill in all fields correctly and submit the form again!');
  });
  $(".wpcf7").on('wpcf7mailfailed', function(event){
    alert('Error sending! Try submitting your application later!');
  });
	
	document.addEventListener('input', (event) => {
		if (event.target.value != '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.add('listen');
			}
		}
		if (event.target.value === '') {
			if (event.target.closest('.input')) {
				event.target.closest('.input').classList.remove('listen');
			}
		}
	});
	//Header
	
	if (window.screen.width <= 992) {
		$(window).scroll(function() { 
			if ($(window).scrollTop() > 200) {
				$('.header').addClass('active');
			} else {
				$('.header').removeClass('active');
			}
		});
		$('.burger').on('click', function() {
			$('.mobile-menu').slideDown(200);
		});
		$('.mobile-menu .close').on('click', function() {
			$('.mobile-menu').slideUp(200);
		});

		$('li.menu-item-has-children > a').click(function(e) {
			e.preventDefault();
			$(this).next().next('ul').slideToggle(200);
			$(this).toggleClass('active');
		});
	} else {
		$('li.menu-item-has-children').hover(function() {
			$(this).children('ul').slideToggle(200);
		});
	}
	$('.search-toggle').on('click', function() {
		$('.popup-search').fadeIn(300);
		$('.overlay').fadeIn(300)
	});
	$('.overlay').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300)
	});
	$('.popup .close').on('click', function() {
		$('.popup').fadeOut(300);
		$('.overlay').fadeOut(300)
	});
	//Header end
	$('.about-us-video ').on('click', function() {
		if (!$(this).hasClass('active')) {
			$(this).addClass('active');
			$(this).children('img').fadeOut(0);
			$(this).children('iframe').fadeIn(300);
			$(this).children('iframe').attr('src', $(this).children('img').attr('data-video'))
		}
		
	});

	wow = new WOW({
		boxClass:     'wow',      // default
		animateClass: 'animated', // default
		offset:       0,          // default
		mobile:       true,       // default
		live:         true        // default
	});
	wow.init();


	if (window.screen.width <= 578) {
		const destWrap = document.querySelector('.destination-wrap')
		if (destWrap && destWrap.scrollHeight > 230) {
			const newBtn = document.createElement('div');
			newBtn.classList.add('button');
			newBtn.textContent = 'Show more';
			destWrap.parentElement.appendChild(newBtn);
			destWrap.style.height = '230px';
			destWrap.classList.add('show-more');
			newBtn.addEventListener('click', () => {
				destWrap.style.height = 'auto';
				destWrap.classList.remove('show-more');
				newBtn.remove();
			});
		}
	}

	const reviewsList = document.querySelectorAll('.reviews-list .item');

	if (reviewsList.length > 5) {
		const revWrap = reviewsList[0].parentElement;
		revWrap.parentElement.classList.add('show-more');
		const newBtn = document.createElement('div');
		newBtn.classList.add('button');
		newBtn.textContent = 'Load more';
		revWrap.appendChild(newBtn);
		newBtn.addEventListener('click', () => {
			revWrap.parentElement.classList.remove('show-more');
			newBtn.remove();
			window.scrollBy(0, 1);
		});
	}

	$('.button.add-review').on('click', function() {
		$('.popup.review').fadeIn(300);
		$('.overlay').fadeIn(300);
		starRatingFunc();
	});

	const starRatingFunc = () => {
		const stars = document.querySelectorAll('.popup.review .form-stars img');
		const starsWrap = stars[0].parentElement;

		stars.forEach((e, i) => {
			e.addEventListener('click', (event) => {
				starsWrap.classList.add('selected');
				$('.stars-input').val(i + 1)
				stars.forEach(e => {
					e.classList.remove('active')
				})
				for (let r = 0; r < i + 1; r++) {
					stars[r].classList.add('active');
				}
				
			})
		})
		
		$(stars).hover(function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).addClass('active');
				$(this).prev().addClass('active');
				$(this).prev().prev().addClass('active');
				$(this).prev().prev().prev().addClass('active');
				$(this).prev().prev().prev().prev().addClass('active');
			}
		}, function() {
			if (!starsWrap.classList.contains('selected')) {
				$(this).removeClass('active');
				$(this).prev().removeClass('active');
				$(this).prev().prev().removeClass('active');
				$(this).prev().prev().prev().removeClass('active');
				$(this).prev().prev().prev().prev().removeClass('active');
			}

			
		});

	}
	
	const vacancyMenu = document.querySelector('.vacancy-menu');

	if (vacancyMenu) {
		const menuItems = vacancyMenu.querySelectorAll('.item');
		const vanacyWrappers = document.querySelectorAll('.vacancy-wrap .wrapper');
		vacancyMenu.addEventListener('click', (event, index) => {
			let target = event.target;
			menuItems.forEach((menuItem, indexMenuItem) => {
				menuItem.classList.remove('active');
				if (menuItem == target.closest('.item')) {
					menuItem.classList.add('active');
					vanacyWrappers.forEach((wrap) => {
						wrap.style.display = 'none';
					});
					if (indexMenuItem === 0) {
						vanacyWrappers.forEach((wrap) => {
							wrap.style.display = 'block';
						});
					} else {
						vanacyWrappers[indexMenuItem - 1].style.display = 'block';
					}
				}
			});
		})
	}

	const checlistPage = document.querySelector('.checklist-wrap');

	if (checlistPage) {
		
		checlistPage.addEventListener('click', (event) => {
			let target = event.target;
			if (target.closest('.item')) {
				if (target.closest('.item').classList.contains('active')) {
					target.closest('.item').classList.remove('active');
				} else {
					target.closest('.item').classList.add('active');
				}
			}
		})
	}

	const faqCosts = document.querySelector('.faq-costs');

	if (faqCosts) {
		faqCosts.addEventListener('click', (event) => {
			let target = event.target;
			
			if (target.closest('.faq-toggle').classList.contains('active')) {
				$(target.closest('.item')).children('.content').slideUp(200);
				target.closest('.faq-toggle').classList.remove('active');
			} else {
				$(target.closest('.item')).children('.content').slideDown(200);
				target.closest('.faq-toggle').classList.add('active');
			}
		})
	}

	const blogBreadcrumbs = document.querySelector('.blog-bread > span');

	if (blogBreadcrumbs) {
		const blogLink = document.createElement('span');
		blogLink.innerHTML = `<span><a href="/our-blog/">Our blog</a></span> / `;
		const referenceElement = blogBreadcrumbs.querySelector('.breadcrumb_last');
		blogBreadcrumbs.insertBefore(blogLink, referenceElement);
	}

	const singlePage = document.querySelector('.only-single-page');

	if (singlePage) {
		const navWrap = document.querySelector('.single-nav-wrap');
		const navWrapParent = navWrap.parentElement;
		const content = document.querySelector('.content');
		const contentBlocks = content.querySelectorAll('*');
		let elems = 0;
		contentBlocks.forEach((elem, index) => {
			if (elem.id) {
				const navLink = document.createElement('a');
				navLink.href = `#${elem.id}`;
				navLink.classList.add('anchor');
				navLink.textContent = elem.id.replace(/\-/g, ' ');
				navWrap.appendChild(navLink);
				elems++;
			}
		});
		if (elems === 0) {
			navWrapParent.remove();
		}
		const rating = document.querySelector('.wpd-rating-stars').cloneNode(true);
		const ratngTopWrap = document.querySelector('.new-rating');
		const ratngVotes = document.querySelector('.wpd-rating-value .wpdrc').textContent;
		const votes = document.querySelector('.votes');

		ratngTopWrap.appendChild(rating);
		votes.textContent = ratngVotes;
	}
	$(".anchor").click(function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top - 50;
		$("html:not(:animated),body:not(:animated)").animate({scrollTop: destination}, 500);
		return false;
	});

	const getForm = document.querySelectorAll('.get-form');
	if (getForm.length > 0) {
		getForm.forEach((form, formIndex) => {
			const button = form.querySelector('a');
			const inputFrom = form.querySelector('.input-from');
			const inputTo = form.querySelector('.input-to');

			button.addEventListener('click', (event) => {
				event.preventDefault();
				localStorage.setItem("From", inputFrom.value);
				localStorage.setItem("To", inputTo.value);
				window.location = button.href;
			/* 	if (inputFrom.value && inputTo.value) {
					localStorage.setItem("From", inputFrom.value);
					localStorage.setItem("To", inputTo.value);
					window.location = button.href;
				} else {
					alert('Enter the moving location and destination');
				} */
			})
		});
	}
	const quotePage = document.querySelector('.quote-page');

	if (quotePage) {
		const inputFrom = document.querySelector('input.got-from');
		const inputTo = document.querySelector('input.got-to');

		setTimeout(() => {
			inputFrom.value = localStorage.getItem('From');
			inputTo.value = localStorage.getItem('To');
		}, 1000);

		inputFrom.parentElement.classList.add('listen');
		inputTo.parentElement.classList.add('listen');	
	} 

	const fileInput = document.querySelector('.wpcf7-file');

	if (fileInput) {
		const fileWrap = document.querySelector('div.file');
		//const fileName = fileInput.files[0].name;

		fileWrap.addEventListener('click', () => {
			fileInput.click();
		});
		const text = fileWrap.querySelector('b');

		fileInput.addEventListener('change', () => {
			if (fileInput.files[0]) {
				text.textContent = fileInput.files[0].name;
			} else {
				text.textContent = 'Drop a file here or click to upload';
			}
		})
	}

	const tabsItem = document.querySelectorAll('.tabs-title .item');

	if (tabsItem.length > 0) {
		const tabsWrappers = document.querySelectorAll('.tabs-wrapper .wrap');
		tabsItem.forEach((elem, index) => {
			elem.addEventListener('click', () => {
				if (!elem.classList.contains('active')) {
					tabsItem.forEach(e => e.classList.remove('active'))
					elem.classList.add('active');
					tabsWrappers.forEach(e => e.classList.remove('active'));
					tabsWrappers[index].classList.add('active');
				} 
			});
		});
	}

	if (window.screen.width <= 992) {
		const landingContentRows = document.querySelectorAll('.img-content .wrap');

		if (landingContentRows.length > 0) {
			landingContentRows.forEach(e => {
				const img = e.querySelector('.right img');
				const left = e.querySelector('.left');
				const right = e.querySelector('.right');
				const newImg = img.cloneNode(true);

				left.appendChild(newImg);
				right.remove();
			})
		}
	}

	const accelerator = document.querySelectorAll('a');

	accelerator.forEach(e => {
		if (e.href.indexOf('accelerator') != -1) {
			e.remove();
			setTimeout(() => {
				if (e) {
					e.remove();
				}
			}, 5000);
		}
	});
	
	const phonesInputs = document.querySelectorAll('.wpcf7-validates-as-tel');

	if (phonesInputs.length > 0) {
		phonesInputs.forEach(phone => {
			phone.addEventListener('input', () => {
				phone.value = phone.value.replace(/[^0-9\+\-\)\(]/g, '');
			});
		})
	}

	

}); //end