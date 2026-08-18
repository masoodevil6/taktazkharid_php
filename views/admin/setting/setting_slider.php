<?php
$data_server = $data;

$sliders = $data_server["slider"];
$id_slider = $data_server["id_slider"];
$products = $data_server["products"];
$product_slider = $data_server["product_slider"];

$title_category = $data_server["title_category"];

$selected_slider = $data_server["selected"];
?>






<style>
    .item_choose_setting{
        display: block;
        margin-top: 10px;
        margin-bottom: 10px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
        background: #49d9ee;
    }

    .title_item_choose_setting{
        display: flow-root;
        line-height: 40px;
        text-align: center;
        color: #424242;
    }



    .title_form_slider{
        display: block;
        line-height: 40px;
        text-align: center;
        color: #424242;
    }

    .form_info{
        margin-top: 10px;
        margin-bottom: 50px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
    }

    .top_form_info{
        display: block;
        height: 40px;
        background: #F2C065;
    }

    .title_top_form_info{
        display: flow-root;
        width: 50%;
        border-left: #7f6538 solid 2px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        float: right ;
    }

    .value_top_form_info{
        display: flow-root;
        line-height: 40px;
        text-align: center;
        color: #424242;
    }


    .item_setting{
        border-top: #7f6538 solid 2px;
        display: block;
        height: 40px;
        background: #F2C065;
    }

    .title_item_setting{
        display: flow-root;
        width: 50%;
        border-left: #7f6538 solid 2px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        float: right ;
    }

    .value_item_setting{
        display: flow-root;
    }

    .input_value_item_setting{
        width: 100%;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        background: #f2dbb9;
    }

    .select_value_item_setting{
        width: 100%;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
        background: #f2dbb9;
    }



    /* form btn */
    .btn_form_sub_item{
        display: block;
        height: 50px;
        padding-top: 10px;
        border-top: #7f6538 solid 2px;
        background: #F2C065;
    }

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

</style>

<span class="title_form_slider yekan fontxxlg">
    <img style="float: right;cursor: pointer;margin-right: 20px" src="public/picture/panel_icons/back.png" class="icon_back_btn" onclick="location.href='adminsetting/slider_show'">
    تنظیمات کلی اسلایدر
</span>

<div class="item_choose_setting">
    <span class="title_item_choose_setting yekan fontlg" >
        دسته:
        <?=$title_category?>
    </span>
</div>

<div class="form_info">

    <div class="top_form_info">
        <span class="title_top_form_info yekan fontlg">
            عنوان
        </span>

        <span class="value_top_form_info yekan fontlg">
            مقدار
        </span>
    </div>





    <div class="item_setting">
        <span class="title_item_setting yekan fontlg">
            عنوان اسلایدر
        </span>

        <div class="value_item_setting">
            <input class="input_value_item_setting  yekan fontlg"  name="name_slider" value=" <?=$sliders["title"]?>">
        </div>
    </div>


    <div class="item_setting">
        <span class="title_item_setting yekan fontlg">
            ظرفیت اسلایدر
        </span>

        <div class="value_item_setting">

            <select class="select_value_item_setting  yekan fontlg" name="max_slider">

                <?php
                for ($i=1 ; $i<=25 ; $i++){

                    $selected="";
                    if ($sliders["max"] == $i){
                        $selected = "selected";
                    }

                    ?>

                    <option value="<?=$i?>" <?=$selected?> >
                        <?=$i?>
                    </option>

                    <?php
                }
                ?>

            </select>

        </div>
    </div>


    <div class="item_setting">
        <span class="title_item_setting yekan fontlg">
            انتخاب برای صفحه نخست
        </span>

        <div class="value_item_setting">

            <select class="select_value_item_setting  yekan fontlg" name="selected_slider">

                <?php
                if ($selected_slider == 0){

                    $selected_no="";
                    $selected_yes="";
                    if ($sliders["selected"] == 0){
                        $selected_no = "selected";
                    }
                    else if ($sliders["selected"] == 1){
                        $selected_yes = "selected";
                    }
                    ?>

                    <option value="0" <?=$selected_no?> >
                        خیر
                    </option>

                    <option value="1" <?=$selected_yes?> >
                        بله
                    </option>

                    <?php
                }
                else{
                    ?>

                    <option value="1" selected >
                        بله
                    </option>

                    <?php
                }
                ?>

            </select>
        </div>
    </div>



    <div class="btn_form_sub_item">

        <div class="btn_accept_sub_item" onclick="sub_setting_slider(<?=$id_slider?>)">

            <span class="text_btn_accept_sub_item yekan fontxlg">
                ثبت اطلاعات
            </span>

        </div>

    </div>


</div>




<span class="title_form_slider yekan fontxxlg">
افزودن محصول به اسلایدر
</span>

<style>

    .form_product_add_slider{
        display: flow-root;
        width: 50%;
        height: 60px;

        line-height: 40px;
        text-align: center;
        color: #424242;
        float: right ;
    }

    .product_add_slider{
        width: 90%;
        height: 40px;
        margin-top: 10px;
        margin-right: 5%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
        background: #f2dbb9;
    }


    .btn_form_sub_product{
        float: right;
        width: 50%;
        height: 60px;
    }

    .btn_accept_sub_product{
        transition: background-color 1s ease 0s;
        cursor: pointer;
        margin: auto;
        width: 100px;
        position: relative;
        top: 10px;
        height: 40px;
        background: #45b8d1;
        border-radius: 10px;
    }

    .btn_accept_sub_product:hover{
        transition: background-color 1s ease 0s;
        background: #32778c;
    }

    .text_btn_accept_sub_product{
        line-height: 40px;
        display: block;
        text-align: center;
        color: white;
    }
</style>

<div class="form_info">

    <div class="form_product_add_slider">
        <select class="product_add_slider yekan fontlg">

            <?php
            foreach ($products as $product){
                ?>

                <option value="<?=$product["id"]?>">
                    <?=$product["title_product"]?>
                </option>

                <?php
            }
            ?>

        </select>
    </div>

    <div class="btn_form_sub_product">

        <div class="btn_accept_sub_product" onclick="sub_add_product_slider(<?=$id_slider?>)">

            <span class="text_btn_accept_sub_product yekan fontxlg">
                افزودن محصول
            </span>

        </div>

    </div>

</div>






<span class="title_form_slider yekan fontxxlg">
محصولات اسلایدر
</span>

<style>


    .form_slider{
        margin-top: 10px;
        margin-bottom: 25px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
    }

    .top_form_slider{
        display: block;
        height: 40px;
        border-bottom: #7f6538 solid 2px;
        background: #F2C065;
    }

    .item_form_slider{
        display: block;
        height: 40px;
        border-bottom: #7f6538 solid 2px;
        background: #f2dbb9;
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
        width: 300px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }

    .title_price_form_slider{
        float: right;
        width: 200px;
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
    }



    .img_update_slider{
        position: absolute;
        width: 35px;
        height: 35px;
        top: 1px;
        left: 5px;
        border-radius: 100%;
        border: #333333 solid 2px;
        cursor: pointer;
        background: white;
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
        background: white;
    }



    .product_slider{
        background: #aaffe8;
    }

</style>

<div class="form_slider show_all_product_slider" style="background: #ffffff">

    <div class="top_form_slider">

        <span class="title_num_form_slider yekan fontlg">
            ردیف
        </span>

        <span class="title_name_form_slider yekan fontlg">
            نام محصول
        </span>

        <span class="title_price_form_slider yekan fontlg">
            قیمت واقعی
        </span>

        <span class="title_option_form_slider yekan fontlg">
            تنظیمات
        </span>

    </div>



    <?php
    foreach ($product_slider as $key=>$product){

        $class="";
        if ($key < $sliders["max"]){
            $class="product_slider";
        }

        $css_border="";
        if ($key == sizeof($product_slider)-1){
            $css_border="border-bottom: none;";
        }

        ?>

        <div class="item_form_slider <?=$class?>" style="<?=$css_border?>">

            <span class="title_num_form_slider yekan fontlg">
                <?=$key+1?>
            </span>

            <span class="title_name_form_slider yekan fontlg">
                <?=$product["title_product"]?>
            </span>

            <span class="title_price_form_slider yekan fontlg">
                <?= number_format($product["real_price"]) ?>
                تومان
            </span>

            <span class="title_option_form_slider yekan fontlg">

                <img src="public/picture/admin/update.png" title="update_product" class="img_update_slider" onclick="update_product_slider(<?=$product["id"]?> , <?=$id_slider?>)">

                <img src="public/picture/admin/delete.png" title="delete_product" class="img_delete_slider" onclick="delete_product_slider(<?=$product["id"]?> , <?=$id_slider?>)">
            </span>

        </div>

        <?php
    }
    ?>

</div>






<script>


    function sub_setting_slider(id_slider) {
        var name_slider = $(".input_value_item_setting[name=name_slider]").val();
        var max_slider = $(".select_value_item_setting[name=max_slider]").val();
        var selected_slider = $(".select_value_item_setting[name=selected_slider]").val();

        if ($.trim(name_slider) !=""){
            var formData = new FormData();
            formData.append("name_slider", name_slider);
            formData.append("max_slider", max_slider);
            formData.append("selected_slider", selected_slider);
            formData.append("id_slider", id_slider);
            var url = "adminsetting/sub_setting_slider";

            $.ajax({
                url: url,
                type: "post",
                method: "post",
                data: formData,
                contentType: false,
                processData: false,
                success: function (result) {
                    alert("اطلاعات جدید جایگزین شد")

                    var item_form_slider = $(".item_form_slider");
                    var item_form_slider_length = item_form_slider.length;

                    item_form_slider.removeClass("product_slider");
                    for (var i=0 ; i< item_form_slider_length ; i++){

                        if (i < result){
                            item_form_slider.eq(i).addClass("product_slider")
                        }

                    }

                }
            });
        }
        else {
            alert("لطفا فیلد عنوان اسلایدر را پر کنید")
        }
    }



    function sub_add_product_slider(id_slider) {

        var id_product = $(".product_add_slider").val();

        var formData = new FormData();
        formData.append("id_product", id_product);
        formData.append("id_slider", id_slider);


        <?php
        if ($selected_slider == 0){
            ?>

        var url = "adminsetting/sub_add_product_slider";

        <?php
        }
        else{
            ?>

        var url = "adminsetting/sub_add_product_slider_selected";

        <?php
        }
        ?>


        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider(result);
            },
            dataType: "json"

        });


    }

    function delete_product_slider(id_product , id_slider) {

        var formData = new FormData();
        formData.append("id_product", id_product);
        formData.append("id_slider", id_slider);

        <?php
        if ($selected_slider == 0){
        ?>

        var url = "adminsetting/sub_delete_product_slider";

        <?php
        }
        else{
        ?>
        var url = "adminsetting/sub_delete_product_slider_selected";

        <?php
        }
        ?>




        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider(result , id_slider);
            },
            dataType: "json"

        });
    }

    function update_product_slider(id_product , id_slider) {
        var formData = new FormData();
        formData.append("id_product", id_product);
        formData.append("id_slider", id_slider);


        <?php
        if ($selected_slider == 0){
        ?>

        var url = "adminsetting/sub_update_product_slider";

        <?php
        }
        else{
        ?>
        var url = "adminsetting/sub_update_product_slider_selected";

        <?php
        }
        ?>



        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider(result , id_slider);
            },
            dataType: "json"

        });
    }




    function update_list_product_slider(result , id_slider) {

        var prodcuts = result["products"];
        var max = result["max"];

        var item_form_slider = $(".item_form_slider");
        item_form_slider.remove();

        $.each(prodcuts , function (key , value) {


            var class_product="";
            if (key < max){
                class_product="product_slider";
            }

            var css_border="";
            if (key == prodcuts.length-1){
                css_border="border-bottom: none;";
            }

            var num = key + 1;
            var id_product = value["id"];
            var title_product = value["title_product"];
            var price_product = number_format(value["real_price"]) + " تومان";


            var item =
                "<div class='item_form_slider "+class_product+"' style='"+css_border+"'>\n"+
                "<span class='title_num_form_slider yekan fontlg'>"+num+"</span>\n"+
                "<span class='title_name_form_slider yekan fontlg'>"+title_product+"</span>\n"+
                "<span class='title_price_form_slider yekan fontlg'>"+price_product+"</span>\n"+
                "<span class='title_option_form_slider yekan fontlg'>"+
                "<img src='public/picture/admin/update.png' title='update_product' class='img_update_slider' onclick='update_product_slider("+id_product+" , "+id_slider+")'>\n"+
                "<img src='public/picture/admin/delete.png' title='delete_product' class='img_delete_slider' onclick='delete_product_slider("+id_product+" , "+id_slider+")'>\n"+
                "</span>"+
                "</div>";


            $(".show_all_product_slider").append(item);

        });

    }

    function number_format(value , num_char=3 , char=",") {

        var info_splice_num = Math.pow(10, num_char);
        if (value >= info_splice_num){

            var num = value;
            var n = 0;
            while (Math.pow(info_splice_num , n+1)<num){
                n++
            }



            var array_num=[];
            for (var i=n ; i>=0 ; i--){

                var number = Math.floor((num)/Math.pow(info_splice_num,i));
                num -= Math.floor((num)/Math.pow(info_splice_num,i)) * Math.pow(info_splice_num,i) ;

                if (i !==n){
                    var x_num_ten = 0;
                    var num_ten = "";
                    while (Math.floor(number / Math.pow(10 , x_num_ten + 1)) > 0){
                        x_num_ten++;
                    }

                    for (var  t=0 ; t< num_char - x_num_ten - 1 ; t++){
                        num_ten += "0";
                    }
                    array_num.push(num_ten + number.toString());
                }
                else {
                    array_num.push(number.toString());
                }
            }

            var result="";

            for (var x = 0 ; x< array_num.length ; x++){
                if (x < array_num.length - 1){
                    result += array_num[x] + char;
                }
                else {
                    result += array_num[x];
                }
            }

            return result;

        }
        else {
            return value;
        }

    }


</script>

