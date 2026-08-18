<div id="slide-show-left-a" class="position_relative  box_shadow_outer_radius  border_radous_low_typeI  cursor_pointer  overflow_hidden  background_white  margin_auto_form "
     >

    <?php
    $num = 0;
    foreach ($slider_selected_brand as $result){

        $src = "public/picture/navigation/".$result["id"]."/nav.png";
        $href = "searcher/index/".$result["parent"]."?brand_".$result["num"]."=".$result["id"];
        $style = "";
        if ($num < 4){
            $style = "display : none";
        }
        else{
            $style = "display : block";
        }

        ?>

        <a class="slid_show_left_A_a  display_flow_root  width_100_percent  margin_zero" href="<?=$href?>" target="_self" style="<?=$style?>">
            <img class="slide_show_left_A_img  width_100_percent"  src="<?= $src ?>">
        </a>

        <?php
    }
    ?>



    <div class="slider_brand_next icon_site_store  position_absolute  "
         onclick="next_page_slider()"></div>


    <div class="slider_brand_back icon_site_store  position_absolute  "
         onclick="prevous_page_slider()"></div>



    <div id="div_slide_name"  class="display_flow_root  position_absolute  width_100_percent  border_top  border_width_medium">

        <ul id="slid_show_left_ul" class="display_flow_root  margin_zero  padding_zero">

            <?php

            $size_of_slider_brands = sizeof($slider_selected_brand);
            $class_size="";
            if ($size_of_slider_brands == 1){
                $class_size = "width_100_percent";
            }
            else if ($size_of_slider_brands == 2){
                $class_size = "width_50_percent";
            }
            else if ($size_of_slider_brands == 3){
                $class_size = "width_33_percent";
            }
            else if ($size_of_slider_brands == 4){
                $class_size = "width_25_percent";
            }
            else if ($size_of_slider_brands == 5){
                $class_size = "width_20_percent";
            }

            foreach ($slider_selected_brand as $key => $result){

                $src = "public/picture/navigation/".$result["id"]."/nav.png";
                $class_up = "";
                $class_down = "";
                if ($num == 0){
                    $class_up = "slid_show_left_A_up_select";
                    $class_down = "slid_show_left_A_down_select";
                }
                ?>

                <li class="li-show-text  float_left  padding_zero    <?=$class_size?>" onclick="item_slider(<?=$key?>)">

                    <div class="slid_show_left_A_down_div    " >

                        <a class="slid_show_left_A_down <?=$class_down?> yekan fontmd  text_align_center  display_flow_root  color_white  line_height_x_large  position_relative">
                            <?= $result["title"] ?>
                        </a>

                    </div>

                </li>

                <?php
            }
            ?>


        </ul>

    </div>


</div>
