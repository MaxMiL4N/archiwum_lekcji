<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
<a href="zadanie1.php">ZADANIE 1</a> <a href="zadanie3.php">ZADANIE 3</a><br><br>
    <form action="" method="post">
        Do której liczby policzyć? <input type="number" name="do_ktorej_liczby"><br>
        <input type="submit" value="Policz"><br>
    </form>
<?php
        @$do_ktorej = $_POST['do_ktorej_liczby'];
        @$licznik_parzyste = 0;
        @$licznik_nieparzyste = 0;
        for ($i = 0;$i<=$do_ktorej;$i++) {
            if ($i % 2 == 0) {
                $licznik_parzyste++;
                echo "$i ";
            }
        }
        echo "<br>";
        for ($i = 0;$i<=$do_ktorej;$i++) {
            if ($i % 2 != 0) {
                $licznik_nieparzyste++;
                echo "$i ";
            }
        }
        echo "<br>";
        echo "Liczb parzystych jest $licznik_parzyste, a liczb nieparzystych jest $licznik_nieparzyste.";
    ?>
</body>
</html>