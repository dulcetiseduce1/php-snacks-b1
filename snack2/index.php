<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che: 
name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e 
che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = key_exists('name', $_GET) ? trim($_GET['name']) : false;
$mail = key_exists('mail', $_GET) ? trim($_GET['mail']) : false;
$age = key_exists('age', $_GET) ? trim($_GET['age']) : false;

$nameIsvalid = false;
$mailIsvalid = false;
$ageIsvalid = false;
$dataValid = false;


if (strlen($name) > 3) {
    $nameIsvalid = true;
}

if (strpos($mail, "@") && strpos($mail, ".")) {
    $mailIsvalid = true;
}

if (is_numeric($age)) {
    $ageIsvalid = true;
}

$dataValid = $nameIsvalid && $mailIsvalid && $ageIsvalid

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <div class="container">
        <?php if ($dataValid) {
            echo "Accesso consentito";
        } else {
            echo "Accesso negato";
        }
        ?>
    </div>
</body>
</html>