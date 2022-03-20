<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusPromotionRecommendItemList {

    /**
        权益推荐商品id
     **/
    private $item_id;

    /**
        商品链接
     **/
    private $url;


    public function getItemId() : int{
        return $this->item_id;
    }

    public function setItemId(int $itemId){
        $this->item_id = $itemId;
    }

    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }


}

