<?php
namespace Topsdk\Topapi\Ability370\Request;
use Topsdk\Topapi\TopUtil;

class TaobaoTbkDgMaterialOptionalRequest {

    /**
        商品筛选(特定媒体支持)-店铺dsr评分。筛选大于等于当前设置的店铺dsr评分的商品0-50000之间
     **/
    private $startDsr;

    /**
        页大小，默认20，1~100
     **/
    private $pageSize;

    /**
        第几页，默认：１
     **/
    private $pageNo;

    /**
        链接形式：1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
        商品筛选-淘客佣金比率上限。如：1234表示12.34%
     **/
    private $endTkRate;

    /**
        商品筛选-淘客佣金比率下限。如：1234表示12.34%
     **/
    private $startTkRate;

    /**
        商品筛选-折扣价范围上限。单位：元
     **/
    private $endPrice;

    /**
        商品筛选-折扣价范围下限。单位：元
     **/
    private $startPrice;

    /**
        商品筛选-是否海外商品。true表示属于海外商品，false或不设置表示不限
     **/
    private $isOverseas;

    /**
        商品筛选-是否天猫商品。true表示属于天猫商品，false或不设置表示不限
     **/
    private $isTmall;

    /**
        排序_des（降序），排序_asc（升序），销量（total_sales），淘客佣金比率（tk_rate）， 累计推广量（tk_total_sales），总支出佣金（tk_total_commi），价格（price），匹配分（match）
     **/
    private $sort;

    /**
        商品筛选-所在地
     **/
    private $itemloc;

    /**
        商品筛选-后台类目ID。用,分割，最大10个，该ID可以通过taobao.itemcats.get接口获取到
     **/
    private $cat;

    /**
        商品筛选-查询词
     **/
    private $q;

    /**
        不传时默认物料id=2836；如果直接对消费者投放，可使用官方个性化算法优化的搜索物料id=17004
     **/
    private $materialId;

    /**
        优惠券筛选-是否有优惠券。true表示该商品有优惠券，false或不设置表示不限
     **/
    private $hasCoupon;

    /**
        ip参数影响邮费获取，如果不传或者传入不准确，邮费无法精准提供
     **/
    private $ip;

    /**
        mm_xxx_xxx_12345678三段式的最后一段数字
     **/
    private $adzoneId;

    /**
        商品筛选-是否包邮。true表示包邮，false或不设置表示不限
     **/
    private $needFreeShipment;

    /**
        商品筛选-是否加入消费者保障。true表示加入，false或不设置表示不限
     **/
    private $needPrepay;

    /**
        商品筛选(特定媒体支持)-成交转化是否高于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includePayRate30;

    /**
        商品筛选-好评率是否高于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includeGoodRate;

    /**
        商品筛选(特定媒体支持)-退款率是否低于行业均值。True表示大于等于，false或不设置表示不限
     **/
    private $includeRfdRate;

    /**
        商品筛选-牛皮癣程度。取值：1不限，2无，3轻微
     **/
    private $npxLevel;

    /**
        智能匹配-设备号加密类型：MD5
     **/
    private $deviceEncrypt;

    /**
        智能匹配-设备号加密后的值（MD5加密需32位小写）
     **/
    private $deviceValue;

    /**
        智能匹配-设备号类型：IMEI，或者IDFA，或者UTDID（UTDID不支持MD5加密），或者OAID
     **/
    private $deviceType;

    /**
        商品筛选-KA媒体淘客佣金比率上限。如：1234表示12.34%
     **/
    private $endKaTkRate;

    /**
        商品筛选-KA媒体淘客佣金比率下限。如：1234表示12.34%
     **/
    private $startKaTkRate;

    /**
        锁佣结束时间
     **/
    private $lockRateEndTime;

    /**
        锁佣开始时间
     **/
    private $lockRateStartTime;

    /**
        本地化业务入参-LBS信息-经度
     **/
    private $longitude;

    /**
        本地化业务入参-LBS信息-纬度
     **/
    private $latitude;

    /**
        本地化业务入参-LBS信息-国标城市码，仅支持单个请求，请求饿了么卡券物料时，该字段必填。 （详细城市ID见：https://mo.m.taobao.com/page_2020010315120200508）
     **/
    private $cityCode;

    /**
        商家id，仅支持饿了么卡券商家ID，支持批量请求1-100以内，多个商家ID使用英文逗号分隔
     **/
    private $sellerIds;

    /**
        会员运营ID
     **/
    private $specialId;

    /**
        渠道关系ID，仅适用于渠道推广场景
     **/
    private $relationId;

    /**
        本地化业务入参-分页唯一标识，非首页的请求必传，值为上一页返回结果中的page_result_key字段值
     **/
    private $pageResultKey;

    /**
        人群ID，仅适用于物料评估场景material_id=41377
     **/
    private $ucrowdId;

    /**
        物料评估-商品列表
     **/
    private $ucrowdRankItems;

    /**
        是否获取前N件佣金信息	0否，1是，其他值否
     **/
    private $getTopnRate;


    public function getStartDsr() : int{
        return $this->startDsr;
    }

    public function setStartDsr(int $startDsr){
        $this->startDsr = $startDsr;
    }

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

    public function getPlatform() : int{
        return $this->platform;
    }

    public function setPlatform(int $platform){
        $this->platform = $platform;
    }

    public function getEndTkRate() : int{
        return $this->endTkRate;
    }

    public function setEndTkRate(int $endTkRate){
        $this->endTkRate = $endTkRate;
    }

    public function getStartTkRate() : int{
        return $this->startTkRate;
    }

    public function setStartTkRate(int $startTkRate){
        $this->startTkRate = $startTkRate;
    }

    public function getEndPrice() : int{
        return $this->endPrice;
    }

    public function setEndPrice(int $endPrice){
        $this->endPrice = $endPrice;
    }

    public function getStartPrice() : int{
        return $this->startPrice;
    }

    public function setStartPrice(int $startPrice){
        $this->startPrice = $startPrice;
    }

    public function getIsOverseas() : bool{
        return $this->isOverseas;
    }

    public function setIsOverseas(bool $isOverseas){
        $this->isOverseas = $isOverseas;
    }

    public function getIsTmall() : bool{
        return $this->isTmall;
    }

    public function setIsTmall(bool $isTmall){
        $this->isTmall = $isTmall;
    }

    public function getSort() : string{
        return $this->sort;
    }

    public function setSort(string $sort){
        $this->sort = $sort;
    }

    public function getItemloc() : string{
        return $this->itemloc;
    }

    public function setItemloc(string $itemloc){
        $this->itemloc = $itemloc;
    }

    public function getCat() : string{
        return $this->cat;
    }

    public function setCat(string $cat){
        $this->cat = $cat;
    }

    public function getQ() : string{
        return $this->q;
    }

    public function setQ(string $q){
        $this->q = $q;
    }

    public function getMaterialId() : int{
        return $this->materialId;
    }

    public function setMaterialId(int $materialId){
        $this->materialId = $materialId;
    }

    public function getHasCoupon() : bool{
        return $this->hasCoupon;
    }

    public function setHasCoupon(bool $hasCoupon){
        $this->hasCoupon = $hasCoupon;
    }

    public function getIp() : string{
        return $this->ip;
    }

    public function setIp(string $ip){
        $this->ip = $ip;
    }

    public function getAdzoneId() : int{
        return $this->adzoneId;
    }

    public function setAdzoneId(int $adzoneId){
        $this->adzoneId = $adzoneId;
    }

    public function getNeedFreeShipment() : bool{
        return $this->needFreeShipment;
    }

    public function setNeedFreeShipment(bool $needFreeShipment){
        $this->needFreeShipment = $needFreeShipment;
    }

    public function getNeedPrepay() : bool{
        return $this->needPrepay;
    }

    public function setNeedPrepay(bool $needPrepay){
        $this->needPrepay = $needPrepay;
    }

    public function getIncludePayRate30() : bool{
        return $this->includePayRate30;
    }

    public function setIncludePayRate30(bool $includePayRate30){
        $this->includePayRate30 = $includePayRate30;
    }

    public function getIncludeGoodRate() : bool{
        return $this->includeGoodRate;
    }

    public function setIncludeGoodRate(bool $includeGoodRate){
        $this->includeGoodRate = $includeGoodRate;
    }

    public function getIncludeRfdRate() : bool{
        return $this->includeRfdRate;
    }

    public function setIncludeRfdRate(bool $includeRfdRate){
        $this->includeRfdRate = $includeRfdRate;
    }

    public function getNpxLevel() : int{
        return $this->npxLevel;
    }

    public function setNpxLevel(int $npxLevel){
        $this->npxLevel = $npxLevel;
    }

    public function getDeviceEncrypt() : string{
        return $this->deviceEncrypt;
    }

    public function setDeviceEncrypt(string $deviceEncrypt){
        $this->deviceEncrypt = $deviceEncrypt;
    }

    public function getDeviceValue() : string{
        return $this->deviceValue;
    }

    public function setDeviceValue(string $deviceValue){
        $this->deviceValue = $deviceValue;
    }

    public function getDeviceType() : string{
        return $this->deviceType;
    }

    public function setDeviceType(string $deviceType){
        $this->deviceType = $deviceType;
    }

    public function getEndKaTkRate() : int{
        return $this->endKaTkRate;
    }

    public function setEndKaTkRate(int $endKaTkRate){
        $this->endKaTkRate = $endKaTkRate;
    }

    public function getStartKaTkRate() : int{
        return $this->startKaTkRate;
    }

    public function setStartKaTkRate(int $startKaTkRate){
        $this->startKaTkRate = $startKaTkRate;
    }

    public function getLockRateEndTime() : int{
        return $this->lockRateEndTime;
    }

    public function setLockRateEndTime(int $lockRateEndTime){
        $this->lockRateEndTime = $lockRateEndTime;
    }

    public function getLockRateStartTime() : int{
        return $this->lockRateStartTime;
    }

    public function setLockRateStartTime(int $lockRateStartTime){
        $this->lockRateStartTime = $lockRateStartTime;
    }

    public function getLongitude() : string{
        return $this->longitude;
    }

    public function setLongitude(string $longitude){
        $this->longitude = $longitude;
    }

    public function getLatitude() : string{
        return $this->latitude;
    }

    public function setLatitude(string $latitude){
        $this->latitude = $latitude;
    }

    public function getCityCode() : string{
        return $this->cityCode;
    }

    public function setCityCode(string $cityCode){
        $this->cityCode = $cityCode;
    }

    public function getSellerIds() : string{
        return $this->sellerIds;
    }

    public function setSellerIds(string $sellerIds){
        $this->sellerIds = $sellerIds;
    }

    public function getSpecialId() : string{
        return $this->specialId;
    }

    public function setSpecialId(string $specialId){
        $this->specialId = $specialId;
    }

    public function getRelationId() : string{
        return $this->relationId;
    }

    public function setRelationId(string $relationId){
        $this->relationId = $relationId;
    }

    public function getPageResultKey() : string{
        return $this->pageResultKey;
    }

    public function setPageResultKey(string $pageResultKey){
        $this->pageResultKey = $pageResultKey;
    }

    public function getUcrowdId() : int{
        return $this->ucrowdId;
    }

    public function setUcrowdId(int $ucrowdId){
        $this->ucrowdId = $ucrowdId;
    }

    public function getUcrowdRankItems() : array{
        return $this->ucrowdRankItems;
    }

    public function setUcrowdRankItems(array $ucrowdRankItems){
        $this->ucrowdRankItems = $ucrowdRankItems;
    }

    public function getGetTopnRate() : int{
        return $this->getTopnRate;
    }

    public function setGetTopnRate(int $getTopnRate){
        $this->getTopnRate = $getTopnRate;
    }


    public function getApiName() : string {
        return "taobao.tbk.dg.material.optional";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->startDsr)) {
            $requestParam["start_dsr"] = TopUtil::convertBasic($this->startDsr);
        }

        if (!TopUtil::checkEmpty($this->pageSize)) {
            $requestParam["page_size"] = TopUtil::convertBasic($this->pageSize);
        }

        if (!TopUtil::checkEmpty($this->pageNo)) {
            $requestParam["page_no"] = TopUtil::convertBasic($this->pageNo);
        }

        if (!TopUtil::checkEmpty($this->platform)) {
            $requestParam["platform"] = TopUtil::convertBasic($this->platform);
        }

        if (!TopUtil::checkEmpty($this->endTkRate)) {
            $requestParam["end_tk_rate"] = TopUtil::convertBasic($this->endTkRate);
        }

        if (!TopUtil::checkEmpty($this->startTkRate)) {
            $requestParam["start_tk_rate"] = TopUtil::convertBasic($this->startTkRate);
        }

        if (!TopUtil::checkEmpty($this->endPrice)) {
            $requestParam["end_price"] = TopUtil::convertBasic($this->endPrice);
        }

        if (!TopUtil::checkEmpty($this->startPrice)) {
            $requestParam["start_price"] = TopUtil::convertBasic($this->startPrice);
        }

        if (!TopUtil::checkEmpty($this->isOverseas)) {
            $requestParam["is_overseas"] = TopUtil::convertBasic($this->isOverseas);
        }

        if (!TopUtil::checkEmpty($this->isTmall)) {
            $requestParam["is_tmall"] = TopUtil::convertBasic($this->isTmall);
        }

        if (!TopUtil::checkEmpty($this->sort)) {
            $requestParam["sort"] = TopUtil::convertBasic($this->sort);
        }

        if (!TopUtil::checkEmpty($this->itemloc)) {
            $requestParam["itemloc"] = TopUtil::convertBasic($this->itemloc);
        }

        if (!TopUtil::checkEmpty($this->cat)) {
            $requestParam["cat"] = TopUtil::convertBasic($this->cat);
        }

        if (!TopUtil::checkEmpty($this->q)) {
            $requestParam["q"] = TopUtil::convertBasic($this->q);
        }

        if (!TopUtil::checkEmpty($this->materialId)) {
            $requestParam["material_id"] = TopUtil::convertBasic($this->materialId);
        }

        if (!TopUtil::checkEmpty($this->hasCoupon)) {
            $requestParam["has_coupon"] = TopUtil::convertBasic($this->hasCoupon);
        }

        if (!TopUtil::checkEmpty($this->ip)) {
            $requestParam["ip"] = TopUtil::convertBasic($this->ip);
        }

        if (!TopUtil::checkEmpty($this->adzoneId)) {
            $requestParam["adzone_id"] = TopUtil::convertBasic($this->adzoneId);
        }

        if (!TopUtil::checkEmpty($this->needFreeShipment)) {
            $requestParam["need_free_shipment"] = TopUtil::convertBasic($this->needFreeShipment);
        }

        if (!TopUtil::checkEmpty($this->needPrepay)) {
            $requestParam["need_prepay"] = TopUtil::convertBasic($this->needPrepay);
        }

        if (!TopUtil::checkEmpty($this->includePayRate30)) {
            $requestParam["include_pay_rate_30"] = TopUtil::convertBasic($this->includePayRate30);
        }

        if (!TopUtil::checkEmpty($this->includeGoodRate)) {
            $requestParam["include_good_rate"] = TopUtil::convertBasic($this->includeGoodRate);
        }

        if (!TopUtil::checkEmpty($this->includeRfdRate)) {
            $requestParam["include_rfd_rate"] = TopUtil::convertBasic($this->includeRfdRate);
        }

        if (!TopUtil::checkEmpty($this->npxLevel)) {
            $requestParam["npx_level"] = TopUtil::convertBasic($this->npxLevel);
        }

        if (!TopUtil::checkEmpty($this->deviceEncrypt)) {
            $requestParam["device_encrypt"] = TopUtil::convertBasic($this->deviceEncrypt);
        }

        if (!TopUtil::checkEmpty($this->deviceValue)) {
            $requestParam["device_value"] = TopUtil::convertBasic($this->deviceValue);
        }

        if (!TopUtil::checkEmpty($this->deviceType)) {
            $requestParam["device_type"] = TopUtil::convertBasic($this->deviceType);
        }

        if (!TopUtil::checkEmpty($this->endKaTkRate)) {
            $requestParam["end_ka_tk_rate"] = TopUtil::convertBasic($this->endKaTkRate);
        }

        if (!TopUtil::checkEmpty($this->startKaTkRate)) {
            $requestParam["start_ka_tk_rate"] = TopUtil::convertBasic($this->startKaTkRate);
        }

        if (!TopUtil::checkEmpty($this->lockRateEndTime)) {
            $requestParam["lock_rate_end_time"] = TopUtil::convertBasic($this->lockRateEndTime);
        }

        if (!TopUtil::checkEmpty($this->lockRateStartTime)) {
            $requestParam["lock_rate_start_time"] = TopUtil::convertBasic($this->lockRateStartTime);
        }

        if (!TopUtil::checkEmpty($this->longitude)) {
            $requestParam["longitude"] = TopUtil::convertBasic($this->longitude);
        }

        if (!TopUtil::checkEmpty($this->latitude)) {
            $requestParam["latitude"] = TopUtil::convertBasic($this->latitude);
        }

        if (!TopUtil::checkEmpty($this->cityCode)) {
            $requestParam["city_code"] = TopUtil::convertBasic($this->cityCode);
        }

        if (!TopUtil::checkEmpty($this->sellerIds)) {
            $requestParam["seller_ids"] = TopUtil::convertBasic($this->sellerIds);
        }

        if (!TopUtil::checkEmpty($this->specialId)) {
            $requestParam["special_id"] = TopUtil::convertBasic($this->specialId);
        }

        if (!TopUtil::checkEmpty($this->relationId)) {
            $requestParam["relation_id"] = TopUtil::convertBasic($this->relationId);
        }

        if (!TopUtil::checkEmpty($this->pageResultKey)) {
            $requestParam["page_result_key"] = TopUtil::convertBasic($this->pageResultKey);
        }

        if (!TopUtil::checkEmpty($this->ucrowdId)) {
            $requestParam["ucrowd_id"] = TopUtil::convertBasic($this->ucrowdId);
        }

        if (!TopUtil::checkEmpty($this->ucrowdRankItems)) {
            $requestParam["ucrowd_rank_items"] = TopUtil::convertStructList($this->ucrowdRankItems);
        }

        if (!TopUtil::checkEmpty($this->getTopnRate)) {
            $requestParam["get_topn_rate"] = TopUtil::convertBasic($this->getTopnRate);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}

