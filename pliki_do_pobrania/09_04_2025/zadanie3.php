<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
    <a href="zadanie1.php">ZADANIE 1</a> <a href="zadanie2.php">ZADANIE 2</a><br><br>

    <form action="" method="post">
        <input type="number" name="input_a">
        <input type="submit" value="Czy równa się 5?">
    </form>
    <?php
        @$wynik = $_POST['input_a'];
        echo $wynik = ($wynik == 5) ? "Tak." : "Nie." ;
    ?>
</body>
</html>