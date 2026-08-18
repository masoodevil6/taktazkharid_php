<!--- main --->
<div id="main_two_par" >


    <?php
    require ("error.php");
    ?>



    <!--- main_left --->
    <div id="right_main" >

        <div id="right_main_child">

            <?php
            echo "<!-- choose face user -->";
            require("list_right_panel.php");

            ?>

        </div>

    </div>




    <!--- main_right --->
    <div id="left_main" >

        <?php
        require ("panel_".$num_tab."/index.php");
        ?>

    </div>


</div>




<?php

echo "<!-- choose face user -->";
require("choose_face.php");

echo "<!-- change_password_user -->";
require ("change_password_user.php");
?>