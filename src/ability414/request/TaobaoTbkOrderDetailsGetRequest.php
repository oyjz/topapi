<?php
namespace Topsdk\Topapi\Ability414\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkOrderDetailsGetRequest {

    /**
        查询时间类型，1：按照订单淘客创建时间查询，2:按照订单淘客付款时间查询，3:按照订单淘客结算时间查询，4:按照订单更新时间；
     **/
    private $queryType;

    /**
        位点，除第一页之外，都需要传递；前端原样返回。
     **/
    private $positionIndex;

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        推广者角色类型,2:二方，3:三方，不传，表示所有角色
     **/
    private $memberType;

    /**
        淘客订单状态，11-拍下未付款，12-付款，13-关闭，14-确认收货，3-结算成功;不传，表示所有状态
     **/
    private $tkStatus;

    /**
        订单查询结束时间，订单开始时间至订单结束时间，中间时间段日常要求不超过3个小时，但如618、双11、年货节等大促期间预估时间段不可超过20分钟，超过会提示错误，调用时请务必注意时间段的选择，以保证亲能正常调用！
     **/
    private $endTime;

    /**
        订单查询开始时间
     **/
    private $startTime;

    /**
        跳转类型，当向前或者向后翻页必须提供,-1: 向前翻页,1：向后翻页
     **/
    private $jumpType;

    /**
        第几页，默认1，1~100
     **/
    private $pageNo;

    /**
        场景订单场景类型，1:常规订单，2:渠道订单，3:会员运营订单，默认为1
     **/
    private $orderScene;


    public function getQueryType() : int{
        return $this->queryType;
    }

    public function setQueryType(int $queryType){
        $this->queryType = $queryType;
    }

    public function getPositionIndex() : string{
        return $this->positionIndex;
    }

    public function setPositionIndex(string $positionIndex){
        $this->positionIndex = $positionIndex;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getMemberType() : int{
        return $this->memberType;
    }

    public function setMemberType(int $memberType){
        $this->memberType = $memberType;
    }

    public function getTkStatus() : int{
        return $this->tkStatus;
    }

    public function setTkStatus(int $tkStatus){
        $this->tkStatus = $tkStatus;
    }

    public function getEndTime() : string{
        return $this->endTime;
    }

    public function setEndTime(string $endTime){
        $this->endTime = $endTime;
    }

    public function getStartTime() : string{
        return $this->startTime;
    }

    public function setStartTime(string $startTime){
        $this->startTime = $startTime;
    }

    public function getJumpType() : int{
        return $this->jumpType;
    }

    public function setJumpType(int $jumpType){
        $this->jumpType = $jumpType;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getOrderScene() : int{
        return $this->orderScene;
    }

    public function setOrderScene(int $orderScene){
        $this->orderScene = $orderScene;
    }


    public function getApiName() : string {
        return "taobao.tbk.order.details.get";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->queryType)) {
            $requestParam["query_type"] = TopUtil::convertBasic($this->queryType);
        }

        if (!TopUtil::checkEmpty($this->positionIndex)) {
            $requestParam["position_index"] = TopUtil::convertBasic($this->positionIndex);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->memberType)) {
            $requestParam["member_type"] = TopUtil::convertBasic($this->memberType);
        }

        if (!TopUtil::checkEmpty($this->tkStatus)) {
            $requestParam["tk_status"] = TopUtil::convertBasic($this->tkStatus);
        }

        if (!TopUtil::checkEmpty($this->endTime)) {
            $requestParam["end_time"] = TopUtil::convertBasic($this->endTime);
        }

        if (!TopUtil::checkEmpty($this->startTime)) {
            $requestParam["start_time"] = TopUtil::convertBasic($this->startTime);
        }

        if (!TopUtil::checkEmpty($this->jumpType)) {
            $requestParam["jump_type"] = TopUtil::convertBasic($this->jumpType);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->orderScene)) {
            $requestParam["order_scene"] = TopUtil::convertBasic($this->orderScene);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

