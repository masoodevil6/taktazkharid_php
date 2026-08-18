function change_panel_admin(element) {

    var location = window.location.pathname.split("/");
    var url = location[2]+"/change_panel_admin";
    var panel = $(element).val();

    var formData = new FormData;
    formData.append("panel" , panel);


    $.ajax({
        url: url,
        type: "post",
        method: "post",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("main").loading_ajax();
        },
        success: function (result) {

            window.location.href= result;
        },
        complete: function () {
            delete_form_loading_ajax();
        }

    });

}