<?php
namespace Topsdk\Topapi\Ability2474;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability2474\Request\TaobaoTbkDgVegasSendReportRequest;

class Ability2474 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-查询红包发放个数
    **/
    public function taobaoTbkDgVegasSendReport(TaobaoTbkDgVegasSendReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.send.report", $request->toMap(), $request->toFileParamMap());
    }
}