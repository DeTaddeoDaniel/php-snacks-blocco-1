<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parola cambiata</title>

</head>
<body>
    
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "get") {
        $name = test_input($get["name"]);
        $email = test_input($get["email"]);
        $eta = test_input($get["eta"]);
    }

    ?>
    
    <p>access account </p>
    <a href="/index.php">Indietro</a>

</body>
</html>