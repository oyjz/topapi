<?php
namespace Topsdk\Topapi\Ability414;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability414\Request\TaobaoTbkOrderDetailsGetRequest;
use Topsdk\Topapi\Ability414\Request\TaobaoTbkRelationRefundRequest;

class Ability414 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-所有订单查询
    **/
    public function taobaoTbkOrderDetailsGet(TaobaoTbkOrderDetailsGetRequest $request) {
        return $this->client->execute("taobao.tbk.order.details.get", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-维权退款订单查询
    **/
    public function taobaoTbkRelationRefund(TaobaoTbkRelationRefundRequest $request) {
        return $this->client->execute("taobao.tbk.relation.refund", $request->toMap(), $request->toFileParamMap());
    }
}