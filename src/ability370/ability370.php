<?php
namespace Topsdk\Topapi\Ability370;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability370\Request\TaobaoTbkDgMaterialOptionalRequest;

class Ability370 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-物料搜索
    **/
    public function taobaoTbkDgMaterialOptional(TaobaoTbkDgMaterialOptionalRequest $request) {
        return $this->client->execute("taobao.tbk.dg.material.optional", $request->toMap(), $request->toFileParamMap());
    }
}