<?php
namespace Topsdk\Topapi\Ability370\Domain;

class TaobaoTbkDgMaterialOptionalMapData {

    /**
        优惠券信息-优惠券开始时间
     **/
    private $coupon_start_time;

    /**
        优惠券信息-优惠券结束时间
     **/
    private $coupon_end_time;

    /**
        商品信息-定向计划信息
     **/
    private $info_dxjh;

    /**
        商品信息-淘客30天推广量
     **/
    private $tk_total_sales;

    /**
        商品信息-月支出佣金(该字段废弃，请勿再用)
     **/
    private $tk_total_commi;

    /**
        优惠券信息-优惠券id
     **/
    private $coupon_id;

    /**
        商品信息-宝贝id(该字段废弃，请勿再用)
     **/
    private $num_iid;

    /**
        商品信息-商品标题
     **/
    private $title;

    /**
        商品信息-商品主图
     **/
    private $pict_url;

    /**
        商品信息-商品小图列表
     **/
    private $small_images;

    /**
        商品信息-商品一口价格
     **/
    private $reserve_price;

    /**
        折扣价（元） 若属于预售商品，付定金时间内，折扣价=预售价
     **/
    private $zk_final_price;

    /**
        店铺信息-卖家类型。0表示集市，1表示天猫
     **/
    private $user_type;

    /**
        商品信息-宝贝所在地
     **/
    private $provcity;

    /**
        链接-宝贝地址
     **/
    private $item_url;

    /**
        商品信息-是否包含营销计划
     **/
    private $include_mkt;

    /**
        商品信息-是否包含定向计划
     **/
    private $include_dxjh;

    /**
        商品信息-佣金比率。1550表示15.5%
     **/
    private $commission_rate;

    /**
        商品信息-30天销量（饿了么卡券信息-总销量）
     **/
    private $volume;

    /**
        店铺信息-卖家id
     **/
    private $seller_id;

    /**
        店铺信息-店铺名称
     **/
    private $shop_title;

    /**
        优惠券信息-优惠券总量
     **/
    private $coupon_total_count;

    /**
        优惠券信息-优惠券剩余量
     **/
    private $coupon_remain_count;

    /**
        优惠券信息-优惠券满减信息
     **/
    private $coupon_info;

    /**
        商品信息-佣金类型。MKT表示营销计划，SP表示定向计划，COMMON表示通用计划
     **/
    private $commission_type;

    /**
        店铺信息-店铺dsr评分
     **/
    private $shop_dsr;

    /**
        链接-宝贝+券二合一页面链接
     **/
    private $coupon_share_url;

    /**
        链接-宝贝推广链接
     **/
    private $url;

    /**
        商品信息-一级类目名称
     **/
    private $level_one_category_name;

    /**
        商品信息-一级类目ID
     **/
    private $level_one_category_id;

    /**
        商品信息-叶子类目名称
     **/
    private $category_name;

    /**
        商品信息-叶子类目id
     **/
    private $category_id;

    /**
        商品信息-商品短标题
     **/
    private $short_title;

    /**
        商品信息-商品白底图
     **/
    private $white_image;

    /**
        拼团专用-拼团结束时间
     **/
    private $oetime;

    /**
        拼团专用-拼团开始时间
     **/
    private $ostime;

    /**
        拼团专用-拼团几人团
     **/
    private $jdd_num;

    /**
        拼团专用-拼团拼成价，单位元
     **/
    private $jdd_price;

    /**
        预售专用-预售数量
     **/
    private $uv_sum_pre_sale;

    /**
        链接-物料块id(测试中请勿使用)
     **/
    private $x_id;

    /**
        优惠券信息-优惠券起用门槛，满X元可用。如：满299元减20元
     **/
    private $coupon_start_fee;

    /**
        优惠券（元） 若属于预售商品，该优惠券付尾款可用，付定金不可用
     **/
    private $coupon_amount;

    /**
        商品信息-宝贝描述(推荐理由)
     **/
    private $item_description;

    /**
        店铺信息-卖家昵称
     **/
    private $nick;

    /**
        拼团专用-拼团一人价（原价)，单位元
     **/
    private $orig_price;

    /**
        拼团专用-拼团库存数量
     **/
    private $total_stock;

    /**
        拼团专用-拼团已售数量
     **/
    private $sell_num;

    /**
        拼团专用-拼团剩余库存
     **/
    private $stock;

    /**
        营销-天猫营销玩法
     **/
    private $tmall_play_activity_info;

    /**
        商品信息-宝贝id
     **/
    private $item_id;

    /**
        商品邮费
     **/
    private $real_post_fee;

    /**
        锁住的佣金率
     **/
    private $lock_rate;

    /**
        锁佣结束时间
     **/
    private $lock_rate_end_time;

    /**
        锁佣开始时间
     **/
    private $lock_rate_start_time;

    /**
        预售商品-优惠
     **/
    private $presale_discount_fee_text;

    /**
        预售商品-付尾款结束时间（毫秒）
     **/
    private $presale_tail_end_time;

    /**
        预售商品-付尾款开始时间（毫秒）
     **/
    private $presale_tail_start_time;

    /**
        预售商品-付定金结束时间（毫秒）
     **/
    private $presale_end_time;

    /**
        预售商品-付定金开始时间（毫秒）
     **/
    private $presale_start_time;

    /**
        预售商品-定金（元）
     **/
    private $presale_deposit;

    /**
        预售有礼-淘礼金发放时间
     **/
    private $ysyl_tlj_send_time;

    /**
        预售有礼-佣金比例（ 预售有礼活动享受的推广佣金比例，注：推广该活动有特殊分成规则，请详见：https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=9334376 ）
     **/
    private $ysyl_commission_rate;

    /**
        预售有礼-预估淘礼金（元）
     **/
    private $ysyl_tlj_face;

    /**
        预售有礼-推广链接
     **/
    private $ysyl_click_url;

    /**
        预售有礼-淘礼金使用结束时间
     **/
    private $ysyl_tlj_use_end_time;

    /**
        预售有礼-淘礼金使用开始时间
     **/
    private $ysyl_tlj_use_start_time;

    /**
        本地化-销售开始时间
     **/
    private $sale_begin_time;

    /**
        本地化-销售结束时间
     **/
    private $sale_end_time;

    /**
        本地化-到门店距离（米）
     **/
    private $distance;

    /**
        本地化-可用店铺id
     **/
    private $usable_shop_id;

    /**
        本地化-可用店铺名称
     **/
    private $usable_shop_name;

    /**
        活动价
     **/
    private $sale_price;

    /**
        跨店满减信息
     **/
    private $kuadian_promotion_info;

    /**
        是否品牌精选，0不是，1是
     **/
    private $superior_brand;

    /**
        比价场景专用，当系统检测到入参消费者ID购买当前商品会获得《天天开彩蛋》玩法的彩蛋时，该字段显示1，否则为0
     **/
    private $reward_info;

    /**
        是否品牌快抢，0不是，1是
     **/
    private $is_brand_flash_sale;

    /**
        本地化-扩展信息
     **/
    private $localization_extend;

    /**
        物料评估-匹配分
     **/
    private $match_score;

    /**
        物料评估-收益分
     **/
    private $commi_score;

    /**
        是否是热门商品，0不是，1是
     **/
    private $hot_flag;

    /**
        前N件佣金信息-前N件佣金生效或预热时透出以下字段
     **/
    private $topn_info;

    /**
        百亿补贴信息
     **/
    private $bybt_info;

    /**
        商品入驻淘特后产生的所有销量量级，不特指某段具体时间
     **/
    private $tt_sold_count;

    /**
        猫超买返卡信息
     **/
    private $maifan_promotion;

    /**
        额外奖励活动类型，如果一个商品有多个奖励类型，返回结果使用空格分割，0=单单奖励(已失效)，1=超级单单奖励(已失效)，2=年货节单单奖励
     **/
    private $cpa_reward_type;

    /**
        额外奖励活动金额，活动奖励金额的类型与cpa_reward_type字段对应，如果一个商品有多个奖励类型，返回结果使用空格分割
     **/
    private $cpa_reward_amount;

    /**
        合作伙伴单单补ID，用作“年货节超级单单补”活动合作伙伴奖励统计依据
     **/
    private $activity_id;


    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

    public function getCouponEndTime() : string{
        return $this->coupon_end_time;
    }

    public function setCouponEndTime(string $couponEndTime){
        $this->coupon_end_time = $couponEndTime;
    }

    public function getInfoDxjh() : array{
        return $this->info_dxjh;
    }

    public function setInfoDxjh(array $infoDxjh){
        $this->info_dxjh = $infoDxjh;
    }

    public function getTkTotalSales() : string{
        return $this->tk_total_sales;
    }

    public function setTkTotalSales(string $tkTotalSales){
        $this->tk_total_sales = $tkTotalSales;
    }

    public function getTkTotalCommi() : string{
        return $this->tk_total_commi;
    }

    public function setTkTotalCommi(string $tkTotalCommi){
        $this->tk_total_commi = $tkTotalCommi;
    }

    public function getCouponId() : string{
        return $this->coupon_id;
    }

    public function setCouponId(string $couponId){
        $this->coupon_id = $couponId;
    }

    public function getNumIid() : int{
        return $this->num_iid;
    }

    public function setNumIid(int $numIid){
        $this->num_iid = $numIid;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }

    public function getSmallImages() : array{
        return $this->small_images;
    }

    public function setSmallImages(array $smallImages){
        $this->small_images = $smallImages;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getZkFinalPrice() : string{
        return $this->zk_final_price;
    }

    public function setZkFinalPrice(string $zkFinalPrice){
        $this->zk_final_price = $zkFinalPrice;
    }

    public function getUserType() : int{
        return $this->user_type;
    }

    public function setUserType(int $userType){
        $this->user_type = $userType;
    }

    public function getProvcity() : string{
        return $this->provcity;
    }

    public function setProvcity(string $provcity){
        $this->provcity = $provcity;
    }

    public function getItemUrl() : string{
        return $this->item_url;
    }

    public function setItemUrl(string $itemUrl){
        $this->item_url = $itemUrl;
    }

    public function getIncludeMkt() : string{
        return $this->include_mkt;
    }

    public function setIncludeMkt(string $includeMkt){
        $this->include_mkt = $includeMkt;
    }

    public function getIncludeDxjh() : string{
        return $this->include_dxjh;
    }

    public function setIncludeDxjh(string $includeDxjh){
        $this->include_dxjh = $includeDxjh;
    }

    public function getCommissionRate() : string{
        return $this->commission_rate;
    }

    public function setCommissionRate(string $commissionRate){
        $this->commission_rate = $commissionRate;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getCouponTotalCount() : int{
        return $this->coupon_total_count;
    }

    public function setCouponTotalCount(int $couponTotalCount){
        $this->coupon_total_count = $couponTotalCount;
    }

    public function getCouponRemainCount() : int{
        return $this->coupon_remain_count;
    }

    public function setCouponRemainCount(int $couponRemainCount){
        $this->coupon_remain_count = $couponRemainCount;
    }

    public function getCouponInfo() : string{
        return $this->coupon_info;
    }

    public function setCouponInfo(string $couponInfo){
        $this->coupon_info = $couponInfo;
    }

    public function getCommissionType() : string{
        return $this->commission_type;
    }

    public function setCommissionType(string $commissionType){
        $this->commission_type = $commissionType;
    }

    public function getShopDsr() : int{
        return $this->shop_dsr;
    }

    public function setShopDsr(int $shopDsr){
        $this->shop_dsr = $shopDsr;
    }

    public function getCouponShareUrl() : string{
        return $this->coupon_share_url;
    }

    public function setCouponShareUrl(string $couponShareUrl){
        $this->coupon_share_url = $couponShareUrl;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getLevelOneCategoryName() : string{
        return $this->level_one_category_name;
    }

    public function setLevelOneCategoryName(string $levelOneCategoryName){
        $this->level_one_category_name = $levelOneCategoryName;
    }

    public function getLevelOneCategoryId() : int{
        return $this->level_one_category_id;
    }

    public function setLevelOneCategoryId(int $levelOneCategoryId){
        $this->level_one_category_id = $levelOneCategoryId;
    }

    public function getCategoryName() : string{
        return $this->category_name;
    }

    public function setCategoryName(string $categoryName){
        $this->category_name = $categoryName;
    }

    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getShortTitle() : string{
        return $this->short_title;
    }

    public function setShortTitle(string $shortTitle){
        $this->short_title = $shortTitle;
    }

    public function getWhiteImage() : string{
        return $this->white_image;
    }

    public function setWhiteImage(string $whiteImage){
        $this->white_image = $whiteImage;
    }

    public function getOetime() : string{
        return $this->oetime;
    }

    public function setOetime(string $oetime){
        $this->oetime = $oetime;
    }

    public function getOstime() : string{
        return $this->ostime;
    }

    public function setOstime(string $ostime){
        $this->ostime = $ostime;
    }

    public function getJddNum() : int{
        return $this->jdd_num;
    }

    public function setJddNum(int $jddNum){
        $this->jdd_num = $jddNum;
    }

    public function getJddPrice() : string{
        return $this->jdd_price;
    }

    public function setJddPrice(string $jddPrice){
        $this->jdd_price = $jddPrice;
    }

    public function getUvSumPreSale() : int{
        return $this->uv_sum_pre_sale;
    }

    public function setUvSumPreSale(int $uvSumPreSale){
        $this->uv_sum_pre_sale = $uvSumPreSale;
    }

    public function getXId() : string{
        return $this->x_id;
    }

    public function setXId(string $xId){
        $this->x_id = $xId;
    }

    public function getCouponStartFee() : string{
        return $this->coupon_start_fee;
    }

    public function setCouponStartFee(string $couponStartFee){
        $this->coupon_start_fee = $couponStartFee;
    }

    public function getCouponAmount() : string{
        return $this->coupon_amount;
    }

    public function setCouponAmount(string $couponAmount){
        $this->coupon_amount = $couponAmount;
    }

    public function getItemDescription() : string{
        return $this->item_description;
    }

    public function setItemDescription(string $itemDescription){
        $this->item_description = $itemDescription;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getOrigPrice() : string{
        return $this->orig_price;
    }

    public function setOrigPrice(string $origPrice){
        $this->orig_price = $origPrice;
    }

    public function getTotalStock() : int{
        return $this->total_stock;
    }

    public function setTotalStock(int $totalStock){
        $this->total_stock = $totalStock;
    }

    public function getSellNum() : int{
        return $this->sell_num;
    }

    public function setSellNum(int $sellNum){
        $this->sell_num = $sellNum;
    }

    public function getStock() : int{
        return $this->stock;
    }

    public function setStock(int $stock){
        $this->stock = $stock;
    }

    public function getTmallPlayActivityInfo() : string{
        return $this->tmall_play_activity_info;
    }

    public function setTmallPlayActivityInfo(string $tmallPlayActivityInfo){
        $this->tmall_play_activity_info = $tmallPlayActivityInfo;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getRealPostFee() : string{
        return $this->real_post_fee;
    }

    public function setRealPostFee(string $realPostFee){
        $this->real_post_fee = $realPostFee;
    }

    public function getLockRate() : string{
        return $this->lock_rate;
    }

    public function setLockRate(string $lockRate){
        $this->lock_rate = $lockRate;
    }

    public function getLockRateEndTime() : int{
        return $this->lock_rate_end_time;
    }

    public function setLockRateEndTime(int $lockRateEndTime){
        $this->lock_rate_end_time = $lockRateEndTime;
    }

    public function getLockRateStartTime() : int{
        return $this->lock_rate_start_time;
    }

    public function setLockRateStartTime(int $lockRateStartTime){
        $this->lock_rate_start_time = $lockRateStartTime;
    }

    public function getPresaleDiscountFeeText() : string{
        return $this->presale_discount_fee_text;
    }

    public function setPresaleDiscountFeeText(string $presaleDiscountFeeText){
        $this->presale_discount_fee_text = $presaleDiscountFeeText;
    }

    public function getPresaleTailEndTime() : int{
        return $this->presale_tail_end_time;
    }

    public function setPresaleTailEndTime(int $presaleTailEndTime){
        $this->presale_tail_end_time = $presaleTailEndTime;
    }

    public function getPresaleTailStartTime() : int{
        return $this->presale_tail_start_time;
    }

    public function setPresaleTailStartTime(int $presaleTailStartTime){
        $this->presale_tail_start_time = $presaleTailStartTime;
    }

    public function getPresaleEndTime() : int{
        return $this->presale_end_time;
    }

    public function setPresaleEndTime(int $presaleEndTime){
        $this->presale_end_time = $presaleEndTime;
    }

    public function getPresaleStartTime() : int{
        return $this->presale_start_time;
    }

    public function setPresaleStartTime(int $presaleStartTime){
        $this->presale_start_time = $presaleStartTime;
    }

    public function getPresaleDeposit() : string{
        return $this->presale_deposit;
    }

    public function setPresaleDeposit(string $presaleDeposit){
        $this->presale_deposit = $presaleDeposit;
    }

    public function getYsylTljSendTime() : string{
        return $this->ysyl_tlj_send_time;
    }

    public function setYsylTljSendTime(string $ysylTljSendTime){
        $this->ysyl_tlj_send_time = $ysylTljSendTime;
    }

    public function getYsylCommissionRate() : string{
        return $this->ysyl_commission_rate;
    }

    public function setYsylCommissionRate(string $ysylCommissionRate){
        $this->ysyl_commission_rate = $ysylCommissionRate;
    }

    public function getYsylTljFace() : string{
        return $this->ysyl_tlj_face;
    }

    public function setYsylTljFace(string $ysylTljFace){
        $this->ysyl_tlj_face = $ysylTljFace;
    }

    public function getYsylClickUrl() : string{
        return $this->ysyl_click_url;
    }

    public function setYsylClickUrl(string $ysylClickUrl){
        $this->ysyl_click_url = $ysylClickUrl;
    }

    public function getYsylTljUseEndTime() : string{
        return $this->ysyl_tlj_use_end_time;
    }

    public function setYsylTljUseEndTime(string $ysylTljUseEndTime){
        $this->ysyl_tlj_use_end_time = $ysylTljUseEndTime;
    }

    public function getYsylTljUseStartTime() : string{
        return $this->ysyl_tlj_use_start_time;
    }

    public function setYsylTljUseStartTime(string $ysylTljUseStartTime){
        $this->ysyl_tlj_use_start_time = $ysylTljUseStartTime;
    }

    public function getSaleBeginTime() : string{
        return $this->sale_begin_time;
    }

    public function setSaleBeginTime(string $saleBeginTime){
        $this->sale_begin_time = $saleBeginTime;
    }

    public function getSaleEndTime() : string{
        return $this->sale_end_time;
    }

    public function setSaleEndTime(string $saleEndTime){
        $this->sale_end_time = $saleEndTime;
    }

    public function getDistance() : string{
        return $this->distance;
    }

    public function setDistance(string $distance){
        $this->distance = $distance;
    }

    public function getUsableShopId() : string{
        return $this->usable_shop_id;
    }

    public function setUsableShopId(string $usableShopId){
        $this->usable_shop_id = $usableShopId;
    }

    public function getUsableShopName() : string{
        return $this->usable_shop_name;
    }

    public function setUsableShopName(string $usableShopName){
        $this->usable_shop_name = $usableShopName;
    }

    public function getSalePrice() : string{
        return $this->sale_price;
    }

    public function setSalePrice(string $salePrice){
        $this->sale_price = $salePrice;
    }

    public function getKuadianPromotionInfo() : string{
        return $this->kuadian_promotion_info;
    }

    public function setKuadianPromotionInfo(string $kuadianPromotionInfo){
        $this->kuadian_promotion_info = $kuadianPromotionInfo;
    }

    public function getSuperiorBrand() : string{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(string $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }

    public function getRewardInfo() : int{
        return $this->reward_info;
    }

    public function setRewardInfo(int $rewardInfo){
        $this->reward_info = $rewardInfo;
    }

    public function getIsBrandFlashSale() : string{
        return $this->is_brand_flash_sale;
    }

    public function setIsBrandFlashSale(string $isBrandFlashSale){
        $this->is_brand_flash_sale = $isBrandFlashSale;
    }

    public function getLocalizationExtend() : TaobaoTbkDgMaterialOptionalLocalizationMapData{
        return $this->localization_extend;
    }

    public function setLocalizationExtend(TaobaoTbkDgMaterialOptionalLocalizationMapData $localizationExtend){
        $this->localization_extend = $localizationExtend;
    }

    public function getMatchScore() : string{
        return $this->match_score;
    }

    public function setMatchScore(string $matchScore){
        $this->match_score = $matchScore;
    }

    public function getCommiScore() : string{
        return $this->commi_score;
    }

    public function setCommiScore(string $commiScore){
        $this->commi_score = $commiScore;
    }

    public function getHotFlag() : string{
        return $this->hot_flag;
    }

    public function setHotFlag(string $hotFlag){
        $this->hot_flag = $hotFlag;
    }

    public function getTopnInfo() : TaobaoTbkDgMaterialOptionalTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkDgMaterialOptionalTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getBybtInfo() : TaobaoTbkDgMaterialOptionalBybtInfoDTO{
        return $this->bybt_info;
    }

    public function setBybtInfo(TaobaoTbkDgMaterialOptionalBybtInfoDTO $bybtInfo){
        $this->bybt_info = $bybtInfo;
    }

    public function getTtSoldCount() : string{
        return $this->tt_sold_count;
    }

    public function setTtSoldCount(string $ttSoldCount){
        $this->tt_sold_count = $ttSoldCount;
    }

    public function getMaifanPromotion() : TaobaoTbkDgMaterialOptionalMaifanPromotionDTO{
        return $this->maifan_promotion;
    }

    public function setMaifanPromotion(TaobaoTbkDgMaterialOptionalMaifanPromotionDTO $maifanPromotion){
        $this->maifan_promotion = $maifanPromotion;
    }

    public function getCpaRewardType() : string{
        return $this->cpa_reward_type;
    }

    public function setCpaRewardType(string $cpaRewardType){
        $this->cpa_reward_type = $cpaRewardType;
    }

    public function getCpaRewardAmount() : string{
        return $this->cpa_reward_amount;
    }

    public function setCpaRewardAmount(string $cpaRewardAmount){
        $this->cpa_reward_amount = $cpaRewardAmount;
    }

    public function getActivityId() : string{
        return $this->activity_id;
    }

    public function setActivityId(string $activityId){
        $this->activity_id = $activityId;
    }


}

