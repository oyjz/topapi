<?php
namespace Topsdk\Topapi\Ability425\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkScPublisherInfoSaveRequest {

    /**
        渠道备案 - 来源，取链接的来源
     **/
    private $relationFrom;

    /**
        渠道备案 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他
     **/
    private $offlineScene;

    /**
        渠道备案 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他
     **/
    private $onlineScene;

    /**
        淘宝客邀请渠道或会员的邀请码
     **/
    private $inviterCode;

    /**
        类型，必选 默认为1:
     **/
    private $infoType;

    /**
        媒体侧渠道备注
     **/
    private $note;

    /**
        线下备案注册信息,字段包含: 电话号码(phoneNumber，必填),省(province,必填),市(city,必填),区县街道(location,必填),详细地址(detailAddress,必填),经营类型(career,线下个人必填),店铺类型(shopType,线下店铺必填),店铺名称(shopName,线下店铺必填),店铺证书类型(shopCertifyType,线下店铺选填),店铺证书编号(certifyNumber,线下店铺选填)
     **/
    private $registerInfo;


    public function getRelationFrom() : string{
        return $this->relationFrom;
    }

    public function setRelationFrom(string $relationFrom){
        $this->relationFrom = $relationFrom;
    }

    public function getOfflineScene() : string{
        return $this->offlineScene;
    }

    public function setOfflineScene(string $offlineScene){
        $this->offlineScene = $offlineScene;
    }

    public function getOnlineScene() : string{
        return $this->onlineScene;
    }

    public function setOnlineScene(string $onlineScene){
        $this->onlineScene = $onlineScene;
    }

    public function getInviterCode() : string{
        return $this->inviterCode;
    }

    public function setInviterCode(string $inviterCode){
        $this->inviterCode = $inviterCode;
    }

    public function getInfoType() : int{
        return $this->infoType;
    }

    public function setInfoType(int $infoType){
        $this->infoType = $infoType;
    }

    public function getNote() : string{
        return $this->note;
    }

    public function setNote(string $note){
        $this->note = $note;
    }

    public function getRegisterInfo() : string{
        return $this->registerInfo;
    }

    public function setRegisterInfo(string $registerInfo){
        $this->registerInfo = $registerInfo;
    }


    public function getApiName() : string {
        return "taobao.tbk.sc.publisher.info.save";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->relationFrom)) {
            $requestParam["relation_from"] = TopUtil::convertBasic($this->relationFrom);
        }

        if (!TopUtil::checkEmpty($this->offlineScene)) {
            $requestParam["offline_scene"] = TopUtil::convertBasic($this->offlineScene);
        }

        if (!TopUtil::checkEmpty($this->onlineScene)) {
            $requestParam["online_scene"] = TopUtil::convertBasic($this->onlineScene);
        }

        if (!TopUtil::checkEmpty($this->inviterCode)) {
            $requestParam["inviter_code"] = TopUtil::convertBasic($this->inviterCode);
        }

        if (!TopUtil::checkEmpty($this->infoType)) {
            $requestParam["info_type"] = TopUtil::convertBasic($this->infoType);
        }

        if (!TopUtil::checkEmpty($this->note)) {
            $requestParam["note"] = TopUtil::convertBasic($this->note);
        }

        if (!TopUtil::checkEmpty($this->registerInfo)) {
            $requestParam["register_info"] = TopUtil::convertBasic($this->registerInfo);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

