<?php
namespace Topsdk\Topapi\Ability1826\Domain;

class TaobaoTbkDgVegasTljStopUpdateStatusResult {

    /**
        暂停成功
     **/
    private $update_success;


    public function getUpdateSuccess() : bool{
        return $this->update_success;
    }

    public function setUpdateSuccess(bool $updateSuccess){
        $this->update_success = $updateSuccess;
    }


}

