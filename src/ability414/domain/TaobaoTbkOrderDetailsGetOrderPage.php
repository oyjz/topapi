<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkOrderDetailsGetOrderPage {

    /**
        PublisherOrderDto
     **/
    private $results;

    /**
        是否还有上一页
     **/
    private $has_pre;

    /**
        位点字段，由调用方原样传递
     **/
    private $position_index;

    /**
        是否还有下一页
     **/
    private $has_next;

    /**
        页码
     **/
    private $page_no;

    /**
        页大小
     **/
    private $page_size;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
    }

    public function getHasPre() : bool{
        return $this->has_pre;
    }

    public function setHasPre(bool $hasPre){
        $this->has_pre = $hasPre;
    }

    public function getPositionIndex() : string{
        return $this->position_index;
    }

    public function setPositionIndex(string $positionIndex){
        $this->position_index = $positionIndex;
    }

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }

    public function getPageNo() : int{
        return $this->page_no;
    }

    public function setPageNo(int $pageNo){
        $this->page_no = $pageNo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }


}

