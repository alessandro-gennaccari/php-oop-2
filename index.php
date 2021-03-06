<?php

require_once 'User.php';
require_once 'MoreUserInfo.php';

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


//Utente 2
$usertwo = new User('utentino002', 'utentus02@mail.com');
$usertwo->name = 'utentesecondo';
$usertwo->lastname = 'secondocognome';

try {

    $usertwo->setPassword('fwfh238h92onhf');
    $usertwo->getPassword();

} catch (Exception $e) {

    echo $e->getMessage();

}

$usertwo->setDate();
$usertwo->getDate();


//Utente 3 - Ora con la classe diversa da User per aggiungere attributi
$userthree = new MoreUserInfo('utentino003', 'utentus03@mail.com');
$userthree->name = 'utenteterzo';
$userthree->lastname = 'terzocognome';

try {

    $userthree->setPassword('d2ihf83hb329fbh2u');
    $userthree->getPassword();

} catch (Exception $e) {

    echo $e->getMessage();

}

$userthree->setDate();
$userthree->getDate();

try {
    
    $userthree->setMobile('3334673829');
    $userthree->getMobile();
    
} catch (Exception $e) {
    
    echo $e->getMessage();
    
}

$userthree->setIntro('Carissimi che visitate il mio profilo, mi chiamo utenteterzo. Bla bla bla bla.');
$userthree->getIntro();


//LOG
// var_dump($userone);
// var_dump($usertwo);
// var_dump($userthree);


//Stampa
$users = [$userone, $usertwo, $userthree];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utenti</title>
</head>
<body>


    <?php foreach ($users as $value) { ?>
    <div class="utente">

        <h2><?php echo $value->username; ?></h2>
        <p><?php echo $value->name . ' - ' . $value->lastname; ?></p>
        <p><?php echo $value->email; ?></p>
        <p><?php echo $value->date; ?></p>
        <p><?php echo $value->mobile?></p>
        
        <?php if ($value->intro) :?>
        <p><?php echo $value->intro; ?></p>
        <?php else: ?>
        <p><?php echo 'Nessuna Descrizione'; ?></p>
        <?php endif ?>

    </div>
    <?php } ?>
    

</body>
</html>