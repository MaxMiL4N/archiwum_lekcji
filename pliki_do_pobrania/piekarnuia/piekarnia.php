<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <img src="tlo.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="PLACEHOLDER">KWERENDA 1</a>
        <a href="PLACEHOLDER">KWERENDA 2</a>
        <a href="PLACEHOLDER">KWERENDA 3</a>
        <a href="PLACEHOLDER">KWERENDA 4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form method="POST" action="">
            <select name="select1">
                <?php
                    $pol = mysqli_connect('localhost','root','','piekarnia');
                    $zap1 = mysqli_query($pol,"SELECT DISTINCT rodzaj FROM wyroby ORDER BY rodzaj DESC");
                    while ($dane = mysqli_fetch_row($zap1)) {
                        echo "<option>
                                $dane[0]
                            </option>";
                    }
                ?>
            </select>
            <input type="submit" value="Wybierz">
        </form>
        <table>
            <tr>
                <th>Rodzaj</th><th>Nazwa</th><th>Gramatura</th><th>Cena</th>
            </tr>
            <?php
                $rodzaj = $_POST['select1'];
                $zap2 = mysqli_query($pol,"SELECT Rodzaj,Nazwa,Gramatura,Cena FROM wyroby WHERE rodzaj = '$rodzaj'");

                while ($dane = mysqli_fetch_row($zap2)) {
                    echo "<tr>
                        <td>$dane[0]</td><td>$dane[1]</td><td>$dane[2]</td><td>$dane[3]</td>
                    </tr>";
                }

                $pol->close();
            ?>
        </table>
    </main>
    <footer>
        <p>AUTOR TO CZYSTA WANILIA I BIAŁA LILIA</p>
        <p>DATA 6.7.2041</p>
    </footer>
</body>
</html>