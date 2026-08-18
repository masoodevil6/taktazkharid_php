
<div id="form_list_property" class="overflow_hidden  background_white  border_radous_low_typeI  position_relative  box_shadow_outer  border_full  border_width_medium  margin_auto_form"
     data-show-comment="<?=$data['show_comment']?>"
     data-id-product="<?= $product_info['id_num']?>"
     data-title-product="<?= $product_info['title_product']?>"
     data-id-cate="<?= $product_navigation['category']['id']?>"
     data-tab="<?=$data['tab']?>">


    <div class="bg_list_property width_100_percent" >

        <div class="nav_form_list_property  width_100_percent  position_relative  border_bottom  border_width_medium  box_shadow_outer  overflow_hidden  background_color_element">

            <div class="inside_nav_form_list_property   margin_auto    display_flow_root  background_color_heder_footer">


                <div id="list_top_tab_property"  class="display_flow_root  position_relative">


                    <div id="inside_list_top_tab_property" class="display_table  margin_auto">

                        <div class="list_form   cursor_pointer   border_full   border_width_medium  position_relative    background_white  box_shadow_btn_block "
                             onclick="show_tab_product(this , <?=$data['show_comment']?>)">

                            <div class="icon_property  float_right">
                                <div id="icon_information_tab" class="  icon_site_store  margin_item_x_low"></div>
                            </div>

                            <span class="title_property yekan fontmd  display_flow_root  text_align_center  line_height_low  color_block_shine  ">
                            نقد و بررسی
                        </span>
                        </div>


                        <div class="list_form  cursor_pointer   border_full   border_width_medium  position_relative    background_white  box_shadow_btn_block"
                             onclick="show_tab_product(this , <?=$data['show_comment']?>)">

                            <div class="icon_property  float_right">
                                <div  id="icon_property_tab" class=" icon_site_store  margin_item_x_low"></div>
                            </div>


                            <span class="title_property yekan fontmd  display_flow_root  text_align_center  line_height_low  color_block_shine  ">
                            مشخصات فنی
                        </span>
                        </div>


                        <div class="list_form  cursor_pointer   border_full   border_width_medium  position_relative    background_white  box_shadow_btn_block"
                             onclick="show_tab_product(this , <?=$data['show_comment']?>)">

                            <div class="icon_property  float_right">
                                <div id="icon_comment_tab"  class=" icon_site_store  margin_item_x_low"></div>
                            </div>

                            <span class="title_property yekan fontmd  display_flow_root  text_align_center  line_height_low   color_block_shine">
                            نظرات کاربران
                        </span>
                        </div>


                        <div class="list_form  cursor_pointer   border_full   border_width_medium  position_relative    background_white  box_shadow_btn_block"
                             onclick="show_tab_product(this , <?=$data['show_comment']?>)">

                            <div class="icon_property  float_right">
                                <div id="icon_question_tab" class="  icon_site_store  margin_item_x_low"></div>
                            </div>

                            <span class="title_property yekan fontmd  display_flow_root  text_align_center  line_height_low  color_block_shine  ">
                            پرسش و پاسخ
                        </span>

                        </div>


                        <div class="list_form  cursor_pointer   border_full   border_width_medium  position_relative    background_white  box_shadow_btn_block"
                             onclick="show_tab_product(this , <?=$data['show_comment']?>)">

                            <div class="icon_property  float_right">
                                <div id="icon_Society_tab" class="  icon_site_store  margin_item_x_low"></div>
                            </div>

                            <span class="title_property yekan fontmd  display_flow_root  text_align_center  line_height_low  color_block_shine  ">
                            نظر سنجی کاربران
                        </span>

                        </div>

                    </div>





                    <div class="under_line_list_property   background_color_element   position_absolute  width_100_percent  border_top  border_width_medium"></div>

                </div>








            </div>

        </div>

    </div>



    <div class="down_form_list_property  overflow_hidden  width_90_percent  margin_auto_form">
        <?php
        $num_tab = $data['tab'] + 1;
        require ("section_property_".$num_tab.".php");
        ?>
    </div>

</div>
