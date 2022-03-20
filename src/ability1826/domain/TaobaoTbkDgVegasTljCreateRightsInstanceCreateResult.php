<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljCreateRightsInstanceCreateResult {

    /**
        淘礼金Id
     **/
    private $rights_id;

    /**
        淘礼金领取Url
     **/
    private $send_url;

    /**
        投放code【百川商品详情页业务专用】
     **/
    private $vegas_code;

    /**
        创建完成后资金账户可用资金，单位元，保留2位小数
     **/
    private $available_fee;

    /**
        媒体针对此商品今日剩余可领取淘礼金数量
     **/
    private $item_today_num_left;


    public function getRightsId() : string{
        return $this->rights_id;
    }

    public function setRightsId(string $rightsId){
        $this->rights_id = $rightsId;
    }

    public function getSendUrl() : string{
        return $this->send_url;
    }

    public function setSendUrl(string $sendUrl){
        $this->send_url = $sendUrl;
    }

    public function getVegasCode() : string{
        return $this->vegas_code;
    }

    public function setVegasCode(string $vegasCode){
        $this->vegas_code = $vegasCode;
    }

    public function getAvailableFee() : string{
        return $this->available_fee;
    }

    public function setAvailableFee(string $availableFee){
        $this->available_fee = $availableFee;
    }

    public function getItemTodayNumLeft() : int{
        return $this->item_today_num_left;
    }

    public function setItemTodayNumLeft(int $itemTodayNumLeft){
        $this->item_today_num_left = $itemTodayNumLeft;
    }


}

