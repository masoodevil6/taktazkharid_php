
<?php
$data_servert = $data;

$step2 = $data_servert["step2"];
$step3 = $data_servert["step3"];

$selected = $data_servert["selected"];


?>



<style>

    .form_choose_type_edit {
        width: 90%;
        margin: 5px 5% 10px 5%;
        border: #660c0c solid 2px;
        border-radius: 10px;
        overflow: hidden;
    }

    .item_form_choose_type_edit {
        float: right;
        width: 50%;
        cursor: pointer;
        background: #f5975d;;
    }

    .item_form_choose_type_edit:nth-child(1) > .title_item_form_choose_type_edit {
        display: block;
        width: 100%;
        line-height: 40px;
        text-align: center;
    }

    .item_form_choose_type_edit:nth-child(2) > .title_item_form_choose_type_edit {
        display: block;
        width: 100%;
        line-height: 40px;
        text-align: center;
        border-right: #660c0c solid 2px;
    }


    .selected_tab{
        background: #70f5f5;
    }

</style>

<div class="form_choose_type_edit">

    <div class="item_form_choose_type_edit selected_tab" onclick="show_tab(this , 0)">

        <span class="title_item_form_choose_type_edit yekan fontxlg ">
            آپلود لوگو
        </span>

    </div>

    <div class="item_form_choose_type_edit" onclick="show_tab(this , 1)">

        <span class="title_item_form_choose_type_edit yekan fontxlg">
            لوگوهای منتخب
        </span>

    </div>
</div>




<style>

    .title_form_slider{
        display: block;
        line-height: 40px;
        text-align: center;
        color: #424242;
    }

    .form_slider{
        margin-top: 10px;
        margin-bottom: 25px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
        background: white;
    }

    .item_option{
        display: block;
        height: 60px;
    }



    .title_search_slider{
        float: right;
        margin-right: 20px;
        width: 200px;
        line-height: 60px;
        text-align: center;
        color: #424242;
    }

    .select_parent_category{
        float: right;
        margin-right: 75px;
        margin-top: 15px;
        width: 300px;
        height: 30px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
    }



</style>

<style>

    .exist{
        padding: 10px 0;
        margin: auto;
        width: 220px;
        height: 220px;
    }




    .exist_pic_navigation{
        width: 220px;
        height: 168px;
        background: white;
    }

    .pic_navigation{
        display: block;
        width: 220px;
        height: 168px;
        margin: auto;
        border: #7f6538 solid 2px;
    }



    .not_exist_pic_navigation{
        width: 220px;
        height: 168px;
        background: white;
        border: #7f6538 solid 2px;
    }

    .title_not_exist_pic_navigation{
        display: block;
        line-height: 168px;
        text-align: center;
        color: #424242;
    }


</style>

<style>

    /* form */
    .form_upload_item_panel{
        margin-top: 10px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
        background: #F2C065;
    }




    /* btn upload */
    .right_form_upload{
        margin-right: 13%;
        margin-top: 3%;
        width: 30%;
        height: 25px;
    }


    /* form uploaded files*/
    .left_form_upload{
        width: 90%;
        margin: 10px 5%;
        height: 20px;
        overflow: auto;
        border: #6e6e6e solid 2px;
        border-radius: 10px;
        background: #ffffff;
    }



    /* form btn */
    .btn_form_upload_item{
        display: block;
        height: 50px;
        margin-top: 20px;
    }



    .progress{
        float: left;
        transition: width ease 1s;
        width: 10px;
        height: 100%;
        background: #2eb828;

    }





    /* btn accept */
    .btn_accept_upload_item{
        transition: background-color 1s ease 0s;
        cursor: pointer;
        margin: auto;
        width: 100px;
        height: 40px;
        background: #45b8d1;
        border-radius: 10px;
    }

    .btn_accept_upload_item:hover{
        transition: background-color 1s ease 0s;
        background: #32778c;
    }

    .text_btn_accept_upload_item{
        line-height: 40px;
        display: block;
        text-align: center;
        color: white;
    }








    .empity_photo_main_product{
        width: 220px;
        height: 168px;
        margin: auto;
        border: #660c0c solid 1px;
        background: rgb(255, 255, 255);
    }

    .title_empity_photo_main_product{
        display: block;
        width: 100%;
        line-height: 168px;
        text-align: center;
        color: rgba(80,80,80,0.65);
    }


    .photo_main_product{
        margin: auto;
        border: #660c0c solid 1px;
        background: rgb(255, 255, 255);
        display: block;
        width: 220px;
        height: 168px;
    }


</style>
<div class="form_nav" style="display: block; width: 100%;" >

    <span class="title_form_slider yekan fontxxlg" style="margin-top: 40px">
        <img style="float: right;cursor: pointer;margin-right: 20px" src="public/picture/panel_icons/back.png" class="icon_back_btn" onclick="location.href='adminsetting/index'">
        انتخاب زیر گروه
    </span>

    <div class="form_slider">


        <div class="item_option">
            <span class="title_search_slider  yekan fontlg">
                انتخاب گروه:
            </span>


            <select class="select_parent_category yekan fontlg" name="category" data-frist-id="<?php if (isset($step2[0]["id"])){echo $step2[0]["id"]; } else{ echo 0;}?>" onchange="change_parent_step2_search(this)">

                <?php
                foreach ($step2 as $parent){
                    ?>

                    <option value="<?=$parent["id"]?>" data-name="<?=$parent["title"]?>">
                        <?=$parent["title"]?>
                    </option>

                    <?php
                }
                ?>

            </select>
        </div>


        <div class="item_option">
              <span class="title_search_slider  yekan fontlg">
                  انتخاب زیر گروه:
              </span>


            <select class="select_parent_category yekan fontlg" name="brand" data-frist-id="<?php if (isset($step2[0]["id"])){echo $step2[0]["id"]; } else{ echo 0;}?>" onchange="check_exist_pic()">
                <option value="0">
                    انتخاب کنید
                </option>
                <?php
                foreach ($step3 as $parent){
                    ?>

                    <option value="<?=$parent["id"]?>" data-name="<?=$parent["title"]?>">
                        <?=$parent["title"]?>
                    </option>

                    <?php
                }
                ?>

            </select>
        </div>

    </div>




    <span class="title_form_slider yekan fontxxlg">
        تصویر فعلی زیر گروه

        (260*190 px)
    </span>

    <div class="form_slider" style="background: #F2C065">

        <div class="exist">

            <div class="not_exist_pic_navigation">

                <span class="title_not_exist_pic_navigation yekan fontxxlg">
                    بدون تصویر
                </span>

            </div>

        </div>

    </div>



    <span class="title_form_slider yekan fontxxlg">
        آپلود تصویر زیر گروه
    </span>

    <!-- form -->
    <div class="form_upload_item_panel">


        <!-- form uploaded file -->
        <div class="left_form_upload">

            <div class="form_progress">
                <div class="progress"></div>
            </div>

        </div>



        <!-- btn upload -->
        <div class="right_form_upload">

            <input type="file" name="myFile" id="fileUpload" onchange="readURL_upload_photo(this);" >

        </div>





        <div class="read_photo">

            <div class="empity_photo_main_product">

                <span class="title_empity_photo_main_product yekan fontxxlg">
                    بدون انتخاب
                </span>

            </div>

        </div>






        <!-- btnS form -->
        <div class="btn_form_upload_item">

            <div class="btn_accept_upload_item" onclick="upload_pic_nav()">

            <span class="text_btn_accept_upload_item yekan fontxlg">
                اپلود
            </span>

            </div>

        </div>

    </div>




    <script>


        function change_parent_step2_search(element) {
            var id_parent = $(element).val();

            var formData = new FormData();
            formData.append("id_parent", id_parent);

            var url = "adminsetting/get_category_step_three";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    update_list_brand(result)
                },
                dataType: "json"

            });
        }

        function update_list_brand(result) {

            var select_parent_category = $(".select_parent_category[name=brand]");
            select_parent_category.empty();

            var item = "<option value='0'> انتخاب کنید </option>";
            $.each(result , function (key ,value) {

                var id = value["id"];
                var title = value["title"];
                item += "<option value='"+id+"' data-name='"+title+"'>"+title+"</option>";

            });

            select_parent_category.append(item);
            check_exist_pic();
        }


        function check_exist_pic() {
            var select_parent_category = $(".select_parent_category[name=brand]");
            var val_brand = select_parent_category.val();

            $(".empity_photo_main_product").remove();
            $(".photo_main_product").remove();
            var empity =
                "<div class='empity_photo_main_product'>" +
                "<span class='title_empity_photo_main_product yekan fontxxlg'>  بدون انتخاب </span>" +
                "</div>";
            $(".read_photo").append(empity);
            $("#fileUpload").val("");

            var url_pic = "public/picture/navigation/"+val_brand+"/nav.png";

            var formData = new FormData();
            formData.append("url_pic", url_pic);

            var url = "adminsetting/check_exist_pic";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {


                    $(".exist_pic_navigation").remove();
                    $(".not_exist_pic_navigation").remove();

                    if (result == 1){

                        var file_exist =
                            "<div class='exist_pic_navigation'>"+
                            "<img src='"+url_pic+"' class='pic_navigation'/>" +
                            "</div>";

                        $(".exist").append(file_exist)
                    }
                    else if (result == 0){

                        var file_not_exist =
                            "<div class='not_exist_pic_navigation'>" +
                            "<span class='title_not_exist_pic_navigation yekan fontxxlg'>  بدون تصویر </span>" +
                            "</div>";

                        $(".exist").append(file_not_exist)
                    }

                }
            });

        }



        function readURL_upload_photo(input) {

            if (input.files && input.files[0]) {

                $(".empity_photo_main_product").remove();
                $(".photo_main_product").remove();
                var pic = "<img src='' class='photo_main_product'/>";
                $(".read_photo").append(pic);


                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.photo_main_product').attr('src', e.target.result);
                    $('.photo_main_product').css('display', "block");
                    $('.empity_photo_main_product').remove();
                };

                reader.readAsDataURL(input.files[0]);

                do_upload = true;
                $(".btn_upload_main_photo_product").css("opacity" , 1);

                var progress_bar = $(".progress");
                progress_bar.css("width", "10px");

            }
        }

        function upload_pic_nav() {

            var parent = $(".select_parent_category[name=brand]").val();
            var file = $("#fileUpload")[0].files[0];

            var url_pic = "public/picture/navigation/"+parent+"/nav.png";

            var formData = new FormData();
            formData.append("id_category", parent);
            formData.append("myFile", file);

            var url = "adminsetting/upload_category_step_three";

            if ($("#fileUpload")[0].files.length > 0){
                $.ajax({
                    url: url,
                    method: 'POST',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();

                        xhr.upload.addEventListener("progress",
                            uploadProgressHandler,
                            false
                        );

                        return xhr;
                    },success: function (result) {


                        $(".exist_pic_navigation").remove();
                        $(".not_exist_pic_navigation").remove();

                        var file_exist =
                            "<div class='exist_pic_navigation'>"+
                            "<img src='"+url_pic+"' class='pic_navigation'/>" +
                            "</div>";

                        $(".exist").append(file_exist);


                    }

                });
            }
            else {
                alert("لطفا ابتدا تصویر مورد نظر خود را انتخاب کنید")
            }

        }


        function uploadProgressHandler(event) {

            var percent = (event.loaded / event.total) * 100;
            var progress = Math.round(percent);

            var progress_bar = $(".progress");
            progress_bar.css("width", progress + "%");

        }



    </script>

</div>



<style>

    .title_form_slider{
        display: block;
        line-height: 40px;
        text-align: center;
        color: #424242;
    }

    .form_slider{
        margin-top: 10px;
        margin-bottom: 25px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
        background: white;
    }




    .title_search_slider{
        float: right;
        margin-right: 20px;
        width: 200px;
        line-height: 60px;
        text-align: center;
        color: #424242;
    }

    .select_parent_category{
        float: right;
        margin-right: 75px;
        margin-top: 15px;
        width: 300px;
        height: 30px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
    }




    .btn_accept_nav_form{
        transition: background-color 1s ease 0s;
        float: left;
        width: 100px;
        height: 40px;
        background: #388fa5;
        border-radius: 10px;
        cursor: pointer;
        margin-left: 30px;
        margin-top: 10px;
    }

    .btn_accept_nav_form:hover{
        transition: background-color 1s ease 0s;
        background: #1f4853;
    }

    .title_btn_accept_nav_form{
        display: block;
        text-align: center;
        color: white;
        line-height: 40px;
    }


</style>

<style>

    .top_form_slider{
        display: block;
        height: 40px;
        border-bottom: #7f6538 solid 2px;
    }

    .item_form_slider{
        display: block;
        height: 40px;
        border-bottom: #7f6538 solid 2px;
    }





    .title_num_form_slider{
        float: right;
        width: 80px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }

    .title_name_form_slider{
        float: right;
        width: 450px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }

    .title_option_form_slider{
        display: flow-root;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        position: relative;
        background: #8bfcff;
    }







    .img_delete_slider{
        position: absolute;
        width: 35px;
        height: 35px;
        top: 1px;
        left: 15px;
        border-radius: 100%;
        border: #333333 solid 2px;
        cursor: pointer;
    }

    .img_update_slider{
        position: absolute;
        width: 35px;
        height: 35px;
        top: 1px;
        left: 65px;
        border-radius: 100%;
        border: #333333 solid 2px;
        cursor: pointer;
        background: white;
    }

</style>
<div class="form_nav" style="display: none; width: 100%;">

    <span class="title_form_slider yekan fontxxlg" style="margin-top: 40px">
        <img style="float: right;cursor: pointer;margin-right: 20px" src="public/picture/panel_icons/back.png" class="icon_back_btn" onclick="location.href='adminsetting/index'">
        انتخاب زیر گروه
    </span>

    <div class="form_slider">

        <div class="item_option">
            <span class="title_search_slider  yekan fontlg">
                انتخاب گروه:
            </span>


            <select class="select_parent_category yekan fontlg" name="category" onchange="change_parent_step2_search_selected(this)">

                <?php
                foreach ($step2 as $parent){
                    ?>

                    <option value="<?=$parent["id"]?>" data-name="<?=$parent["title"]?>">
                        <?=$parent["title"]?>
                    </option>

                    <?php
                }
                ?>

            </select>
        </div>


        <div class="item_option">
              <span class="title_search_slider  yekan fontlg">
                  انتخاب زیر گروه:
              </span>


            <select class="select_parent_category yekan fontlg" name="add_selected_nav">
                <option value="0">
                    انتخاب کنید
                </option>
                <?php
                foreach ($step3 as $parent){
                    ?>

                    <option value="<?=$parent["id"]?>" data-name="<?=$parent["title"]?>">
                        <?=$parent["title"]?>
                    </option>

                    <?php
                }
                ?>

            </select>



            <div class="btn_accept_nav_form" onclick="add_nav_selected()">

                <span class="title_btn_accept_nav_form yekan fontlg">
                    افزودن
                </span>

            </div>
        </div>

    </div>







    <span class="title_form_slider yekan fontxxlg" style="margin-top: 40px">
        انتخاب شده ها
    </span>


    <div class="form_slider">
        <!--title-->
        <div class="top_form_slider">

            <span class="title_num_form_slider yekan fontlg">
                ردیف
            </span>

            <span class="title_name_form_slider yekan fontlg">
                نام گروه
            </span>

            <span class="title_option_form_slider yekan fontlg" style="background: #ffffff">
                تنظیمات
            </span>
        </div>



        <div class="selected_nav">
            <!--slider-->
            <?php

            foreach ($selected as $key => $nav){

                $css ="";
                if ($key == sizeof($selected) - 1){
                    $css="border-bottom: none;";
                }


                ?>

                <div class="item_form_slider" style="<?=$css?>">

                    <span class="title_num_form_slider yekan fontlg">
                        <?=$key + 1?>
                    </span>

                    <span class="title_name_form_slider yekan fontlg">
                        <?=$nav["title"]?>
                    </span>

                    <span class="title_option_form_slider yekan fontlg">

                    <img src="public/picture/admin/delete.png" title='delete_nav' class="img_delete_slider" onclick="delete_nav(<?=$nav["id"]?>)">

                    <img src="public/picture/admin/update.png" title='update_nav' class="img_update_slider" onclick="update_time_nav(<?=$nav["id"]?>)">

                </span>

                </div>

                <?php
            }
            ?>
        </div>


    </div>



    <script>

        function change_parent_step2_search_selected(element) {
            var id_parent = $(element).val();

            var formData = new FormData();
            formData.append("id_parent", id_parent);

            var url = "adminsetting/get_category_step_three";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    update_list_brand_selected(result)
                },
                dataType: "json"

            });
        }

        function update_list_brand_selected(result) {
            var select_parent_category = $(".select_parent_category[name=add_selected_nav]");
            select_parent_category.empty();

            var item = "<option value='0'> انتخاب کنید </option>";
            $.each(result , function (key ,value) {

                var id = value["id"];
                var title = value["title"];
                item += "<option value='"+id+"' data-name='"+title+"'>"+title+"</option>";

            });
            select_parent_category.append(item);
        }


        function add_nav_selected() {

            var id_category = $(".select_parent_category[name=add_selected_nav]").val();

            var formData = new FormData();
            formData.append("id_category", id_category);
            var url = "adminsetting/add_nav_selected_step_three";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    console.log(result)
                    adminsetting(result);
                },
                dataType: "json"

            });

        }


        function delete_nav(id_category) {

            var formData = new FormData();
            formData.append("id_category", id_category);
            var url = "adminsetting/delete_category_selected_step_three";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    adminsetting(result);
                },
                dataType: "json"

            });
        }


        function update_time_nav(id_category) {

            var formData = new FormData();
            formData.append("id_category", id_category);
            var url = "adminsetting/update_time_nav_step_three";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    adminsetting(result);
                },
                dataType: "json"

            });
        }


        function adminsetting(result) {

            var selected_nav = $(".selected_nav");
            selected_nav.empty();


            $.each(result , function (key , value) {

                var num = key + 1;
                var id = value["id"];
                var title = value["title"];

                var css ="";
                if (key == result.length - 1){
                    css="border-bottom: none;";
                }

                var item =
                    "<div class='item_form_slider' style='"+css+"'>"+
                    "<span class='title_num_form_slider yekan fontlg'>"+num+"</span>"+
                    "<span class='title_name_form_slider yekan fontlg'>"+title+"</span>"+
                    "<span class='title_option_form_slider yekan fontlg'>"+
                    "<img src='public/picture/admin/delete.png' title='delete_nav' class='img_delete_slider' onclick='delete_nav("+id+")' >"+
                    "<img src='public/picture/admin/update.png' title='update_nav' class='img_update_slider' onclick='update_time_nav("+id+")' >"+
                    "</span>\n"+
                    " </div>";

                selected_nav.append(item);
            })
        }
    </script>




</div>


<script>

    function show_tab(element , num_tab) {
        $(".item_form_choose_type_edit").removeClass("selected_tab");
        $(element).addClass("selected_tab");


        $(".form_nav").css("display" , "none").eq(num_tab).css("display" , "block");

    }
</script>
