<!--address_nav_up-->
<?php
require ("views/public_pages/address_nav_up.php");
?>


<div class="margin_auto_form">

    <div id="main_two_par" >

        <?php

        echo "<!--info_products-->";
        require ("form_info_product.php");


        if (sizeof(explode("/" , $ids)) < 4){
            echo "<!--add_product-->";
            require ("form_add_product.php");
        }
        ?>

    </div>

</div>


