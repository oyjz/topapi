<?php
namespace Topsdk\Topapi\Ability1826;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljStopRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljCreateRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljReportRequest;
use Topsdk\Topapi\Ability1826\Request\TaobaoTbkDgVegasTljInstanceReportRequest;

class Ability1826 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-推广者-淘礼金暂停发放
    **/
    public function taobaoTbkDgVegasTljStop(TaobaoTbkDgVegasTljStopRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.stop", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金创建
    **/
    public function taobaoTbkDgVegasTljCreate(TaobaoTbkDgVegasTljCreateRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.create", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金效果数据
    **/
    public function taobaoTbkDgVegasTljReport(TaobaoTbkDgVegasTljReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.report", $request->toMap(), $request->toFileParamMap());
    }
    /**
        淘宝客-推广者-淘礼金发放及使用报表(将停用，按描述说明换新API)
    **/
    public function taobaoTbkDgVegasTljInstanceReport(TaobaoTbkDgVegasTljInstanceReportRequest $request) {
        return $this->client->execute("taobao.tbk.dg.vegas.tlj.instance.report", $request->toMap(), $request->toFileParamMap());
    }
}