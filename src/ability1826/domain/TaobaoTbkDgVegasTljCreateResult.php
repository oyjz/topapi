<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljCreateResult {

    /**
        model
     **/
    private $model;

    /**
        msgCode
     **/
    private $msg_code;

    /**
        msgInfo
     **/
    private $msg_info;

    /**
        success
     **/
    private $success;


    public function getModel() : TaobaoTbkDgVegasTljCreateRightsInstanceCreateResult{
        return $this->model;
    }

    public function setModel(TaobaoTbkDgVegasTljCreateRightsInstanceCreateResult $model){
        $this->model = $model;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}

