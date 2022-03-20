<?php
namespace Topsdk\Topapi\Ability373;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability373\Request\TaobaoJuItemsSearchRequest;

class Ability373 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        聚划算商品搜索接口
    **/
    public function taobaoJuItemsSearch(TaobaoJuItemsSearchRequest $request) {
        return $this->client->execute("taobao.ju.items.search", $request->toMap(), $request->toFileParamMap());
    }
}