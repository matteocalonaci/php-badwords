<?php
$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
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
</body>
</html>