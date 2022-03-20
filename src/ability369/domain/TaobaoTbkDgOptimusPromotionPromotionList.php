<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusPromotionPromotionList {

    /**
        权益开始时间，精确到毫秒时间戳
     **/
    private $entry_used_start_time;

    /**
        权益结束时间，精确到毫秒时间戳
     **/
    private $entry_used_end_time;

    /**
        权益起用门槛，满X元可用，券场景为满元，精确到分，如满100元可用
     **/
    private $entry_condition;

    /**
        权益面额，券场景为减钱，精确到分
     **/
    private $entry_discount;


    public function getEntryUsedStartTime() : string{
        return $this->entry_used_start_time;
    }

    public function setEntryUsedStartTime(string $entryUsedStartTime){
        $this->entry_used_start_time = $entryUsedStartTime;
    }

    public function getEntryUsedEndTime() : string{
        return $this->entry_used_end_time;
    }

    public function setEntryUsedEndTime(string $entryUsedEndTime){
        $this->entry_used_end_time = $entryUsedEndTime;
    }

    public function getEntryCondition() : string{
        return $this->entry_condition;
    }

    public function setEntryCondition(string $entryCondition){
        $this->entry_condition = $entryCondition;
    }

    public function getEntryDiscount() : string{
        return $this->entry_discount;
    }

    public function setEntryDiscount(string $entryDiscount){
        $this->entry_discount = $entryDiscount;
    }


}

