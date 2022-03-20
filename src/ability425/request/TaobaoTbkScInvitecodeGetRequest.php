<?php
namespace Topsdk\Topapi\Ability425\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScInvitecodeGetRequest {

    /**
        渠道关系ID
     **/
    private $relationId;

    /**
        渠道推广的物料类型
     **/
    private $relationApp;

    /**
        邀请码类型，1 - 渠道邀请，2 - 渠道裂变，3 -会员邀请
     **/
    private $codeType;


    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getRelationApp() : string{
        return $this->relationApp;
    }

    public function setRelationApp(string $relationApp){
        $this->relationApp = $relationApp;
    }

    public function getCodeType() : int{
        return $this->codeType;
    }

    public function setCodeType(int $codeType){
        $this->codeType = $codeType;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.invitecode.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->relationApp)) {
            $requestParam["relation_app"] = TopUtil::convertBasic($this->relationApp);
        }

        if (!TopUtil::checkEmpty($this->codeType)) {
            $requestParam["code_type"] = TopUtil::convertBasic($this->codeType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

