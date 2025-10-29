<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOŁO SZACHOWE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2>Koło szachowe <em>gambit piona</em></h2>
    </header>
    <aside>
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="PLACEHOLDER">kwerenda1</a></li>
            <li><a href="PLACEHOLDER">kwerenda2</a></li>
            <li><a href="PLACEHOLDER">kwerenda3</a></li>
            <li><a href="PLACEHOLDER">kwerenda4</a></li>
        </ul>
        <img src="logo.png" alt="Logo koła">
    </aside>
    <section>
        <h3>Najlepsi gracze naszego koła</h3>
        <table>
            <tr>
                <th>Pozycja</th><th>Pseudonim</th><th>Tytuł</th><th>Ranking</th><th>Klasa</th>
            </tr>
            <?php
                $pol = mysqli_connect('localhost','root','','szachy');
                $zap1 = mysqli_query($pol,"SELECT pseudonim,tytul,ranking,klasa FROM zawodnicy WHERE ranking > 2787 ORDER BY ranking DESC");
                $i = 1;
                while ($dane = mysqli_fetch_row($zap1)) {
                    echo "<tr><td>$i</td><td>$dane[0]</td><td>$dane[1]</td><td>$dane[2]</td><td>$dane[3]</td></tr>";
                    $i++;
                }
            ?>
            </table>
            <form>
                <input name="losowanie_button" type="submit" value="Losuj nową parę graczy">
            </form>
            <h4>
            <?php
                $zap2 = mysqli_query($pol,"SELECT pseudonim,klasa FROM zawodnicy ORDER BY RAND() LIMIT 2");
                while ($dane = mysqli_fetch_row($zap2)) {
                    echo "$dane[0] $dane[1] ";
                }
            ?>
            </h4>
            <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
        
    </section>
    <footer>
        Stronę wykonał: White Lily Cookie i Dark Enchantress Cookie
    </footer>
</body>
</html>