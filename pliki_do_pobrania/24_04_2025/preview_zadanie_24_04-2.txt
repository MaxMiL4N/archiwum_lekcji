<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    1. uzytkownik podaje w formularzu liczbę elementów ułożonych w pionie i w poziomie a także wpisuje znak który ma zostać użyty do budowy prostokąta.
    2. uzytkownik podaje w formularzu kubaturę (ilosc metrow kwadratowych) powierzchni scian do pomalowania. wybierajac przycisk oblicz, 
    w odpowiedzi dostaje ile puszek farby musi zakupić, zakładając że farby są tylko w 5L opakowaniach i z jednego opakowania mozna pomalowac 10 metrow kwadratowych.
    -->

    <h1>ZADANIE 2</h1>
    <a href="zadanie_24_04.php">ZADANIE 1</a><br>

    <form action="" method="post">
        <input type="number" name="input_kubatura"> Metry kwadratowe<br>
        <input type="submit" value="Oblicz"><br>
    </form>

    <?php
        @$kubatura = $_POST['input_kubatura'];

        if ($kubatura != "") {
            @$wynik = ceil($kubatura/10);
            echo "Potrzeba $wynik puszek 5L";
        }
        else {
            echo "Nie podano wartości.";
        }
    ?>
</body>
</html>