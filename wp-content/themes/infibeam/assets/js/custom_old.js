jQuery(document).ready(function () {
	eqheight();

	/*jQuery('.home-slider').owlCarousel({
		loop: false,
		margin: 0,
		dots: true,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 3000,
		items: 1,
		nav: false,
		responsiveClass: true,
		onInitialized:counter,
  		onTranslated:counter
	});*/

	jQuery('.award-slider').owlCarousel({
		loop: true,
		margin: 0,
		dots: false,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 3000,
		items: 1,
		nav: true,
		responsiveClass: true,
		onInitialized:counter,
  		onTranslated:counter
	});

	jQuery('.logo-carousel .listing').owlCarousel({
		loop: true,
		margin: 90,
		dots: false,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 1500,
		items: 6,
		nav: false,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
				margin: 10
			},
			480: {
				items: 2,
				margin: 15
			},
			768: {
				items: 3,
				margin: 20
			},
			1024: {
				items: 4,
				margin: 20
			},
			1199: {
				items: 5,
				margin: 30
			},
			1440: {
				items: 6,
				margin: 90
			}
		}
	});

	jQuery('.trusted-brand-block .listing').owlCarousel({
		loop: true,
		margin: 30,
		dots: false,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 1500,
		items: 5,
		nav: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
				margin: 10,
			},
			480: {
				items: 2,
				margin: 10,
			},
			768: {
				items: 3,
				margin: 15,
			},
			1024: {
				items: 3,
				margin: 20,
			},
			1199: {
				items: 4,
				margin: 30,
			},
			1440: {
				items: 5,
				margin: 30,
			}
		}
	});


	jQuery('#img-slider1').owlCarousel({
		loop: true,
		margin: 0,
		dots: true,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 3000,
		items: 1,
		nav: false,
		responsiveClass: true,
		onInitialized:counter,
  		onTranslated:counter
	});

	function counter(event) {
	  var carousel = event.relatedTarget;
	 
	  var element = event.target;
	  var items = event.item.count;
	  var item = carousel.relative(carousel.current()) + 1;
	  
	  
	  if(item > items) {
	    item = item - items
	  }
	  
	  var sldWidth = 100;
	  var sldPercent = sldWidth * item / items;
	  if(item < 10){
	  	item = item;
	  }else{
	  	item = item;
	  }
	  if(items < 10){
	  	items = items;
	  }
	  else{
	  	items = items;
	  }
	  $('#counter').html("<strong class='first'>" + item+"</strong> <b>/</b> <strong class='last'>"+items+ "</strong>" );
	}


	jQuery('#img-slider2').owlCarousel({
		loop: true,
		margin: 0,
		dots: true,
		autoplay: true,
		autoplaySpeed: 300,
		autoplayTimeout: 3000,
		items: 1,
		nav: false,
		responsiveClass: true,
		onInitialized:counter1,
  		onTranslated:counter1
	});

	function counter1(event) {
	  var carousel = event.relatedTarget;
	 
	  var element = event.target;
	  var items = event.item.count;
	  var item = carousel.relative(carousel.current()) + 1;
	  
	  
	  if(item > items) {
	    item = item - items
	  }
	  
	  var sldWidth = 100;
	  var sldPercent = sldWidth * item / items;
	  if(item < 10){
	  	item = item;
	  }else{
	  	item = item;
	  }
	  if(items < 10){
	  	items = items;
	  }
	  else{
	  	items = items;
	  }
	  $('#counter1').html("<strong class='first'>" + item+"</strong> <b>/</b> <strong class='last'>"+items+ "</strong>" );
	}

	jQuery('.solution-slider').owlCarousel({
	        responsiveClass: true,
	        autoplay: false,
	        speed: 500,
	        margin: 30,
	        nav: true,
	        loop: true,
	        dots: false,
	        responsive: {
	            0: {
	                items: 1,
	            },
	            600: {
	                slideBy: 1,
	                items: 2,
	            },
	            768: {
	                slideBy: 1,
	                items: 2,
	            },
	            1024: {
	                slideBy: 1,
	                items: 2,
	            },
	            1280: {
	                slideBy: 1,
	                items: 2,
	            },
	            1440: {
	                slideBy: 1,
	                items: 3,
	            },
	            1700: {
	                slideBy: 1,
	                items: 3,
	            },
	            1850: {
	                slideBy: 1,
	                items: 3,
	            },
	            1920: {
	                slideBy: 1,
	                items: 3,
	            },
	            2000: {
	                slideBy: 1,
	                items: 4,
	            },
	            2500: {
	                slideBy: 1,
	                items: 5,
	            },
	            3000: {
	                slideBy: 1,
	                items: 7,
	            },
	            4000: {
	                slideBy: 1,
	                items: 9,
	            },
	            5000: {
	                slideBy: 1,
	                items: 10,
	            }
	        }
	    });
	    jQuery('.solution-slider').on('changed.owl.carousel', function(event) {
	        var index;
	        setTimeout(() => {
	            jQuery('.solution-slider').find('.owl-item.active').each(function(ind, elem) {
	                if (ind == 0) {
	                    index = jQuery(elem).find('.item').data('item');
	                }
	            });
	            jQuery('.service-thumb-img').find('img.active').removeClass('active');
	            if (jQuery('.service-thumb-img').find('img[data-item="' + index + '"]').length > 0)
	                jQuery('.service-thumb-img').find('img[data-item="' + index + '"]').addClass('active');
	        }, 200)
	    });
	

});


jQuery(window).load(function () {
	eqheight();
}).resize(function () {
	eqheight();
});

function eqheight() {
	setTimeout(function () {
		equalheight('.why-we-block .listing .text-col .inside');
		equalheight('.stock-list .stock-box');
		equalheight('.team-listing-block .team-col');
		equalheight('.contact-block .text-block');
		equalheight('.icon-boxBg .box-view');
		equalheight('.text-bgBox .bg-box');
		equalheight('.our-mission-block .img-block');
		equalheight('.participants-block .participants-box');
		equalheight('.solution-block .text-col .content');
		equalheight('.corporate-block .listing .post-grid-col a');
		equalheight('.news-list .news-box .info');
	}, 200);
}

equalheight = function (container) {
	if (jQuery(window).width() > 767) {
		var currentTallest = 0,
			currentRowStart = 0,
			rowDivs = [],
			$el,
			topPosition = 0;

		jQuery(container).each(function () {
			$el = jQuery(this);
			jQuery($el).height('auto');
			topPostion = $el.offset().top;
			if (currentRowStart !== topPostion) {
				for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
					rowDivs[currentDiv].innerHeight(currentTallest);
				}
				rowDivs.length = 0; // empty the array
				currentRowStart = topPostion;
				currentTallest = $el.innerHeight();
				rowDivs.push($el);
			} else {
				rowDivs.push($el);
				currentTallest = (currentTallest < $el.innerHeight()) ? ($el.innerHeight()) : (currentTallest);
			}
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].innerHeight(currentTallest);
			}
		});
	} else {
		jQuery(container).height('auto');
	}
};

equalheightnoauto = function (container) {
	var currentTallest = 0,
		currentRowStart = 0,
		rowDivs = [],
		$el,
		topPosition = 0;

	jQuery(container).each(function () {
		$el = jQuery(this);
		jQuery($el).height('auto');
		topPostion = $el.offset().top;
		if (currentRowStart !== topPostion) {
			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].innerHeight(currentTallest);
			}
			rowDivs.length = 0; // empty the array
			currentRowStart = topPostion;
			currentTallest = $el.innerHeight();
			rowDivs.push($el);
		} else {
			rowDivs.push($el);
			currentTallest = (currentTallest < $el.innerHeight()) ? ($el.innerHeight()) : (currentTallest);
		}
		for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
			rowDivs[currentDiv].innerHeight(currentTallest);
		}
	});
};

equalheightnoRow = function (container) {
	if (jQuery(window).width() > 767) {
		var currentTallest = 0,
			currentRowStart = 0,
			rowDivs = [],
			jQueryel;

		jQuery(container).each(function () {
			jQueryel = jQuery(this);
			jQuery(jQueryel).innerHeight('auto');
			rowDivs.push(jQueryel);
			currentTallest = (currentTallest < jQueryel.innerHeight()) ? (jQueryel.innerHeight()) : (currentTallest);

			for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
				rowDivs[currentDiv].innerHeight(currentTallest);
			}
		});
	} else {
		jQuery(container).height('auto');
	}
};