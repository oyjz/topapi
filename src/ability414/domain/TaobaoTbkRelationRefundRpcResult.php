<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkRelationRefundRpcResult {

    /**
        返回信息
     **/
    private $result_msg;

    /**
        真正的业务数据结构
     **/
    private $data;

    /**
        接口返回值信息，跟rpc架构保持一致
     **/
    private $result_code;

    /**
        业务错误信息
     **/
    private $biz_error_desc;

    /**
        业务错误码 101, 102,103
     **/
    private $biz_error_code;


    public function getResultMsg() : string{
        return $this->result_msg;
    }

    public function setResultMsg(string $resultMsg){
        $this->result_msg = $resultMsg;
    }

    public function getData() : TaobaoTbkRelationRefundPageResult{
        return $this->data;
    }

    public function setData(TaobaoTbkRelationRefundPageResult $data){
        $this->data = $data;
    }

    public function getResultCode() : int{
        return $this->result_code;
    }

    public function setResultCode(int $resultCode){
        $this->result_code = $resultCode;
    }

    public function getBizErrorDesc() : string{
        return $this->biz_error_desc;
    }

    public function setBizErrorDesc(string $bizErrorDesc){
        $this->biz_error_desc = $bizErrorDesc;
    }

    public function getBizErrorCode() : int{
        return $this->biz_error_code;
    }

    public function setBizErrorCode(int $bizErrorCode){
        $this->biz_error_code = $bizErrorCode;
    }


}

