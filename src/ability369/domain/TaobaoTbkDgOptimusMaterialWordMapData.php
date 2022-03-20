<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusMaterialWordMapData {

    /**
        链接-商品相关关联词落地页地址
     **/
    private $url;

    /**
        商品相关的关联词
     **/
    private $word;


    public function getUrl() : string{
        return $this->url;
    }

    public function setUrl(string $url){
        $this->url = $url;
    }

    public function getWord() : string{
        return $this->word;
    }

    public function setWord(string $word){
        $this->word = $word;
    }


}

