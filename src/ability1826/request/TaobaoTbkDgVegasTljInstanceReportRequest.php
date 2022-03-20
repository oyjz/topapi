<?php
namespace Topsdk\Topapi\Ability1826\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgVegasTljInstanceReportRequest {

    /**
        实例ID
     **/
    private $rightsId;


    public function getRightsId() : string{
        return $this->rightsId;
    }

    public function setRightsId(string $rightsId){
        $this->rightsId = $rightsId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.tlj.instance.report";
    }

    public function toMap() : array{
        $requestParam = array();
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

