<?php
namespace Topsdk\Topapi\Ability369\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgOptimusPromotionRequest {

    /**
        页大小，一次请求请限制在10以内
     **/
    private $pageSize;

    /**
        第几页，默认：1
     **/
    private $pageNum;

    /**
        mm_xxx_xxx_xxx的第3段数字
     **/
    private $adzoneId;

    /**
        官方提供的权益物料Id。有价券-37104、大额店铺券-37116，更多权益物料id敬请期待！
     **/
    private $promotionId;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNum() : int{
        return $this->pageNum;
    }

    public function setPageNum(int $pageNum){
        $this->pageNum = $pageNum;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getPromotionId() : int{
        return $this->promotionId;
    }

    public function setPromotionId(int $promotionId){
        $this->promotionId = $promotionId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.optimus.promotion";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNum)) {
            $requestParam["page_num"] = TopUtil::convertBasic($this->pageNum);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->promotionId)) {
            $requestParam["promotion_id"] = TopUtil::convertBasic($this->promotionId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

