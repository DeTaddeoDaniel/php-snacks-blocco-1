<!DOCTYPE HTML>  
<html>
<head>
    <style>
        .error {color: #FF0000;}
        .success{color: #00ff00}
    </style>
</head>
<body>  

<?php

    // define variables and set to empty values
    $nameErr = $emailErr  = $eta = "";
    $name = $email = $etaErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        //----------------------------------------------------

        // Nome vuoto
        if (empty($_GET["name"])) {
            $nameErr = "Inserisci un nome";
        
        // nome con almeno lungo 1 carattere
        } else {
            
            $name = test_input($_GET["name"]);

            if(strlen($name) < 3){
                $nameErr = "Inserire un nome di almeno tre caratteri";
            }

            if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
                $nameErr =  "Inserimento caratteri non validi";
            }
            
        }

        //----------------------------------------------------

        // Nome vuoto
        if (empty($_GET["email"])) {
            $emailErr = "Inserisci un email";
        
        // nome con almeno lungo 1 carattere
        } else {
            
            $email = test_input($_GET["email"]);

            if(!strpos($email, '@') && !strpos($email, '.')){
                $emailErr = "Simboli mancanti, manca @ e .";
            }

            // if(!preg_match("/[@]/", $email)){
            if(!strpos($email, '@')){
                $emailErr = "Inserire un email, manca @";
            }

            // elseif(!preg_match("/[.]/", $email)){
            if(!strpos($email, '.')){
                $emailErr = "Inserire un punto, manca .";
            }
            
        }

        //----------------------------------------------------

        // Nome vuoto
        if (empty($_GET["eta"])) {
            $etaErr = "Inserisci l'età";
        
        // nome con almeno lungo 1 carattere
        } else {
            
            $eta = test_input($_GET["eta"]);

            if(!preg_match("/^[0-9]$/", $eta)){
                $etaErr = "Inserire un numero valido";
            }
            
        }

        //-------------------------------------------------------

        $classResult = $result = "";

        if( empty($nameErr) && empty($emailErr)  && empty($etaErr) ){
            $classResult = "success";
            $result = "acceso consentito";
        } else {
            $classResult = "error";
            $result = "accesso negato";
        }
    }

    function test_input($data) {
        
        // cancella space all'inizio e alla fine
        $data = trim($data);
        
        // rimuovi apici dalla stringa
        $data = stripslashes($data);
        
        // coverti caratteri speciali in entita html
        $data = htmlspecialchars($data);
        
        return $data;
        
        }
?>

<h2>PHP Form Validation Example</h2>

<p><span class="error">* required field</span></p>

<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
    Name: 
    <input type="text" name="name" value="<?php echo $name;?>">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>

    Email: 
    <input type="text" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>

    Età: 
    <input type="text" name="eta" value="<?php echo $eta;?>">
    <span class="error">* <?php echo $etaErr;?></span>
    <br><br>

    <input type="submit" name="submit" value="Submit">  

</form>

<p>L'accesso corrisponde ai valori precedentemente salvati (submit)</p>

<h2>
    Accesso:
    <span class="<?php echo $classResult ?>">
        <?php echo $result ?>
    </span>
</h2>



</body>
</html>