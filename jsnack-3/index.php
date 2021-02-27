
<?php

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stampa post con data</title>
    <link rel="stylesheet" href="style.css">
    
    </style>
<body>

    <h1>List of post with data</h1>

    <?php foreach ($posts as $key => $postList) { ?>

        <h2>
            <span>Post creato il </span>
            <span><?php echo $key ?></span>
        </h2>
        
        <ul>

            <?php foreach($postList as $postItem){?>
                <li class='border-bottom'>
                    <h4><?php echo  $postItem['title']; ?></h4>
                    <p><?php echo  $postItem['text']; ?></p>
                    <p>Post scritto da <?php echo  $postItem['author']; ?></p>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>

</body>
</html>
