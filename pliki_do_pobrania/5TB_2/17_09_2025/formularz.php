<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep muzyczny</title>
    <link rel="stylesheet" href="muzyka.css">
</head>
<body>
    <header>
        <h1>SKLEP MUZYCZNY</h1>
    </header>
    <aside id="panel_lewy">
        <h2>NASZA OFERTA</h2>
        <ol>
            <li>
                Instrumenty muzyczne
            </li>
            <li>
                Sprzęt audio
            </li>
            <li>
                Płyty CD
            </li>
        </ol>
    </aside>
    <aside id="panel_prawy">
    <?php
        $pol=mysqli_connect('localhost','root','','sklep');
        
        $imie=$_POST['input_imie'];
        $nazwisko=$_POST['input_nazwisko'];
        $adres=$_POST['input_adres'];
        $telefon=$_POST['input_telefon'];
        $login=$_POST['input_login'];
        $haslo=$_POST['input_haslo'];

        echo "Konto $imie $nazwisko zostało zarejestrowane w sklepie muzycznym.";

        $zap1 = mysqli_query($pol,"INSERT INTO uzytkownicy VALUES (null,'$imie','$nazwisko','$adres','$telefon')");
        $zap2 = mysqli_query($pol,"INSERT INTO konta VALUES (null,'$login','$haslo')");

        mysqli_close($pol);
    ?>
    </aside>
</body>
</html>