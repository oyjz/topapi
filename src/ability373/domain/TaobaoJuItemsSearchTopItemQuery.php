<?php
namespace Topsdk\Topapi\Ability373\Domain;

class TaobaoJuItemsSearchTopItemQuery {

    /**
        页码,必传
     **/
    private $current_page;

    /**
        一页大小,必传
     **/
    private $page_size;

    /**
        媒体pid,必传
     **/
    private $pid;

    /**
        是否包邮,可不传
     **/
    private $postage;

    /**
        状态，预热：1，正在进行中：2,可不传
     **/
    private $status;

    /**
        淘宝类目id,可不传
     **/
    private $taobao_category_id;

    /**
        搜索关键词,可不传
     **/
    private $word;


    public function getCurrentPage() : int{
        return $this->current_page;
    }

    public function setCurrentPage(int $currentPage){
        $this->current_page = $currentPage;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getPid() : string{
        return $this->pid;
    }

    public function setPid(string $pid){
        $this->pid = $pid;
    }

    public function getPostage() : bool{
        return $this->postage;
    }

    public function setPostage(bool $postage){
        $this->postage = $postage;
    }

    public function getStatus() : int{
        return $this->status;
    }

    public function setStatus(int $status){
        $this->status = $status;
    }

    public function getTaobaoCategoryId() : int{
        return $this->taobao_category_id;
    }

    public function setTaobaoCategoryId(int $taobaoCategoryId){
        $this->taobao_category_id = $taobaoCategoryId;
    }

    public function getWord() : string{
        return $this->word;
    }

    public function setWord(string $word){
        $this->word = $word;
    }


}

