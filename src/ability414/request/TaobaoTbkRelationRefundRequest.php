<?php
namespace Topsdk\Topapi\Ability414\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability414\Domain\TaobaoTbkRelationRefundTopApiRefundRptOption;

class TaobaoTbkRelationRefundRequest {

    /**
        参数option
     **/
    private $searchOption;


    public function getSearchOption() : TaobaoTbkRelationRefundTopApiRefundRptOption{
        return $this->searchOption;
    }

    public function setSearchOption(TaobaoTbkRelationRefundTopApiRefundRptOption $searchOption){
        $this->searchOption = $searchOption;
    }


    public function getApiName() : string {
        return "taobao.tbk.relation.refund";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->searchOption)) {
            $requestParam["search_option"] = TopUtil::convertStruct($this->searchOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

