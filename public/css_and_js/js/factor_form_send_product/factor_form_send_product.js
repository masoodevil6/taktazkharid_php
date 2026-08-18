function goto_next_page() {
    location.href = "panel/index/orders";
}


$("#btn_accept_end_form_factor_form").hover(function () {
    $("#efect_btn_accept_end_form_factor_form").css({
        "transition" : "width 1s ease 0s",
        "width" : "120%"
    })
},function () {
    $("#efect_btn_accept_end_form_factor_form").css({
        "transition" : "width 1s ease 0s",
        "width" : "80px"
    })
});