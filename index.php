<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <!-- 
    Creare una variabile con un paragrafo di testo a vostra scelta.
    Stampare a schermo il paragrafo e la sua lunghezza.
    Una parola da censurare viene passata dall'utente tramite parametro GET.
    Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
     -->

    <?php 

    $ilParagrafo = "Salve come sta? Molte bene, salve salve";
    ?>



    <h2>Il Paragrafo è questo</h2>
    <p>
        <?php echo $ilParagrafo; ?>
    </p>

    <h2>La lunghezza è</h2>
    <p>
        <?php
        $paragrafoLenghth = strlen($ilParagrafo);
        echo "La stringa è lunga " . $paragrafoLenghth . "caratteri" ;
        ?>
    </p>

    <?php  
        $clWord = $_GET['name'];
    ?>

    <h2>La sostituzione della parola</h2>

    <p>
        <?php 
        $nuovo = str_replace("salve",  $clWord, $ilParagrafo);
        echo $nuovo;
        ?>
    </p>

    <p>
        <?php  
            $nuovoLenghth = strlen($nuovo);
            echo "LA lunghezza nuova è" . $nuovoLenghth ."caratteri";
        ?>
    </p>
    




</body>
</html>