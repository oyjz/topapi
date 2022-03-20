<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusPromotionMapData {

    /**
        权益类型。1 有价券（需要购买的店铺券或单品券） 2 公开券（直接领取的店铺券或单品券） 3 妈妈券（妈妈渠道领取的店铺券或单品券） 4.品类券 （跨店可用券，可与1，2，3叠加）
     **/
    private $promotion_type;

    /**
        优惠门槛类型： 1 满元 2 满件
     **/
    private $condition_type;

    /**
        优惠类型： 1 减钱 2 打折
     **/
    private $discount_type;

    /**
        权益信息-总量（权益初始库存量）
     **/
    private $total_count;

    /**
        权益信息-剩余库存（权益剩余库存量）
     **/
    private $remain_count;

    /**
        权益信息展示开始时间，精确到毫秒时间戳
     **/
    private $display_start_time;

    /**
        权益信息展示结束时间，精确到毫秒时间戳
     **/
    private $display_end_time;

    /**
        权益信息
     **/
    private $promotion_list;

    /**
        权益扩展信息
     **/
    private $promotion_extend;

    /**
        店铺信息-卖家ID
     **/
    private $seller_id;

    /**
        店铺信息-卖家昵称
     **/
    private $nick;

    /**
        店铺信息-店铺名称
     **/
    private $shop_title;

    /**
        店铺信息-店铺logo
     **/
    private $shop_picture_url;


    public function getPromotionType() : string{
        return $this->promotion_type;
    }

    public function setPromotionType(string $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getConditionType() : string{
        return $this->condition_type;
    }

    public function setConditionType(string $conditionType){
        $this->condition_type = $conditionType;
    }

    public function getDiscountType() : string{
        return $this->discount_type;
    }

    public function setDiscountType(string $discountType){
        $this->discount_type = $discountType;
    }

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getRemainCount() : int{
        return $this->remain_count;
    }

    public function setRemainCount(int $remainCount){
        $this->remain_count = $remainCount;
    }

    public function getDisplayStartTime() : string{
        return $this->display_start_time;
    }

    public function setDisplayStartTime(string $displayStartTime){
        $this->display_start_time = $displayStartTime;
    }

    public function getDisplayEndTime() : string{
        return $this->display_end_time;
    }

    public function setDisplayEndTime(string $displayEndTime){
        $this->display_end_time = $displayEndTime;
    }

    public function getPromotionList() : array{
        return $this->promotion_list;
    }

    public function setPromotionList(array $promotionList){
        $this->promotion_list = $promotionList;
    }

    public function getPromotionExtend() : TaobaoTbkDgOptimusPromotionPromotionExtend{
        return $this->promotion_extend;
    }

    public function setPromotionExtend(TaobaoTbkDgOptimusPromotionPromotionExtend $promotionExtend){
        $this->promotion_extend = $promotionExtend;
    }

    public function getSellerId() : string{
        return $this->seller_id;
    }

    public function setSellerId(string $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getShopPictureUrl() : string{
        return $this->shop_picture_url;
    }

    public function setShopPictureUrl(string $shopPictureUrl){
        $this->shop_picture_url = $shopPictureUrl;
    }


}

