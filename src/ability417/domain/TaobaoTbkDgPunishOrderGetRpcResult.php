<?php
namespace Topsdk\Topapi\Ability417\Domain;

class TaobaoTbkDgPunishOrderGetRpcResult {

    /**
        结果
     **/
    private $data;

    /**
        业务出错的描述
     **/
    private $biz_error_desc;

    /**
        业务出错的状态码
     **/
    private $biz_error_code;

    /**
        执行结果
     **/
    private $result_msg;

    /**
        执行结果状态码
     **/
    private $result_code;


    public function getData() : TaobaoTbkDgPunishOrderGetPageResult{
        return $this->data;
    }

    public function setData(TaobaoTbkDgPunishOrderGetPageResult $data){
        $this->data = $data;
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

    public function getResultMsg() : string{
        return $this->result_msg;
    }

    public function setResultMsg(string $resultMsg){
        $this->result_msg = $resultMsg;
    }

    public function getResultCode() : int{
        return $this->result_code;
    }

    public function setResultCode(int $resultCode){
        $this->result_code = $resultCode;
    }


}

