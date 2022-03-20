<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljInstanceReportTljInstanceReportDto {

    /**
        解冻金额
     **/
    private $unfreeze_amount;

    /**
        解冻红包个数
     **/
    private $unfreeze_num;

    /**
        失效回退金额
     **/
    private $refund_amount;

    /**
        失效回退红包个数
     **/
    private $refund_num;

    /**
        引导预估佣金金额
     **/
    private $pre_commission_amount;

    /**
        引导成交金额
     **/
    private $alipay_amount;

    /**
        红包核销金额
     **/
    private $use_amount;

    /**
        红包核销个数
     **/
    private $use_num;

    /**
        红包领取金额
     **/
    private $win_amount;

    /**
        红包领取个数
     **/
    private $win_num;

    /**
        退款红包金额
     **/
    private $fp_refund_amount;

    /**
        退款红包个数
     **/
    private $fp_refund_num;


    public function getUnfreezeAmount() : string{
        return $this->unfreeze_amount;
    }

    public function setUnfreezeAmount(string $unfreezeAmount){
        $this->unfreeze_amount = $unfreezeAmount;
    }

    public function getUnfreezeNum() : int{
        return $this->unfreeze_num;
    }

    public function setUnfreezeNum(int $unfreezeNum){
        $this->unfreeze_num = $unfreezeNum;
    }

    public function getRefundAmount() : string{
        return $this->refund_amount;
    }

    public function setRefundAmount(string $refundAmount){
        $this->refund_amount = $refundAmount;
    }

    public function getRefundNum() : int{
        return $this->refund_num;
    }

    public function setRefundNum(int $refundNum){
        $this->refund_num = $refundNum;
    }

    public function getPreCommissionAmount() : string{
        return $this->pre_commission_amount;
    }

    public function setPreCommissionAmount(string $preCommissionAmount){
        $this->pre_commission_amount = $preCommissionAmount;
    }

    public function getAlipayAmount() : string{
        return $this->alipay_amount;
    }

    public function setAlipayAmount(string $alipayAmount){
        $this->alipay_amount = $alipayAmount;
    }

    public function getUseAmount() : string{
        return $this->use_amount;
    }

    public function setUseAmount(string $useAmount){
        $this->use_amount = $useAmount;
    }

    public function getUseNum() : int{
        return $this->use_num;
    }

    public function setUseNum(int $useNum){
        $this->use_num = $useNum;
    }

    public function getWinAmount() : string{
        return $this->win_amount;
    }

    public function setWinAmount(string $winAmount){
        $this->win_amount = $winAmount;
    }

    public function getWinNum() : int{
        return $this->win_num;
    }

    public function setWinNum(int $winNum){
        $this->win_num = $winNum;
    }

    public function getFpRefundAmount() : string{
        return $this->fp_refund_amount;
    }

    public function setFpRefundAmount(string $fpRefundAmount){
        $this->fp_refund_amount = $fpRefundAmount;
    }

    public function getFpRefundNum() : int{
        return $this->fp_refund_num;
    }

    public function setFpRefundNum(int $fpRefundNum){
        $this->fp_refund_num = $fpRefundNum;
    }


}

