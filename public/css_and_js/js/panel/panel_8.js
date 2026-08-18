status_massage();
function status_massage() {

    var url = "panel/status_massage";
    $.ajax({
        url: url,
        method: 'POST',
        type: 'POST',
        data: {},
        contentType: false,
        processData: false,
        beforeSend: function () {
            $("main").loading_ajax();
        },
        complete: function () {
            delete_form_loading_ajax();
        }
    })

}