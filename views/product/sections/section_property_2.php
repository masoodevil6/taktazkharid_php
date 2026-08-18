<section class="padding_form">

    <?php
    $product_info = $data['productInfo'];

    $property_product = $data['property_product'];
    ?>



    <div class="top_title_property_1   display_table  padding_input  color_white  border_top  border_left  border_right  border_width_medium  box_shadow_btn_blue">

        <span class="title_property_1 yekan fontxxlg  line_height_medium  color_block_dark  display_flow_root  ">
            مشخصات فنی
        </span>


        <span class="title_product_property_1 yekan fontlg  line_height_low  color_white">
            <?= $product_info["title_product"]?>
        </span>

    </div>






    <div id="property_list_form"  class="border_full  border_width_medium  padding_form">


        <?php

        foreach ($property_product as $title_property) {
            if (sizeof($title_property["children"]) > 0){
                ?>

                <div class="item_group_property  display_flow_root  width_90_percent">



                    <span class="display_flow_root  title_item_group_property yekan fontxlg   text_align_right  padding_input  color_block_shine  border_top  border_left  border_right  border_width_medium  box_shadow_btn_block  background_white">
                        &#10066
                        <?= $title_property["title"] ?>
                    </span>


                    <div class="form_item_group_property  border_full  border_width_medium">

                        <?php
                        foreach ($title_property["children"] as $item_property)
                        {

                            $class="";
                            if ($item_property["notice"] !=""){
                                $class="sub_active";
                            }

                            ?>

                            <div class="item_property  border_bottom  border_width_medium  display_flow_root">

                                <div class="form_title_property  position_relative  border_left   border_bottom  border_width_medium  box_shadow_outer">

                                <span class="title_item_proprety yekan fontmd text_align_center  line_height_medium  color_white  <?=$class?>" >
                                    <?= $item_property["title"] ?>
                                    :
                                </span>


                                    <?php
                                    if ($item_property["notice"] !=""){
                                        ?>

                                        <div class="title_property_bottom yekan fontsm  display_none  position_absolute border_radous_low_typeI">
                                            <span  class="color_white  display_table  margin_auto  line_height_medium"> <?= $item_property["notice"] ?> </span>
                                        </div>

                                        <?php
                                    }
                                    ?>



                                </div>




                                <span class="value_item_proprety fontlg  text_align_center  line_height_medium">

                            <?php

                            if ($item_property["value"] == ""){
                                echo "-";
                            }
                            else{

                                $value = unserialize($item_property["value"]);
                                $value = join("  ،  " , $value);

                                echo $value;
                            }

                            ?>


                </span>


                            </div>


                            <?php
                        }
                        ?>

                    </div>









                </div>

                <?php
            }

        }

        ?>



    </div>


    <script>
        $(".sub_active").hover(function () {
            var element = $(this).parent();
            setTimeout(function () {
                $(element).find(".title_property_bottom").css({"display": "block"});
            }, 60);
        },function () {
            setTimeout(function () {
                $(".title_property_bottom").css({"display": "none"});
            }, 60);
        });
    </script>



</section>