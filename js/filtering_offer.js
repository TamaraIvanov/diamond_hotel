(function($) {
    $(document).ready(function () {

        var room = $("#offer_menu").find("li");
        filter();

        function filter() {
            room.on('click', function (){

                var $this = $(this);
                var type = $this.data("id");
                var offer = $this.closest(".main_container").find(".offer");

                $this.siblings("li").removeClass("active");
                $this.addClass("active");

                if(type === "all") {
                    offer.addClass("active");
                } else {
                    offer.removeClass("active");
                    offer.filter('[data-type="'+type+'"]').addClass("active");
                }
            });
            room.filter('[data-id="all"]').trigger('click');
        }
    });

})(jQuery);