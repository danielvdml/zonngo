$(document).ready(function() {
	$(window).resize(
		function(){
			$('.full-width-block').width($(window).width());
			$('.full-width-block').css({"width": $(window).width(), "margin-left": ($(window).width()/-2), "left": "50%"});

			if ($(window).width() > 1024) {
				var window_height = $(window).height();
				var window_half = ($(window).width())/2;
				var image_posts_nagative = ( $('.content-holder .container').width()/2 ) - ( $('.desc-wrap .span5').outerWidth() );
				var image_posts_width = window_half - image_posts_nagative;
				var header_height = $('#wpadminbar').height() + $('header').height();
				var content_offset = $('.content-holder').offset();

				$('.wrapper-left').css({"height": (window_height-header_height), "margin-left": "-"+ (image_posts_nagative + image_posts_width)+"px", "width": image_posts_width, "left": "50%"});
				$('.blog-posts').css({'top': header_height, "height": (window_height-header_height)});

				var blog_posts_width = $('.blog-posts').outerWidth();

				$('.show-posts').click(function(event){
					event.preventDefault();
					$(this).addClass('active');
					$('.blog-posts').css({'left': 0});
					$('.content-holder').css({'left': blog_posts_width});
					$('.wrapper-left').css({'transform': 'translateX('+blog_posts_width+'px)'});
				});
				$('.close-posts').click(function(event){
					event.preventDefault();
					$('.show-posts').removeClass('active');
					$('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
					$('.content-holder').css({'left': '0'});
					$('.wrapper-left').css({'transform': 'translateX(0)'});
				});
			};

			/*if ($(window).width() > 767) {
				$('.same-height').children().each(function(){
					$(this).css('height', 'auto')
				});
				$('.same-height').each(function(){
					var block_height = $(this).height();
					$(this).children().css('height', block_height);
				})
			} else {
				$('.same-height').children().each(function(){
					$(this).css('height', 'auto')
				});
			};*/
		}
	).trigger('resize');

	if ($(window).width() > 1024) {
		var blog_posts_width = $('.blog-posts').outerWidth();
		var header_height_resp = $('#wpadminbar').height() + $('header').height();
		var content_height = $('.content-holder').height(); 

		/* For Header */
		$('.content-holder').waypoint(function(direction) {
			if (direction === 'down') {
				$('.wrapper-left').addClass('fixed').css({'top': header_height_resp});
				$('.show-posts').css({'opacity': '1'});
			}
		}, { offset: (0+header_height_resp) })
		.waypoint(function(direction) {
			if (direction === 'up') {
				$('.wrapper-left').removeClass('fixed').css({'top': 0, 'transform': 'translateX(0)'});
				$('.show-posts').removeClass('active').css({'opacity': '0'});
				$('.content-holder').css({'left': '0'});
				$('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
			}
		}, { offset: (0+header_height_resp) });	

		/* For Footer */
		$('.content-holder').waypoint(function(direction) {
			if (direction === 'down') {
				$('.wrapper-left').removeClass('fixed').css({'transform': 'translateX(0)', 'top': 'auto', 'bottom': '0'});
				$('.show-posts').removeClass('active').css({'opacity': '0'});
				$('.content-holder').css({'left': '0'});
				$('.blog-posts').css({'left': '-'+blog_posts_width+'px'});
			}
		}, { offset: 'bottom-in-view' })
		.waypoint(function(direction) {
			if (direction === 'up') {
				$('.wrapper-left').addClass('fixed').css({'bottom': 'auto', 'top': header_height_resp});
				$('.show-posts').css({'opacity': '1'});
			}
		}, { offset: 'bottom-in-view' });

        $.fn.waypoint.defaults = {
            context: window,
            continuous: true,
            enabled: true,
            horizontal: false,
            offset: '80%',
            triggerOnce: true
        };
        if (!$('html').hasClass('ie8') && !$('html').hasClass('ie9')) {
            $('.tofade,.toflip,.tofadel,.tofader').css('opacity', 0);
            $('.tofade').waypoint(function (g) {
                if (g == 'down') {
                    $(this).removeClass('animated fadeOutDown').addClass('animated fadeInUp');
                } else {
                    $(this).removeClass('animated fadeInUp').addClass('animated fadeOutDown');
                }
            });
            $('.toflip').waypoint(function (g) {
                if (g == 'down') {
                    $(this).removeClass('animated fadeOutDown').addClass('animated flipInY');
                } else {
                    $(this).removeClass('animated flipInY').addClass('animated fadeOutDown');
                }
            });
            $('.tofadel').waypoint(function (g) {
                if (g == 'down') {
                    $(this).removeClass('animated fadeOutLeft').addClass('animated fadeInLeft');
                } else {
                    $(this).removeClass('animated fadeInLeft').addClass('animated fadeOutLeft');
                }
            });
            $('.tofader').waypoint(function (g) {
                if (g == 'down') {
                    $(this).removeClass('animated fadeOutRight').addClass('animated fadeInRight');
                } else {
                    $(this).removeClass('animated fadeInRight').addClass('animated fadeOutRight');
                }
            });
        }
    }

	$(window).load(function(){
		$(".blog-posts").mCustomScrollbar({
			axis:"y",
			theme:"dark"
		});
	});

	$(".statistics .number").counterUp({
		delay: 10, 
		time: 1000 
	});

	$('.posts-grid.showcase').wrapAll('<div class="showcase-wrap"></div>');
	$('.showcase-wrap').prepend('<div class="image-wrap"></div>');

	var i = 1;
	$('.posts-grid.showcase li').each(function(){
		$(this).attr('item', 'item-'+i).find('.thumbnail').clone().appendTo('.showcase-wrap .image-wrap').attr('item', 'item-'+i);
		i++;
	});
	
	$('.showcase-wrap').find('[item="item-1"]').addClass('active');

	$('.posts-grid.showcase li').hover(function(){
		$('.showcase-wrap .image-wrap .thumbnail').removeClass('active');

		var hovered_item = $(this).attr('item');
		$('.showcase-wrap .image-wrap').find('[item="'+hovered_item+'"]').addClass('active');
	})

	var header_height = $('.nav-wrap').outerHeight();
	$('.content-holder .hashAncor').css('top', '-'+header_height+'px');

	$('.advantages li .thumbnail').hover(function(){
		$('.advantages li').removeClass('active');
		$(this).parent().addClass('active');
	});
})