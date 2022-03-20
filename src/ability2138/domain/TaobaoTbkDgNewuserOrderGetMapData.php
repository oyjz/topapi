<?php
namespace Topsdk\Topapi\Ability2138\Domain;

class TaobaoTbkDgNewuserOrderGetMapData {

    /**
        新注册时间，仅淘宝拉新适用
     **/
    private $register_time;

    /**
        当前活动为淘宝拉新活动时，bind_time为新激活时间； 当前活动为支付宝拉新活动时，bind_time为绑定时间。
     **/
    private $bind_time;

    /**
        首购时间，仅淘宝，天猫拉新适用
     **/
    private $buy_time;

    /**
        新人状态， 当前活动为淘宝拉新活动时，1: 新注册，2:激活，3:首购，4:确认收货； 当前活动为支付宝实名活动时，1：已绑定，2：拉新成功，3：无效用户；当前活动为支付宝新登活动时，3：手淘首购，4：手淘确认收货；当前活动为天猫拉新活动时，2:已领取，3:已首购，4:已收货
     **/
    private $status;

    /**
        新人手机号
     **/
    private $mobile;

    /**
        订单淘客类型:1.淘客订单；2.非淘客订单，仅淘宝，天猫拉新适用
     **/
    private $order_tk_type;

    /**
        分享用户(unionid)，仅淘宝，天猫拉新适用
     **/
    private $union_id;

    /**
        来源媒体ID(pid中mm_1_2_3)中第1位
     **/
    private $member_id;

    /**
        来源媒体名称
     **/
    private $member_nick;

    /**
        来源站点ID(pid中mm_1_2_3)中第2位
     **/
    private $site_id;

    /**
        来源站点名称
     **/
    private $site_name;

    /**
        来源广告位ID(pid中mm_1_2_3)中第3位
     **/
    private $adzone_id;

    /**
        来源广告位名称
     **/
    private $adzone_name;

    /**
        淘宝订单id，仅淘宝，天猫拉新适用
     **/
    private $tb_trade_parent_id;

    /**
        确认收货时间，仅天猫拉新适用
     **/
    private $accept_time;

    /**
        领取红包时间，仅天猫拉新适用
     **/
    private $receive_time;

    /**
        拉新成功时间，仅支付宝拉新适用
     **/
    private $success_time;

    /**
        活动类型，taobao-淘宝 alipay-支付宝 tmall-天猫
     **/
    private $activity_type;

    /**
        活动id
     **/
    private $activity_id;

    /**
        日期，格式为"20180202"
     **/
    private $biz_date;

    /**
        复购订单，仅适用于手淘拉新
     **/
    private $orders;

    /**
        绑卡日期，仅适用于手淘拉新
     **/
    private $bind_card_time;

    /**
        loginTime
     **/
    private $login_time;

    /**
        银行卡是否是绑定状态：1-绑定，0-未绑定
     **/
    private $is_card_save;

    /**
        使用权益时间
     **/
    private $use_rights_time;

    /**
        领取权益时间
     **/
    private $get_rights_time;

    /**
        渠道关系id
     **/
    private $relation_id;


    public function getRegisterTime() : string{
        return $this->register_time;
    }

    public function setRegisterTime(string $registerTime){
        $this->register_time = $registerTime;
    }

    public function getBindTime() : string{
        return $this->bind_time;
    }

    public function setBindTime(string $bindTime){
        $this->bind_time = $bindTime;
    }

    public function getBuyTime() : string{
        return $this->buy_time;
    }

    public function setBuyTime(string $buyTime){
        $this->buy_time = $buyTime;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getMobile() : string{
        return $this->mobile;
    }

    public function setMobile(string $mobile){
        $this->mobile = $mobile;
    }

    public function getOrderTkType() : int{
        return $this->order_tk_type;
    }

    public function setOrderTkType(int $orderTkType){
        $this->order_tk_type = $orderTkType;
    }

    public function getUnionId() : string{
        return $this->union_id;
    }

    public function setUnionId(string $unionId){
        $this->union_id = $unionId;
    }

    public function getMemberId() : int{
        return $this->member_id;
    }

    public function setMemberId(int $memberId){
        $this->member_id = $memberId;
    }

    public function getMemberNick() : string{
        return $this->member_nick;
    }

    public function setMemberNick(string $memberNick){
        $this->member_nick = $memberNick;
    }

    public function getSiteId() : int{
        return $this->site_id;
    }

    public function setSiteId(int $siteId){
        $this->site_id = $siteId;
    }

    public function getSiteName() : string{
        return $this->site_name;
    }

    public function setSiteName(string $siteName){
        $this->site_name = $siteName;
    }

    public function getAdzoneId() : int{
        return $this->adzone_id;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzone_id = $adzoneId;
    }

    public function getAdzoneName() : string{
        return $this->adzone_name;
    }

    public function setAdzoneName(string $adzoneName){
        $this->adzone_name = $adzoneName;
    }

    public function getTbTradeParentId() : int{
        return $this->tb_trade_parent_id;
    }

    public function setTbTradeParentId(int $tbTradeParentId){
        $this->tb_trade_parent_id = $tbTradeParentId;
    }

    public function getAcceptTime() : string{
        return $this->accept_time;
    }

    public function setAcceptTime(string $acceptTime){
        $this->accept_time = $acceptTime;
    }

    public function getReceiveTime() : string{
        return $this->receive_time;
    }

    public function setReceiveTime(string $receiveTime){
        $this->receive_time = $receiveTime;
    }

    public function getSuccessTime() : string{
        return $this->success_time;
    }

    public function setSuccessTime(string $successTime){
        $this->success_time = $successTime;
    }

    public function getActivityType() : string{
        return $this->activity_type;
    }

    public function setActivityType(string $activityType){
        $this->activity_type = $activityType;
    }

    public function getActivityId() : string{
        return $this->activity_id;
    }

    public function setActivityId(string $activityId){
        $this->activity_id = $activityId;
    }

    public function getBizDate() : string{
        return $this->biz_date;
    }

    public function setBizDate(string $bizDate){
        $this->biz_date = $bizDate;
    }

    public function getOrders() : array{
        return $this->orders;
    }

    public function setOrders(array $orders){
        $this->orders = $orders;
    }

    public function getBindCardTime() : string{
        return $this->bind_card_time;
    }

    public function setBindCardTime(string $bindCardTime){
        $this->bind_card_time = $bindCardTime;
    }

    public function getLoginTime() : string{
        return $this->login_time;
    }

    public function setLoginTime(string $loginTime){
        $this->login_time = $loginTime;
    }

    public function getIsCardSave() : int{
        return $this->is_card_save;
    }

    public function setIsCardSave(int $isCardSave){
        $this->is_card_save = $isCardSave;
    }

    public function getUseRightsTime() : string{
        return $this->use_rights_time;
    }

    public function setUseRightsTime(string $useRightsTime){
        $this->use_rights_time = $useRightsTime;
    }

    public function getGetRightsTime() : string{
        return $this->get_rights_time;
    }

    public function setGetRightsTime(string $getRightsTime){
        $this->get_rights_time = $getRightsTime;
    }

    public function getRelationId() : string{
        return $this->relation_id;
    }

    public function setRelationId(string $relationId){
        $this->relation_id = $relationId;
    }


}

