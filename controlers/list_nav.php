<?php

class list_nav extends Controler{

    function __construct()
    {
        parent::__construct();
    }

    function index($id_category){

        $this->set_value_model_page();

        $navigation = $this -> model -> get_nav_page($id_category);

        $nav_child = $this->model-> nav_child($id_category);

        $data =[
            "page_name" => "list_nav",

            "navigation" => $navigation,
            "navigation_step2" => $nav_child
        ];

        $this->veiw("list_nav/index" , $data);
    }


}

?>