<?php
$last_info_ligon = $data["last_info_ligon"];
$setting = $data["setting"];
?>


<div id="all_form_login_panel" class="all_form_fixed">

    <div id="blur_form_login_panel"  class="blur_all_form_fixed" onclick="close_window_login()"></div>

    <div id="page_login" class="position_fixed  position_center display_flow_root  box_shadow_outer  overflow_auto  background_black_shine"
         data-name-store="<?=$setting["name_store"]["value"]?>">


        <div id="uper_login" class=" position_relative   display_flow_root  background_color_element  box_shadow_outer  overflow_hidden">

            <span id="login_title" class=" display_flow_root yekan fontlg  color_white   text_align_center  line_height_medium">
                ورود به
                <?=$setting["name_store"]["value"]?>
            </span>


            <div id="close_login_page" class="box_shadow_outer_radius  icon_site_store   box_shadow_out   cursor_pointer  position_absolute  position_icon_left   border_radous_full   border_full   border_width_medium   background_white"
                 onclick="close_window_login()"></div>
        </div>


        <div id="form_data_login_user"  class="padding_form   width_90_percent  margin_auto">



            <div id="form_add_User_site"  class="width_90_percent  margin_item_medium  border_bottom  border_width_medium  padding_form_x_low">

                <div id="inside_form_add_User_site"  class="display_table   margin_auto  width_50_percent">

                    <a id="form_btn_new_connect" class="display_flow_root  border_radous_medium_typeI  cursor_pointer  overflow_hidden  box_shadow_out  border_button_typeII  background_button_typeII  position_relative"
                       target="_self"  href="register">

                        <div id="inside_form_btn_new_connect"  class="box_shadow_outer_radius  form_background_button_typeII position_relative  ">
                            <div id="icon_add_user_window" class="icon_site_store  position_absolute  position_center"></div>
                        </div>

                        <span id="title_form_btn_new_connect" class=" yekan fontmd  position_absolute text_position_btn  line_height_medium  color_white  " >
                            ثبت نام
                        </span>

                    </a>

                </div>

            </div>



            <div id="status_erroe_connect"  class="border_yellow  background_yellow_dark    width_90_percent  margin_item_low  border_radous_medium_typeI  box_shadow_outer">
                <span id="text_status_erroe_connect" class="yekan  fontlg  color_yellow_dark  line_height_medium  text_align_center  display_flow_root">
                    لطفا ایمیل و رمز کاربری خود را وارد کنید
                </span>
            </div>


            <div class=" display_flow_root   width_90_percent  margin_item_low "  >
                <span class="display_flow_root   yekan fontlg  text_align_center  line_height_medium  color_block_dark">
                    پست الکترونیک
                </span>


                <input class="input_login email_user_get   display_flow_root  line_height_medium  direction_ltr  color_block_shine  border_input  border_radous_low_typeI  background_input  margin_input  padding_input  width_100_percent  yekan fontlg"
                       placeholder="Email" name="email" value="<?=$last_info_ligon["email"]?>">
            </div>


            <div class=" display_flow_root   width_90_percent  margin_item_low ">

                <span class="display_flow_root   yekan fontlg  text_align_center  line_height_medium  color_block_dark">
                    کلمه عبور
                </span>


                <input class="input_login password_user_get  display_flow_root   line_height_medium  direction_ltr  color_block_shine  border_input  border_radous_low_typeI  background_input  margin_input  padding_input  width_100_percent  yekan fontlg"
                       onkeyup="show_password_input(this)" placeholder="password" type="password" name="password" value="<?=$last_info_ligon["password"]?>">

            </div>


            <div id="form_check_info_user" class="display_table  margin_item_low  cursor_pointer"
                 onclick="accept_login_user(this , 0)" >

                <div id="form_accept_login_state_tik" class="position_relative   float_right   margin_insert_10">
                    <div id="accept_login_state_tik" class=" border_full  border_width_medium  border_radous_x_low_typeI  overflow_hidden  position_absolute   position_center "></div>
                </div>

                <label id="save_email" class="yekan fontlg  float_right  line_height_medium  color_block_dark  ">
                    مرا به خاطر بسپار
                </label>

            </div>





            <div id="btn_save_email" class="display_flow_root  position_relative   border_radous_medium_typeII  background_button_typeII   border_button_typeII  box_shadow_out  cursor_pointer  "
                 onclick="login_user()">


                <div id="img_login" class="icon_site_store  form_background_button_typeII  box_shadow_outer  border_radous_low_typeII  float_right"></div>

                <span  id="title_btn_save_email"  class="yekan fontxlg  position_absolute text_position_btn  line_height_medium  color_white">
                    ورود به
                    <?=$setting["name_store"]["value"]?>
                </span>
            </div>





            <a id="btn_forget_password" class="display_flow_root  border_radous_medium_typeII      box_shadow_outer  cursor_pointer  margin_input  background_red_shine  background_red_blue"
               target="_self"  href="change_password_user" >

                <span id="title_btn_forget_password" class="display_flow_root  yekan fontxlg  line_height_large  color_white  text_align_center">
                    کلمه عبور را فراموش کردم
                </span>
            </a>


        </div>



        <label id="last_login_accept" class="yekan fontlg  display_flow_root  background_color_element  box_shadow_outer  overflow_hidden   line_height_medium  color_white  text_align_center">
            قبلا در
            <?=$setting["name_store"]["value"]?>
            ثبت نام نکرده اید؟
            <a target="_self" class="yekan fontsm  cursor_pointer" href="register">
                ثبت نام
            </a>
        </label>

    </div>

</div>
