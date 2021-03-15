<?php

require_once 'User.php';

//Utente 1
$userone = new User('utentino001', 'utentus01@mail.com');
$userone->name = 'utenteprimo';
$userone->lastname = 'primocognome';

try {

    $userone->setPassword('gfiluhf2fskjfg8');
    $userone->getPassword();

} catch (Exception $e) {

    echo $e->getMessage();

}

$userone->setDate();
$userone->getDate();



var_dump($userone);