
<?php
require ("views/public_pages/address_nav_up.php");
?>


<div class="margin_auto_form">

    <div id="main_two_par_spical"  class="background_black_dark  display_flow_root  margin_auto  border_full  border_width_medium  border_radous_large_typeI  overflow_hidden"
         data-url="<?=$url_inside?>">

        <?php
        if (sizeof($products)>0){
            echo "<!--list_product-->";
            require ("list_product.php");

            echo "<!--number_page-->";
            require("views/public_pages/number_page.php");
        }
        else{
            echo "<!--not_exist_list_product-->";
            require ("not_exist_list_product.php");
        }

        ?>

    </div>

</div>

