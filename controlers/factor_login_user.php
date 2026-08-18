<?php

class factor_login_user extends Controler{

    function __construct()
    {
        parent::__construct();
    }


    function index(){

        $this->set_value_model_page("factor_login");

        $loginUser = $this -> model -> login_user_info();

        if ($loginUser["userID"] == ""){
            $data=[
                "page_name" => "factor_login_user",
            ];
            $this->veiw("factor_login_user/index" , $data , false);
        }
        else{
            header("location: ".URL."factor_complate");
        }


    }

}

?>