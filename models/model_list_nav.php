<?php

class model_list_nav extends model{

    function __construct()
    {
        parent::__construct();
    }


    function nav_child($id_category){

        $all_category = $this->result_category;


        $result_exp = [];
        foreach ($all_category as $nav){

            if ($nav["parent"] == $id_category){

                array_push($result_exp ,  $nav);

            }

        }

        return $result_exp;

    }
}

?>

