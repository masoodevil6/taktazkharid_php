<?php
$data_servert = $data;

$category = $data_servert["category"];

$sliders = $data_servert["slider"];
?>


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
        width: 200px;
        height: 30px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
    }






    .btn_form_sub_item{
        float: right;
        height: 50px;
        padding-top: 10px;
        margin-right: 100px;
    }


    /* form btn */


    .btn_accept_sub_item{
        transition: background-color 1s ease 0s;
        cursor: pointer;
        margin: auto;
        width: 100px;
        height: 40px;
        background: #45b8d1;
        border-radius: 10px;
    }

    .btn_accept_sub_item:hover{
        transition: background-color 1s ease 0s;
        background: #32778c;
    }

    .text_btn_accept_sub_item{
        line-height: 40px;
        display: block;
        text-align: center;
        color: white;
    }

    .slider_show_view{
        background: #aae6f3;
    }

</style>


<span class="title_form_slider yekan fontxxlg">
    <img style="float: right;cursor: pointer;margin-right: 20px" src="public/picture/panel_icons/back.png" class="icon_back_btn" onclick="location.href='adminsetting/index'">
    انتخاب سر گروه
</span>

<div class="form_slider">

    <span class="title_search_slider  yekan fontlg">
        انتخاب سرگروه:
    </span>


    <select class="select_parent_category yekan fontlg" data-frist-id="<?php if (isset($category[0]["id"])){echo $category[0]["id"]; } else{ echo 0;}?>" onchange="change_parent_search(this)">

        <?php
        foreach ($category as $parent){
            ?>

            <option value="<?=$parent["id"]?>" data-name="<?=$parent["title"]?>">
                <?=$parent["title"]?>
            </option>

            <?php
        }
        ?>

        <option value="0" style="background: #6ae989;" data-name="اسلایدرهای منتخب">
            اسلایدرهای منتخب
        </option>


    </select>


    <div class="btn_form_sub_item">

        <div class="btn_accept_sub_item" onclick="seach_sliders_parent()">

            <span class="text_btn_accept_sub_item yekan fontxlg">
                جستجو ...
            </span>

        </div>

    </div>

</div>




<div class="form_slider" style="background: #F2C065">

    <div class="form_slider name_category" style="background: #aae6f3">
        <span class="title_form_slider yekan fontxxlg">
            <?=$category[0]["title"]?>
        </span>
    </div>


    <style>



        .title_search_slider{
            float: right;
            margin-right: 20px;
            width: 200px;
            line-height: 60px;
            text-align: center;
            color: #424242;
        }

        .select_max_slider_category{
            float: right;
            margin-right: 25px;
            margin-top: 15px;
            width: 200px;
            height: 30px;
            line-height: 40px;
            text-align: center;
            color: #424242;
            padding-right: 40px;
        }






        .input_name_slider{
            float: right;
            margin-right: 25px;
            margin-top: 15px;
            width: 200px;
            height: 30px;
            line-height: 40px;
            text-align: center;
            color: #424242;
        }

    </style>


    <span class="title_form_slider yekan fontxxlg">
       تنظیم سر گروه
    </span>

    <div class="form_slider">

        <span class="title_search_slider  yekan fontlg">
            ظرفیت تعداد اسلایدر:
        </span>


        <select class="select_max_slider_category yekan fontlg" data-frist-id="<?=$category[0]["max_slider"]?>" onchange="change_max_slider_category(this)">

            <?php
            for($i=1 ; $i<= 4 ; $i++){

                $selected="";
                if ($i == $category[0]["max_slider"]){
                    $selected = "selected";
                }

                ?>

                <option value="<?=$i?>" <?=$selected?> >
                    <?=$i?>
                    عدد
                </option>

                <?php
                }
            ?>



        </select>


        <div class="btn_form_sub_item">

            <div class="btn_accept_sub_item" onclick="update_max_slider()">

                <span class="text_btn_accept_sub_item yekan fontxlg">
                    تنظیم
                </span>

            </div>

        </div>

    </div>





    <span class="title_form_slider yekan fontxxlg">
            ساخت اسلایدر در این بخش
    </span>

    <div class="form_slider" style="background: #ffffff">

        <span class="title_search_slider  yekan fontlg">
                نام اسلایدر:
        </span>

        <input class="input_name_slider yekan fontlg" placeholder="نام اسلایدر">

        <div class="btn_form_sub_item">

            <div class="btn_accept_sub_item" onclick="create_slider_slider()">
                <span class="text_btn_accept_sub_item yekan fontxlg">
                    ایجاد
                </span>
            </div>

        </div>
    </div>




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
            width: 225px;
            height: 100%;
            line-height: 40px;
            text-align: center;
            color: #424242;
            border-left: #7f6538 solid 2px;
        }

        .title_max_form_slider{
            float: right;
            width: 100px;
            height: 100%;
            line-height: 40px;
            text-align: center;
            color: #424242;
            border-left: #7f6538 solid 2px;
        }

        .title_selected_form_slider{
            float: right;
            width: 100px;
            height: 100%;
            line-height: 40px;
            text-align: center;
            color: #424242;
            border-left: #7f6538 solid 2px;
            position: relative;
            background: #8bfcff;
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


        .img_selected_slider{
            position: relative;
            width: 35px;
            height: 35px;
            top: 1px;
            margin: auto;
            border-radius: 100%;
            border: #333333 solid 2px;
        }

        .img_setting_slider{
            position: absolute;
            width: 35px;
            height: 35px;
            top: 1px;
            left: 5px;
            border-radius: 100%;
            border: #333333 solid 2px;
            cursor: pointer;
        }

        .img_delete_slider{
            position: absolute;
            width: 35px;
            height: 35px;
            top: 1px;
            left: 55px;
            border-radius: 100%;
            border: #333333 solid 2px;
            cursor: pointer;
        }

        .img_update_slider{
            position: absolute;
            width: 35px;
            height: 35px;
            top: 1px;
            left: 105px;
            border-radius: 100%;
            border: #333333 solid 2px;
            cursor: pointer;
            background: white;
        }

    </style>

    <span class="title_form_slider yekan fontxxlg">
        اسلایدر ها
    </span>

    <div class="form_slider show_all_slider" style="background: #ffffff">

        <!--title-->
        <div class="top_form_slider">

            <span class="title_num_form_slider yekan fontlg">
                ردیف
            </span>

            <span class="title_name_form_slider yekan fontlg">
                نام اسلایدر
            </span>

            <span class="title_max_form_slider yekan fontlg">
                حدکثر ظرفیت
            </span>

            <span class="title_selected_form_slider yekan fontlg" style="background: #ffffff">
                منتخب
            </span>


            <span class="title_option_form_slider yekan fontlg" style="background: #ffffff">
                تنظیمات
            </span>
        </div>

        <!--slider-->
        <?php

        foreach ($sliders as $key => $slider){

            $css ="";
            if ($key == sizeof($sliders) - 1){
                $css="border-bottom: none;";
            }

            $class_slider_show_view ="";
            if ($key < $category[0]["max_slider"]){
                $class_slider_show_view ="slider_show_view";
            }

            ?>

            <div class="item_form_slider <?=$class_slider_show_view?>" style="<?=$css?>">

                <span class="title_num_form_slider yekan fontlg">
                    <?=$key + 1?>
                </span>

                <span class="title_name_form_slider yekan fontlg">
                   <?=$slider["title"]?>
                </span>

                <span class="title_max_form_slider yekan fontlg">
                   <?=$slider["max"]?>
                </span>

                <span class="title_selected_form_slider yekan fontlg">
                    
                    <?php
                    if ($slider["id_category"] > 0){
                        ?>

                        <?php
                        if ($slider["selected"] == 0){
                            ?>

                            <img src="public/picture/admin/not_select.png" class="img_selected_slider">

                            <?php
                        }
                        else{
                            ?>

                            <img src="public/picture/admin/selected.png" class="img_selected_slider">

                            <?php
                        }
                        ?>


                        <?php
                    }
                    else if ($slider["id_category"] == 0){
                        ?>

                        منتخب

                        <?php
                    }
                    ?>

                </span>

                <span class="title_option_form_slider yekan fontlg">

                    <img src="public/picture/admin/setting.png" title='setting_slider' class="img_setting_slider" onclick="show_setting_slider(<?=$slider["id"]?>)">

                    <img src="public/picture/admin/delete.png" title='delete_slider' class="img_delete_slider" onclick="delete_slider(<?=$slider["id"]?> , <?=$slider["id_category"]?>)">

                    <img src="public/picture/admin/update.png" title='update_slider' class="img_update_slider" onclick="update_time_slider(<?=$slider["id"]?>)">

                </span>

            </div>

            <?php
        }
        ?>

    </div>

</div>



<?php
require("delete_slider.php");
?>






<script>


    /// search
    var parent_seach=$(".select_parent_category").attr("data-frist-id");

    var selected_parent_id =$(".select_parent_category").attr("data-frist-id");

    function change_parent_search(element) {
        parent_seach = $(element).val();
    }


    function seach_sliders_parent() {



        var formData = new FormData();
        formData.append("parent_id", parent_seach);
        var url = "adminsetting/search_sliders_parent";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                selected_parent_id = parent_seach;

                var select_parent_category = $(".select_parent_category").find("option");
                var select_parent_category_length = select_parent_category.length;
                var name_category = "";
                for (var i=0 ; i< select_parent_category_length ; i++){
                    if (select_parent_category.eq(i).attr("value") == parent_seach){
                        name_category = select_parent_category.eq(i).attr("data-name");
                    }
                }

                $(".name_category").find(".title_form_slider").text(name_category);


                update_list_slider(result);
            },
            dataType: "json"

        });
    }


    function update_list_slider(result) {
        var item_form_slider = $(".item_form_slider");
        item_form_slider.remove();

        var slider = result["slider"];
        var max_slider = result["max"];


        $.each(slider , function (key , value) {

            var css ="";
            if (key == result.length - 1){
                css="border-bottom: none;";
            }

            var key_num = key + 1;
            var id = value["id"];
            var name = value["title"];
            var max = value["max"];
            var id_category = value["id_category"];





            var show_selectes ="";
            if (id_category > 0){
                var selected_img;
                if (value["selected"] == 0){
                    selected_img = "not_select";
                }
                else {
                    selected_img = "selected";
                }
                show_selectes =
                    "<span class='title_selected_form_slider yekan fontlg'>"+
                    "<img src='public/picture/admin/"+selected_img+".png' class='img_selected_slider'>"+
                    "</span>";

            }
            if (id_category == 0){

                show_selectes =
                    "<span class='title_selected_form_slider yekan fontlg'> منتخب </span>";
            }


            var class_slider_show_view ="";
            if (key < max_slider){
                class_slider_show_view = "slider_show_view";

            }

            var item=
                "<div class='item_form_slider "+class_slider_show_view+"' style='"+css+"'>"+
                "<span class='title_num_form_slider yekan fontlg'>"+key_num+"</span>"+
                "<span class='title_name_form_slider yekan fontlg'>"+name+"</span>"+
                "<span class='title_max_form_slider yekan fontlg'>"+max+"</span>";

            item +=show_selectes;


            item += "<span class='title_option_form_slider yekan fontlg'>"+
                "<img src='public/picture/admin/setting.png' title='setting_slider' class='img_setting_slider' onclick='show_setting_slider("+id+")'>"+
                "<img src='public/picture/admin/delete.png' title='delete_slider' class='img_delete_slider' onclick='delete_slider("+id+" , "+id_category+")'>"+
                "<img src='public/picture/admin/update.png' title='update_slider' class='img_update_slider' onclick='update_time_slider("+id+")'>" +
                "</span>"+
                "</div>";


            $(".show_all_slider").append(item);

        });



        var select_max_slider_category = $(".select_max_slider_category");
        select_max_slider_category.find("option").attr("selected" , false);
        select_max_slider_category.find("option").eq(max_slider - 1).attr("selected" , true);
    }





    /// create table
    function create_slider_slider() {

        var name_slier = $.trim($(".input_name_slider").val());

        var formData = new FormData();
        formData.append("parent_id", selected_parent_id);
        formData.append("name", name_slier);

        var url = "adminsetting/create_slider_show";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_slider(result)
            },
            dataType: "json"

        });

    }


    function show_setting_slider(id_slider){
        location.href = "adminsetting/setting_slider/"+id_slider;
    }




    //// update_max

    var max_num_slider = $(".select_max_slider_category").attr("data-frist-id");

    function change_max_slider_category(element) {
        max_num_slider = $(element).val();
    }

    function update_max_slider() {

        var formData = new FormData();
        formData.append("category_id", selected_parent_id);
        formData.append("max_slider", max_num_slider);

        var url = "adminsetting/update_max_slider";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {

                var max_slider = result;
                var item_form_slider = $(".item_form_slider");
                var item_form_slider_length = item_form_slider.length;

                item_form_slider.removeClass("slider_show_view");
                for (var i=0 ; i < item_form_slider_length ; i++){
                    if (i < max_slider){
                        item_form_slider.eq(i).addClass("slider_show_view");
                    }
                }
            }

        });

    }

    function update_time_slider(id_slider) {

        var formData = new FormData();
        formData.append("id_slider", id_slider);
        formData.append("parent_id", selected_parent_id);

        var url = "adminsetting/update_time_slider";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_slider(result)
            },
            dataType: "json"

        });
    }

</script>