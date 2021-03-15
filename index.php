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


//Utente 3
$userthree = new User('utentino003', 'utentus03@mail.com');
$userthree->name = 'utentepterzo';
$userthree->lastname = 'terzocognome';

try {

    $userthree->setPassword('d2ihf83hb329fbh2u');
    $userthree->getPassword();

} catch (Exception $e) {

    echo $e->getMessage();

}

$userthree->setDate();
$userthree->getDate();



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

    </div>

    <?php } ?>
    

</body>
</html>