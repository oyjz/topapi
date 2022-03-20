<?php
namespace Topsdk\Topapi\Ability2138\Domain;

class TaobaoTbkDgNewuserOrderGetResults {

    /**
        data
     **/
    private $data;


    public function getData() : TaobaoTbkDgNewuserOrderGetData{
        return $this->data;
    }

    public function setData(TaobaoTbkDgNewuserOrderGetData $data){
        $this->data = $data;
    }


}

