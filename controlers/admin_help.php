<?php

class admin_help extends Controler{

    function __construct()
    {
        parent::__construct();
    }


    function index(){

        $this->set_value_model_page();


        $get_info_admin_login = $this->model->check_login_panel_user("help");
        $title_level_user = $get_info_admin_login["title_level"];



        $get_exist_panel = $this -> model -> get_exist_panel();



        $data =[
            "page_name" => "admin",
            "panel" => "help",

            "exist_panel" => $get_exist_panel,
            "title_level_user" => $title_level_user
        ];

        $this->veiw("admin/help_exist_panel" , $data , true );


    }

}


?>