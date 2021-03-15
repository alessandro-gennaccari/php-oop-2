<?php

trait Intro {

    public $intro;


    public function setIntro($_intro){

        $this->intro = $_intro;

    }

    public function getIntro(){

        return $this->intro;

    }
}