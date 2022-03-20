<?php
namespace Topsdk\Topapi\Ability417\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability417\Domain\TaobaoTbkDgPunishOrderGetTopApiAfOrderOption;

class TaobaoTbkDgPunishOrderGetRequest {

    /**
        入参的对象
     **/
    private $afOrderOption;


    public function getAfOrderOption() : TaobaoTbkDgPunishOrderGetTopApiAfOrderOption{
        return $this->afOrderOption;
    }

    public function setAfOrderOption(TaobaoTbkDgPunishOrderGetTopApiAfOrderOption $afOrderOption){
        $this->afOrderOption = $afOrderOption;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.punish.order.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->afOrderOption)) {
            $requestParam["af_order_option"] = TopUtil::convertStruct($this->afOrderOption);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

