
<!--- main --->
<div id="main_two_par" >

    <?php
    if ($sub_info != "sub_info"){
        echo "<!--- register_sub --->";
        require ("register_sub.php");
    }
    else{
        echo "<!--- reqister_get --->";
        require ("reqister_get.php");
    }
    ?>

</div>
