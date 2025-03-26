<?php
    // Kod PHP
    echo "Witaj na zajęciach<br>";
    print "<ul>";
    print "<li><b>Miłego dnia</b></li></ul>";
    include("drugi.php");
    // Zmienne
    $zmienna; // Deklaracja
    $zmienna1 = 5; //Definicja
    $z2 = 4; // Typ: integer
    $z3 = "4"; // Typ: string
    $z4 = 4.5; // Typ: float, double
    $z5 = (float)$z2; //'z5' ma typ float
    echo $z2; // Wyświetlenie zmiennej z2
    echo "<br>Wartość zmiennej z2: $z2";
    echo "<br>Wartość zmiennej z2: ".$z2; // Konkatenacja
    // Operatory arytmetyczne: + - * / %
    # Operatory logiczne: == (true, kiedy równe) | !== (true, kiedy różne) | > | < | >= | <= | && (AND) | || (OR) |
    // Operatory przypisania: = | += | -= | *= | /= | %= | $x.="tekst"|
    $z4+=$z2;
    echo "<br>Wartość zmiennej z4 po dodaniu do niej z2: $z4";
    $z4/=$z2;
    echo "<br>Wartość zmiennej z4 po dzieleniu przez z2: $z4";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>