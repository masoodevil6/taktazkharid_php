<?php

class model_page_news extends model{

    function __construct()
    {
        parent::__construct();
    }


    function get_news_page($id_parent , $id_news){

        $array_news = $this->get_news($id_parent);



        $key_news = 0;
        foreach ($array_news["child"] as $key => $news){
            if ($news["id"] == $id_news){
                $key_news = $key;
            }
        }

        return[
            "array_news" => $array_news,
            "num_selected" => $key_news
        ];
    }

}
?>