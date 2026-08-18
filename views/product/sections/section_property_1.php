<section  class="display_flow_root  padding_form">

    <?php
    $discription_product = $data["discription_product"];
    $product_info = $data['productInfo'];
    ?>




    <div class="top_title_property_1   display_table  padding_input  color_white  border_top  border_left  border_right  border_width_medium  box_shadow_btn_blue">

        <span class="title_property_1 yekan fontxxlg  line_height_medium  color_block_dark  display_flow_root">
            نقد و بررسی اجمالی
        </span>


        <span class="title_product_property_1 yekan fontlg  line_height_low  color_white">
            <?= $product_info["title_product"]?>
        </span>

    </div>



    <div id="left_discript_form"  class="float_right  position_relative  border_top  border_width_medium">
        <div id="form_icon_discript"  class="position_absolute  position_center     border_full  border_width_medium  border_radous_full  box_shadow_btn_blue">
            <div id="icon_discript" class="icon_site_store  position_absolute  position_center"></div>
        </div>
    </div>



    <span class="discript yekan fontxxlg  display_flow_root  line_height_large  text_align_justify  border_top  border_width_medium">

        <?= $discription_product["discription"]?>

    </span>



</section>