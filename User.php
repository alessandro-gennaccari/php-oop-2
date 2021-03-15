<?php

class User {

    public $name;
    public $lastname;
    public $username;
    public $email;
    private $password;
    public $date;


    public function __construct($_username, $_email){

        $this->username = $_username;
        $this->email = $_email;

    }


    public function setPassword($_password){

        if (strlen($_password) < 5){
            throw new Exception('Password poco sicura');
        } else {
            $this->password = $_password;
        }

    }

    public function getPassword(){

        return $this->password;

    }

    
    public function setDate(){

        $this->date = date("F j, Y, g:i a"); 

    }

    public function getDate(){

        return $this->date;

    }

}