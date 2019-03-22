jQuery(window).on('load', function () {
    var $preloader = jQuery('#p_prldr'),
    $svg_anm   = $preloader.find('.svg_anm');
    $svg_anm.fadeOut();
    $preloader.delay(500).fadeOut('slow');
    // jQuery('a').on('click',function(e){
    //     e.preventDefault();
    //     var $preloader = jQuery('#p_prldr'),
    //     $svg_anm   = $preloader.find('.svg_anm');
    //     $svg_anm.fadeIn();
    //     $preloader.delay(500).fadeIn('slow');
    //     setTimeout(function(){
    //         window.location = jQuery(this).attr('href');
    //     },500)
    // })

});


(function (jQuery) {
	'use strict';

	var jQuerywindow = jQuery(window);

    // :: Preloader Active Code
    jQuerywindow.on('load', function () {
    	jQuery('#preloader').fadeOut('slow', function () {
    		jQuery(this).remove();
    	});
    });
    jQuery(document).ready(function () {
    	jQuery("a.scrollto").click(function () {
    		var elementClick = jQuery(this).attr("href")
    		var destination = jQuery(elementClick).offset().top;
    		jQuery("html:not(:animated),body:not(:animated)").animate({
    			scrollTop: destination
    		}, 800);
    		return false;
    	});
    });
    // :: Fullscreen Active Code
    jQuerywindow.on('resizeEnd', function () {
    	jQuery(".full_height").height(jQuerywindow.height());
    });

    jQuerywindow.on('resize', function () {
    	if (this.resizeTO) clearTimeout(this.resizeTO);
    	this.resizeTO = setTimeout(function () {
    		jQuery(this).trigger('resizeEnd');
    	}, 300);
    }).trigger("resize");

    // :: Sticky Active Code
    jQuerywindow.on('scroll', function () {
    	if (jQuerywindow.scrollTop() > 0) {
    		jQuery('.header-area').addClass('sticky');
    	} else {
    		jQuery('.header-area').removeClass('sticky');
    	}
    });

    // :: Menu Active Code
    jQuery('#menuIcon').on('click', function () {
    	jQuery('body').toggleClass('menu-open');
    });
    jQuery('.closeIcon').on('click', function () {
    	jQuery('body').removeClass('menu-open');
    });

    // :: Tooltip Active Code
    jQuery('[data-toggle="tooltip"]').tooltip()

    // :: Nicescroll Active Code
    // if (jQuery.fn.niceScroll) {
    //     jQuery("body, textarea").niceScroll({
    //         cursorcolor: "#151515",
    //         cursorwidth: "6px",
    //         background: "#f0f0f0"
    //     });
    // }

    // :: Owl Carousel Active Code
    if (jQuery.fn.owlCarousel) {

    	var welcomeSlide = jQuery('.hero-slides');

    	jQuery('.hero-slides').owlCarousel({
    		items: 4,
    		loop: true,
    		dots: true,
    		margin: 20,
    		autoplay: true,
    		autoplayTimeout: 5000,
    		smartSpeed: 1000,
    		responsive: {
    			0: {
    				items: 1
    			},
    			560: {
    				items: 2
    			},
    			700: {
    				items: 3
    			},
    			992: {
    				items: 4
    			},
    			1600: {
    				items: 6
    			}
    		}
    	});

    	welcomeSlide.on('translate.owl.carousel', function () {
    		var slideLayer = jQuery("[data-animation]");
    		slideLayer.each(function () {
    			var anim_name = jQuery(this).data('animation');
    			jQuery(this).removeClass('animated ' + anim_name).css('opacity', '0');
    		});
    	});

    	welcomeSlide.on('translated.owl.carousel', function () {
    		var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
    		slideLayer.each(function () {
    			var anim_name = jQuery(this).data('animation');
    			jQuery(this).addClass('animated ' + anim_name).css('opacity', '1');
    		});
    	});

    	jQuery("[data-delay]").each(function () {
    		var anim_del = jQuery(this).data('delay');
    		jQuery(this).css('animation-delay', anim_del);
    	});

    	jQuery("[data-duration]").each(function () {
    		var anim_dur = jQuery(this).data('duration');
    		jQuery(this).css('animation-duration', anim_dur);
    	});

    	jQuery('.testimonial-slides').owlCarousel({
    		items: 1,
    		margin: 0,
    		loop: true,
    		dots: true,
    		autoplay: true,
    		autoplayTimeout: 5000,
    		smartSpeed: 1000
    	});
    }

    // :: Progress Bar Active Code
    if (jQuery.fn.barfiller) {
    	jQuery('#bar1').barfiller({
    		tooltip: true,
    		duration: 1000,
    		barColor: '#1d1d1d',
    		animateOnResize: true
    	});
    	jQuery('#bar2').barfiller({
    		tooltip: true,
    		duration: 1000,
    		barColor: '#1d1d1d',
    		animateOnResize: true
    	});
    	jQuery('#bar3').barfiller({
    		tooltip: true,
    		duration: 1000,
    		barColor: '#1d1d1d',
    		animateOnResize: true
    	});
    	jQuery('#bar4').barfiller({
    		tooltip: true,
    		duration: 1000,
    		barColor: '#1d1d1d',
    		animateOnResize: true
    	});
    }

    // :: Gallery Menu Style Active Code
    jQuery('.portfolio-menu button.btn').on('click', function () {
    	jQuery('.portfolio-menu button.btn').removeClass('active');
    	jQuery(this).addClass('active');
    })

    // :: Masonary Gallery Active Code
    if (jQuery.fn.imagesLoaded) {
    	jQuery('.sonar-portfolio').imagesLoaded(function () {
            // filter items on button click
            jQuery('.portfolio-menu').on('click', 'button', function () {
            	var filterValue = jQuery(this).attr('data-filter');
            	jQuerygrid.isotope({
            		filter: filterValue
            	});
            });
            // init Isotope
            var jQuerygrid = jQuery('.sonar-portfolio').isotope({
            	itemSelector: '.single_gallery_item',
            	percentPosition: true,
            	masonry: {
            		columnWidth: '.single_gallery_item'
            	}
            });
        });
    }

    // :: Magnific Popup Active Code
    if (jQuery.fn.magnificPopup) {
    	jQuery('.gallery-img').magnificPopup({
    		type: 'image'
    	});
    }

    // :: MatchHeight Active Code
    if (jQuery.fn.matchHeight) {
    	jQuery('.equalize').matchHeight({
    		byRow: true,
    		property: 'height'
    	});
    }

    // :: CounterUp Active Code
    if (jQuery.fn.counterUp) {
    	jQuery('.counter').counterUp({
    		delay: 10,
    		time: 2000
    	});
    }

    // :: ScrollUp Active Code
    if (jQuery.fn.scrollUp) {
    	jQuery.scrollUp({
    		scrollSpeed: 1000,
    		easingType: 'easeInOutQuart',
    		scrollText: '<i class="fa fa-angle-up" aria-hidden="true"></i>'
    	});
    }

    // :: PreventDefault a Click
    jQuery("a[href='#']").on('click', function (jQuery) {
    	jQuery.preventDefault();
    });

    // :: wow Active Code
    if (jQuerywindow.width() > 767) {
    	new WOW().init();
    }

})(jQuery);

jQuery('div').click(function () {
	if (jQuery(this).attr('data-href')) {
		window.location = jQuery(this).attr('data-href');
	}
})


function getRandomColor() {
	var letters = '0123456789ABCDEF';
	var color = '#';
	for (var i = 0; i < 6; i++) {
		color += letters[Math.floor(Math.random() * 16)];
	}
	return color;
}

function setRandomColor(elem, style) {
	var elem = jQuery(elem);
	for (var i = 0; i < elem.length; i++) {
		jQuery(elem[i]).css(style, getRandomColor());
	}
}

setRandomColor('.count', "background-color");

jQuery('.show-list-btn').click(function () {
	if(jQuery(this).parents('.entry').find('.hide-list').is(':hidden')){
		jQuery(this).parents('.entry').find('.hide-list').show(200)
	}else{
		jQuery(this).parents('.entry').find('.hide-list').hide(200)
	}

})

function countCalc(classNum, classWrap, classList, classMax, classMin) {

	var numCount = +jQuery(classNum).val();
	var listElem = jQuery(classList);
	var arr = [];
	for (var i = 0; i < listElem.length; i++) {
		arr.push(jQuery(listElem[i]).text() / numCount);
	}
	if (localStorage.getItem('LOCALCOUNT')) {
		jQuery(classNum).val(localStorage.getItem('LOCALCOUNT'))
		for (var i = 0; i < arr.length; i++) {
			jQuery(listElem[i]).text((Math.round((arr[i] * jQuery(classNum).val()) * 100) / 100).toFixed(1));
		}
	}
	jQuery(classWrap).click(function (e) {

		var e = e.target;

		var numCount = +jQuery(classNum).val();
		if (jQuery(e).hasClass(classMin)) {

			if (numCount > 1) {
				jQuery(classNum).val(numCount - 1);
				for (var i = 0; i < listElem.length; i++) {
					jQuery(listElem[i]).text((Math.round((arr[i] * jQuery(classNum).val()) * 100) / 100).toFixed(1));
				}
			}
		} else if (jQuery(e).hasClass(classMax)) {
			jQuery(classNum).val(numCount + 1);
			for (var i = 0; i < arr.length; i++) {
				jQuery(listElem[i]).text((Math.round((arr[i] * jQuery(classNum).val()) * 100) / 100).toFixed(1));
			}
		}
		localStorage.setItem('LOCALCOUNT', jQuery(classNum).val())
	})
	jQuery(classNum).focusout(function (event) {
		if (jQuery.isNumeric(jQuery(classNum).val())) {
			for (var i = 0; i < arr.length; i++) {
				jQuery(listElem[i]).text(Math.round((arr[i] * jQuery(classNum).val()) * 100) / 100);
			}
		} else {
			jQuery(classNum).val(1);
		}

	});
	jQuery(classNum).keyup(function (event) {
		if (jQuery.isNumeric(jQuery(classNum).val())) {
			for (var i = 0; i < arr.length; i++) {
				jQuery(listElem[i]).text(Math.round((arr[i] * jQuery(classNum).val()) * 100) / 100);
			}
		} else {
			jQuery(classNum).val(1);
		}

	});
}

countCalc('.num-list-count', '.list-collapse', '.count_num', 'plus', 'minus');
jQuery(function () {
	jQuery('[data-toggle="popover"]').popover()
})


var wrapFixed = jQuery('<div class="fixed-wrap "></div>');
var objPost = {
	title: 1,
	src: '',
	link: ''
};
var arrPost = [];

var minText = '<i class="fa fa-minus"></i>';
var plusText = '<i class="fa fa-plus"></i>';

function addPost(btn, wrap, title, img, link) {


	jQuery(btn).click(function () {
		var elem = jQuery(this).parents(wrap);
		var elemTitle = jQuery(elem).find(title).text();
		var elemLink = jQuery(elem).find(link).attr('href');
		var listWrap = jQuery(wrap);
		if (!jQuery(this).hasClass('disable')) {
			jQuery(this).addClass('disable').html(minText);
			for (var i = 0; i < listWrap.length; i++) {
				if (jQuery(listWrap[i]).find(title).text() == elemTitle) {
					jQuery(listWrap[i]).find(btn).addClass('disable').html(minText);
				}
			}
			var existingEntries = JSON.parse(localStorage.getItem("userlist"));
			objPost.title = elemTitle;
			objPost.src = jQuery(elem).find(img).attr('src').replace(/\s+/g, '');
			objPost.link = elemLink;
			arrPost.push(Object.assign({}, objPost));
			showPost(arrPost);
			if (existingEntries == null) existingEntries = [];
			localStorage.setItem("entry", JSON.stringify(objPost));
			existingEntries.push(objPost);
			localStorage.setItem("userlist", JSON.stringify(existingEntries));
		} else {
			jQuery(this).removeClass('disable').html(plusText);
			for (var i = 0; i < listWrap.length; i++) {
				if (jQuery(listWrap[i]).find(title).text() == elemTitle) {
					jQuery(listWrap[i]).find(btn).removeClass('disable').html(plusText);
				}
			}
			var existingEntries = JSON.parse(localStorage.getItem("userlist"));
			search(elemTitle, existingEntries);
			localStorage.setItem("userlist", JSON.stringify(existingEntries));
			var listElem = jQuery('.fixed-wrap-post');
			for (var i = 0; i < listElem.length; i++) {
				if (jQuery(listElem[i]).find('.fixed-wrap--title').text().replace(/\s+/g, '') == elemTitle.replace(/\s+/g, '')) {
					jQuery(listElem[i]).fadeOut(200);
					setTimeout(function () {
						jQuery(listElem[i]).remove();
					}, 200)
				}
			}
		}


	})
}


function search(nameKey, myArray) {
	if (myArray) {
		for (var i = 0; i < myArray.length; i++) {
			if (myArray[i].title.replace(/\s+/g, '') == nameKey.replace(/\s+/g, '')) {
				myArray.splice(i, 1);
				break;
			}
		}
	}

}

function showPost(arr) {
	var titleFixed = jQuery('<div class="fixed-wrap-post"><img src="' + arr[arr.length - 1].src + '" /><button class=\'remove-post btn btn-secondary-dev btn-secondary-dev-c1\'><i class="fa fa-minus"></i></button><h2 class="fixed-wrap--title">  ' + arr[arr.length - 1].title + '</h2><a href=' + arr[arr.length - 1].link + ' class="fixed-link"></a><div>');
	jQuery(wrapFixed).prepend(titleFixed);

}

function showlocalpost() {

	if (localStorage.getItem("userlist")) {
		var elem2 = localStorage.getItem("userlist");
		elem = JSON.parse(elem2);
		if (elem !== null) {
			for (var i = 0; i < elem.length; i++) {
				var titleFixed = jQuery('<div class="fixed-wrap-post"><img src="' + elem[i].src + '" /><button class=\'remove-post btn btn-secondary-dev btn-secondary-dev-c1\'><i class="fa fa-minus"></i></button><h2 class="fixed-wrap--title">' + elem[i].title + '</h2><a href=' + elem[i].link + ' class="fixed-link"></a><div>');
				jQuery(wrapFixed).append(titleFixed);
			}
		}


		addClassLoadPage('.entry-content', '.entry-title', 'disable', '.addPost-btn', elem);
	}

}


jQuery(".fixed-container").append(wrapFixed);

addPost('.addPost-btn', '.entry-content', '.entry-title', '.wp-post-image', '.featured-recipe');
showlocalpost();
jQuery(document).on('click', function (e) {
	removeFixedPost(e, '.entry-content', '.entry-title', '.addPost-btn', 'disable')
})


function removeFixedPost(e, wrapSingle, wraptitle, wrapBtn, classBtnMinus) {
	e = e.target;
	if (jQuery(e).hasClass('remove-post')) {
		var elem = jQuery(e).parents('.fixed-wrap-post');
		var elemTile = jQuery(e).parents('.fixed-wrap-post').find('.fixed-wrap--title').text();
		elem.hide();
		elem.remove();
		if (jQuery('.remove-post').length < 1) {
			jQuery('.btn-wrap').trigger('click');
		}
		var existingEntries = JSON.parse(localStorage.getItem("userlist"));
		search(elemTile, existingEntries);
		localStorage.setItem("userlist", JSON.stringify(existingEntries));
		var listElem = jQuery(wrapSingle);
		for (var i = 0; i < listElem.length; i++) {
			if (jQuery(listElem[i]).find(wraptitle).text().replace(/\s+/g, '') == elemTile.replace(/\s+/g, '')) {
				jQuery(listElem[i]).find(wrapBtn).removeClass(classBtnMinus).html(plusText);
			}
		}
	}
}

// jQuery(document).on('click ready', function(){
//    setTimeout(function(){
//         if(jQuery('.count-post-length').text() < 1){
//         jQuery('.fixed-container').css('transform','translateY(100%)');
//     }else{
//         jQuery('.fixed-container').css('transform','');

//     }
//    })

// })

// Add class to button Add to init
function addClassLoadPage(wrapPost, wrapPostTitle, addClass, btn, elem) {
	var singlePost = jQuery(wrapPost).find(wrapPostTitle);
	for (var j = 0; j < singlePost.length; j++) {
		for (var k = 0; k < elem.length; k++) {
			if (jQuery(singlePost[j]).text().replace(/\s+/g, '') == elem[k].title.replace(/\s+/g, '')) {
				jQuery(singlePost[j]).parents(wrapPost).find(btn).addClass(addClass).html(minText);
			}
		}
	}
}

// jQuery(document).ready(function(){
//     var height = jQuery('.fixed-wrap').height();
//     jQuery('.fixed-container').css('transform','translateY('+height+'px)')
// })
// jQuery(document).click(function(){
//     var height = jQuery('.fixed-wrap').height();
//     jQuery('.fixed-container').css('transform','translateY('+height+'px)')
// })
jQuery('.btn-wrap').click(function () {
	if (!jQuery('.fixed-container').hasClass('show')) {
		jQuery('.fixed-container').addClass('show');
		jQuery('#exampleModal').modal('show')
	} else {
		jQuery('#exampleModal').modal('hide');
		jQuery('.fixed-container').removeClass('show');

	}
})
jQuery('#exampleModal').click(function () {
	jQuery('.fixed-container').removeClass('show');
})

jQuery(document).click(function () {
	var existingEntries = JSON.parse(localStorage.getItem("userlist"));
	if (existingEntries) {
		jQuery('.count-post-length').html(existingEntries.length)

	}
})
jQuery(document).ready(function () {
	var existingEntries = JSON.parse(localStorage.getItem("userlist"));
	if (existingEntries) {
		jQuery('.count-post-length').html(existingEntries.length)

	}
})


// jQuery('#collapse_ingredient').on('shown.bs.collapse', function () {
//     if(!jQuery('#elem-collapse').find('i').attr('style') == 'transform: rotate(180deg);'){
//         jQuery('#elem-collapse').find('i').css('transform','rotate(180deg)');
//     }else{
//         jQuery('#elem-collapse').find('i').css('transform','');
//     }
// });


jQuery('.wrapper-bg-cat-min').mouseover(function (event) {
	jQuery('.nav-box').addClass('nav-box-show')
});
jQuery('.wrapper-bg-cat-min').mouseout(function (event) {
	jQuery('.nav-box').removeClass('nav-box-show')
});

jQuery('.button--moema').click(function () {
	if (!jQuery(this).hasClass('button--moema-active')) {
		jQuery(this).addClass('button--moema-active');
	}
	setTimeout(function () {
		jQuery('.button--moema').removeClass('button--moema-active')
	}, 1000)
})


jQuery('.thumbs-up').click(function () {
	jQuery('.vortex-p-like').trigger('click')
})
jQuery('.thumbs-down').click(function () {
	jQuery('.vortex-p-dislike').trigger('click')
})

jQuery(document).ready(function () {
	jQuery('.through').click(function (e) {
		var text = jQuery(this).find('._ingredients').text().replace(/\s+/g, ''),
		item = jQuery('.list-group').find('.through');

		e.preventDefault();
		if (!jQuery(this).hasClass('through-active')) {
			hasClassItem(item, text, true)
		} else {
			hasClassItem(item, text)
		}

	})

	function hasClassItem(arr, text, elem) {
		jQuery.each(arr, function (i) {
			if (jQuery(arr[i]).find('._ingredients').text().replace(/\s+/g, '').indexOf(text) != -1) {
				if (elem) {
					jQuery(arr[i]).addClass('through-active');

				} else {
					jQuery(arr[i]).removeClass('through-active');
				}
			}
		})
	}


	function showRect(elem, elem2, addClassElem) {
		var elemPage = jQuery('body').find(elem);
		if (elemPage.length) {
			var top = jQuery(elem).offset().top - jQuery(window).scrollTop();
			if (top < 0) {
				jQuery(elem2).addClass(addClassElem);
			} else {
				jQuery(elem2).removeClass(addClassElem);
			}
		}
	}

	jQuery(window).scroll(function () {
		showRect('#elem-collapse', '.fixed-ing', 'fixed-ing-show');
	})
})


jQuery(document).ready(function () {
	jQuery('.menu-item').click(function (e) {
		if (jQuery(this).attr('id') == 'menu-item-106') {
			e.preventDefault();
			if (!jQuery(this).hasClass('show-menu-link')) {
				jQuery('.menu-item').removeClass('show-menu-link');
				jQuery(this).addClass('show-menu-link');
				jQuery('.wrap-nav-sub').removeClass('show-menu');
				jQuery('.wrap-nav-sub-country').addClass('show-menu');
			} else {
				jQuery(this).removeClass('show-menu-link');
				jQuery('.wrap-nav-sub').removeClass('show-menu');
			}

		} else if (jQuery(this).attr('id') == 'menu-item-105') {
			e.preventDefault();
			if (!jQuery(this).hasClass('show-menu-link')) {
				jQuery('.menu-item').removeClass('show-menu-link');
				jQuery(this).addClass('show-menu-link');
				jQuery('.wrap-nav-sub').removeClass('show-menu');
				jQuery('.wrap-nav-sub-type').addClass('show-menu');
			} else {
				jQuery(this).removeClass('show-menu-link');
				jQuery('.wrap-nav-sub').removeClass('show-menu');
			}

		}
	})
})
jQuery('.btn-nav-collapse').click(function () {
	jQuery(this).find('.hamburger').toggleClass('is-active');
})

function showNavIndicators() {
	var showList = jQuery('.tab-pane.show .cd-section');
	jQuery('.tab-pane .cd-section').attr('id', '');
	jQuery(showList).each(function (i) {
		jQuery(showList[i]).attr('id', 'section' + [i + 1] + '');
		jQuery('.cd-vertical-nav ul').append('<li><a href="#section' + [i + 1] + '" data-number="' + [i + 1] + '"><span class="cd-dot"></span><span class="cd-label">' + jQuery(showList[i]).find('.aside-title').text() + '</span></li>');
	})
}


jQuery(document).ready(function () {
	showNavIndicators();
})
jQuery('.nav-item ').click(function () {
	jQuery('.cd-vertical-nav ul li').replaceWith();
	setTimeout(function () {
		showNavIndicators();
	}, 200)
})


jQuery(document).ready(function () {
	setTimeout(function () {
		jQuery('.fixed-container').addClass('fixed-container-animation');
	}, 1000)
})


jQuery('.hamburger--collapse').click(function () {
	if (jQuery(this).hasClass('is-active')) {
		jQuery(this).removeClass('is-active')
		if (jQuery(window).width() > 500) {

			jQuery('.fixed-ing').css('transform', 'translateY(' + jQuery('.fixed-ing-collapse').height() + 'px' + ')');
		} else {
			jQuery('.fixed-ing').css('transform', 'translateY(' + jQuery('.fixed-ing-collapse').height() + 'px' + ')');
		}
	} else {
		jQuery('.fixed-ing').css('transform', 'translate(0%)');
		jQuery(this).addClass('is-active')
	}


})


jQuery(document).ready(function () {
	var arr = [
	{
		name: 'помидо',
		image: '/wp-content/uploads/2018/09/Tomatoes.png',
		calories: 20,
		proteins: 1.1,
		carbohydrates: 3.7,
		fats: 0.2
	},
	{
		name: 'яйц',
		image: '/wp-content/uploads/2018/09/Eggs-PNG-Clipart.png',
		calories: 157,
		proteins: 12.7,
		carbohydrates: 0.7,
		fats: 10.9
	},
	{
		name: 'рукко',
		image: '/wp-content/uploads/2018/09/rukk-1.png',
		calories: 25,
		proteins: 2.6,
		carbohydrates: 2.1,
		fats: 0.7
	},
	{
		name: 'авокад',
		image: '/wp-content/uploads/2018/09/avocado.png',
		calories: 212,
		proteins: 2.0,
		carbohydrates: 6.0,
		fats: 20.0
	},
	{
		name: 'кинз',
		image: '/wp-content/uploads/2018/09/kinza.png',
		calories: 23,
		proteins: 2.1,
		carbohydrates: 1.9,
		fats: 0.5
	},
	{
		name: 'оливково',
		image: '/wp-content/uploads/2018/09/oilO.png',
		calories: 898,
		proteins: 0.0,
		carbohydrates: 0.0,
		fats: 99.8
	},
	{
		name: 'сол',
		image: '/wp-content/uploads/2018/09/soil.png',
		calories: 0,
		proteins: 0,
		carbohydrates: 0,
		fats: 0
	},
	{
		name: 'черный',
		image: '/wp-content/uploads/2018/09/peper.png',
		calories: 251,
		proteins: 10.4,
		carbohydrates: 38.7,
		fats: 3.3
	},
	{
		name: 'чёрный',
		image: '/wp-content/uploads/2018/09/peper.png',
		calories: 251,
		proteins: 10.4,
		carbohydrates: 38.7,
		fats: 3.3
	},
	{
		name: 'оливки',
		image: '/wp-content/uploads/2018/09/olive.png',
		calories: 115,
		proteins: 0.8,
		carbohydrates: 6.3,
		fats: 10.7
	},
	{name:'мука',image:'https://lifeisfood.online/wp-content/uploads/2018/10/harina.jpg',calories:'342',proteins:'9.2',carbohydrates:'74.9',fats:'1.2'},
	{name:'тверд',image:'https://lifeisfood.online/wp-content/uploads/2018/10/655-402-topeno-sirene-kashkaval.jpg',calories:'363',proteins:'24.1',carbohydrates:'0.3',fats:'29.5'},
	{name:'бекон',image:'https://lifeisfood.online/wp-content/uploads/2018/09/580b57fbd9996e24bc43c08d.png',calories:'500',proteins:'23',carbohydrates:'0',fats:'45'},
	{name:'лук',image:'https://lifeisfood.online/wp-content/uploads/2018/09/onion.jpg',calories:'47',proteins:'1.4',carbohydrates:'10.4',fats:'0'},
	{name:'пармез',image:'https://lifeisfood.online/wp-content/uploads/2018/09/1088939292_w0_h430_parmezan.png',calories:'392',proteins:'33',carbohydrates:'0',fats:'28'},
	{name:'петруш',image:'https://lifeisfood.online/wp-content/uploads/2018/09/petrushka_b.png',calories:'47',proteins:'3.7',carbohydrates:'7.6',fats:'0.4'},
	{name:'чили',image:'https://lifeisfood.online/wp-content/uploads/2018/09/chili-pepper-psd-408417.png',calories:'40',proteins:'2',carbohydrates:'9.5',fats:'0.2'},
	{name:'чесн',image:'https://lifeisfood.online/wp-content/uploads/2018/09/garlic_PNG12779.png',calories:'143',proteins:'6.5',carbohydrates:'29.9',fats:'0.5'},
	{name:'мускат',image:'https://lifeisfood.online/wp-content/uploads/2018/09/2018-05-16-muskat.png',calories:'555',proteins:'20',carbohydrates:'7',fats:'50'},
	{name:'сельде',image:'https://lifeisfood.online/wp-content/uploads/2018/09/selderey_b.png',calories:'12',proteins:'0.9',carbohydrates:'2.1',fats:'0.1'},
	{name:'цветная',image:'https://lifeisfood.online/wp-content/uploads/2018/09/svetnaya-kapusta-gikkabd-iran.png',calories:'12',proteins:'0.9',carbohydrates:'2.1',fats:'0.1'},
	{name:'сливочное',image:'https://lifeisfood.online/wp-content/uploads/2018/10/tfa-butter.jpg',calories:'748',proteins:'0.5',carbohydrates:'0.8',fats:'82.5'},
	{name:'разрыхлитель',image:'https://lifeisfood.online/wp-content/uploads/2018/10/QAdohL1qeraZ0AghjgfwKw-1.jpg',calories:'79',proteins:'0.1',carbohydrates:'19.6',fats:'0'},
	{name:'сахар',image:'https://lifeisfood.online/wp-content/uploads/2018/10/mag-18WMT-t_CA0-jumbo.jpg',calories:'398',proteins:'0',carbohydrates:'99.7',fats:'0'},
	{name:'цедра',image:'https://lifeisfood.online/wp-content/uploads/2018/10/180815_lemon_peel.jpg',calories:'16',proteins:'0.9',carbohydrates:'3',fats:'0.1'},
	{name:'миндаль',image:'https://lifeisfood.online/wp-content/uploads/2018/10/almond-nuts-500x500.jpg',calories:'645',proteins:'18.6',carbohydrates:'16.2',fats:'57.7'},
        // {name:'твердый',image:'https://lifeisfood.online/wp-content/uploads/2018/10/655-402-topeno-sirene-kashkaval.jpg',calories:'363',proteins:'24.1',carbohydrates:'0.3',fats:'29.5'},
        {name:'панировочные',image:'https://lifeisfood.online/wp-content/uploads/2018/10/680501719_1_644x461_panirovochnye-suhari-dnpropetrovsk.jpg',calories:'347',proteins:'9.7',carbohydrates:'77.6',fats:'1.9'},
        {name:'растительное',image:'https://lifeisfood.online/wp-content/uploads/2018/10/shutterstock_127749158_13404.jpg',calories:'900',proteins:'0',carbohydrates:'0',fats:'99.9'},
        {name:'свинина',image:'https://lifeisfood.online/wp-content/uploads/2018/10/New-york-pork-roast-porkcheck.jpg',calories:'259',proteins:'16',carbohydrates:'0',fats:'21.6'},
        {name:'сливки',image:'https://lifeisfood.online/wp-content/uploads/2018/10/2927861.jpeg',calories:'337',proteins:'2.5',carbohydrates:'3',fats:'35'},
        {name:'клубника',image:'https://lifeisfood.online/wp-content/uploads/2018/10/13585481-strawberries-with-leaves-isolated-on-a-white-background-.jpg',calories:'41',proteins:'0.8',carbohydrates:'7.5',fats:'0.4'}
        ]
        var elem = jQuery('._ingredients');
        jQuery.each(elem, function (i) {

        	jQuery.each(arr, function (j) {

        		if (jQuery(elem[i]).text().replace(/\s+/g, '').toLowerCase().indexOf(arr[j].name) != -1) {
        			jQuery(elem[i]).parents('.form-check').find('._ingredients-image').append('<img src="' + arr[j].image + '" />')
        			jQuery(elem[i]).parents('.form-check').find('._ingredients-calories').append('<span class="calories-count">' + arr[j].calories + '</span>')
        			jQuery(elem[i]).parents('.form-check').find('._ingredients-proteins').append('<span class="proteins-count">' + arr[j].proteins + '</span>')
        			jQuery(elem[i]).parents('.form-check').find('._ingredients-carbohydrates').append('<span class="carbohydrates-count">' + arr[j].carbohydrates + '</span>')
        			jQuery(elem[i]).parents('.form-check').find('._ingredients-fats').append('<span class="fats-count">' + arr[j].fats + '</span>')
        		}
        	})
        })
        var numCount = +jQuery('.num-list-count').val();

        var listElem = jQuery('.wrap-collapse .count_num');
        var elem = jQuery('._ingredients-info');
        var arr = [];
        for (var i = 0; i < listElem.length; i++) {
        	arr.push(jQuery(listElem[i]).text() / numCount);

        }
        jQuery.each(elem, function (i) {
        	addAttrData(elem[i], arr[i], '.calories-count', 'data-calories');
        	addAttrData(elem[i], arr[i], '.proteins-count', 'data-proteins');
        	addAttrData(elem[i], arr[i], '.carbohydrates-count', 'data-carbohydrates');
        	addAttrData(elem[i], arr[i], '.fats-count', 'data-fats');

        })

        function addAttrData(elem, arr, classelem, newattr) {
        	jQuery(elem).find(classelem).attr(newattr, arr * (+jQuery(elem).find(classelem).text()) / 100);
        }

        showResultCount('.calories-count', 'data-calories', '.result-calories .result-count');
        showResultCount('.proteins-count', 'data-proteins', '.result-proteins .result-count');
        showResultCount('.carbohydrates-count', 'data-carbohydrates', '.result-carbohydrates .result-count');
        showResultCount('.fats-count', 'data-fats', '.result-fats .result-count');

        function showResultCount(name, attr, parentElem) {
        	var cal = jQuery(name);
        	var calResult = 0;
        	jQuery.each(cal, function (i) {
        		calResult += +jQuery(cal[i]).attr(attr);

        	})
        	if (parentElem) {
        		jQuery(parentElem).append(Math.round(calResult))
        	}
        }

    })


jQuery(document).ready(function () {

	var date = new Date();
	var objHistry = {
		link: '',
		image: '',
		title: ''
	}

	var noramlDate = moment(date).add(0, 'days').locale('ru').format('L');
	jQuery('.btn-reset').click(function () {
		var lastViewArrDEL = JSON.parse(localStorage.getItem('lastdata')) || []

		for (var i = 0; i < lastViewArrDEL.length - 1; i++) {
			localStorage.removeItem(lastViewArrDEL[i]);
		}
		lastViewArrDEL = [];
		localStorage.setItem('lastdata', JSON.stringify(lastViewArrDEL));
		jQuery('#historyModal').modal('hide');
		jQuery('.btn-history').hide();


	})
	jQuery('.btn-hide-hist').click(function () {
		jQuery('#historyModal').modal('hide');
		jQuery('.btn-history').show();
		jQuery('.history-header h4').html('Ваша история ');
		jQuery('.history-header p').empty();
		localStorage.setItem('btn-hidden', 'hidden');
	})

	var arrHistory = [];
	if (jQuery('#single-page').length > 0) {

		var linkHistory = window.location.href;
		var imageLinkHistory = jQuery('#single-image').attr('src');
		var titleLinkHistory = jQuery('#single-title').text();
		if (linkHistory && imageLinkHistory && titleLinkHistory) {
			objHistry.link = linkHistory;
			objHistry.image = imageLinkHistory;
			objHistry.title = titleLinkHistory;
		}
		var oldItems = JSON.parse(localStorage.getItem(noramlDate + 'lifeisfood')) || [];
		if (!JSON.stringify(oldItems).includes(JSON.stringify(objHistry))) {
			oldItems.push(objHistry);
			localStorage.setItem(noramlDate + 'lifeisfood', JSON.stringify(oldItems));
		}

	}
	var lastViewArr = JSON.parse(localStorage.getItem('lastdata')) || [];
	if (!JSON.stringify(lastViewArr).includes(JSON.stringify(noramlDate + 'lifeisfood'))) {
		lastViewArr.push(noramlDate + 'lifeisfood');
		localStorage.setItem('lastdata', JSON.stringify(lastViewArr));
	}

	var arrDate = [];
	var arrDateCopy = [];
	var localdate = localStorage.getItem('lastdata');
	if (localdate) {
		if (localdate.includes(noramlDate + 'lifeisfood')) {
			var postHistory = JSON.parse(localdate)
			for (var i = 0; i < postHistory.length - 1; i++) {
				arrDate.push(JSON.parse(localStorage.getItem(postHistory[i])));
			}


			for (var j = 0; j < arrDate.length; j++) {
				if(arrDate[j] != null){
					for (var m = 0; m < arrDate[j].length; m++) {
						arrDateCopy.push(arrDate[j][m]);
					}
				}
				
				var used = {};
				var filtered = arrDateCopy.filter(function (obj) {
					return obj.link in used ? 0 : (used[obj.link] = 1);
					var res = !(obj.link in used);
					used[obj.link] = null;
					return res;
				});

				for (var s = 0; s < filtered.length; s++) {
					jQuery('.history-list-wrap').append('<li><a title="' + filtered[s].title + '" href="' + filtered[s].link + '"><img alt="' + filtered[s].title + '" src="' + filtered[s].image + '" alt=""></a></li>')
				}
				if (!localStorage.getItem('btn-hidden')) {
					jQuery('#historyModal').modal('show');
				} else {
					jQuery('.btn-history').show();
					jQuery('.history-header h4').html('Ваша история');
					jQuery('.history-header p').empty();
				}
			}
		}
	}
})

/*BE LAZY*/
;(function() {
    if('ontouchstart' in document.documentElement) {
        document.querySelector('.js-ex').setAttribute('style', 'overflow-x: scroll;');
        document.querySelector('.html-ex').setAttribute('style', 'overflow-x: scroll;');
    }
    var bLazy = new Blazy({
        breakpoints: [{
                    width: 420, // max-width
                    src: 'data-src-small'
                }]
                , success: function(element){
                    setTimeout(function(){
                        var parent = element.parentNode;
                        parent.className = parent.className.replace(/\bloading\b/,'');
                    }, 200);
                }
            });
})();


jQuery(function($){
    $('#true_loadmore').click(function(){
        $(this).text('Загружаю...'); // изменяем текст кнопки, вы также можете добавить прелоадер
        var data = {
            'action': 'loadmore',
            'query': true_posts,
            'page' : current_page
        };
        $.ajax({
            url:ajaxurl, // обработчик
            data:data, // данные
            type:'POST', // тип запроса
            success:function(data){
                if( data ) { 
                    $('#true_loadmore').text('Загрузить ещё'); // вставляем новые посты
                    $('.btn_more_wrap').before(data);
                    current_page++; // увеличиваем номер страницы на единицу
                    if (current_page == max_pages) $("#true_loadmore").remove(); // если последняя страница, удаляем кнопку
                } else {
                    $('#true_loadmore').remove(); // если мы дошли до последней страницы постов, скроем кнопку
                }
            }
        });
    });
});