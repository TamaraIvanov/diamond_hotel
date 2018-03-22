
(function($) {
    $(document).ready(function() {

        /*
        $(".num_guests").click(function(){
            $(this).siblings('div').slideToggle(600);
        });


        $(".num_beds").click(function(){
            $(this).siblings('ul').slideToggle(600);
        });


        numberGuests();
        numberBeds();

        $(".guests").click(function(e) {
            e.stopPropagation();
            return false;

        });
        */
    });


    $('.js-datepicker').datepicker({

        dateFormat: "dd.mm.yy",
        firstDay: 1,
        duration: 600,
        showAnim: 'slideDown'

    }).focus(function() {

        var prevArrow = '<svg fill="" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">'+
            '<path class="svg_arrow" d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z" fill=""/>'+
            '<path d="M0-.5h24v24H0z"/>'+
            '</svg>';

        var nextArrow = '<svg fill="#000000" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg">'+
            '<path class="svg_arrow" d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z" fill=""/>'+
            '<path d="M0-.25h24v24H0z"/>'+
            '</svg>';

        $(".ui-datepicker-prev").html(prevArrow);
        $(".ui-datepicker-next").html(nextArrow);

    });


    function numberGuests() {


        $(".svg_arrow").click(function(){
            var $this = $(this);
            var input = $this.closest('div').siblings('.visitors');
            var numGuests = parseInt(input.val());
            var type = $this.data('type');


            if(type == 'decrease') {
                if (numGuests > 0) {
                    numGuests--;
                }
            } else {
                numGuests++;
            }

            input.val(numGuests);



        });

    }
    function numberBeds() {

        $(".num_bed").find('li').click(function(){
            var $this = $(this);

            $this.siblings().removeClass('on_click');

            $this.addClass('on_click');



            var value = $this.data('value');
            var inputVal = $this.closest('div').siblings();

            inputVal.text(value);

            console.log(inputVal);

        });

    }
})(jQuery);
