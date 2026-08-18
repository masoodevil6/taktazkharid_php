<?php

class model_admin_help extends model {

    function __construct()
    {
        parent::__construct();

    }


    function get_exist_panel(){

        $sql = "select * from tbl_users_level WHERE id>?";
        $params = [1];
        $result = $this->doSelect($sql,$params,false,PDO::FETCH_ASSOC);

        return $result;
    }


}

?>