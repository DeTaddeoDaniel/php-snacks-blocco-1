
<?php

    $numbers = [];

    // variabili 
    $min = 1;
    $max = 15;
    $lengArrayMax = 15;

    $error = false;

    // controlla differenza numerica
    if( $max - $min + 1>= $lengArrayMax){

        // ciclo riempi array
        while(count($numbers) < $lengArrayMax){

            // estrai numero casuale
            $number = rand($min, $max);

            // controlla se gia inserito
            if(!in_array($number, $numbers)){
                array_push($numbers, $number);
            }
            
        }
    } else {
        $error = true;
    }

   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random number</title>
    <link rel="stylesheet" href="style.css">
    
    </style>
<body>

    <h1>Get 15 number not equals value</h1>

    <?php if (!$error) { ?>

        <?php foreach ($numbers as $index => $number) { ?>
                
            <ul>
                <li class='border-bottom'>
                    <p>
                        <span>Estrazione n. </span>
                        <span><?php echo $index + 1; ?></span>
                        <span>: numero</span>
                        <span><?php echo $number; ?></span>
                    </p>
                </li>
            </ul>

        <?php } ?>

    <?php } else { ?>
        <h2>
            <?php echo 'error: the differenze between min e max is small of leng array Max, please fix change number'; ?>
        </h4>
    <?php } ?>

</body>
</html>
