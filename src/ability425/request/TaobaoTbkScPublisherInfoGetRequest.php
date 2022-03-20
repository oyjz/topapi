<?php
namespace Topsdk\Topapi\Ability425\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScPublisherInfoGetRequest {

    /**
        渠道独占 - 渠道关系ID
     **/
    private $relationId;

    /**
        第几页
     **/
    private $pageNo;

    /**
        每页大小
     **/
    private $pageSize;

    /**
        类型，必选 1:渠道信息；2:会员信息
     **/
    private $infoType;

    /**
        备案的场景：common（通用备案），etao（一淘备案），minietao（一淘小程序备案），offlineShop（线下门店备案），offlinePerson（线下个人备案）。如不填默认common。查询会员信息只需填写common即可
     **/
    private $relationApp;

    /**
        会员独占 - 会员运营ID
     **/
    private $specialId;

    /**
        淘宝客外部用户标记，如自身系统账户ID；微信ID等
     **/
    private $externalId;

    /**
        1-微信、2-微博、3-抖音、4-快手、5-QQ，0-其他；默认为0
     **/
    private $externalType;


    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getInfoType() : int{
        return $this->infoType;
    }

    public function setInfoType(int $infoType){
        $this->infoType = $infoType;
    }

    public function getRelationApp() : string{
        return $this->relationApp;
    }

    public function setRelationApp(string $relationApp){
        $this->relationApp = $relationApp;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getExternalId() : string{
        return $this->externalId;
    }

    public function setExternalId(string $externalId){
        $this->externalId = $externalId;
    }

    public function getExternalType() : int{
        return $this->externalType;
    }

    public function setExternalType(int $externalType){
        $this->externalType = $externalType;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.publisher.info.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->infoType)) {
            $requestParam["info_type"] = TopUtil::convertBasic($this->infoType);
        }

        if (!TopUtil::checkEmpty($this->relationApp)) {
            $requestParam["relation_app"] = TopUtil::convertBasic($this->relationApp);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->externalId)) {
            $requestParam["external_id"] = TopUtil::convertBasic($this->externalId);
        }

        if (!TopUtil::checkEmpty($this->externalType)) {
            $requestParam["external_type"] = TopUtil::convertBasic($this->externalType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

