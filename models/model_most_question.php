<?php

class model_most_question extends model{

    function __construct()
    {
        parent::__construct();
    }

    function get_all_question(){

        $sql = "select * from tbl_must_question";
        $params =[];
        $result = $this->doSelect($sql , $params , false , PDO::FETCH_ASSOC);

        return $result;

    }

}

?>
