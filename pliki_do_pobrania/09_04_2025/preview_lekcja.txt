<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="srednia"> Średnia<br>
    <input type="text" name="zachowanie"> Zachowanie<br>
    <input type="submit" value="Czy jest pasek?"><br>
</form>
<?php
    // sprawdzanie czy puste
    $srednia = (isset($_POST['srednia'])) ? $_POST['srednia'] : false ;
    $zachowanie = (isset($_POST['zachowanie'])) ? $_POST['zachowanie'] : false ;
    if ($srednia != false && $zachowanie != false) {
        echo "Poprawnie wypełniony forumlarz.<br>";
    }
    else {
        echo "Nie wypełniono formularza.<br>";
    } 
    // DRUGI SPOSÓB
    if (!empty($_POST['srednia'] && $_POST['zachowanie'])) {
        echo "Poprawnie wypełniony forumlarz.<br>";
    }
    else {
        echo "Nie wypełniono formularza.<br>";
    }
?>
</body>
</html>