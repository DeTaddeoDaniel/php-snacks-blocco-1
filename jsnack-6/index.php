<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'student' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processo differenti in base key value</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Valutazione key value diverse</h1>
        
    <p>Color text in green if teacher, else purple if student</p>
        
    <ul>

        <li class='border-bottom'>
            <?php foreach($db as $key => $elemento){
                foreach($elemento as $persona){ ?>
                    <ul>
                        <li 
                            class=" text-bold <?php 
                                    if($key == 'teachers'){ echo 'green';}
                                    elseif($key == 'student'){ echo 'purple';}
                                ?>">
                            <p>
                                <?php echo $persona['name'] . $persona['lastname']; ?>
                            </p>
                        </li>
                                
                    </ul>
                <?php }
            } ?>

        </li>
    </ul>


</body>
</html>