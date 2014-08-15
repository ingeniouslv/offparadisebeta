(function($) {
	var wHeight;
	var wWidth;
	var vScroll = $(window).scrollTop();
	
	/* ========================================================================
		Mobile Test
	  ========================================================================= */
	var isMobile = {
	    Android: function() {
	        return navigator.userAgent.match(/Android/i);
	    },
	    BlackBerry: function() {
	        return navigator.userAgent.match(/BlackBerry/i);
	    },
	    iOS: function() {
	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	    },
	    Opera: function() {
	        return navigator.userAgent.match(/Opera Mini/i);
	    },
	    Windows: function() {
	        return navigator.userAgent.match(/IEMobile/i);
	    },
	    any: function() {
	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	    }
	};
	
	var testMobile = isMobile.any();  
	
	/* ========================================================================
		Document Ready
	  ========================================================================= */
	$(document).ready(function(){
		wHeight = $(window).height();
		wWidth = $(window).width();
		
		if(wWidth > wHeight) {
			$('#content').css('min-height', wHeight);
			$('.post-slideshow').css({ 
				height: wHeight,
				width: wWidth
			});
		} else {
			$('#content').css('min-width', wWidth);
			$('.post-slideshow').css({
				width: wWidth,
				height: (wWidth/1.61803398875)
			});
		}
		
		/* $("header.global").sticky({ topSpacing: 0, className: 'sticky' }); */
		
		/* Carousel
		-------------------------------------------- */
		$('#slideshow').flexslider({
			animation	: "fade",
			maxItems	: 1,
			move		: 1,
			selector	: ".slide",
			keyboard	: true
		});
		
		if( $('.video-wrapper')[0] ) {
			$('.video-wrapper').fitVids();
		}
		
		$("select").selectOrDie();
	});
	
	$(window).resize(function(){
		wHeight = $(window).height();
		wWidth = $(window).width();
		mHeight = wWidth * 0.81803399;
		
		if(wWidth > wHeight) {
			$('#content').css('min-height', wHeight);
			$('.post-slideshow').css({ 
				height: wHeight,
				width: wWidth
			});
		} else {
			$('#content').css('min-width', wWidth);
			$('.post-slideshow').css({
				width: wWidth,
				height: mHeight
			});
		}
		
	});
	
	
	$(window).scroll(function() {
		if(testMobile == null) {
			wHeight = $(window).height();
			wWidth = $(window).width();
			
			if(wWidth < wHeight) {
				mHeight = wWidth * 0.61803399;
			} else {
				mHeight = wHeight;
			}
			vScroll = $(window).scrollTop()/3;
			$('#slideshow').css("-webkit-transform", "translateY(-" + vScroll + "px)");
			$('#slideshow').css("-moz-transform", "translateY(-" + vScroll + "px)");
			console.log(vScroll);
		
	/*
			vScroll = $(window).scrollTop();
			dHeight = mHeight - vScroll;
			$('.post-slideshow').css('height', dHeight);
			console.log(dHeight);
	*/
		}	
	});
})(jQuery);	