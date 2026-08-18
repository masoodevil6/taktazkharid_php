
<div id="zooming_product"  class="all_form_fixed">

    <div id="blur_form_zoom_product" class="blur_all_form_fixed" onclick="close_galery_product()"></div>

    <div id="form_zoom_product"  class="box_shadow_outer  border_full   border_width_medium  position_fixed  position_center  margin_auto  display_flow_root  background_white  border_radous_low_typeI ">

        <div id="colse_icon_galery" class="icon_site_store  position_absolute  cursor_pointer  border_radous_full  border_full  border_width_medium  background_white" onclick="close_galery_product()"></div>


        <div id="form_inside_img_zoom">

            <div id="form_img_zoom">
                <img src="public/picture/products/<?=$product_info["id_num"]?>/img_zoom/<?=$src[0]?>" id="img_zoom"/>
            </div>

        </div>


        <div id="form_list_img_zoom" class="position_relative" data-id="<?=$product_info["id_num"]?>">


            <div id="form_top_button" class="box_shadow_outer  cursor_pointer   position_absolute  background_black_btn_form  border_radous_full  border_full  border_width_medium" onclick="go_top_img_galery('<?=$product_info["id_num"]?>')">
                <div id="top_button" class="icon_site_store"></div>
            </div>


            <div id="form_galery"  class="overflow_hidden">

                <div id="scroller_form_galery">
                    <?php
                    foreach ($product_galery as $key => $link) {
                        ?>
                        <div class="form_img_galery  cursor_pointer  border_radous_low_typeI" onclick="show_img_galery(this ,<?=$key+1?> , '<?=$product_info["id_num"]?>')" data-name="<?=$link?>">
                            <img src="public/picture/products/<?=$product_info["id_num"]?>/icon_zoom/<?=$link?>" class="img_galery  display_flow_root  border_radous_x_low_typeI  border_full  border_width_medium"/>
                        </div>

                        <?php
                    }
                    ?>
                </div>


            </div>


            <div id="form_bottom_button" class="box_shadow_outer  cursor_pointer   position_absolute  background_black_btn_form  border_radous_full  border_full  border_width_medium" onclick="go_bottom_img_galery('<?=$product_info["id_num"]?>')">
                <div id="bottom_button" class="icon_site_store"></div>
            </div>

        </div>

    </div>

</div>
