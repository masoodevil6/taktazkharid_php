
<!--- main --->
<div id="main_two_par" >

    <?php
    if ($sub_info != "sub_info"){
        echo "<!--- change_password_sub_email --->";
        require("change_password_sub_email.php");
    }
    else{
        echo "<!--- change_password_sub_password --->";
        require("change_password_sub_password.php");
    }
    ?>

</div>
