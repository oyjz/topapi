<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljReportExtra {

    /**
        领取率，领取淘礼金个数/创建淘礼金个数
     **/
    private $get_rate;

    /**
        使用率，使用淘礼金个数/领取淘礼金个数
     **/
    private $use_rate;

    /**
        引导付款笔数，同一个红包，若因消费者付款使用后取消订单或退货退款，产生二次红包使用行为，引导付款笔数也会记录两单
     **/
    private $alipay_num;

    /**
        引导付款金额，同一个红包，若因消费者付款使用后取消订单或退货退款，产生二次红包使用行为，引导付款笔数也会记录两单
     **/
    private $alipay_amt;

    /**
        付款佣金，下单付款，产生二次红包使用行为，会记录2次
     **/
    private $pre_pub_share_fee_for_disp;

    /**
        结算佣金，确认收货，产生二次红包使用行为，会记录2次
     **/
    private $cm_settle_amt;

    /**
        领取淘礼金个数
     **/
    private $win_pv;

    /**
        领取淘礼金金额
     **/
    private $win_sum_amt;

    /**
        未领取淘礼金个数，过了领取有效期或者暂停后没有被领取的红包个数
     **/
    private $remaining_num;

    /**
        未领取金额，过了领取有效期或者暂停后没有被领取的红包金额
     **/
    private $remaining_amt;

    /**
        使用淘礼金个数，同一个红包，若因消费者付款使用后取消订单或退货退款，产生二次红包使用行为，使用淘礼金个数一天内会去重，所以相当于不会重记
     **/
    private $use_num;

    /**
        使用淘礼金金额，若红包被重复使用（1)淘礼金红包被拆分，并且产生部分退款，会保留部分退款的订单淘礼金金额；若全部退款，会保留订单全部淘礼金金额），因此，已使用金额可能大于消费者实际使用金额（使用红包后，若产生红包退回后再次使用，已使用金额会被二次计算，已使用数量不会）
     **/
    private $use_sum_amt;

    /**
        退款淘礼金个数，红包使用后，由于订单取消，退货退款等行为带来的淘礼金红包退回数量，退款红包数量单日内不重复计算，跨天重复计算
     **/
    private $refund_num;

    /**
        退款淘礼金金额，红包使用后，由于订单取消，退货退款等行为行为带来的淘礼金红包退回数量 （退款红包若产生多次使用，退款红包金额会被多次计算，退款红包数量单日内不重复计算，跨天重复计算）
     **/
    private $refund_sum_amt;


    public function getGetRate() : string{
        return $this->get_rate;
    }

    public function setGetRate(string $getRate){
        $this->get_rate = $getRate;
    }

    public function getUseRate() : string{
        return $this->use_rate;
    }

    public function setUseRate(string $useRate){
        $this->use_rate = $useRate;
    }

    public function getAlipayNum() : int{
        return $this->alipay_num;
    }

    public function setAlipayNum(int $alipayNum){
        $this->alipay_num = $alipayNum;
    }

    public function getAlipayAmt() : string{
        return $this->alipay_amt;
    }

    public function setAlipayAmt(string $alipayAmt){
        $this->alipay_amt = $alipayAmt;
    }

    public function getPrePubShareFeeForDisp() : string{
        return $this->pre_pub_share_fee_for_disp;
    }

    public function setPrePubShareFeeForDisp(string $prePubShareFeeForDisp){
        $this->pre_pub_share_fee_for_disp = $prePubShareFeeForDisp;
    }

    public function getCmSettleAmt() : string{
        return $this->cm_settle_amt;
    }

    public function setCmSettleAmt(string $cmSettleAmt){
        $this->cm_settle_amt = $cmSettleAmt;
    }

    public function getWinPv() : int{
        return $this->win_pv;
    }

    public function setWinPv(int $winPv){
        $this->win_pv = $winPv;
    }

    public function getWinSumAmt() : string{
        return $this->win_sum_amt;
    }

    public function setWinSumAmt(string $winSumAmt){
        $this->win_sum_amt = $winSumAmt;
    }

    public function getRemainingNum() : int{
        return $this->remaining_num;
    }

    public function setRemainingNum(int $remainingNum){
        $this->remaining_num = $remainingNum;
    }

    public function getRemainingAmt() : string{
        return $this->remaining_amt;
    }

    public function setRemainingAmt(string $remainingAmt){
        $this->remaining_amt = $remainingAmt;
    }

    public function getUseNum() : int{
        return $this->use_num;
    }

    public function setUseNum(int $useNum){
        $this->use_num = $useNum;
    }

    public function getUseSumAmt() : string{
        return $this->use_sum_amt;
    }

    public function setUseSumAmt(string $useSumAmt){
        $this->use_sum_amt = $useSumAmt;
    }

    public function getRefundNum() : int{
        return $this->refund_num;
    }

    public function setRefundNum(int $refundNum){
        $this->refund_num = $refundNum;
    }

    public function getRefundSumAmt() : string{
        return $this->refund_sum_amt;
    }

    public function setRefundSumAmt(string $refundSumAmt){
        $this->refund_sum_amt = $refundSumAmt;
    }


}

