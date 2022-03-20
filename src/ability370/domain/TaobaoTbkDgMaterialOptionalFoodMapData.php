<?php
namespace Topsdk\Topapi\Ability370\Domain;

class TaobaoTbkDgMaterialOptionalFoodMapData {

    /**
        本地化-商品图片
     **/
    private $food_pic;

    /**
        本地化-商品标题
     **/
    private $food_title;

    /**
        本地化-商品促销价
     **/
    private $food_promotion_price;

    /**
        本地化-商品原价
     **/
    private $food_reserve_price;


    public function getFoodPic() : string{
        return $this->food_pic;
    }

    public function setFoodPic(string $foodPic){
        $this->food_pic = $foodPic;
    }

    public function getFoodTitle() : string{
        return $this->food_title;
    }

    public function setFoodTitle(string $foodTitle){
        $this->food_title = $foodTitle;
    }

    public function getFoodPromotionPrice() : string{
        return $this->food_promotion_price;
    }

    public function setFoodPromotionPrice(string $foodPromotionPrice){
        $this->food_promotion_price = $foodPromotionPrice;
    }

    public function getFoodReservePrice() : string{
        return $this->food_reserve_price;
    }

    public function setFoodReservePrice(string $foodReservePrice){
        $this->food_reserve_price = $foodReservePrice;
    }


}

