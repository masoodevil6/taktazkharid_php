<?php

class change_email_user extends Controler{

    function __construct()
    {
        parent::__construct();
    }

    function index($password_page=""){

        $this->set_value_model_page("factor_login");

        if ($password_page != ""){

            $result_check = $this->model-> check_info_email_user($password_page);

            if ($result_check == 1){
                header("location: ".URL."panel/index/edit_profile");
            }
            else{
                header("location: ".URL."not_exist_page/index");
            }
        }
        else{
            header("location: ".URL."not_exist_page/index");
        }

    }


}

?>