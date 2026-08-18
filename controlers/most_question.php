<?php

class most_question extends Controler{
    function __construct()
    {
        parent::__construct();
    }

    function index(){

        $this->set_value_model_page();

        $question = $this -> model -> get_all_question();

        $data=[
            "page_name" => "most_question",

            "question" => $question
        ];

        $this->veiw("most_question/index", $data);

    }
}

?>