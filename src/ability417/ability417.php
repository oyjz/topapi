<?php
namespace Topsdk\Topapi\Ability417;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability417\Request\TaobaoTbkDgPunishOrderGetRequest;

class Ability417 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-处罚订单查询
    **/
    public function taobaoTbkDgPunishOrderGet(TaobaoTbkDgPunishOrderGetRequest $request) {
        return $this->client->execute("taobao.tbk.dg.punish.order.get", $request->toMap(), $request->toFileParamMap());
    }
}