<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusPromotionYoujiacouponinfo {

    /**
        有价券商品id
     **/
    private $item_id;

    /**
        商品链接
     **/
    private $url;


    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

