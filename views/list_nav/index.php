<?php
require ("views/public_pages/address_nav_up.php");
?>

<div class="main_two_par" >
    <?php
    if (sizeof($navigation_step2) > 0){
        echo "<!--- nav_cate_step_2 --->";
        require("nav_cate_step_2.php");
    }
    ?>

</div>



