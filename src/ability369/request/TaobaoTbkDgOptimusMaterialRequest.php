<?php
namespace Topsdk\Topapi\Ability369\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgOptimusMaterialRequest {

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        第几页，默认：1
     **/
    private $pageNo;

    /**
        mm_xxx_xxx_xxx的第三位
     **/
    private $adzoneId;

    /**
        官方的物料Id(详细物料id见：https://market.m.taobao.com/app/qn/toutiao-new/index-pc.html#/detail/10628875?_k=gpov9a)
     **/
    private $materialId;

    /**
        智能匹配-设备号加密后的值（MD5加密需32位小写），类型为OAID时传原始OAID值
     **/
    private $deviceValue;

    /**
        智能匹配-设备号加密类型：MD5，类型为OAID时不传
     **/
    private $deviceEncrypt;

    /**
        智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID
     **/
    private $deviceType;

    /**
        内容专用-内容详情ID
     **/
    private $contentId;

    /**
        内容专用-内容渠道信息
     **/
    private $contentSource;

    /**
        商品ID，用于相似商品推荐
     **/
    private $itemId;

    /**
        选品库投放id
     **/
    private $favoritesId;


    public function getPageSize() : int{
        return $this->pageSize;
    }

    public function setPageSize(int $pageSize){
        $this->pageSize = $pageSize;
    }

    public function getPageNo() : int{
        return $this->pageNo;
    }

    public function setPageNo(int $pageNo){
        $this->pageNo = $pageNo;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getMaterialId() : int{
        return $this->materialId;
    }

    public function setMaterialId(int $materialId){
        $this->materialId = $materialId;
    }

    public function getDeviceValue() : string{
        return $this->deviceValue;
    }

    public function setDeviceValue(string $deviceValue){
        $this->deviceValue = $deviceValue;
    }

    public function getDeviceEncrypt() : string{
        return $this->deviceEncrypt;
    }

    public function setDeviceEncrypt(string $deviceEncrypt){
        $this->deviceEncrypt = $deviceEncrypt;
    }

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getContentId() : int{
        return $this->contentId;
    }

    public function setContentId(int $contentId){
        $this->contentId = $contentId;
    }

    public function getContentSource() : string{
        return $this->contentSource;
    }

    public function setContentSource(string $contentSource){
        $this->contentSource = $contentSource;
    }

    public function getItemId() : int{
        return $this->itemId;
    }

    public function setItemId(int $itemId){
        $this->itemId = $itemId;
    }

    public function getFavoritesId() : string{
        return $this->favoritesId;
    }

    public function setFavoritesId(string $favoritesId){
        $this->favoritesId = $favoritesId;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.optimus.material";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->materialId)) {
            $requestParam["material_id"] = TopUtil::convertBasic($this->materialId);
        }

        if (!TopUtil::checkEmpty($this->deviceValue)) {
            $requestParam["device_value"] = TopUtil::convertBasic($this->deviceValue);
        }

        if (!TopUtil::checkEmpty($this->deviceEncrypt)) {
            $requestParam["device_encrypt"] = TopUtil::convertBasic($this->deviceEncrypt);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->contentId)) {
            $requestParam["content_id"] = TopUtil::convertBasic($this->contentId);
        }

        if (!TopUtil::checkEmpty($this->contentSource)) {
            $requestParam["content_source"] = TopUtil::convertBasic($this->contentSource);
        }

        if (!TopUtil::checkEmpty($this->itemId)) {
            $requestParam["item_id"] = TopUtil::convertBasic($this->itemId);
        }

        if (!TopUtil::checkEmpty($this->favoritesId)) {
            $requestParam["favorites_id"] = TopUtil::convertBasic($this->favoritesId);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

