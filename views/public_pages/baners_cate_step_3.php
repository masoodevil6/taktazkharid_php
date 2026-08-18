<?php
if (sizeof($navigation_step3) > 0){
    ?>

    <div id="baners_cate_step_3" class="display_flow_root">

        <ul class="display_flow_root  padding_form  width_100_percent ">
            <?php
            foreach ($navigation_step3 as $step3){
                $pic_nav = "public/picture/navigation/".$step3["id"]."/nav.png";
                if (file_exists($pic_nav)) {
                    ?>

                    <li class="item_baners_cate_step_3  float_left">

                        <a class="link_item_baners_cate_step_3  cursor_pointer  display_flow_root  width_90_percent  border_radous_low_typeI  border_full  border_width_large  overflow_hidden  background_white  margin_item_low  box_shadow_outer_radius"
                           href="searcher/index/<?=$step3["id"]?>" target="_self">

                            <img src="<?=$pic_nav?>" class="img_item_baners_cate_step_3  width_100_percent">

                        </a>

                    </li>

                    <?php
                }
            }
            ?>

        </ul>
    </div>

    <?php
}
?>



