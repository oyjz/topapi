<?php
namespace Topsdk\Topapi\Ability370\Domain;

class TaobaoTbkDgMaterialOptionalUcrowdrankitems {

    /**
        物料评估-商品佣金率，如：1234表示12.34%，material_id=41377时选填
     **/
    private $commirate;

    /**
        物料评估-商品价格，单位：元，material_id=41377时选填
     **/
    private $price;

    /**
        物料评估-商品ID，material_id=41377时必填
     **/
    private $item_id;


    public function getCommirate() : int{
        return $this->commirate;
    }

    public function setCommirate(int $commirate){
        $this->commirate = $commirate;
    }

    public function getPrice() : string{
        return $this->price;
    }

    public function setPrice(string $price){
        $this->price = $price;
    }

    public function getItemId() : string{
        return $this->item_id;
    }

    public function setItemId(string $itemId){
        $this->item_id = $itemId;
    }


}

