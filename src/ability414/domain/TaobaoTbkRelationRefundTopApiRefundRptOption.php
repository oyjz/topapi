<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkRelationRefundTopApiRefundRptOption {

    /**
        pagesize
     **/
    private $page_size;

    /**
        1-维权发起时间，2-订单结算时间（正向订单），3-维权完成时间，4-订单创建时间，5-订单更新时间
     **/
    private $search_type;

    /**
        1 表示2方，2表示3方，0表示不限
     **/
    private $refund_type;

    /**
        开始时间
     **/
    private $start_time;

    /**
        pagenumber
     **/
    private $page_no;

    /**
        1代表渠道关系id，2代表会员关系id
     **/
    private $biz_type;


    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getSearchType() : int{
        return $this->search_type;
    }

    public function setSearchType(int $searchType){
        $this->search_type = $searchType;
    }

    public function getRefundType() : int{
        return $this->refund_type;
    }

    public function setRefundType(int $refundType){
        $this->refund_type = $refundType;
    }

    public function getStartTime() : string{
        return $this->start_time;
    }

    public function setStartTime(string $startTime){
        $this->start_time = $startTime;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getBizType() : int{
        return $this->biz_type;
    }

    public function setBizType(int $bizType){
        $this->biz_type = $bizType;
    }


}

