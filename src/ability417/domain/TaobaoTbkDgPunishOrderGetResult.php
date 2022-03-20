<?php
namespace Topsdk\Topapi\Ability417\Domain;

class TaobaoTbkDgPunishOrderGetResult {

    /**
        淘宝联盟unionid（该字段不再支持）
     **/
    private $union_id;

    /**
        会员运营id（该字段不再支持）
     **/
    private $special_id;

    /**
        渠道关系id
     **/
    private $relation_id;

    /**
        结算月份
     **/
    private $settle_month;

    /**
        处罚状态。0 冻结，1 解冻
     **/
    private $punish_status;

    /**
        处罚类型，目前包括 1.店铺淘宝客 2.订单虚假交易
     **/
    private $violation_type;

    /**
        淘客订单创建时间
     **/
    private $tk_trade_create_time;

    /**
        子订单号
     **/
    private $tb_trade_id;

    /**
        父订单号（该字段不再支持）
     **/
    private $tb_trade_parent_id;

    /**
        pid里的adzoneid
     **/
    private $tk_adzone_id;

    /**
        pid里的siteid
     **/
    private $tk_site_id;

    /**
        pid里的pubid
     **/
    private $tk_pub_id;


    public function getUnionId() : string{
        return $this->union_id;
    }

    public function setUnionId(string $unionId){
        $this->union_id = $unionId;
    }

    public function getSpecialId() : int{
        return $this->special_id;
    }

    public function setSpecialId(int $specialId){
        $this->special_id = $specialId;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getSettleMonth() : int{
        return $this->settle_month;
    }

    public function setSettleMonth(int $settleMonth){
        $this->settle_month = $settleMonth;
    }

    public function getPunishStatus() : string{
        return $this->punish_status;
    }

    public function setPunishStatus(string $punishStatus){
        $this->punish_status = $punishStatus;
    }

    public function getViolationType() : string{
        return $this->violation_type;
    }

    public function setViolationType(string $violationType){
        $this->violation_type = $violationType;
    }

    public function getTkTradeCreateTime() : string{
        return $this->tk_trade_create_time;
    }

    public function setTkTradeCreateTime(string $tkTradeCreateTime){
        $this->tk_trade_create_time = $tkTradeCreateTime;
    }

    public function getTbTradeId() : int{
        return $this->tb_trade_id;
    }

    public function setTbTradeId(int $tbTradeId){
        $this->tb_trade_id = $tbTradeId;
    }

    public function getTbTradeParentId() : int{
        return $this->tb_trade_parent_id;
    }

    public function setTbTradeParentId(int $tbTradeParentId){
        $this->tb_trade_parent_id = $tbTradeParentId;
    }

    public function getTkAdzoneId() : int{
        return $this->tk_adzone_id;
    }

    public function setTkAdzoneId(int $tkAdzoneId){
        $this->tk_adzone_id = $tkAdzoneId;
    }

    public function getTkSiteId() : int{
        return $this->tk_site_id;
    }

    public function setTkSiteId(int $tkSiteId){
        $this->tk_site_id = $tkSiteId;
    }

    public function getTkPubId() : string{
        return $this->tk_pub_id;
    }

    public function setTkPubId(string $tkPubId){
        $this->tk_pub_id = $tkPubId;
    }


}

