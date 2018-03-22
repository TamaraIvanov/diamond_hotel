(function($) {
	$(document).ready(function() {


        var windowSize = $(window).width();

		$('.top_btn').click(function() {
			$('html, body').animate({
				scrollTop: $( "#header").offset().top
			}, 2000);
		});

		/*

		$('.js_drop_down_btn_menu').click(function(e) {
			$('.js_drop_down_menu').slideToggle(400);
			e.stopPropagation();
		});

		$(".js_drop_down_btn").click(function(e){
			var $dropMenu = $(this).siblings(".js_drop_down");
			$dropMenu.slideToggle(400);
			$('.js_drop_down').not($dropMenu).slideUp(400);
			e.stopPropagation();
		});

		$('.js_drop_down, .js_drop_down_menu').click(function(e) {
			e.stopPropagation();
		});

		$('body').click(function () {
			$('.js_drop_down').slideUp(400);
			if($('.js_drop_down_btn_menu').is(':visible')) {
				$('.js_drop_down_menu').slideUp(400);
			}
		});

		*/

		var dropBtn = $(".js-drop-btn");
        var bookBtn = $(".js-book-btn");
        var bookList = $(".js-book");
		var dropList = $(".js-drop-list");
        var mainDropList = $(".js-main-drop-list");

		dropBtn.click(function () {

            dropList.slideUp(400);

			$(this).next(".js-drop-list").slideToggle(500);

        });
        bookBtn.click(function () {
            bookList.slideUp(400);

            if(windowSize < 1150) {
                dropList.slideUp(400);
            }
            $(this).next(".js-drop-list").slideToggle(500);
        });

        dropBtn.click(function(e) {
            e.stopPropagation();
        });
        bookBtn.click(function(e) {
            e.stopPropagation();
        });

        $('body').click(function () {

        	$(".js-book").slideUp(400);
            if(windowSize < 1150) {
                mainDropList.slideUp(400);
            }
            if(windowSize < 490) {
                dropList.slideUp(400);
            }

        });


        $(".language_list li").click(function(){
			LanguageChoose($(this));
		});


		$(".num_bed").find('li').click(function(){
			numberBeds($(this));
		});
		$(".svg_arrow").click(function(){
			numberGuests($(this));

		});


		$.validator.addMethod("greaterThanDate",
			function(value, element, params) {

				var elementVal = $(element).val();
				var	paramsVal = $(params).val();

				var startDate = new Date(swapPositionDate(paramsVal)).getTime();
				var endDate = new Date(swapPositionDate(elementVal)).getTime();

				return endDate > startDate;

			}, 'Must be greater than {0}.');

		$.validator.addMethod("minVal",
			function(value) {
				return value > 0;

			}, 'Must be greater than {0}.');

		$("#book_form").validate();

        slickSlider();

	});


	function slickSlider() {

		$(".auto_slider").slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 3000,
			prevArrow: false,
			nextArrow: false,
			responsive: [
				{
					breakpoint: 750,
					settings: {
						height: 300
					}
				},
                {
                    breakpoint: 700,
                    settings: {
                        height: 300
                    }
                }
			]
		});

		$('.testimonial_slider_wrapper').slick({
			infinite: true,
			speed: 1000,
			prevArrow: $('.slide-buttons'),
			nextArrow: $('.slider_arrow_next')
		});

		$('.events_wrapper').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 2,
			speed: 1000,
			vertical: true,
			prevArrow: $('.slide-up'),
			nextArrow: $('.slide-down'),
			responsive: [
				{
					breakpoint: 950,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});

		$('.slider_news').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 4,
			speed: 1000,
			vertical: true,
			prevArrow: $('.news_slider_btn_up'),
			nextArrow: $('.news_slider_btn_down')
		});

		$('#room_details').find('.offer_container').slick({
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 1,
			dots: true,
			prevArrow: $('.slide-buttons'),
			nextArrow: $('.slider_arrow_next'),

			responsive: [
				{
					breakpoint: 800,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        prevArrow: false,
                        nextArrow: false
                    }
				}
			]
		});

	}

	function LanguageChoose(elem){

		var data_name = elem.text();
		var input = elem.closest('div').find('div');

		input.text(data_name);
	}

	function numberGuests(elem) {

		var input = elem.closest('div').siblings('.visitors');
		var numGuests = parseInt(input.val());
		var type = elem.data('type');

		if(type === 'decrease') {
			if (numGuests > 0) {
				numGuests--;
			}
		} else {
			numGuests++;
		}

		input.val(numGuests);
	}

	function numberBeds(elem) {

		elem.siblings().removeClass('on_click');
		elem.addClass('on_click');

		var value = elem.data('value');
		var input = elem.closest('.booking_option').find('[name="num_beds"]');

		input.val(value);
	}

	function swapPositionDate(date) {

		var dateParams = date.split(".");
		return dateParams[1]+'/'+dateParams[0]+'/'+dateParams[2];
	}
})(jQuery);




