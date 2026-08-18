(function ($) {

    $.fn.loading_ajax = function () {
        return this.each(function () {

            var mother_element = $(this);

            var alert_element = "<div class='blur_progress_ajax'><div class='from_progress_ajax'><img src='public/picture/logo/logo.png' class='logo_from_progress_ajax' width='160' height='60'> <div class='from_bar_progress_ajax'> <div class='bar_progress_ajax'></div> </div> </div> </div>";
            mother_element.append(alert_element);
        })
    }
})(jQuery);


function delete_form_loading_ajax() {
    $(".blur_progress_ajax").remove();
}