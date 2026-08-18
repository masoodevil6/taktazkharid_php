
<?php
$data_servert = $data;

$products_slider = $data_servert["products_slider"];
$duration = $data_servert["duration"];
$products = $data_servert["products"];

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




    .title_time_slider_spical{
        float: right;
        margin-right: 20px;
        width: 200px;
        line-height: 60px;
        text-align: center;
        color: #424242;
    }

    .select_time_slider_spical{
        float: right;
        margin-right: 75px;
        margin-top: 15px;
        width: 200px;
        height: 30px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
        background: #f2dbb9;
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

    <span class="title_time_slider_spical  yekan fontlg">
        فاصله زمانی ویژه بودن محصول:
    </span>


    <select class="select_time_slider_spical yekan fontlg" data-time="" onchange="change_time_slider_spical(this)">

        <option value="0.5" <?php if ($duration== 0.5){echo "selected";}?>>
            0.5
            روز
        </option>

        <?php
        for ($i=1 ; $i<=366 ; $i++){

            $selected = "";
            if ($i == $duration){
                $selected = "selected";
            }

            ?>

            <option value="<?=$i?>" <?=$selected?>>
                <?=$i?>
                روز
            </option>

            <?php
        }
        ?>


    </select>


    <div class="btn_form_sub_item">

        <div class="btn_accept_sub_item" onclick="set_time_slider_spical()">

            <span class="text_btn_accept_sub_item yekan fontxlg">
                تنظیم
            </span>

        </div>

    </div>

</div>





<style>

    .form_info{
        margin-top: 10px;
        margin-bottom: 50px;
        width: 90%;
        margin-right: 5%;
        border: #7f6538 solid 2px;
        overflow: hidden;
    }

    .form_product_add_slider{
        display: flow-root;
        width: 70%;
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
        width: 30%;
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

<span class="title_form_slider yekan fontxxlg">
افزودن محصول به اسلایدر
</span>

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

        <div class="btn_accept_sub_product" onclick="sub_add_product_slider_spical()">

            <span class="text_btn_accept_sub_product yekan fontxlg">
                افزودن محصول
            </span>

        </div>

    </div>

</div>





<style>


    .item_form_slider{
        display: block;
        background: #f2dbb9;
    }


    .info_product_slider{
        display: block;
        width: 100%;
        height: 100px;
        border-bottom: #7f6538 solid 2px;
    }

    .form_setting_product{
        width: 100%;
        height: 60px;
        border-bottom: #7f6538 solid 2px;
        background: #f2dbb9;
        display: none;
    }







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
        width: 200px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }


    .title_time_form_slider{
        float: right;
        width: 125px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }


    .title_price_form_slider{
        float: right;
        width: 175px;
        height: 100%;
        line-height: 40px;
        text-align: center;
        color: #424242;
        border-left: #7f6538 solid 2px;
    }


    .real_price_product{
        display: block;
        line-height: 25px;
        text-align: center;
        color: #424242;
        border-bottom: #7f6538 solid 2px;
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


    .img_setting_slider{
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



    .product_slider{
        background: #aaffe8;
    }




    .select_percent_off_price_product{
        float: right;
        margin-right: 10px;
        margin-top: 15px;
        width: 200px;
        height: 30px;
        line-height: 40px;
        text-align: center;
        color: #424242;
        padding-right: 40px;
        background: white;
    }


    .title_percent_off_price_product{
        float: right;
        margin-right: 20px;
        width: 200px;
        line-height: 60px;
        text-align: center;
        color: #424242;
    }


    .result_price_off_product_slider_spical{
        float: right;
        margin-right: 20px;
        width: 100px;
        line-height: 60px;
        text-align: center;
        color: #424242;
    }

    .btn_percent_off_price_product{
        float: right;
        height: 50px;
        padding-top: 10px;
        margin-right: 50px;
    }

</style>

<span class="title_form_slider yekan fontxxlg">
محصولات اسلایدر
</span>

<div class="form_slider show_all_product_slider_spical" style="background: #ffffff">

    <div class="top_form_slider">

        <span class="title_num_form_slider yekan fontlg">
            ردیف
        </span>

        <span class="title_name_form_slider yekan fontlg">
            نام محصول
        </span>

        <span class="title_time_form_slider yekan fontlg">
            زمان باقی مانده
        </span>

        <span class="title_price_form_slider yekan fontlg">
            قیمت / تخفیف / نهایی
        </span>

        <span class="title_option_form_slider yekan fontlg">
            تنظیمات
        </span>

    </div>



    <?php
    foreach ($products_slider as $key=>$product){

        $class="";
        if ($key < 10){
            $class="product_slider";
        }

        $css_border="";
        if ($key == sizeof($products_slider)-1){
            $css_border="border-bottom: none;";
        }

        ?>

        <div class="item_form_slider" style="<?=$css_border?>">

            <div class="info_product_slider <?=$class?>">

                <span class="title_num_form_slider yekan fontlg">
                    <?=$key+1?>
                </span>

                <a class="title_name_form_slider yekan fontlg" href="adminproduct/add_product/<?=$product["id"]?>/edit" target="_blank">
                    <?=$product["title_product"]?>
                </a>

                <span class="title_time_form_slider yekan fontlg">
                    <?=$product["delta_time"]?>
                </span>

                <span class="title_price_form_slider yekan fontlg">

                    <span class="real_price_product yekan fontlg">
                        <?= number_format($product["real_price"]) ?>
                        تومان
                    </span>

                    <span class="real_price_product yekan fontlg">
                        <?= $product["off_spical"] ?>
                        %
                    </span>

                    <span class="real_price_product yekan fontlg" style="border-bottom: none">
                        <?= number_format($product["off_price"]) ?>
                        تومان
                    </span>

                </span>

                <span class="title_option_form_slider yekan fontlg">

                    <img src="public/picture/admin/update.png" title="update_product" class="img_update_slider" onclick="update_product_slider_spical(<?=$product["id"]?>)">

                    <img src="public/picture/admin/delete.png" title="delete_product" class="img_delete_slider" onclick="delete_product_slider_spical(<?=$product["id"]?>)">

                    <img src="public/picture/admin/setting.png" title="setting_off_product" class="img_setting_slider" onclick="setting_product_slider_spical(this)">
                </span>

            </div>


            <div class="form_setting_product">

                <span class="title_percent_off_price_product  yekan fontlg">
                    تخفیف ویژه محصول (درصد)
                </span>

                <select class="select_percent_off_price_product yekan fontlg" data-real_price="<?=$product["real_price"]?>" onchange="change_percent_off_price_product(this)">

                    <?php
                    for ($i=1 ; $i<=100 ; $i++){

                        $selected = "";
                        if ($i == $product["off_spical"]){
                            $selected = "selected";
                        }

                        ?>

                        <option value="<?=$i?>" <?=$selected?>>
                            <?=$i?>
                            درصد
                        </option>

                        <?php
                    }
                    ?>


                </select>

                <span class="result_price_off_product_slider_spical  yekan fontlg">
                    <?= number_format($product["off_price"]) ?>
                    تومان
                </span>

                <div class="btn_percent_off_price_product">

                    <div class="btn_accept_sub_item" onclick="set_percent_off_price_product( <?= $product["id"] ?> , this)">

                        <span class="text_btn_accept_sub_item yekan fontxlg">
                            ثبت
                        </span>

                    </div>

                </div>

            </div>


        </div>





        <?php
    }
    ?>

</div>











<script>
    
    var new_time_select = $(".select_time_slider_spical").attr("data-time");
    var selected_time_select = new_time_select;
    
    function change_time_slider_spical(element) {
        new_time_select = $(element).val()
    }


    function set_time_slider_spical() {

        var formData = new FormData();
        formData.append("time_duration", new_time_select);

        var url = "adminsetting/update_time_slider_spical";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                selected_time_select = new_time_select;
                update_list_product_slider_spical(result)
            },
            dataType: "json"

        });
        
    }


    function sub_add_product_slider_spical() {

        var id_product = $(".product_add_slider").val();

        var formData = new FormData();
        formData.append("id_product", id_product);

        var url = "adminsetting/sub_add_product_slider_spical";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider_spical(result)
            },
            dataType: "json"

        });
    }


    function update_product_slider_spical(id_product) {

        var formData = new FormData();
        formData.append("id_product", id_product);

        var url = "adminsetting/update_product_slider_spical";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider_spical(result)
            },
            dataType: "json"

        });
    }


    function delete_product_slider_spical(id_product) {
        var formData = new FormData();
        formData.append("id_product", id_product);

        var url = "adminsetting/delete_product_slider_spical";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider_spical(result)
            },
            dataType: "json"

        });
    }


    function set_percent_off_price_product(id_product , element) {

        var percent = $(element).parent().parent().find(".select_percent_off_price_product").val();

        var formData = new FormData();
        formData.append("id_product", id_product);
        formData.append("percent", percent);

        var url = "adminsetting/set_percent_off_price_product";

        $.ajax({
            url: url,
            type: "post",
            method: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (result) {
                update_list_product_slider_spical(result)
            },
            dataType: "json"

        });
    }


    function setting_product_slider_spical(element) {



        if ($(element).parent().parent().parent().find(".form_setting_product").css("display") === "block"){
            $(element).parent().parent().parent().find(".form_setting_product").css("display" , "none");
        }
        else if ($(element).parent().parent().parent().find(".form_setting_product").css("display") === "none"){
            $(".form_setting_product").css("display" , "none");
            $(element).parent().parent().parent().find(".form_setting_product").css("display" , "block");
        }

    }


    function change_percent_off_price_product(element) {

        var real_price = $(element).attr("data-real_price");
        var percent_off = $(element).val();


        var off_price = (real_price * percent_off) / 100;
        var total_price = number_format(real_price - off_price);

        $(element).parent().find(".result_price_off_product_slider_spical").text(total_price + " تومان");

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









    function update_list_product_slider_spical(result) {
        console.log(result);

        var item_form_slider = $(".item_form_slider");
        item_form_slider.remove();

        $.each(result , function (key , value) {

            var num = key + 1;
            var id = value["id"];
            var title_product = value["title_product"];
            var delta_time = value["delta_time"];
            var real_price = value["real_price"];
            var real_price_text = number_format(value["real_price"]) + " تومان";
            var off_spical = value["off_spical"];
            var off_spical_text = number_format(value["off_spical"]) + "% ";
            var off_price = value["off_price"];
            var off_price_text = number_format(value["off_price"]) + " تومان";


            var class_show_product="";
            if (key < 10){
                class_show_product="product_slider";
            }

            var css_border="";
            if (key == result.length -1){
                css_border="border-bottom: none;";
            }


            var item=
                "<div class='item_form_slider' style='"+css_border+"'>"+
                "<div class='info_product_slider "+class_show_product+"'>"+
                "<span class='title_num_form_slider yekan fontlg'>"+num+"</span>"+
                "<a class='title_name_form_slider yekan fontlg' href='adminproduct/add_product/"+id+"/edit' target='_blank'>"+title_product+"</a>"+
                "<span class='title_time_form_slider yekan fontlg'>"+delta_time+"</span>"+
                "<span class='title_price_form_slider yekan fontlg'>"+
                "<span class='real_price_product yekan fontlg'>"+real_price_text+"</span>"+
                "<span class='real_price_product yekan fontlg'>"+off_spical_text+"</span>"+
                "<span class='real_price_product yekan fontlg' style='border-bottom: none'>"+off_price_text+"</span>"+
                "</span>"+
                "<span class='title_option_form_slider yekan fontlg'>"+
                "<img src='public/picture/admin/update.png' title='update_product' class='img_update_slider' onclick='update_product_slider_spical("+id+")'>"+
                "<img src='public/picture/admin/delete.png' title='delete_product' class='img_delete_slider' onclick='delete_product_slider_spical("+id+")'>"+
                "<img src='public/picture/admin/setting.png' title='setting_off_product' class='img_setting_slider' onclick='setting_product_slider_spical(this)'>"+
                "</span>"+
                "</div>"+
                "<div class='form_setting_product'>"+
                "<span class='title_percent_off_price_product  yekan fontlg'> تخفیف ویژه محصول (درصد) </span>"+
                "<select class='select_percent_off_price_product yekan fontlg' data-real_price='"+real_price+"' onchange='change_percent_off_price_product(this)'>";



            for (var i=1 ; i<=100 ; i++){

                var selected = "";
                if (i == off_spical){
                    selected="selected";
                }

                var percent = i + " درصد";
                item +="<option value='"+i+"' "+selected+">"+percent+"</option>";

            }


            item +=
                "</select>"+
                "<span class='result_price_off_product_slider_spical  yekan fontlg'>"+off_price_text+"</span>"+
                "<div class='btn_percent_off_price_product'>"+
                "<div class='btn_accept_sub_item' onclick='set_percent_off_price_product( "+id+" , this)'>"+
                "<span class='text_btn_accept_sub_item yekan fontxlg'>  ثبت  </span>"+
                "</div>"+
                "</div>"+
                "</div>"+
                "</div>";



            $(".show_all_product_slider_spical").append(item);

        })
    }
    
</script>

