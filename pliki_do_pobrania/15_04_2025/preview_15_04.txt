<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>15_04</title>
</head>
<body>
    <!--
    uzytkownik podaje poczatek i koniec zakresu do zakresu liczb do przeszukiwania (pole number) poniżej, z licbzy rozwijanej wybiera czy chce w danym zakresie wypisać liczby parzyste czy nieparzyste. 
    napisz skrypt który sprosta preferencjom klienta i ponizej przycisku wyświetli oddzielając przecinkiem liczby. ponizej policzy ich ilosc.
    zabezpiecz przemularz przed przesylaniem pustych tresci (w php)
    -->
<form action="" method="post">
    <input type="number" name="input_a" placeholder="Początek zakresu"> 🐝 <input type="number" name="input_b" placeholder="Koniec zakresu"><br>
    <select name="wybor_metody">
        <option>Parzyste</option>
        <option>Nieparzyste</option>
    </select>
    <input type="submit" value="Policz">
</form>
<?php
    @$poczatek = $_POST['input_a'];
    @$koniec = $_POST['input_b'];
    @$wybor = $_POST['wybor_metody'];
    @$licznik = 0;

    if ($_POST['input_a'] != "" && $_POST['input_b'] != "") {
        echo "<table style='border:1px dashed black;'><tr><th>Lp.</th><th>Liczba</th></tr>";
        for ($i = $poczatek;$i<=$koniec;$i++) {
            if ($wybor == "Parzyste") {
                if($i%2 == 0) {
                    $licznik++;
                    echo "<tr><td>$licznik</td><td style='border:1px solid black; text-align:center;'>🎈 $i 🎈</td></tr>";
                }
            }
            if ($wybor == "Nieparzyste") {
                if($i%2 != 0) {
                    $licznik++;
                    echo "<tr><td style='text-align:right;>$licznik</td><td style='border:1px solid black;text-align:center;'>🎈 $i 🎈</td></tr>";
                }
            }
        }
        echo "</tr></table>";
        echo "Liczb jest $licznik. 🐵<br>";
        $licznik = 0;
    }
    else {
        echo "Nie wpisano liczb.";
    }
?>
</body>
</html>