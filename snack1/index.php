<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
$basketGames = [
    [
        "casa" => "Ohio",
        "ospite" => "NewYorkers",
        "punticasa" => 100,
        "puntiospite" => 68,
    ],
    [
        "casa" => "Nevada",
        "ospite" => "Washington",
        "punticasa" => 87,
        "puntiospite" => 100,
    ],
    [
        "casa" => "Portland",
        "ospite" => "Miami",
        "punticasa" => 32,
        "puntiospite" => 74,
    ],
    [
        "casa" => "NewOrleans",
        "ospite" => "Orleans",
        "punticasa" => 22,
        "puntiospite" => 22,
    ]


]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket</title>
</head>

<body>
<ul>
    <?php for($i = 0; $i < count($basketGames); $i++) { 
        $basketGame = $basketGames[$i]; ?>
           
            <li>
                <?php echo $basketGame['casa'] ?> - 
                <?php echo $basketGame['ospite'] ?> | 
                <?php echo $basketGame['punticasa'] ?>-
                <?php echo $basketGame['puntiospite'] ?>
            </li>
            
    <?php } ?>     
</ul>
</body>

</html>