<?php
namespace Topsdk\Topapi\Ability1826\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgVegasTljCreateRequest {

    /**
        妈妈广告位Id
     **/
    private $adzoneId;

    /**
        必须传入0
     **/
    private $securityLevel;

    /**
        使用开始日期。相对时间，无需填写，以用户领取时间作为使用开始时间。绝对时间，格式 yyyy-MM-dd，例如，2019-01-29，表示从2019-01-29 00:00:00 开始
     **/
    private $useStartTime;

    /**
        结束日期的模式,1:相对时间，2:绝对时间
     **/
    private $useEndTimeMode;

    /**
        使用结束日期。如果是结束时间模式为相对时间，时间格式为1-7直接的整数, 例如，1（相对领取时间1天）； 如果是绝对时间，格式为yyyy-MM-dd，例如，2019-01-29，表示到2019-01-29 23:59:59结束
     **/
    private $useEndTime;

    /**
        发放截止时间
     **/
    private $sendEndTime;

    /**
        发放开始时间
     **/
    private $sendStartTime;

    /**
        单个淘礼金面额，支持两位小数，单位元
     **/
    private $perFace;

    /**
        必须设置为true，默认开启安全
     **/
    private $securitySwitch;

    /**
        单用户累计中奖次数上限
     **/
    private $userTotalWinNumLimit;

    /**
        淘礼金名称，最大10个字符
     **/
    private $name;

    /**
        淘礼金总个数
     **/
    private $totalNum;

    /**
        宝贝ID
     **/
    private $itemId;

    /**
        CPS佣金类型
     **/
    private $campaignType;


    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getSecurityLevel() : int{
        return $this->securityLevel;
    }

    public function setSecurityLevel(int $securityLevel){
        $this->securityLevel = $securityLevel;
    }

    public function getUseStartTime() : string{
        return $this->useStartTime;
    }

    public function setUseStartTime(string $useStartTime){
        $this->useStartTime = $useStartTime;
    }

    public function getUseEndTimeMode() : int{
        return $this->useEndTimeMode;
    }

    public function setUseEndTimeMode(int $useEndTimeMode){
        $this->useEndTimeMode = $useEndTimeMode;
    }

    public function getUseEndTime() : string{
        return $this->useEndTime;
    }

    public function setUseEndTime(string $useEndTime){
        $this->useEndTime = $useEndTime;
    }

    public function getSendEndTime() : string{
        return $this->sendEndTime;
    }

    public function setSendEndTime(string $sendEndTime){
        $this->sendEndTime = $sendEndTime;
    }

    public function getSendStartTime() : string{
        return $this->sendStartTime;
    }

    public function setSendStartTime(string $sendStartTime){
        $this->sendStartTime = $sendStartTime;
    }

    public function getPerFace() : string{
        return $this->perFace;
    }

    public function setPerFace(string $perFace){
        $this->perFace = $perFace;
    }

    public function getSecuritySwitch() : bool{
        return $this->securitySwitch;
    }

    public function setSecuritySwitch(bool $securitySwitch){
        $this->securitySwitch = $securitySwitch;
    }

    public function getUserTotalWinNumLimit() : int{
        return $this->userTotalWinNumLimit;
    }

    public function setUserTotalWinNumLimit(int $userTotalWinNumLimit){
        $this->userTotalWinNumLimit = $userTotalWinNumLimit;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function getTotalNum() : int{
        return $this->totalNum;
    }

    public function setTotalNum(int $totalNum){
        $this->totalNum = $totalNum;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getCampaignType() : string{
        return $this->campaignType;
    }

    public function setCampaignType(string $campaignType){
        $this->campaignType = $campaignType;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.tlj.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->securityLevel)) {
            $requestParam["security_level"] = TopUtil::convertBasic($this->securityLevel);
        }

        if (!TopUtil::checkEmpty($this->useStartTime)) {
            $requestParam["use_start_time"] = TopUtil::convertBasic($this->useStartTime);
        }

        if (!TopUtil::checkEmpty($this->useEndTimeMode)) {
            $requestParam["use_end_time_mode"] = TopUtil::convertBasic($this->useEndTimeMode);
        }

        if (!TopUtil::checkEmpty($this->useEndTime)) {
            $requestParam["use_end_time"] = TopUtil::convertBasic($this->useEndTime);
        }

        if (!TopUtil::checkEmpty($this->sendEndTime)) {
            $requestParam["send_end_time"] = TopUtil::convertBasic($this->sendEndTime);
        }

        if (!TopUtil::checkEmpty($this->sendStartTime)) {
            $requestParam["send_start_time"] = TopUtil::convertBasic($this->sendStartTime);
        }

        if (!TopUtil::checkEmpty($this->perFace)) {
            $requestParam["per_face"] = TopUtil::convertBasic($this->perFace);
        }

        if (!TopUtil::checkEmpty($this->securitySwitch)) {
            $requestParam["security_switch"] = TopUtil::convertBasic($this->securitySwitch);
        }

        if (!TopUtil::checkEmpty($this->userTotalWinNumLimit)) {
            $requestParam["user_total_win_num_limit"] = TopUtil::convertBasic($this->userTotalWinNumLimit);
        }

        if (!TopUtil::checkEmpty($this->name)) {
            $requestParam["name"] = TopUtil::convertBasic($this->name);
        }

        if (!TopUtil::checkEmpty($this->totalNum)) {
            $requestParam["total_num"] = TopUtil::convertBasic($this->totalNum);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->campaignType)) {
            $requestParam["campaign_type"] = TopUtil::convertBasic($this->campaignType);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

