<?php
namespace Topsdk\Topapi\Ability373\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability373\Domain\TaobaoJuItemsSearchTopItemQuery;

class TaobaoJuItemsSearchRequest {

    /**
        query
     **/
    private $paramTopItemQuery;


    public function getParamTopItemQuery() : TaobaoJuItemsSearchTopItemQuery{
        return $this->paramTopItemQuery;
    }

    public function setParamTopItemQuery(TaobaoJuItemsSearchTopItemQuery $paramTopItemQuery){
        $this->paramTopItemQuery = $paramTopItemQuery;
    }


    public function getApiName() : string {
        return "taobao.ju.items.search";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramTopItemQuery)) {
            $requestParam["param_top_item_query"] = TopUtil::convertStruct($this->paramTopItemQuery);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

