<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkRelationRefundResult {

    /**
        淘宝订单编号
     **/
    private $tb_trade_parent_id;

    /**
        会员关系id
     **/
    private $special_id;

    /**
        渠道关系id
     **/
    private $relation_id;

    /**
        第三方推广者memberid
     **/
    private $tk3rd_pub_id;

    /**
        推广者memberid
     **/
    private $tk_pub_id;

    /**
        第三方应该返还的补贴
     **/
    private $tk_subsidy_fee_refund3rd_pub;

    /**
        第三方应该返还的佣金
     **/
    private $tk_commission_fee_refund3rd_pub;

    /**
        第二方应该返还的补贴(不包括技术服务费)
     **/
    private $tk_subsidy_fee_refund_pub;

    /**
        第二方应该返还的佣金(不包括技术服务费)
     **/
    private $tk_commission_fee_refund_pub;

    /**
        维权完成时间
     **/
    private $tk_refund_suit_time;

    /**
        维权创建时间
     **/
    private $tk_refund_time;

    /**
        订单结算时间
     **/
    private $earning_time;

    /**
        订单创建时间
     **/
    private $tb_trade_create_time;

    /**
        维权创建(淘客结算回执) 4,维权成功(淘客结算回执) 2,维权失败(淘客结算回执) 3,发生多次维权，待处理      11,从淘客处补扣（钱已结给淘客） 等待扣款 12,从淘客处补扣（钱已结给淘客） 扣款成功 13,从卖家处补扣（钱已结给卖家） 等待扣款 14,从卖家处补扣（钱已结给卖家） 扣款成功 15
     **/
    private $refund_status;

    /**
        宝贝标题
     **/
    private $tb_auction_title;

    /**
        淘宝子订单编号
     **/
    private $tb_trade_id;

    /**
        维权金额
     **/
    private $refund_fee;

    /**
        结算金额
     **/
    private $tb_trade_finish_price;

    /**
        应返商家金额(二方)
     **/
    private $tk_pub_show_return_fee;

    /**
        应返商家金额(三方)
     **/
    private $tk3rd_pub_show_return_fee;

    /**
        1 表示2方，2表示3方
     **/
    private $refund_type;

    /**
        （口碑订单）口碑父订单号
     **/
    private $alsc_pid;

    /**
        （口碑订单）口碑子订单号
     **/
    private $alsc_id;

    /**
        更新时间
     **/
    private $modified_time;


    public function getTbTradeParentId() : int{
        return $this->tb_trade_parent_id;
    }

    public function setTbTradeParentId(int $tbTradeParentId){
        $this->tb_trade_parent_id = $tbTradeParentId;
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

    public function getTk3rdPubId() : int{
        return $this->tk3rd_pub_id;
    }

    public function setTk3rdPubId(int $tk3rdPubId){
        $this->tk3rd_pub_id = $tk3rdPubId;
    }

    public function getTkPubId() : int{
        return $this->tk_pub_id;
    }

    public function setTkPubId(int $tkPubId){
        $this->tk_pub_id = $tkPubId;
    }

    public function getTkSubsidyFeeRefund3rdPub() : string{
        return $this->tk_subsidy_fee_refund3rd_pub;
    }

    public function setTkSubsidyFeeRefund3rdPub(string $tkSubsidyFeeRefund3rdPub){
        $this->tk_subsidy_fee_refund3rd_pub = $tkSubsidyFeeRefund3rdPub;
    }

    public function getTkCommissionFeeRefund3rdPub() : string{
        return $this->tk_commission_fee_refund3rd_pub;
    }

    public function setTkCommissionFeeRefund3rdPub(string $tkCommissionFeeRefund3rdPub){
        $this->tk_commission_fee_refund3rd_pub = $tkCommissionFeeRefund3rdPub;
    }

    public function getTkSubsidyFeeRefundPub() : string{
        return $this->tk_subsidy_fee_refund_pub;
    }

    public function setTkSubsidyFeeRefundPub(string $tkSubsidyFeeRefundPub){
        $this->tk_subsidy_fee_refund_pub = $tkSubsidyFeeRefundPub;
    }

    public function getTkCommissionFeeRefundPub() : string{
        return $this->tk_commission_fee_refund_pub;
    }

    public function setTkCommissionFeeRefundPub(string $tkCommissionFeeRefundPub){
        $this->tk_commission_fee_refund_pub = $tkCommissionFeeRefundPub;
    }

    public function getTkRefundSuitTime() : string{
        return $this->tk_refund_suit_time;
    }

    public function setTkRefundSuitTime(string $tkRefundSuitTime){
        $this->tk_refund_suit_time = $tkRefundSuitTime;
    }

    public function getTkRefundTime() : string{
        return $this->tk_refund_time;
    }

    public function setTkRefundTime(string $tkRefundTime){
        $this->tk_refund_time = $tkRefundTime;
    }

    public function getEarningTime() : string{
        return $this->earning_time;
    }

    public function setEarningTime(string $earningTime){
        $this->earning_time = $earningTime;
    }

    public function getTbTradeCreateTime() : string{
        return $this->tb_trade_create_time;
    }

    public function setTbTradeCreateTime(string $tbTradeCreateTime){
        $this->tb_trade_create_time = $tbTradeCreateTime;
    }

    public function getRefundStatus() : int{
        return $this->refund_status;
    }

    public function setRefundStatus(int $refundStatus){
        $this->refund_status = $refundStatus;
    }

    public function getTbAuctionTitle() : string{
        return $this->tb_auction_title;
    }

    public function setTbAuctionTitle(string $tbAuctionTitle){
        $this->tb_auction_title = $tbAuctionTitle;
    }

    public function getTbTradeId() : int{
        return $this->tb_trade_id;
    }

    public function setTbTradeId(int $tbTradeId){
        $this->tb_trade_id = $tbTradeId;
    }

    public function getRefundFee() : string{
        return $this->refund_fee;
    }

    public function setRefundFee(string $refundFee){
        $this->refund_fee = $refundFee;
    }

    public function getTbTradeFinishPrice() : string{
        return $this->tb_trade_finish_price;
    }

    public function setTbTradeFinishPrice(string $tbTradeFinishPrice){
        $this->tb_trade_finish_price = $tbTradeFinishPrice;
    }

    public function getTkPubShowReturnFee() : string{
        return $this->tk_pub_show_return_fee;
    }

    public function setTkPubShowReturnFee(string $tkPubShowReturnFee){
        $this->tk_pub_show_return_fee = $tkPubShowReturnFee;
    }

    public function getTk3rdPubShowReturnFee() : string{
        return $this->tk3rd_pub_show_return_fee;
    }

    public function setTk3rdPubShowReturnFee(string $tk3rdPubShowReturnFee){
        $this->tk3rd_pub_show_return_fee = $tk3rdPubShowReturnFee;
    }

    public function getRefundType() : int{
        return $this->refund_type;
    }

    public function setRefundType(int $refundType){
        $this->refund_type = $refundType;
    }

    public function getAlscPid() : string{
        return $this->alsc_pid;
    }

    public function setAlscPid(string $alscPid){
        $this->alsc_pid = $alscPid;
    }

    public function getAlscId() : string{
        return $this->alsc_id;
    }

    public function setAlscId(string $alscId){
        $this->alsc_id = $alscId;
    }

    public function getModifiedTime() : string{
        return $this->modified_time;
    }

    public function setModifiedTime(string $modifiedTime){
        $this->modified_time = $modifiedTime;
    }


}

