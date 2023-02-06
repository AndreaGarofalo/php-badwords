<?php 
$badword = $_POST['badword'];
$phrase = $_POST['phrase'];

$corrected_phrase = str_replace($badword, '***', $phrase);
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
    <p>La frase scelta è: <?= $phrase?>.</p>
    <p>Ed è lunga: <?= strlen($phrase)?> lettere.</p>
    <p>La parola bannata è: <?= $badword?></p>
    <hr>
    <p>La frase censurata è: <?= $corrected_phrase?></p>
    <p>Ed è lunga: <?= strlen($corrected_phrase)?> lettere.</p>
</body>
</html>