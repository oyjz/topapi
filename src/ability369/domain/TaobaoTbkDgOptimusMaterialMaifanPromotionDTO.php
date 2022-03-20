<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusMaterialMaifanPromotionDTO {

    /**
        猫超买返卡活动结束时间
     **/
    private $maifan_promotion_end_time;

    /**
        猫超买返卡活动开始时间
     **/
    private $maifan_promotion_start_time;

    /**
        猫超买返卡面额
     **/
    private $maifan_promotion_discount;

    /**
        猫超买返卡总数，-1代表不限量，其他大于等于0的值为总数
     **/
    private $maifan_promotion_condition;


    public function getMaifanPromotionEndTime() : string{
        return $this->maifan_promotion_end_time;
    }

    public function setMaifanPromotionEndTime(string $maifanPromotionEndTime){
        $this->maifan_promotion_end_time = $maifanPromotionEndTime;
    }

    public function getMaifanPromotionStartTime() : string{
        return $this->maifan_promotion_start_time;
    }

    public function setMaifanPromotionStartTime(string $maifanPromotionStartTime){
        $this->maifan_promotion_start_time = $maifanPromotionStartTime;
    }

    public function getMaifanPromotionDiscount() : string{
        return $this->maifan_promotion_discount;
    }

    public function setMaifanPromotionDiscount(string $maifanPromotionDiscount){
        $this->maifan_promotion_discount = $maifanPromotionDiscount;
    }

    public function getMaifanPromotionCondition() : string{
        return $this->maifan_promotion_condition;
    }

    public function setMaifanPromotionCondition(string $maifanPromotionCondition){
        $this->maifan_promotion_condition = $maifanPromotionCondition;
    }


}

