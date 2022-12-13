<?php
    //Variabile del testo
    $txt = "PHP è un linguaggio di scripting open source generico, usato per lo più nello sviluppo web. PHP è un acronimo ricorsivo: significa che l'acronimo stesso è contenuto come prima parola nello scioglimento della sigla - infatti PHP sta per PHP: Hypertext Preprocessor.";
    //Parola da censurare
    $censura = "PHP";
    //Testo con la parola PHP censurata
    $txt_censurato = str_replace($censura,"***", $txt );
    //Variabile che fa scegliere all'utente la parola da censurare
    $censura_utente = $_GET['censura_utente'];
    //Variabvile che sostituisce la parola scelta dall'utente con "***"
    $get_censura = str_replace($censura_utente,"***", $txt);
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
    <!-- Stampa il paragrafo -->
    <p> <?php echo $txt ?> </p>

    <!-- Stampa la lunghezza del paragrafo -->
    <p> Il testo contiene <?php echo strlen($txt) ?> caratteri. </p>

    <!-- Stampa il testo con la parola PHP censurata -->
    <p> <?php echo $txt_censurato ?> </p>

    <!-- Stampa la lunghezza del paragrafo con la parola PHP censurata -->
    <p> Il testo censurato contiene <?php echo strlen($txt_censurato) ?> caratteri. </p>

    <!-- Stampa la parola che l'utente ha scelto di censurare -->
    <p> La parola censurata è: <?php echo $censura_utente ?> </p>

    <!-- Stampa il testo con la parola che l'utente ha scelto di censurare -->
    <p> <?php echo $get_censura ?> </p>

    <!-- Stampa la lunghezza del paragrafo con la parola che l'utente ha scelto di censurare -->
    <p> Il testo censurato dall'utente contiene <?php echo strlen($get_censura) ?> caratteri. </p>
    
</body>
</html>