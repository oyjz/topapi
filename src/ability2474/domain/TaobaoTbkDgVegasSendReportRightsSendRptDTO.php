<?php
namespace Topsdk\Topapi\Ability2474\Domain;

class TaobaoTbkDgVegasSendReportRightsSendRptDTO {

    /**
        渠道关系id的发放数据
     **/
    private $relation_rpt_list;


    public function getRelationRptList() : array{
        return $this->relation_rpt_list;
    }

    public function setRelationRptList(array $relationRptList){
        $this->relation_rpt_list = $relationRptList;
    }


}

