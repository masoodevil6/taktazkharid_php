<!--top_title-->
<div class="form_title_form_all_product_spical   display_flow_root  width_100_percent    padding_form_low">

    <h1 id="title_form_all_product_spical" class="yekan  display_flow_root  text_align_center  line_height_large  color_white">
        محصولات ویژه
        <?=$setting["name_store"]["value"]?>
    </h1>

    <div class="form_filter_list_product  margin_auto    background_red_dark  border_radous_large_typeI"
         data-filter="<?=$filter?>">


        <span class="title_form_filter_list_product yekan fontxlg   line_height_medium  color_yellow_shine">
            مرتب سازی بر اساس:
        </span>


        <span class="item_filter_search_products yekan fontxlg   color_white  cursor_pointer  text_align_center  position_relative
        <?php if ($filter == 1){echo "selected_fiter_search";}?>" onclick="select_filter_search(this , 1)">

            پربازدید ترین
            <div class="effect_selected_fiter_search  display_flow_root  position_absolute  position_center" style="<?php if ($filter == 1){echo "width:90px;";}?>"></div>

        </span>


        <span class="item_filter_search_products yekan fontxlg   color_white  cursor_pointer  text_align_center  position_relative
        <?php if ($filter == 2){echo "selected_fiter_search";}?>" onclick="select_filter_search(this , 2)">

            جدیدترین
            <div class="effect_selected_fiter_search  display_flow_root  position_absolute  position_center" style="<?php if ($filter == 2){echo "width:90px;";}?>"></div>


        </span>


        <span class="item_filter_search_products yekan fontxlg   color_white  cursor_pointer  text_align_center  position_relative
        <?php if ($filter == 3){echo "selected_fiter_search";}?>" onclick="select_filter_search(this , 3)">

            پر فروش ترین
            <div class="effect_selected_fiter_search  display_flow_root  position_absolute  position_center" style="<?php if ($filter == 3){echo "width:90px;";}?>"></div>

        </span>


        <span class="item_filter_search_products yekan fontxlg   color_white  cursor_pointer  text_align_center  position_relative
        <?php if ($filter == 4){echo "selected_fiter_search";}?>" onclick="select_filter_search(this , 4)">

            ارزانترین
            <div class="effect_selected_fiter_search  display_flow_root  position_absolute  position_center" style="<?php if ($filter == 4){echo "width:90px;";}?>"></div>

        </span>


        <span class="item_filter_search_products yekan fontxlg   color_white  cursor_pointer  text_align_center  position_relative
        <?php if ($filter == 5){echo "selected_fiter_search";}?>" onclick="select_filter_search(this , 5)">

            گرانترین
            <div class="effect_selected_fiter_search  display_flow_root  position_absolute  position_center" style="<?php if ($filter == 5){echo "width:90px;";}?>"></div>

        </span>

    </div>
</div>



<!--products-->
<div class="form_products_show   display_flow_root  width_100_percent   border_top   border_bottom  border_width_large   background_white  padding_form">

    <?php
    foreach ($products as $product){
        ?>

        <div class="item_product  margin_auto  border_full  border_width_medium  border_radous_large_typeI  background_white  box_shadow_outer_radius">

            <a target="_self" class="form_img_item_product_spical   position_relative">
                <img  class="img_item_product_spical  display_flow_root   position_absolute"
                      src="public/picture/products/<?=$product["id_num"]?>/product-350.jpg">

                <div class="blur_form_mogayeseh">

                    <div class="form_add_like  cursor_pointer"
                         data-id="<?=$product["id_num"]?>" onclick="check_for_like_product(this)">


                        <?php
                        $position_image= "-939px -130px;";
                        if ($product["like_product"] !=""){
                            $position_image= "-30px -230px;";
                        }
                        ?>

                        <div class="icon_form_add_like icon_site_store  " style="background-position:<?=$position_image?>"></div>

                        <?php
                        $title_like= "افزودن به علاقه مندی ها";
                        if ($product["like_product"] !=""){
                            $title_like= "حذف از علاقه مندی ها";
                        }
                        ?>
                        <span class="title_form_add_like yekan fontlg  line_height_large">
                            <?=$title_like?>
                        </span>
                    </div>

                </div>
            </a>

            <a target="_self" class="left_item_product_spical  cursor_pointer"
               href="product/index/<?=$product["id_num"]?>">


                <div class="top_item_product_spical   display_flow_root   border_bottom   border_width_medium  background_yellow_dark   position_relative  box_shadow_outer_radius">

                    <div class="left_offer_form  float_left   position_relative  width_70_percent">
                        <div class="timer_spical_item_product  position_absolute" data-time="<?=$product["durition"]?>"></div>

                        <div class="right_baner_off icon_site_store  position_absolute"></div>
                    </div>

                    <span class="title_top_item_product_spical yekan fontxlg   float_right   line_height_x_large   color_red_dark">
                        محصول ویژه شماره:
                        <?=$product["num"]?>
                    </span>

                </div>

                <div class="form_info_item_product_spical   background_blue_shine  display_flow_root   border_bottom  border_width_medium  box_shadow_outer_radius">

                    <div class="right_form_info_item_product_spical  float_right  width_50_percent">

                        <span class="name_product_form_info_item_product_spical yekan fontmd   display_flow_root  text_align_center   line_height_medium   color_block_shine  border_bottom  border_width_low  width_90_percent  margin_auto  border_radous_low_typeI">
                            <?=$product["title_product"]?>
                        </span>

                        <span class="name_product_form_info_item_product_spical yekan fontsm  display_flow_root  text_align_center   line_height_low   color_block_shine">
                            <?=$product["title_product_en"]?>
                        </span>

                        <div class="form_price_item_product_spical  display_flow_root  width_90_percent  margin_item_low  background_blue_dark  border_full  border_width_medium  border_radous_low_typeI  overflow_hidden    padding_form_x_low">

                            <span class="off_price_product_form_price_item_product_spical yekan fontmd  display_flow_root  text_align_center  line_height_medium  color_white   background_black_dark   box_shadow_outer">
                                <?=$product["info_price"]["text_total_price"]?>
                                تومان
                            </span>

                            <span class="real_price_product_form_price_item_product_spical yekan fontmd  float_right  line_height_medium  color_white  text_decoration_line_through  ">
                                <?=$product["info_price"]["text_real_price"]?>
                                تومان
                            </span>

                            <span class="off_product_form_price_item_product_spical yekan fontmd  float_left  line_height_low  color_white  padding_input  background_red_dark  border_radous_large_typeI  box_shadow_outer">
                                <?=$product["info_price"]["off_spical"]?>
                                درصد تخفیف
                            </span>

                        </div>
                    </div>

                    <div class="left_form_info_item_product_spical  float_right  width_50_percent  margin_item_low">

                        <?php
                        foreach ($product["properties"] as $property){
                            ?>

                            <span class="property_product_form_info_item_product_spical yekan fontmd  border_bottom  border_width_low   display_flow_root  text_align_center  line_height_medium  color_block_dark width_90_percent margin_auto hiden_text_line_full">
                                <?=$property?>
                            </span>

                            <?php
                        }
                        ?>


                    </div>

                </div>

                <div class="bottom_info_item_product_spical  background_black_dark  display_flow_root  line_height_medium  box_shadow_btn_top_left">

                    <div class="form_comment_and_color  display_flow_root  width_80_percent">

                        <div class="form_star_comment_product  float_right  width_60_percent ">

                            <div class="form_shap_star_comment   float_right   border_radous_large_typeI  background_blue_dark  position_relative  box_shadow_outer">

                                <div class="shap_star_comment icon_site_store  position_absolute"></div>

                                <span class="title_form_shap_star_comment yekan fontxlg  float_left  line_height_medium  color_white">
                                    <?=$product["comment"]["star"]?>
                            </span>

                            </div>

                            <span class="title_form_star_comment_product yekan fontsm  float_right  color_white  line_height_x_large">
                                از
                                <?=$product["comment"]["num"]?>
                                رای
                            </span>

                        </div>


                        <div class="form_color_item_product_spical  float_right  width_40_percent ">

                            <?php
                            $num_color=0;
                            foreach ($product["color"] as $color) {
                                if ($num_color < 4) {
                                    ?>

                                    <div class="item_form_color_item_product_spical  float_left    position_relative">

                                        <div class="color_item_form_color_item_product_spical   border_radous_full   box_shadow_outer"
                                             style="background: <?= $color["hex"] ?>"></div>

                                        <span class="title_item_form_color_item_product_spical yekan fontlg  position_absolute    border_radous_large_typeI  color_white  border_full  border_width_medium  text_align_center    display_none">
                                            <?= $color["color"] ?>
                                        </span>

                                    </div>

                                    <?php
                                    $num_color++;
                                }
                            }
                            ?>


                        </div>

                    </div>




                    <div class="form_btn_goto_page_product  display_flow_root">
                        <div class="btn_goto_page_product  display_table  margin_item_low  background_red_dark  border_radous_large_typeI  box_shadow_outer  width_80_percent">
                            <span class="title_btn_goto_page_product yekan fontlg  display_flow_root  text_align_center  line_height_medium  color_white">
                                مشاهده
                            </span>
                        </div>
                    </div>

                </div>
            </a>

        </div>

        <?php
    }
    ?>

</div>
