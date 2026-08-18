<?php

class not_exist_page extends Controler{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->set_value_model_page();

        $data = [
            "page_name" => "not_exist_page"
        ];

        $this->veiw("not_exist_page/index" , $data);
    }

}

?>