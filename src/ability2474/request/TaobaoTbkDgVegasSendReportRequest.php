<?php
namespace Topsdk\Topapi\Ability2474\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgVegasSendReportRequest {

    /**
        统计日期
     **/
    private $bizDate;

    /**
        渠道关系id
     **/
    private $relationId;

    /**
        红包活动id：1462
     **/
    private $activityId;

    /**
        页码
     **/
    private $pageNo;

    /**
        每页大小
     **/
    private $pageSize;


    public function getBizDate() : string{
        return $this->bizDate;
    }

    public function setBizDate(string $bizDate){
        $this->bizDate = $bizDate;
    }

    public function getRelationId() : int{
        return $this->relationId;
    }

    public function setRelationId(int $relationId){
        $this->relationId = $relationId;
    }

    public function getActivityId() : int{
        return $this->activityId;
    }

    public function setActivityId(int $activityId){
        $this->activityId = $activityId;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.vegas.send.report";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->bizDate)) {
            $requestParam["biz_date"] = TopUtil::convertBasic($this->bizDate);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->activityId)) {
            $requestParam["activity_id"] = TopUtil::convertBasic($this->activityId);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

