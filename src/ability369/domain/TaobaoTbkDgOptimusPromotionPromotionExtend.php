<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusPromotionPromotionExtend {

    /**
        权益推荐商品
     **/
    private $recommend_item_list;

    /**
        有价券信息
     **/
    private $youjia_coupon_info;

    /**
        权益链接
     **/
    private $promotion_url;


    public function getRecommendItemList() : array{
        return $this->recommend_item_list;
    }

    public function setRecommendItemList(array $recommendItemList){
        $this->recommend_item_list = $recommendItemList;
    }

    public function getYoujiaCouponInfo() : TaobaoTbkDgOptimusPromotionYoujiacouponinfo{
        return $this->youjia_coupon_info;
    }

    public function setYoujiaCouponInfo(TaobaoTbkDgOptimusPromotionYoujiacouponinfo $youjiaCouponInfo){
        $this->youjia_coupon_info = $youjiaCouponInfo;
    }

    public function getPromotionUrl() : string{
        return $this->promotion_url;
    }

    public function setPromotionUrl(string $promotionUrl){
        $this->promotion_url = $promotionUrl;
    }


}

