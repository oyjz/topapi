<?php
namespace Topsdk\Topapi\Ability1826\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgVegasTljStopRequest {

    /**
        adzoneId
     **/
    private $adzoneId;

    /**
        创建淘礼金时返回的rightsId
     **/
    private $rightsId;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getRightsId() : string{
        return $this->rightsId;
    }

    public function setRightsId(string $rightsId){
        $this->rightsId = $rightsId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.tlj.stop";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->rightsId)) {
            $requestParam["rights_id"] = TopUtil::convertBasic($this->rightsId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

