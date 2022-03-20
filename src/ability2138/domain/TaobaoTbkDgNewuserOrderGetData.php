<?php
namespace Topsdk\Topapi\Ability2138\Domain;

class TaobaoTbkDgNewuserOrderGetData {

    /**
        resultList
     **/
    private $results;

    /**
        页码
     **/
    private $page_no;

    /**
        每页大小
     **/
    private $page_size;

    /**
        是否有下一页
     **/
    private $has_next;


    public function getResults() : array{
        return $this->results;
    }

    public function setResults(array $results){
        $this->results = $results;
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

    public function getHasNext() : bool{
        return $this->has_next;
    }

    public function setHasNext(bool $hasNext){
        $this->has_next = $hasNext;
    }


}

