
<?php 
/*
Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$paragrafo ="In una terra lontana, dietro le montagne Parole, lontani dalle terre di Vocalia e Consonantia, vivono i testi di bisogno. Vivono isolati nella cittadina di Lettere, sulle coste del Semantico bisogno, un immenso oceano linguistico. Un piccolo ruscello chiamato Devoto Oli attraversa quei luoghi, rifornendoli di tutte le regolalie di cui hanno bisogno.";
$censura = $_GET["censura"]

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
    <p><h1>Il paragrafo è:</h1><?php echo $paragrafo ?></p>
    <p>La lunghezza del paragrafo è di <?php echo strlen($paragrafo) ?> caratteri</p>
    <h1>Inserire la parola da sovrascrivere alla parola censurata(bisogno) tramite get</h1>
    <p><?php echo str_replace("bisogno", $censura, $paragrafo) ?></p>
</body>
</html>