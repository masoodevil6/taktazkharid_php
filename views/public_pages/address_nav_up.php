<?php
$navigation = $data["navigation"];
?>

<div id="nav_div"   class="margin_auto_form   display_flow_root  border_full  border_width_large  box_shadow_outer_radius  background_white   box_shadow_btn_block  ">

    <div id="form_icon_nav"  class=" position_relative  border_left  border_width_medium  box_shadow_btn_blue">
        <div id="icon_nav" class="icon_site_store   box_shadow_outer_radius   position_absolute   position_center  border_radous_full"></div>
    </div>

    <div id="nav" class="display_flow_root">

        <?php
        foreach ($navigation as $key => $nav){

            $url=$nav["href"];
            if ($nav["id"] != ""){
                $url=$nav["href"]."/".$nav["id"];
            }

            ?>

            <a  class="link_step_nav yekan fontmd  cursor_pointer  float_right  color_block_dark  line_height_x_large  margin_insert_10  border_radous_large_typeI   box_shadow_btn_block  padding_input  border_right  border_left  border_width_medium"
                target="_self" href="<?=$url?>">

                <?=$nav["title"]?>

            </a>

            <?php
            if ($key < sizeof($navigation) - 1) {
                ?>

                <div class="arrow_url_site icon_site_store  float_right"></div>

                <?php
            }
        }
        ?>

    </div>


</div>