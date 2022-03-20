<?php
namespace Topsdk\Topapi\Ability2138\Domain;

class TaobaoTbkDgNewuserOrderGetOrderData {

    /**
        预估佣金
     **/
    private $commission;

    /**
        收货时间
     **/
    private $confirm_receive_time;

    /**
        支付时间
     **/
    private $pay_time;

    /**
        订单号
     **/
    private $order_no;


    public function getCommission() : string{
        return $this->commission;
    }

    public function setCommission(string $commission){
        $this->commission = $commission;
    }

    public function getConfirmReceiveTime() : string{
        return $this->confirm_receive_time;
    }

    public function setConfirmReceiveTime(string $confirmReceiveTime){
        $this->confirm_receive_time = $confirmReceiveTime;
    }

    public function getPayTime() : string{
        return $this->pay_time;
    }

    public function setPayTime(string $payTime){
        $this->pay_time = $payTime;
    }

    public function getOrderNo() : string{
        return $this->order_no;
    }

    public function setOrderNo(string $orderNo){
        $this->order_no = $orderNo;
    }


}

