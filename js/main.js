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
		mHeight = wWidth * 0.81803399;
		
		if(wWidth > wHeight) {
			$('#content').css('min-height', wHeight);
			$('.post-slideshow').css({ 
				height: mHeight,
				width: wWidth
			});
		} else {
			$('#content').css('min-width', wWidth);
			$('.post-slideshow').css({
				width: wWidth,
				height: mHeight
			});
		}
		
		/* $("header.global").sticky({ topSpacing: 0, className: 'sticky' }); */
		
		$(window).load(function() {
			/* Carousel
			-------------------------------------------- */
			$('#slideshow').flexslider({
				animation	: "fade",
				maxItems	: 1,
				move		: 1,
				selector	: ".slide",
				keyboard	: true
			});
		});
		
		if( $('.video-wrapper')[0] ) {
			$('.video-wrapper').fitVids();
		}
		
		relatedArticles();
		
		$("select").selectOrDie();
		
		hideNav();
	});
	
	$(window).resize(function(){
		wHeight = $(window).height();
		wWidth = $(window).width();
		mHeight = wWidth * 0.81803399;
		
		if(wWidth > wHeight) {
			$('#content').css('min-height', wHeight);
			$('.post-slideshow').css({ 
				height: mHeight,
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
/*
			vScroll = $(window).scrollTop()/3;
			$('#slideshow').css("-webkit-transform", "translateY(-" + vScroll + "px)");
			$('#slideshow').css("-moz-transform", "translateY(-" + vScroll + "px)");
			console.log(vScroll);
*/
		
	/*
			vScroll = $(window).scrollTop();
			dHeight = mHeight - vScroll;
			$('.post-slideshow').css('height', dHeight);
			console.log(dHeight);
	*/
		}	
		
	});
	
	function relatedArticles() {
		url = 'http://control.off-paradise.com/api/get_recent_posts/?orderby=rand&count=6';
		
		$.getJSON( url, function(data) {
			
			$.each(data.posts, function( i, post ) {
				$('#opRecent').append('<div class="span2"> <a href="'+post.url+'"> <div class="overlay"></div> <img src="'+post.thumbnail+'" class="img-responsive" width="100%"> </a> <time class="issue-date" datetime="'+post.date+'" pubdate>'+ jQuery.timeago(post.date) +'</time> <a href="'+post.url+'"> <span class="title">'+post.title_plain+'</span> </a> <span class="description">'+post.excerpt+'</span> </div>');
			});
			
		});
	}
	
	function hideNav() {
	
		if ($(window).width() >= 768) {
			var lastScrollTop = 0;
			$(window).scroll(function(event){
				var st = $(this).scrollTop();
	
				if (st > lastScrollTop && st > 60){
					$('header.global').addClass('navbar-hide');
				} else {
					$('header.global').removeClass('navbar-hide');
				}
	
				lastScrollTop = st;
			});
	
			$('header.global').hover(function() {
				$(this).removeClass('navbar-hide');
			});
		}
	}
	
})(jQuery);	


