<?php
namespace Topsdk\Topapi\Ability2474\Domain;

class TaobaoTbkDgVegasSendReportResult {

    /**
        是否成功
     **/
    private $success;

    /**
        model
     **/
    private $model;

    /**
        msgInfo
     **/
    private $msg_info;

    /**
        msgCode
     **/
    private $msg_code;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getModel() : TaobaoTbkDgVegasSendReportRightsSendRptDTO{
        return $this->model;
    }

    public function setModel(TaobaoTbkDgVegasSendReportRightsSendRptDTO $model){
        $this->model = $model;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }


}

