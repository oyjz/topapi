<?php
namespace Topsdk\Topapi\Ability373\Domain;

class TaobaoJuItemsSearchPaginationResult {

    /**
        当前页码
     **/
    private $current_page;

    /**
        扩展属性
     **/
    private $extend;

    /**
        商品数据
     **/
    private $model_list;

    /**
        错误码
     **/
    private $msg_code;

    /**
        错误信息
     **/
    private $msg_info;

    /**
        一页大小
     **/
    private $page_size;

    /**
        请求是否成功
     **/
    private $success;

    /**
        商品总数
     **/
    private $total_item;

    /**
        总页数
     **/
    private $total_page;

    /**
        埋点信息
     **/
    private $track_params;


    public function getCurrentPage() : int{
        return $this->current_page;
    }

    public function setCurrentPage(int $currentPage){
        $this->current_page = $currentPage;
    }

    public function getExtend() : TaobaoJuItemsSearchExtend{
        return $this->extend;
    }

    public function setExtend(TaobaoJuItemsSearchExtend $extend){
        $this->extend = $extend;
    }

    public function getModelList() : array{
        return $this->model_list;
    }

    public function setModelList(array $modelList){
        $this->model_list = $modelList;
    }

    public function getMsgCode() : string{
        return $this->msg_code;
    }

    public function setMsgCode(string $msgCode){
        $this->msg_code = $msgCode;
    }

    public function getMsgInfo() : string{
        return $this->msg_info;
    }

    public function setMsgInfo(string $msgInfo){
        $this->msg_info = $msgInfo;
    }

    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }

    public function getTotalItem() : int{
        return $this->total_item;
    }

    public function setTotalItem(int $totalItem){
        $this->total_item = $totalItem;
    }

    public function getTotalPage() : int{
        return $this->total_page;
    }

    public function setTotalPage(int $totalPage){
        $this->total_page = $totalPage;
    }

    public function getTrackParams() : TaobaoJuItemsSearchTrackparams{
        return $this->track_params;
    }

    public function setTrackParams(TaobaoJuItemsSearchTrackparams $trackParams){
        $this->track_params = $trackParams;
    }


}

