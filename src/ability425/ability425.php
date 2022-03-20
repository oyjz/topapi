<?php
namespace Topsdk\Topapi\Ability425;

use Topsdk\Topapi\TopApiClient;
use Topsdk\Topapi\Ability425\Request\TaobaoTbkScInvitecodeGetRequest;
use Topsdk\Topapi\Ability425\Request\TaobaoTbkScPublisherInfoSaveRequest;
use Topsdk\Topapi\Ability425\Request\TaobaoTbkScPublisherInfoGetRequest;

class Ability425 {

    public $client;

    function __construct(TopApiClient $client) {
        $this->client = $client;
    }


    /**
        淘宝客-公用-私域用户邀请码生成
    **/
    public function taobaoTbkScInvitecodeGet(TaobaoTbkScInvitecodeGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.invitecode.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-公用-私域用户备案
    **/
    public function taobaoTbkScPublisherInfoSave(TaobaoTbkScPublisherInfoSaveRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.publisher.info.save", $request->toMap(), $request->toFileParamMap(), $session);
    }
    /**
        淘宝客-公用-私域用户备案信息查询
    **/
    public function taobaoTbkScPublisherInfoGet(TaobaoTbkScPublisherInfoGetRequest $request,string $session) {
        return $this->client->executeWithSession("taobao.tbk.sc.publisher.info.get", $request->toMap(), $request->toFileParamMap(), $session);
    }
}