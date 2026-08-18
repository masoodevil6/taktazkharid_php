<?php
if (isset($_GET["error"])){
    ?>

    <div id="error_message" class="box_shadow_out  width_90_percent  margin_auto  background_yellow_dark  border_full  border_width_medium  border_radous_low_typeI  box_shadow_outer" style="margin-bottom: 20px">
            <span id="title_error_message" class="yekan fontxlg   display_flow_root  line_height_medium  text_align_center  color_yellow_dark">
                <?=errors[$_GET["error"]]?>
            </span>
    </div>

    <?php
}
?>