$(".item_form_choose_type_edit").eq(0).trigger("onclick");

function select_tab_edit_product(element , num) {


    $(".item_form_choose_type_edit").removeClass("selected_tab");
    $(element).addClass("selected_tab");


    var change_info_product = $(".change_info_product");
    change_info_product.css({"display": "none"});
    change_info_product.eq(num).css({"display": "block"});
}