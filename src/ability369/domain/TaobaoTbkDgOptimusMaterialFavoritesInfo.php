<?php
namespace Topsdk\Topapi\Ability369\Domain;

class TaobaoTbkDgOptimusMaterialFavoritesInfo {

    /**
        选品库总数量
     **/
    private $total_count;

    /**
        选品库详细信息
     **/
    private $favorites_list;


    public function getTotalCount() : int{
        return $this->total_count;
    }

    public function setTotalCount(int $totalCount){
        $this->total_count = $totalCount;
    }

    public function getFavoritesList() : array{
        return $this->favorites_list;
    }

    public function setFavoritesList(array $favoritesList){
        $this->favorites_list = $favoritesList;
    }


}

