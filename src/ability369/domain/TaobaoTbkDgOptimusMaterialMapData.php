<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusMaterialMapData {

    /**
        优惠券（元） 若属于预售商品，该优惠券付尾款可用，付定金不可用
     **/
    private $coupon_amount;

    /**
        商品信息-商品小图列表
     **/
    private $small_images;

    /**
        店铺信息-店铺名称
     **/
    private $shop_title;

    /**
        商品信息-叶子类目id
     **/
    private $category_id;

    /**
        优惠券信息-优惠券起用门槛，满X元可用。如：满299元减20元
     **/
    private $coupon_start_fee;

    /**
        商品信息-宝贝id
     **/
    private $item_id;

    /**
        优惠券信息-优惠券总量
     **/
    private $coupon_total_count;

    /**
        店铺信息-卖家类型，0表示淘宝，1表示天猫，3表示特价版
     **/
    private $user_type;

    /**
        折扣价（元） 若属于预售商品，付定金时间内，折扣价=预售价
     **/
    private $zk_final_price;

    /**
        优惠券信息-优惠券剩余量
     **/
    private $coupon_remain_count;

    /**
        商品信息-佣金比率(%)
     **/
    private $commission_rate;

    /**
        优惠券信息-优惠券开始时间
     **/
    private $coupon_start_time;

    /**
        商品信息-商品标题
     **/
    private $title;

    /**
        商品信息-宝贝描述（推荐理由,不一定有）
     **/
    private $item_description;

    /**
        店铺信息-卖家id
     **/
    private $seller_id;

    /**
        商品信息-30天销量
     **/
    private $volume;

    /**
        优惠券信息-优惠券结束时间
     **/
    private $coupon_end_time;

    /**
        链接-宝贝+券二合一页面链接(该字段废弃，请勿再用)
     **/
    private $coupon_click_url;

    /**
        商品信息-商品主图
     **/
    private $pict_url;

    /**
        链接-宝贝推广链接
     **/
    private $click_url;

    /**
        拼团专用-拼团剩余库存
     **/
    private $stock;

    /**
        拼团专用-拼团已售数量
     **/
    private $sell_num;

    /**
        拼团专用-拼团库存数量
     **/
    private $total_stock;

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
        拼团专用-拼团一人价（原价)，单位元
     **/
    private $orig_price;

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
        商品信息-商品白底图
     **/
    private $white_image;

    /**
        商品信息-商品短标题
     **/
    private $short_title;

    /**
        商品信息-商品关联词
     **/
    private $word_list;

    /**
        营销-天猫营销玩法
     **/
    private $tmall_play_activity_info;

    /**
        商品信息-预售数量
     **/
    private $uv_sum_pre_sale;

    /**
        物料块id(测试中请勿使用)
     **/
    private $x_id;

    /**
        商品信息-新人价
     **/
    private $new_user_price;

    /**
        优惠券信息-优惠券满减信息
     **/
    private $coupon_info;

    /**
        链接-宝贝+券二合一页面链接
     **/
    private $coupon_share_url;

    /**
        店铺信息-卖家昵称
     **/
    private $nick;

    /**
        商品信息-一口价
     **/
    private $reserve_price;

    /**
        聚划算信息-聚淘结束时间
     **/
    private $ju_online_end_time;

    /**
        聚划算信息-聚淘开始时间
     **/
    private $ju_online_start_time;

    /**
        猫超玩法信息-活动结束时间，精确到毫秒
     **/
    private $maochao_play_end_time;

    /**
        猫超玩法信息-活动开始时间，精确到毫秒
     **/
    private $maochao_play_start_time;

    /**
        猫超玩法信息-折扣条件，价格百分数存储，件数按数量存储。可以有多个折扣条件，与折扣字段对应，','分割
     **/
    private $maochao_play_conditions;

    /**
        猫超玩法信息-折扣，折扣按照百分数存储，其余按照单位分存储。可以有多个折扣，','分割
     **/
    private $maochao_play_discounts;

    /**
        猫超玩法信息-玩法类型，2:折扣(满n件折扣),5:减钱(满n元减m元)
     **/
    private $maochao_play_discount_type;

    /**
        猫超玩法信息-当前是否包邮，1:是，0:否
     **/
    private $maochao_play_free_post_fee;

    /**
        多件券优惠比例
     **/
    private $multi_coupon_zk_rate;

    /**
        多件券件单价
     **/
    private $price_after_multi_coupon;

    /**
        多件券单品件数
     **/
    private $multi_coupon_item_count;

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
        满减满折的类型（1. 满减 2. 满折）
     **/
    private $promotion_type;

    /**
        满减满折信息
     **/
    private $promotion_info;

    /**
        满减满折门槛（满2件打5折中值为2；满300减20中值为300）
     **/
    private $promotion_discount;

    /**
        满减满折优惠（满2件打5折中值为5；满300减20中值为20）
     **/
    private $promotion_condition;

    /**
        预售商品-优惠信息
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
        预售有礼-淘礼金使用开始时间
     **/
    private $ysyl_tlj_use_start_time;

    /**
        预售有礼-佣金比例（ 预售有礼活动享受的推广佣金比例，注：推广该活动有特殊分成规则，请详见：https://tbk.bbs.taobao.com/detail.html?appId=45301&postId=9334376 ）
     **/
    private $ysyl_commission_rate;

    /**
        预售有礼-淘礼金发放时间
     **/
    private $ysyl_tlj_send_time;

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
        聚划算满减  -结束时间（毫秒）
     **/
    private $ju_play_end_time;

    /**
        聚划算满减  -开始时间（毫秒）
     **/
    private $ju_play_start_time;

    /**
        1聚划算满减：满N件减X元，满N件X折，满N件X元）  2天猫限时抢：前N分钟每件X元，前N分钟满N件每件X元，前N件每件X元）
     **/
    private $play_info;

    /**
        天猫限时抢可售  -结束时间（毫秒）
     **/
    private $tmall_play_activity_end_time;

    /**
        天猫限时抢可售  -开始时间（毫秒）
     **/
    private $tmall_play_activity_start_time;

    /**
        聚划算信息-商品预热开始时间（毫秒）
     **/
    private $ju_pre_show_end_time;

    /**
        聚划算信息-商品预热结束时间（毫秒）
     **/
    private $ju_pre_show_start_time;

    /**
        选品库信息
     **/
    private $favorites_info;

    /**
        活动价
     **/
    private $sale_price;

    /**
        跨店满减信息
     **/
    private $kuadian_promotion_info;

    /**
        商品子标题
     **/
    private $sub_title;

    /**
        聚划算商品价格卖点描述
     **/
    private $jhs_price_usp_list;

    /**
        淘抢购商品专用-结束时间
     **/
    private $tqg_online_end_time;

    /**
        淘抢购商品专用-开团时间
     **/
    private $tqg_online_start_time;

    /**
        淘抢购商品专用-已抢购数量
     **/
    private $tqg_sold_count;

    /**
        淘抢购商品专用-总库存
     **/
    private $tqg_total_count;

    /**
        是否品牌精选，0不是，1是
     **/
    private $superior_brand;

    /**
        是否品牌快抢，0不是，1是
     **/
    private $is_brand_flash_sale;

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


    public function getCouponAmount() : int{
        return $this->coupon_amount;
    }

    public function setCouponAmount(int $couponAmount){
        $this->coupon_amount = $couponAmount;
    }

    public function getSmallImages() : array{
        return $this->small_images;
    }

    public function setSmallImages(array $smallImages){
        $this->small_images = $smallImages;
    }

    public function getShopTitle() : string{
        return $this->shop_title;
    }

    public function setShopTitle(string $shopTitle){
        $this->shop_title = $shopTitle;
    }

    public function getCategoryId() : int{
        return $this->category_id;
    }

    public function setCategoryId(int $categoryId){
        $this->category_id = $categoryId;
    }

    public function getCouponStartFee() : string{
        return $this->coupon_start_fee;
    }

    public function setCouponStartFee(string $couponStartFee){
        $this->coupon_start_fee = $couponStartFee;
    }

    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getCouponTotalCount() : int{
        return $this->coupon_total_count;
    }

    public function setCouponTotalCount(int $couponTotalCount){
        $this->coupon_total_count = $couponTotalCount;
    }

    public function getUserType() : int{
        return $this->user_type;
    }

    public function setUserType(int $userType){
        $this->user_type = $userType;
    }

    public function getZkFinalPrice() : string{
        return $this->zk_final_price;
    }

    public function setZkFinalPrice(string $zkFinalPrice){
        $this->zk_final_price = $zkFinalPrice;
    }

    public function getCouponRemainCount() : int{
        return $this->coupon_remain_count;
    }

    public function setCouponRemainCount(int $couponRemainCount){
        $this->coupon_remain_count = $couponRemainCount;
    }

    public function getCommissionRate() : string{
        return $this->commission_rate;
    }

    public function setCommissionRate(string $commissionRate){
        $this->commission_rate = $commissionRate;
    }

    public function getCouponStartTime() : string{
        return $this->coupon_start_time;
    }

    public function setCouponStartTime(string $couponStartTime){
        $this->coupon_start_time = $couponStartTime;
    }

    public function getTitle() : string{
        return $this->title;
    }

    public function setTitle(string $title){
        $this->title = $title;
    }

    public function getItemDescription() : string{
        return $this->item_description;
    }

    public function setItemDescription(string $itemDescription){
        $this->item_description = $itemDescription;
    }

    public function getSellerId() : int{
        return $this->seller_id;
    }

    public function setSellerId(int $sellerId){
        $this->seller_id = $sellerId;
    }

    public function getVolume() : int{
        return $this->volume;
    }

    public function setVolume(int $volume){
        $this->volume = $volume;
    }

    public function getCouponEndTime() : string{
        return $this->coupon_end_time;
    }

    public function setCouponEndTime(string $couponEndTime){
        $this->coupon_end_time = $couponEndTime;
    }

    public function getCouponClickUrl() : string{
        return $this->coupon_click_url;
    }

    public function setCouponClickUrl(string $couponClickUrl){
        $this->coupon_click_url = $couponClickUrl;
    }

    public function getPictUrl() : string{
        return $this->pict_url;
    }

    public function setPictUrl(string $pictUrl){
        $this->pict_url = $pictUrl;
    }

    public function getClickUrl() : string{
        return $this->click_url;
    }

    public function setClickUrl(string $clickUrl){
        $this->click_url = $clickUrl;
    }

    public function getStock() : int{
        return $this->stock;
    }

    public function setStock(int $stock){
        $this->stock = $stock;
    }

    public function getSellNum() : int{
        return $this->sell_num;
    }

    public function setSellNum(int $sellNum){
        $this->sell_num = $sellNum;
    }

    public function getTotalStock() : int{
        return $this->total_stock;
    }

    public function setTotalStock(int $totalStock){
        $this->total_stock = $totalStock;
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

    public function getOrigPrice() : string{
        return $this->orig_price;
    }

    public function setOrigPrice(string $origPrice){
        $this->orig_price = $origPrice;
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

    public function getWhiteImage() : string{
        return $this->white_image;
    }

    public function setWhiteImage(string $whiteImage){
        $this->white_image = $whiteImage;
    }

    public function getShortTitle() : string{
        return $this->short_title;
    }

    public function setShortTitle(string $shortTitle){
        $this->short_title = $shortTitle;
    }

    public function getWordList() : array{
        return $this->word_list;
    }

    public function setWordList(array $wordList){
        $this->word_list = $wordList;
    }

    public function getTmallPlayActivityInfo() : string{
        return $this->tmall_play_activity_info;
    }

    public function setTmallPlayActivityInfo(string $tmallPlayActivityInfo){
        $this->tmall_play_activity_info = $tmallPlayActivityInfo;
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

    public function getNewUserPrice() : string{
        return $this->new_user_price;
    }

    public function setNewUserPrice(string $newUserPrice){
        $this->new_user_price = $newUserPrice;
    }

    public function getCouponInfo() : string{
        return $this->coupon_info;
    }

    public function setCouponInfo(string $couponInfo){
        $this->coupon_info = $couponInfo;
    }

    public function getCouponShareUrl() : string{
        return $this->coupon_share_url;
    }

    public function setCouponShareUrl(string $couponShareUrl){
        $this->coupon_share_url = $couponShareUrl;
    }

    public function getNick() : string{
        return $this->nick;
    }

    public function setNick(string $nick){
        $this->nick = $nick;
    }

    public function getReservePrice() : string{
        return $this->reserve_price;
    }

    public function setReservePrice(string $reservePrice){
        $this->reserve_price = $reservePrice;
    }

    public function getJuOnlineEndTime() : string{
        return $this->ju_online_end_time;
    }

    public function setJuOnlineEndTime(string $juOnlineEndTime){
        $this->ju_online_end_time = $juOnlineEndTime;
    }

    public function getJuOnlineStartTime() : string{
        return $this->ju_online_start_time;
    }

    public function setJuOnlineStartTime(string $juOnlineStartTime){
        $this->ju_online_start_time = $juOnlineStartTime;
    }

    public function getMaochaoPlayEndTime() : string{
        return $this->maochao_play_end_time;
    }

    public function setMaochaoPlayEndTime(string $maochaoPlayEndTime){
        $this->maochao_play_end_time = $maochaoPlayEndTime;
    }

    public function getMaochaoPlayStartTime() : string{
        return $this->maochao_play_start_time;
    }

    public function setMaochaoPlayStartTime(string $maochaoPlayStartTime){
        $this->maochao_play_start_time = $maochaoPlayStartTime;
    }

    public function getMaochaoPlayConditions() : string{
        return $this->maochao_play_conditions;
    }

    public function setMaochaoPlayConditions(string $maochaoPlayConditions){
        $this->maochao_play_conditions = $maochaoPlayConditions;
    }

    public function getMaochaoPlayDiscounts() : string{
        return $this->maochao_play_discounts;
    }

    public function setMaochaoPlayDiscounts(string $maochaoPlayDiscounts){
        $this->maochao_play_discounts = $maochaoPlayDiscounts;
    }

    public function getMaochaoPlayDiscountType() : string{
        return $this->maochao_play_discount_type;
    }

    public function setMaochaoPlayDiscountType(string $maochaoPlayDiscountType){
        $this->maochao_play_discount_type = $maochaoPlayDiscountType;
    }

    public function getMaochaoPlayFreePostFee() : string{
        return $this->maochao_play_free_post_fee;
    }

    public function setMaochaoPlayFreePostFee(string $maochaoPlayFreePostFee){
        $this->maochao_play_free_post_fee = $maochaoPlayFreePostFee;
    }

    public function getMultiCouponZkRate() : string{
        return $this->multi_coupon_zk_rate;
    }

    public function setMultiCouponZkRate(string $multiCouponZkRate){
        $this->multi_coupon_zk_rate = $multiCouponZkRate;
    }

    public function getPriceAfterMultiCoupon() : string{
        return $this->price_after_multi_coupon;
    }

    public function setPriceAfterMultiCoupon(string $priceAfterMultiCoupon){
        $this->price_after_multi_coupon = $priceAfterMultiCoupon;
    }

    public function getMultiCouponItemCount() : string{
        return $this->multi_coupon_item_count;
    }

    public function setMultiCouponItemCount(string $multiCouponItemCount){
        $this->multi_coupon_item_count = $multiCouponItemCount;
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

    public function getPromotionType() : string{
        return $this->promotion_type;
    }

    public function setPromotionType(string $promotionType){
        $this->promotion_type = $promotionType;
    }

    public function getPromotionInfo() : string{
        return $this->promotion_info;
    }

    public function setPromotionInfo(string $promotionInfo){
        $this->promotion_info = $promotionInfo;
    }

    public function getPromotionDiscount() : string{
        return $this->promotion_discount;
    }

    public function setPromotionDiscount(string $promotionDiscount){
        $this->promotion_discount = $promotionDiscount;
    }

    public function getPromotionCondition() : string{
        return $this->promotion_condition;
    }

    public function setPromotionCondition(string $promotionCondition){
        $this->promotion_condition = $promotionCondition;
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

    public function getYsylTljUseStartTime() : string{
        return $this->ysyl_tlj_use_start_time;
    }

    public function setYsylTljUseStartTime(string $ysylTljUseStartTime){
        $this->ysyl_tlj_use_start_time = $ysylTljUseStartTime;
    }

    public function getYsylCommissionRate() : string{
        return $this->ysyl_commission_rate;
    }

    public function setYsylCommissionRate(string $ysylCommissionRate){
        $this->ysyl_commission_rate = $ysylCommissionRate;
    }

    public function getYsylTljSendTime() : string{
        return $this->ysyl_tlj_send_time;
    }

    public function setYsylTljSendTime(string $ysylTljSendTime){
        $this->ysyl_tlj_send_time = $ysylTljSendTime;
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

    public function getJuPlayEndTime() : int{
        return $this->ju_play_end_time;
    }

    public function setJuPlayEndTime(int $juPlayEndTime){
        $this->ju_play_end_time = $juPlayEndTime;
    }

    public function getJuPlayStartTime() : int{
        return $this->ju_play_start_time;
    }

    public function setJuPlayStartTime(int $juPlayStartTime){
        $this->ju_play_start_time = $juPlayStartTime;
    }

    public function getPlayInfo() : string{
        return $this->play_info;
    }

    public function setPlayInfo(string $playInfo){
        $this->play_info = $playInfo;
    }

    public function getTmallPlayActivityEndTime() : int{
        return $this->tmall_play_activity_end_time;
    }

    public function setTmallPlayActivityEndTime(int $tmallPlayActivityEndTime){
        $this->tmall_play_activity_end_time = $tmallPlayActivityEndTime;
    }

    public function getTmallPlayActivityStartTime() : int{
        return $this->tmall_play_activity_start_time;
    }

    public function setTmallPlayActivityStartTime(int $tmallPlayActivityStartTime){
        $this->tmall_play_activity_start_time = $tmallPlayActivityStartTime;
    }

    public function getJuPreShowEndTime() : string{
        return $this->ju_pre_show_end_time;
    }

    public function setJuPreShowEndTime(string $juPreShowEndTime){
        $this->ju_pre_show_end_time = $juPreShowEndTime;
    }

    public function getJuPreShowStartTime() : string{
        return $this->ju_pre_show_start_time;
    }

    public function setJuPreShowStartTime(string $juPreShowStartTime){
        $this->ju_pre_show_start_time = $juPreShowStartTime;
    }

    public function getFavoritesInfo() : TaobaoTbkDgOptimusMaterialFavoritesInfo{
        return $this->favorites_info;
    }

    public function setFavoritesInfo(TaobaoTbkDgOptimusMaterialFavoritesInfo $favoritesInfo){
        $this->favorites_info = $favoritesInfo;
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

    public function getSubTitle() : string{
        return $this->sub_title;
    }

    public function setSubTitle(string $subTitle){
        $this->sub_title = $subTitle;
    }

    public function getJhsPriceUspList() : string{
        return $this->jhs_price_usp_list;
    }

    public function setJhsPriceUspList(string $jhsPriceUspList){
        $this->jhs_price_usp_list = $jhsPriceUspList;
    }

    public function getTqgOnlineEndTime() : string{
        return $this->tqg_online_end_time;
    }

    public function setTqgOnlineEndTime(string $tqgOnlineEndTime){
        $this->tqg_online_end_time = $tqgOnlineEndTime;
    }

    public function getTqgOnlineStartTime() : string{
        return $this->tqg_online_start_time;
    }

    public function setTqgOnlineStartTime(string $tqgOnlineStartTime){
        $this->tqg_online_start_time = $tqgOnlineStartTime;
    }

    public function getTqgSoldCount() : int{
        return $this->tqg_sold_count;
    }

    public function setTqgSoldCount(int $tqgSoldCount){
        $this->tqg_sold_count = $tqgSoldCount;
    }

    public function getTqgTotalCount() : int{
        return $this->tqg_total_count;
    }

    public function setTqgTotalCount(int $tqgTotalCount){
        $this->tqg_total_count = $tqgTotalCount;
    }

    public function getSuperiorBrand() : string{
        return $this->superior_brand;
    }

    public function setSuperiorBrand(string $superiorBrand){
        $this->superior_brand = $superiorBrand;
    }

    public function getIsBrandFlashSale() : string{
        return $this->is_brand_flash_sale;
    }

    public function setIsBrandFlashSale(string $isBrandFlashSale){
        $this->is_brand_flash_sale = $isBrandFlashSale;
    }

    public function getHotFlag() : string{
        return $this->hot_flag;
    }

    public function setHotFlag(string $hotFlag){
        $this->hot_flag = $hotFlag;
    }

    public function getTopnInfo() : TaobaoTbkDgOptimusMaterialTopNInfoDTO{
        return $this->topn_info;
    }

    public function setTopnInfo(TaobaoTbkDgOptimusMaterialTopNInfoDTO $topnInfo){
        $this->topn_info = $topnInfo;
    }

    public function getBybtInfo() : TaobaoTbkDgOptimusMaterialBybtInfoDTO{
        return $this->bybt_info;
    }

    public function setBybtInfo(TaobaoTbkDgOptimusMaterialBybtInfoDTO $bybtInfo){
        $this->bybt_info = $bybtInfo;
    }

    public function getTtSoldCount() : string{
        return $this->tt_sold_count;
    }

    public function setTtSoldCount(string $ttSoldCount){
        $this->tt_sold_count = $ttSoldCount;
    }

    public function getMaifanPromotion() : TaobaoTbkDgOptimusMaterialMaifanPromotionDTO{
        return $this->maifan_promotion;
    }

    public function setMaifanPromotion(TaobaoTbkDgOptimusMaterialMaifanPromotionDTO $maifanPromotion){
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

