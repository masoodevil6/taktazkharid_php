function delete_question(id_question) {


    var formData = new FormData();
    formData.append("id_question" , id_question);

    var url = "adminmost_question/delete_question";
    $.ajax({
        url: url,
        method: 'POST',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("main").loading_ajax();
        },
        success: function () {
            location.href="adminmost_question/index"
        },
        complete: function () {
            delete_form_loading_ajax();
        }

    });
}