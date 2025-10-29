<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>ATLAS ZWIERZĄT</h1>
    </header>
    <main>
        <h2>Gromady:</h2>
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <form method="POST" action="">
            Wybierz gromadę: <input type="number" name="input_gromada"><input type="submit" value="Wyświetl">
        </form>
    </main>
    <aside id="lewy">
        <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
    </aside>
    <section id="srodkowy">
        <?php
            $pol = mysqli_connect('localhost','root','','baza01');
            $gromada = $_POST["input_gromada"];
            $zap1 = mysqli_query($pol,"SELECT gatunek, wystepowanie FROM zwierzeta WHERE gromady_id = $gromada");
            if ($gromada == 1) {
                $nazwa_gromady = "RYBY";
            }
            else if ($gromada == 2) {
                $nazwa_gromady = "PŁAZY";
            }
            else if ($gromada == 3) {
                $nazwa_gromady = "GADY";
            }
            else if ($gromada == 4) {
                $nazwa_gromady = "PTAKI";
            }
            else if ($gromada == 5) {
                $nazwa_gromady = "SSAKI";
            }
            else {
                $nazwa_gromady = "ZŁY KOD GROMADY";
            }

            echo "<h2>"."$nazwa_gromady"."</h2>";

            while ($dane = mysqli_fetch_row($zap1)) {
                echo $dane[0]." ".$dane[1]."<br>";
            }
        ?>
    </section>
    <aside id="prawy">
        <h2>Wszystkie zwierzęta w bazie</h2>
        <?php
            $zap2 = mysqli_query($pol,"SELECT zwierzeta.id, zwierzeta.gatunek,gromady.nazwa FROM
            zwierzeta INNER JOIN gromady ON zwierzeta.Gromady_id=gromady.id");

            while ($dane = mysqli_fetch_row($zap2)) {
                echo "$dane[0]. $dane[1], $dane[2]<br>";
            }
        ?>
    </aside>
    <footer>
        <a href="atas-zwierząt.pl" target="_blank">Poznaj inne strony o zwierzętach</a> autor Atlasu zwierząt: Ben X Chris
    </footer>
</body>
</html>