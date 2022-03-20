<?php
namespace Topsdk\Topapi\Ability2474\Domain;

class TaobaoTbkDgVegasSendReportRightsSendRelationRptDto {

    /**
        日期
     **/
    private $biz_date;

    /**
        渠道关系id
     **/
    private $relation_id;

    /**
        红包发放数量
     **/
    private $fund_num;


    public function getBizDate() : string{
        return $this->biz_date;
    }

    public function setBizDate(string $bizDate){
        $this->biz_date = $bizDate;
    }

    public function getRelationId() : int{
        return $this->relation_id;
    }

    public function setRelationId(int $relationId){
        $this->relation_id = $relationId;
    }

    public function getFundNum() : int{
        return $this->fund_num;
    }

    public function setFundNum(int $fundNum){
        $this->fund_num = $fundNum;
    }


}

