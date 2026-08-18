function show_tab(element , user_id) {
    $(".item_form_choose_type_edit").removeClass("selected_tab");
    $(element).addClass("selected_tab");

    tab_user = $(element).index();

    var url = "adminuser/tab_info_user";
    var data = {
        "id_user": user_id,
        "tab" : tab_user
    };


    $("main").loading_ajax();
    $.post(
        url,
        data,
        function (result) {
            delete_form_loading_ajax();
            $(".form_info").html(result)
        }
    );

}