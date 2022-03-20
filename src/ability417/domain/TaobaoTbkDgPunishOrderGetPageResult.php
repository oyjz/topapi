<?php
namespace Topsdk\Topapi\Ability417\Domain;

class TaobaoTbkDgPunishOrderGetPageResult {

    /**
        处罚订单列表
     **/
    private $results;

    /**
        翻页的pageno
     **/
    private $page_no;

    /**
        翻页的pagesie
     **/
    private $page_size;

    /**
        一共能查询出来的结果总数
     **/
    private $total_count;


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

    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }


}

