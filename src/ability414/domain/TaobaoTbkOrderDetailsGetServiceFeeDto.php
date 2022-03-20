<?php
namespace Topsdk\Topapi\Ability414\Domain;

class TaobaoTbkOrderDetailsGetServiceFeeDto {

    /**
        专项服务费来源，122-渠道
     **/
    private $tk_share_role_type;

    /**
        专项服务费率
     **/
    private $share_relative_rate;

    /**
        结算专项服务费
     **/
    private $share_fee;

    /**
        预估专项服务费
     **/
    private $share_pre_fee;


    public function getTkShareRoleType() : int{
        return $this->tk_share_role_type;
    }

    public function setTkShareRoleType(int $tkShareRoleType){
        $this->tk_share_role_type = $tkShareRoleType;
    }

    public function getShareRelativeRate() : string{
        return $this->share_relative_rate;
    }

    public function setShareRelativeRate(string $shareRelativeRate){
        $this->share_relative_rate = $shareRelativeRate;
    }

    public function getShareFee() : string{
        return $this->share_fee;
    }

    public function setShareFee(string $shareFee){
        $this->share_fee = $shareFee;
    }

    public function getSharePreFee() : string{
        return $this->share_pre_fee;
    }

    public function setSharePreFee(string $sharePreFee){
        $this->share_pre_fee = $sharePreFee;
    }


}

