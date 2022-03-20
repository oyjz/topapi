<?php
namespace Topsdk\Topapi\Ability370\Domain;

class TaobaoTbkDgMaterialOptionalBybtInfoDTO {

    /**
        百亿补贴品牌logo
     **/
    private $bybt_brand_logo;

    /**
        百亿补贴白底图
     **/
    private $bybt_pic_url;

    /**
        百亿补贴商品特征标签，eg.今日发货、晚发补偿、限购一件等
     **/
    private $bybt_item_tags;

    /**
        百亿补贴专属券面额，仅限百亿补贴场景透出
     **/
    private $bybt_coupon_amount;

    /**
        百亿补贴页面实时价
     **/
    private $bybt_show_price;

    /**
        全网对比参考价格
     **/
    private $bybt_lowest_price;

    /**
        商品的百亿补贴开始时间
     **/
    private $bybt_end_time;

    /**
        商品的百亿补贴结束时间
     **/
    private $bybt_start_time;


    public function getBybtBrandLogo() : string{
        return $this->bybt_brand_logo;
    }

    public function setBybtBrandLogo(string $bybtBrandLogo){
        $this->bybt_brand_logo = $bybtBrandLogo;
    }

    public function getBybtPicUrl() : string{
        return $this->bybt_pic_url;
    }

    public function setBybtPicUrl(string $bybtPicUrl){
        $this->bybt_pic_url = $bybtPicUrl;
    }

    public function getBybtItemTags() : array{
        return $this->bybt_item_tags;
    }

    public function setBybtItemTags(array $bybtItemTags){
        $this->bybt_item_tags = $bybtItemTags;
    }

    public function getBybtCouponAmount() : string{
        return $this->bybt_coupon_amount;
    }

    public function setBybtCouponAmount(string $bybtCouponAmount){
        $this->bybt_coupon_amount = $bybtCouponAmount;
    }

    public function getBybtShowPrice() : string{
        return $this->bybt_show_price;
    }

    public function setBybtShowPrice(string $bybtShowPrice){
        $this->bybt_show_price = $bybtShowPrice;
    }

    public function getBybtLowestPrice() : string{
        return $this->bybt_lowest_price;
    }

    public function setBybtLowestPrice(string $bybtLowestPrice){
        $this->bybt_lowest_price = $bybtLowestPrice;
    }

    public function getBybtEndTime() : string{
        return $this->bybt_end_time;
    }

    public function setBybtEndTime(string $bybtEndTime){
        $this->bybt_end_time = $bybtEndTime;
    }

    public function getBybtStartTime() : string{
        return $this->bybt_start_time;
    }

    public function setBybtStartTime(string $bybtStartTime){
        $this->bybt_start_time = $bybtStartTime;
    }


}

