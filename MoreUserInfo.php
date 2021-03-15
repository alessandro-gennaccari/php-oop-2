<?php

require_once 'User.php';

class MoreUserInfo extends User {

    public $mobile;

    public function setMobile($_mobile){

        if (!is_numeric($_mobile) || strlen((string)$_mobile) < 10) {
            throw new Exception('Numero troppo corto o errato');
        } else {
            $this->mobile = $_mobile;
        }

    }

    public function getMobile(){
        return $this->mobile;
    }

}