<section  class="padding_form">

    <?php
    /// qestion and question_answer_category
    $question_answer_category = $data["question_answer_category"];
    $id_parent_category = $data["id_parent_category"];
    $title_category = $data["title_category"];


    ?>


    <span id="title_category_question" class="display_flow_root  width_90_percent  margin_item_low text_align_center  border_full  border_width_medium  border_radous_low_typeI  background_yellow_dark  box_shadow_outer  line_height_medium  yekan fontmd">
        <?=$title_category?>
    </span>




    <?php
    if($question_answer_category["answer_do_me"] == 0){
        ?>

        <!--new_question-->
        <div  class=" width_90_percent   margin_item_x_large  border_full  border_width_medium  overflow_hidden  padding_form  background_black_shine" >

            <span class="title_form_property_product yekan fontxlg  display_flow_root background_black_dark  text_align_center  color_white  line_height_large  box_shadow_outer position_relative">
                موجموعه سوالات و جواب های این دسته
            </span>


            <div id="form_all_question_answer_category" class="display_flow_root">


                <?php
                foreach ($question_answer_category["answer_question"] as $question){
                    ?>

                <div class="item_question_category  width_90_percent  margin_item_medium  display_flow_root  border_full  border_width_medium    box_shadow_outer" data-id="<?= $question["id_question"]?>">
                    <span class="title_item_question_category background_white display_flow_root text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd border_bottom  border_width_medium">
                        <?= $question["question"]?>
                    </span>


                    <div class="form_answer_this_question display_flow_root  cursor_pointer">

                        <?php
                        foreach ($question["sub_answers"] as $answer){
                            ?>

                            <div class="item_answer_category  display_flow_root   box_shadow_outer  background_white  box_shadow_btn_block"
                                 onclick="select_this_answer(this)" data-id="<?=$answer["id_answer"]?>" data-selected="0">
                                <div class="form_check_box_answer  float_right    position_relative  ">
                                    <input type="radio" class="check_box_answer  position_absolute  position_center">
                                </div>

                                <span class="title_item_answer_category display_flow_root text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd">
                                    <?=$answer["answer"]?>
                                </span>
                            </div>

                            <?php
                        }
                        ?>

                    </div>

                </div>

                    <?php
                }
                ?>

            </div>





            <div  class="form_btn_info_site_form  display_flow_root  margin_item_low">
                <div  class=" btn_info_site_form  box_shadow_outer display_table  margin_auto  width_50_percent  background_button_typeI  border_full  border_width_medium  border_radous_low_typeI  cursor_pointer"
                      onclick="sub_answer_question_category()">

                    <span  class="title_btn_info_site_form yekan  fontmd  display_flow_root  text_align_center  line_height_medium  color_white_hover">
                        ثبت اطلاعات
                    </span>

                </div>
            </div>

        </div>


        <?php
    }
    else{
        ?>

        <!--new_question-->
        <div  class=" width_90_percent   margin_item_x_large  border_full  border_width_medium  overflow_hidden  padding_form  background_black_shine" >

            <span class="title_form_property_product yekan fontxlg  display_flow_root background_black_dark  text_align_center  color_white  line_height_large  box_shadow_outer position_relative">
                نتایج نظر سنجی کاربران
            </span>


            <div id="form_all_question_answer_category" class="display_flow_root">


                <?php
                foreach ($question_answer_category["answer_question"] as $question){
                ?>

                <div class="item_question_category  width_90_percent  margin_item_medium  display_flow_root  border_full  border_width_medium    box_shadow_outer">

                    <div class="display_flow_root  border_bottom  border_width_medium  background_white">

                        <span class="title_item_question_category background_white float_right text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd ">
                            <?= $question["question"]?>
                        </span>

                        <span class="title_num_item_question_category  border_radous_low_typeI  box_shadow_outer  border_right  border_left  border_width_medium background_yellow_dark float_right text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd">
                            [
                            تعداد شرکت کننده ها:
                            <?= $question["num_answers_question"]?>
                            نفر
                            ]
                        </span>

                    </div>



                    <div class="form_answer_this_question display_flow_root  cursor_pointer">

                        <?php
                        $num_all_answer_question = $question["num_answers_question"];
                        foreach ($question["res_answers"] as $answer){

                            $width_percent = floor(($answer["num_answer"]/$num_all_answer_question)*100);
                            ?>

                            <div class="item_answer_category  display_flow_root   box_shadow_outer  background_white  box_shadow_btn_block">

                                <div class="display_flow_root   background_white">

                                    <span class="title_item_answer_category background_white float_right text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd ">
                                        <?= $answer["answer"]?>
                                    </span>

                                    <span class="title_num_item_answer_category border_radous_low_typeI  box_shadow_outer  border_right  border_left  border_width_medium  background_green_shine float_right text_align_right  padding_text  line_height_medium  color_block_dark yekan fontmd">
                                        [
                                        <?= $width_percent?>
                                        درصد
                                        ]
                                    </span>

                                </div>



                                <div class="form_percent_item_answer_category display_flow_root  width_90_percent  margin_item_low  border_full border_width_medium  border_radous_low_typeI background_white">
                                    <div class="percent_item_answer_category  float_left  border_radous_low_typeI  background_green_dark box_shadow_outer height_100_percent"
                                         style="width: <?= $width_percent?>%"></div>
                                </div>

                            </div>

                            <?php
                        }
                        ?>

                    </div>

                </div>


            </div>

            <?php
            }
            ?>



        </div>

        <?php
    }
    ?>




</section>