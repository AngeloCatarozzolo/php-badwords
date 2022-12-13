<?php
    //Variabile del testo
    $txt = "PHP è un linguaggio di scripting open source generico, usato per lo più nello sviluppo web. PHP è un acronimo ricorsivo: significa che l'acronimo stesso è contenuto come prima parola nello scioglimento della sigla - infatti PHP sta per PHP: Hypertext Preprocessor.";
    //Parola da censurare
    $censored = "PHP"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>
    <!-- Stampa il testo -->
    <p> <?php echo $txt ?> </p>

    <!-- Stampa la lunghezza del paragrafo -->
    <p> Il testo contiene <?php echo strlen($txt) ?> caratteri. </p>
    
</body>
</html>