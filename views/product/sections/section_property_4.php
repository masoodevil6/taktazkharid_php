<section  class="padding_form">

    <?php
    /// qestion and answers
    $question_answer = $data["question_answer"];
    /// for send answer
    $id_product = $data["id_product"];
    ?>


    <div class="top_title_property_1   display_table  padding_input  color_white  border_top  border_left  border_right  border_width_medium  box_shadow_btn_blue">

        <span class="title_property_1 yekan fontxxlg  line_height_medium  color_block_dark  display_flow_root">
            پرسش و پاسخ
        </span>


        <span class="title_product_property_1 yekan fontlg  line_height_low  color_white">
            پرسش خود را در مورد محصول مطرح نمایید
        </span>

    </div>





    <div id="send_question"  class="background_white  box_shadow_btn_block   padding_form  border_full  border_width_medium  box_shadow_outer_radius">

        <textarea id="question_for_product" class="background_input yekan fontxlg   width_90_percent   display_flow_root  margin_auto_form  border_radous_low_typeI  border_full  border_width_medium"></textarea>

        <div id="btn_send_question_form"  class="border_radous_low_typeI  overflow_hidden  cursor_pointer  box_shadow_outer  border_left  border_right  border_width_medium  margin_item_low" data-id="<?= $id_product ?>" onclick="submit_question(this)">

            <div id="efect_btn_send_question"  class="margin_auto  border_radous_low_typeI  box_shadow_outer  border_right  border_left  border_width_medium">
                <span id="title_btn_send_question_form" class="yekan fontxlg  text_align_center   line_height_x_large  display_flow_root   color_white">
                    ارسال سوال
                </span>
            </div>

        </div>

    </div>





    <div id="title_form_question"  class="display_flow_root">
        <span id="title_question" class="yekan fontxlg  line_height_x_large  color_white  border_full  border_width_medium  box_shadow_btn_blue">
            &#10066 پرسش ها و پاسخ ها
        </span>

        <div id="tartib_form_question"  class="background_blue_shine  display_flow_root  box_shadow_outer_radius">

            <span id="title_tartib_form_question" class="yekan fontxlg   line_height_x_large   color_white  border_left  border_width_medium  box_shadow_btn_blue">
                مرتب سازی بر اساس:
            </span>


            <div class="item_filter_question choose_tab_tartib_form_question  border_full  border_width_medium  cursor_pointer  position_relative  line_height_medium  text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block" data-id="<?= $id_product ?>" onclick="set_tab_question(this , 0)">
                <div class="effect_filter_question  position_absolute" style="width: 80%"></div>
                <span class="value_tartib_form_question yekan fontxlg choose_tartib_form_question   display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input" >
                    جدیدترین پرسش ها
                </span>
            </div>

            <div class="item_filter_question   cursor_pointer  position_relative  border_full  border_width_medium    text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block" data-id="<?= $id_product ?>" onclick="set_tab_question(this , 1)">
                <div class="effect_filter_question  position_absolute"></div>
                <span class="value_tartib_form_question yekan fontxlg  display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input">
                    بیشترین پاسخ به پرسش
                </span>
            </div>

            <div class="item_filter_question   cursor_pointer  position_relative  border_full  border_width_medium   text_align_center  box_shadow_outer_radius  background_white  box_shadow_btn_block" data-id="<?= $id_product ?>" onclick="set_tab_question(this , 2)">
                <div class="effect_filter_question  position_absolute"></div>
                <span class="value_tartib_form_question yekan fontxlg  display_flow_root  text_align_center  line_height_medium  color_red_dark  cursor_pointer  padding_input">
                    پرسش های شما
                </span>
            </div>




        </div>
    </div>





    <div class="form_question_sends">


        <?php
        foreach ($question_answer as $row) {

            $question = $row["question"];
            $answer = $row["answer"];

            ?>

            <div class="question_answor_form  border_radous_low_typeI  border_full  border_width_medium  overflow_hidden  box_shadow_outer_radius">

                <div class="form_question_top  display_flow_root  background_blue_shine  box_shadow_outer">

                    <div class="right_form_question  float_right  position_relative  border_width_medium    ">
                        <div class=" icon_question  icon_site_store  position_absolute  position_center"></div>
                    </div>

                    <div class="left_form_question  position_relative  display_flow_root background_white  border_right  border_width_medium">

                        <div class="top_left_form_question  border_bottom  border_width_medium  background_white  box_shadow_btn_block">

                            <span class="name_question yekan fontxlg  line_height_medium  display_flow_root  text_align_right  color_block_dark">
                                <?= $question["user_name"] ?>
                            </span>

                            <span class="date_question yekan fontlg line_height_low display_flow_root  color_red_dark  text_align_right">
                                تاریخ
                                <?= $question["date"] ?>
                            </span>

                        </div>

                        <span class="text_question yekan fontmd  line_height_low  display_flow_root  text_align_justify  color_block_shine">
                            <?= $question["text"] ?>
                        </span>

                        <span class="answer_this_question yekan fontxlg  display_flow_root  position_absolute  cursor_pointer  line_height_low  text_align_center  color_block_shine" onclick="show_asnwer_question(this)">
                            به این پرسش پاسخ دهید
                        </span>

                    </div>

                </div>


                <?php

                if (sizeof($answer) > 0) {

                    foreach ($answer as $row2) {
                        ?>

                        <div class="form_question_bottom  border_top  border_width_medium  display_flow_root  background_green_shine  box_shadow_outer">

                            <div class="right_form_answer  float_right  position_relative  ">
                                <div class="icon_answer icon_site_store  position_absolute  position_center"></div>
                            </div>

                            <div class="left_form_answer position_relative  display_flow_root  background_white  border_right  border_width_medium ">

                                <div class="top_left_form_answer  border_bottom  border_width_medium    background_white  box_shadow_btn_block">

                                    <span class="name_answer yekan fontxlg  line_height_medium  display_flow_root  text_align_right  color_block_dark">
                                        <?= $row2["user_name"] ?>
                                    </span>

                                    <span class="date_answer yekan fontlg  line_height_medium  display_flow_root  color_red_dark  text_align_right">
                                        تاریخ
                                        <?= $row2["date"] ?>
                                    </span>

                                </div>

                                <span class="text_answer yekan fontlg  display_flow_root  cursor_pointer  line_height_low  text_align_justify  color_block_shine">
                                    <?= $row2["text"] ?>
                                </span>

                            </div>


                        </div>

                        <?php
                    }
                }
                ?>

                <div class='element_answer_question   background_white  box_shadow_btn_block    element_answer_question  width_100_percent  display_flow_root  border_top  border_width_medium  padding_form  box_shadow_outer_radius' style="display: none">

                    <span class="title_element_answer_question yekan fontxxlg  line_height_low  float_right  color_block_shine">
                        پاسخ به این پرسش
                    </span>

                    <div class="close_element_answer_question icon_site_store  cursor_pointer  float_left  border_input    border_width_medium  background_white  border_radous_full"
                         onclick="close_asnwer_question(this)"  ></div>

                    <textarea class="text_element_answer_question yekan fontmd  color_block_dark   display_flow_root  border_radous_low_typeI  border_input background_input"></textarea>


                    <div class="btn_send_answer_form  border_radous_low_typeI  overflow_hidden  cursor_pointer  box_shadow_outer  border_left  border_right  border_width_medium" data-id="<?=$id_product?>" onclick="submit_answer(this , <?= $question["id"] ?>  )">
                        <div class="efect_btn_send_answer  margin_auto  border_radous_low_typeI  box_shadow_outer  border_right  border_left  border_width_medium">
                            <span class="title_btn_send_answer_form yekan fontxlg  text_align_center   line_height_x_large  display_flow_root   color_white">
                                ارسال جواب
                            </span>
                        </div>
                    </div>
                </div>

            </div>


            <?php

        }
        ?>


    </div>











</section>