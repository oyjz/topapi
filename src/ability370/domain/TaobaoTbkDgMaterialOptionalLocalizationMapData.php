<?php
namespace Topsdk\Topapi\Ability370\Domain;

class TaobaoTbkDgMaterialOptionalLocalizationMapData {

    /**
        本地化-配送时间
     **/
    private $order_lead_time;

    /**
        本地化-用户评分
     **/
    private $user_rating;

    /**
        本地化-起送价
     **/
    private $delivery_min_price;

    /**
        本地化-配送费
     **/
    private $delivery_fee;

    /**
        本地化-配送费原价
     **/
    private $original_delivery_fee;

    /**
        本地化-配送类型；0：蜂鸟专送 1：蜂鸟快送 2：商家自配 3: 全城送
     **/
    private $delivery_type;

    /**
        本地化-推荐理由
     **/
    private $recommend_reasons;

    /**
        本地化-营销标签
     **/
    private $sale_tags;

    /**
        本地化-单店商品列表
     **/
    private $food_item_list;


    public function getOrderLeadTime() : string{
        return $this->order_lead_time;
    }

    public function setOrderLeadTime(string $orderLeadTime){
        $this->order_lead_time = $orderLeadTime;
    }

    public function getUserRating() : string{
        return $this->user_rating;
    }

    public function setUserRating(string $userRating){
        $this->user_rating = $userRating;
    }

    public function getDeliveryMinPrice() : string{
        return $this->delivery_min_price;
    }

    public function setDeliveryMinPrice(string $deliveryMinPrice){
        $this->delivery_min_price = $deliveryMinPrice;
    }

    public function getDeliveryFee() : string{
        return $this->delivery_fee;
    }

    public function setDeliveryFee(string $deliveryFee){
        $this->delivery_fee = $deliveryFee;
    }

    public function getOriginalDeliveryFee() : string{
        return $this->original_delivery_fee;
    }

    public function setOriginalDeliveryFee(string $originalDeliveryFee){
        $this->original_delivery_fee = $originalDeliveryFee;
    }

    public function getDeliveryType() : string{
        return $this->delivery_type;
    }

    public function setDeliveryType(string $deliveryType){
        $this->delivery_type = $deliveryType;
    }

    public function getRecommendReasons() : array{
        return $this->recommend_reasons;
    }

    public function setRecommendReasons(array $recommendReasons){
        $this->recommend_reasons = $recommendReasons;
    }

    public function getSaleTags() : array{
        return $this->sale_tags;
    }

    public function setSaleTags(array $saleTags){
        $this->sale_tags = $saleTags;
    }

    public function getFoodItemList() : array{
        return $this->food_item_list;
    }

    public function setFoodItemList(array $foodItemList){
        $this->food_item_list = $foodItemList;
    }


}

