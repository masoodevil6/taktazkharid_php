<section  class="padding_form">
    <?php

    $product_info = $data['productInfo'];
    $comments = $data["comments"];
    $score = $data["score"];
    $user_connect = $data["user_connect"];

    ?>



    <div class="top_title_property_1   display_table  padding_input  color_white  border_top  border_left  border_right  border_width_medium  box_shadow_btn_blue">

        <span class="title_property_1 yekan fontxxlg  line_height_medium  color_block_dark  display_flow_root">
            امتیاز کاربران به
        </span>


        <span class="title_product_property_1 yekan fontlg  line_height_low  color_white">
            <?= $product_info["title_product"]?>
        </span>

    </div>





    <div id="up_comment" class="background_white  box_shadow_btn_block  display_flow_root  border_full  border_width_medium  box_shadow_outer_radius">

        <div id="form_score_product_users">


            <?php

            foreach ($score as $key=>$params) {

                $color = "";
                if ($params["score"] <= 25){
                    $color = " #e40e0e";
                }
                else if ($params["score"] > 25 && $params["score"] <= 50){
                    $color = "#d76d18";
                }
                else if ($params["score"] > 50 && $params["score"] <= 75){
                    $color = "#15a600";
                }
                else if ($params["score"] > 75 && $params["score"] <= 100){
                    $color = "#137105";
                }

                ?>


                <div class="item_score_product_users  width_100_percent  display_flow_root">
                    <span class="title_item_score_product_users yekan fontlg   text_align_right  line_height_medium  color_block_shine">
                        <?= $params["title"]?>
                        :
                    </span>


                    <div class="form_value_percent_item_score_product_users   float_right  overflow_hidden  border_full  border_width_medium  border_radous_low_typeI">
                        <div class="value_percent_item_score_product_users  float_left   width_80_percent  box_shadow_outer_radius" style="width:  <?= $params["score"]?>%; background: <?= $color?>"></div>
                    </div>

                    <span class="result_value_percent_item_score_product_users yekan fontlg  float_right  text_align_right " style="color: <?= $color?>">
                         <?= $params["title_score"]?>
                    </span>

                </div>



                <?php
            }
            ?>



        </div>


        <div id="add_comment_user">

            <span id="title_comment_form" class="yekan fontxlg  display_flow_root  text_align_right  color_block_dark  ">
                شما هم می‌توانید در مورد این کالا نظر بدهید.
            </span>

            <span id="text_comment_form" class="yekan fontlg  display_flow_root  text_align_justify  color_block_shine">
                برای ثبت نظر، لازم است ابتدا وارد حساب کاربری خود شوید:
            </span>



            <div id="btn_add_comment" class=" position_relative cursor_pointer overflow_hidden  display_table margin_auto_form width_80_percent   background_button_typeII  border_button_typeII    border_radous_medium_typeI"
                 onclick="check_new_comment_product(this)"  data-id="<?= $product_info["id"]?>" >

                <div id="form_icon_add_comment_user" class="form_background_button_typeII  position_relative  box_shadow_outer_radius">
                    <div id="icon_add_comment_user" class="icon_site_store  position_absolute  position_center"></div>
                </div>

                <span id="text_btn_add_comment" class="line_height_medium  position_absolute  text_position_btn color_white  yekan fontlg">
                    افـزودن نظـر
                </span>

            </div>

        </div>

    </div>





    <div id="title_form_comment"  class="display_flow_root">
        <span id="title_comment" class=" yekan fontxlg  line_height_x_large  text_align_right  color_white  border_full  border_width_medium  box_shadow_btn_blue ">
            &#10066 نظرات کاربران
        </span>


        <div id="tartib_form_comments"  class="display_flow_root  box_shadow_outer_radius  background_blue_shine  border_bottom  border_top  border_left  border_width_medium">

            <span id="title_tartib_form_comments" class=" yekan fontxlg  line_height_x_large  color_white  border_left  border_width_medium  box_shadow_btn_blue">
                مرتب سازی بر اساس:
            </span>

            <div class="item_filter_commnet choose_tab_tartib_form_comments border_full  border_width_medium cursor_pointer  position_relative  line_height_medium  text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block"
                 data-id="<?= $product_info["id"]?>" onclick="change_view_comment(this , 0)">

                <div class="effect_filter_comment  position_absolute" style="width: 80%"></div>
                 <span class="value_tartib_form_comments yekan fontxlg choose_tartib_form_comments  display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input  ">
                     نظرات کاربران
                 </span>

            </div>

            <div class="item_filter_commnet  cursor_pointer  position_relative border_full  border_width_medium  line_height_medium  text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block"
                 data-id="<?= $product_info["id"]?>" onclick="change_view_comment(this , 1)">

                <div class="effect_filter_comment  position_absolute"></div>
                 <span class="value_tartib_form_comments yekan fontxlg  display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input  ">
                     مفید ترین نظرات
                 </span>

            </div>

            <div class="item_filter_commnet  cursor_pointer  position_relative border_full  border_width_medium line_height_medium  text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block"
                 data-id="<?= $product_info["id"]?>" onclick="change_view_comment(this ,  2)">

                <div class="effect_filter_comment  position_absolute"></div>
                <span class="value_tartib_form_comments yekan fontxlg  display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input  ">
                    جدیدترین نظرات
                </span>

            </div>


        </div>
    </div>





    <div class="comment_form_div  width_100_percent">
        <?php

        foreach ($comments as $row) {
            ?>
            <div class="comment_form   border_full  border_width_medium  border_radous_low_typeI  overflow_hidden  box_shadow_outer"
                <?php if ($row["my_comment"] == "user_comment"){echo "data_user='user_comment'";}?>>

                <div class="top_comment_user  width_100_percent  box_shadow_outer_radius  background_white  box_shadow_btn_block   border_bottom  border_width_medium">

                    <div class="top_right_comment_user  float_right">

                        <span class="name_comment yekan fontxlg  display_flow_root  text_align_right  color_block_dark  line_height_medium">
                            <?= $row["user"]?>
                        </span>

                        <span class="date_comment yekan fontlg  display_flow_root  text_align_right  color_red_dark">
                            تاریخ:
                            <?= $row["date"] ?>
                        </span>

                    </div>



                    <?php
                    $class_user_like="";
                    $class_user_dislike="";
                    if ($row["select_user"] == 1 && $row["select_user_like"]== "like") {
                        $class_user_like = "active_btn_like";
                    }
                    if ($row["select_user"] == 1 && $row["select_user_like"]== "dis_like"){
                        $class_user_dislike = "active_btn_like";
                    }



                    ?>

                    <div class="top_left_comment_user  float_left">

                        <div class="like_form_right   float_right   width_40_percent  cursor_pointer  border_full  border_width_medium  border_radous_low_typeI  background_black_shine  box_shadow_outer_radius  <?=$class_user_like?>" onclick="like_comment_user(<?= $row["id"] ?> , this)">
                            <div class="like_img icon_site_store   float_right"></div>
                            <span class="num_like_comment yekan fontxlg   float_right  line_height_medium  display_flow_root  text_align_center  color_red_shine">
                                <?= $row["like_comment"] ?>
                                    +
                            </span>
                        </div>

                        <div class="dis_like_form_left   float_right    width_40_percent   cursor_pointer   border_full  border_width_medium   border_radous_low_typeI  background_black_shine  box_shadow_outer_radius <?=$class_user_dislike?>" onclick="dislike_comment_user(<?= $row["id"] ?> , this)">
                            <div class="dis_like_img icon_site_store float_right "></div>
                            <span class="num_dis_like_comment yekan fontxlg  line_height_medium  display_flow_root  text_align_center  color_red_shine">
                                <?= $row["dis_like_comment"] ?>
                                    -
                            </span>
                        </div>
                    </div>


                </div>


                <span class="title_text_comment yekan fontxlg    line_height_medium  text_align_right  margin_item_x_low  display_flow_root  width_90_percent">
                    <?= $row["title"] ?>
                </span>

                <span class="text_comment yekan fontlg  color_block_shine   line_height_medium  text_align_right  margin_item_x_low  display_flow_root  width_90_percent">
                    <?= $row["text"] ?>
                </span>


                <div class="bottom_comment background_green display_flex  border_top  border_width_medium ">


                    <div class="bottom_comment_form_params     flex_1  ">

                        <div class="inside_bottom_comment_form_params  border_left border_bottom border_width_medium  display_flow_root  height_100_percent">


                            <span class="title_bottom_comment_form_score yekan  fontmd   background_white  box_shadow_btn_block  display_flow_root  text_align_center  border_bottom  border_width_medium line_height_low  color_block_dark">
                                امتیاز
                            </span>

                            <?php
                            if (sizeof($row["score"]) > 0){
                                foreach ($row["score"] as $key=>$score) {

                                    $color = "";
                                    if ($score["width"] <= 25) {
                                        $color = " #e40e0e";
                                    } else if ($score["width"] > 25 && $score["width"] <= 50) {
                                        $color = "#d76d18";
                                    } else if ($score["width"] > 50 && $score["width"] <= 75) {
                                        $color = "#15a600";
                                    } else if ($score["width"] > 75 && $score["width"] <= 100) {
                                        $color = "#137105";
                                    }
                                    ?>


                                    <div class="item_bottom_comment_form_params  display_flow_root  margin_item_low">

                                        <span class="title_item_bottom_comment_form_params  display_flow_root yekan fontmd text_align_center  line_height_low  color_block_shine">
                                            <?=$score["title"]?>
                                        </span>

                                        <div class="form_score_item_bottom_comment_form_params  width_90_percent  margin_auto  border_full  border_width_medium  border_radous_low_typeI  background_black_shine">
                                            <div class="score_item_bottom_comment_form_params  height_100_percent  box_shadow_outer  float_left  border_radous_low_typeI"
                                                 style="width: <?=$score["width"]?>%; background-color: <?=$color?>"></div>
                                        </div>

                                        <span class="result_score_item_bottom_comment_form_params  display_flow_root yekan fontmd text_align_center  line_height_low  color_block_shine"
                                              style="color: <?=$color?>">
                                            <?=$score["res"]?>
                                        </span>

                                    </div>


                                    <?php
                                }
                            }
                            else{
                                ?>

                                <span class=" yekan  fontmd display_flow_root  text_align_center   line_height_low  color_block_shine">
                                    ---
                                </span>

                                <?php
                            }
                            ?>

                        </div>

                    </div>

                    <div class="bottom_comment_form_postive  flex_1  ">

                        <div class="inside_bottom_comment_form_postive  border_left border_bottom  border_width_medium  display_flow_root  height_100_percent">

                            <span class="title_bottom_comment_form_postive yekan   background_white  box_shadow_btn_block   fontmd display_flow_root  text_align_center  border_bottom  border_width_medium line_height_low  color_green_dark">
                                نقاط قوت
                            </span>

                            <?php
                            if (sizeof($row["postive"])>0){
                                foreach ($row["postive"] as $postive){
                                    ?>

                                    <div class="form_item_postive">
                                        <div class="right_form_item_postive_negative  position_relative  width_20_percent  float_right">
                                            <div class="right_cricle_form_item_postive_negative  position_absolute  position_center  border_radous_full  border_full  border_width_medium  background_green_dark  box_shadow_outer"></div>
                                        </div>

                                        <span class="title_bottom_comment_form_postive yekan  hiden_text_line_full  fontmd display_flow_root  text_align_right   line_height_medium  color_block_shine">
                                            <?=$postive?>
                                        </span>
                                    </div>

                                    <?php
                                }
                            }
                            else{
                                ?>

                                <span class=" yekan  fontmd display_flow_root  text_align_center   line_height_low  color_block_shine">
                                    ---
                                </span>

                                <?php
                            }
                            ?>

                        </div>

                    </div>

                    <div class="bottom_comment_form_negative flex_1  ">

                        <div class="inside_bottom_comment_form_negative display_flow_root  height_100_percent">

                            <span class="title_bottom_comment_form_negative yekan  fontmd   background_white  box_shadow_btn_block  display_flow_root  text_align_center  border_bottom  border_width_medium line_height_low  color_red_dark">
                                نقاط ضعف
                            </span>

                            <?php
                            if (sizeof($row["negative"])>0){
                                foreach ($row["negative"] as $negative){
                                    ?>

                                    <div class="form_item_negative">
                                        <div class="right_form_item_postive_negative  position_relative  width_20_percent  float_right">
                                            <div class="right_cricle_form_item_postive_negative  position_absolute  position_center  border_radous_full  border_full  border_width_medium  background_red_dark  box_shadow_outer"></div>
                                        </div>

                                        <span class="title_bottom_comment_form_negative yekan hiden_text_line_full fontmd display_flow_root  text_align_right   line_height_medium  color_block_shine">
                                            <?=$negative?>
                                        </span>
                                    </div>

                                    <?php
                                }
                            }
                            else{
                                ?>

                                <span class=" yekan   fontmd display_flow_root  text_align_center     line_height_low  color_green_dark">
                                    ---
                                </span>

                                <?php
                            }
                            ?>

                        </div>

                    </div>


                </div>

            </div>
            <?php
        }
        ?>

    </div>



</section>