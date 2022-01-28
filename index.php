<?php
$string = " Ciao mi chiamo Angelo ho 30 anni mi chiamo Angelo ed ho 30 anni";
$stringLen = strlen($string);
$strUser = $_GET['str'];
$posStr = strpos($string, $strUser);
var_dump($strUser);
$vowels = array(strtolower($strUser));
$onlyconsonants = str_replace($vowels, "***", strtolower($string));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Stringa</h2>
    <p><?php echo$string?></p>

    <h2>Stringa censurata</h2>
    <?php echo$onlyconsonants?></p>

    <h2>Lunghezza paragrafo</h2>
    <p> <?php echo$stringLen?></p>




</body>
</html>

<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. ok
Stampare a schermo il paragrafo e la sua lunghezza. ok
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->