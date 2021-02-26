<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->


<?php
    $matches = [

        [
            'squadraCasa' => 'Italia',
            'squadraOspite' => 'Svizzera',
            'puntiCasa' => 20,
            'puntiOspite' => 0
        ],

        [
            'squadraCasa' => 'Azerbaigian',
            'squadraOspite' => 'Birmania',
            'puntiCasa' => 20,
            'puntiOspite' => 40
        ],

        [
            'squadraCasa' => 'Honduras',
            'squadraOspite' => 'Montenegro',
            'puntiCasa' => 30,
            'puntiOspite' => 10
        ]

    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
    </style>
<body>

    <h1 class="border">List of matches played</h1>

    <?php foreach ($matches as $index => $match) { ?>

        
        <ul>
            <li class="border">
                <p >Match <?php echo $index + 1 ?> è finita</p>
                
                <p>
                    
                    <span class="text-bold"> <?php echo $match['squadraCasa'] ?> </span>
                    <span>-</span>
                    <span class="text-bold"> <?php echo $match['squadraOspite'] ?> </span>
                    <span>|</span>
                    <span> <?php echo $match['puntiCasa'] ?> </span>
                    <span>:</span>
                    <span> <?php echo $match['puntiOspite'] ?> </span>

                </p>
            </li>
        </ul>
    <?php } ?>



</body>
</html>
