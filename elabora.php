<?php
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$nomeCognome = $nome . $cognome
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords-elabora</title>
</head>
<body>
    <h1>Come ti chiami?</h1>
    <h2><?php echo $nome . $cognome ?></h2>
    <h3>Di quante lettere è composto il tuo cognome? <?php echo strlen("$cognome"); ?></h3>
    <h3>Di quante lettere è composto nome + cognome? <?php echo strlen("$nomeCognome"); ?></h3>
</body>
</html>