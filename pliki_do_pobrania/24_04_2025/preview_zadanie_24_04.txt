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
    <h1>ZADANIE 1</h1>
    <a href="zadanie_24_04-2.php">ZADANIE 2</a><br>

    <form action="" method="post">
        <input type="number" name="input_szerokosc"> Szerokość<br>
        <input type="number" name="input_wysokosc"> Wysokość<br>
        <input type="text" name="input_znak" maxlength="1"> Znaczek<br>
        <input type="submit" value="Buduj">
    </form>
    <?php
        @$szerokosc = $_POST['input_szerokosc'];
        @$wysokosc = $_POST['input_wysokosc'];
        @$znak = $_POST['input_znak'];

        for ($w = 0;$w < $wysokosc;$w++) {
            for ($s = 0;$s < $szerokosc;$s++) {
                echo "$znak ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>