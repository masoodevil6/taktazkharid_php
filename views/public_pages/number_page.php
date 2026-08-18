<!--number_page-->
<div id="form_number_page" data-page="<?=$selected?>">

    <div id="border_top_form_number_page"></div>



    <div id="form_inside_number_page">


        <?php
        foreach ($pages as $page){
            if ($page["type"] == "num"){


                $class_form_not_phone="form_not_phone";
                foreach ($page["value"] as $num){
                    if ($num == $selected){
                        $class_form_not_phone="";
                    }
                }

                ?>


                <div class="part_form_inside_number_page <?=$class_form_not_phone?>">


                <?php
                foreach ($page["value"] as $num){

                    $class = "";
                    if ($num == $selected){
                        $class = "selected_number_page";
                    }

                    ?>


                    <a class="number_page" onclick="change_page_product(<?=$num?>)">
                        <span class="text_number_page <?=$class?> yekan fontmd">
                            <?=$num?>
                        </span>
                    </a>


                    <?php
                }
                ?>



                </div>



                <?php
            }
            else{
                ?>

                <div class="dat_number_page">
                    <span class="text_dat_number_page yekan fontlg">
                        ...
                    </span>
                </div>

                <?php
            }
        }
        ?>

    </div>
</div>