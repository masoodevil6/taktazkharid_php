<?php

class tv_store extends Controler{

    function __construct()
    {
        parent::__construct();
    }

    function index(){
        $this->set_value_model_page();

        $data=[ "page_name" => "tv_store"];

        $this->veiw("tv_store/index" , $data);
    }

}

?>