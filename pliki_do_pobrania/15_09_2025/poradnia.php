<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poradnia</title>
    <link rel="stylesheet" href="poradnia.css">
</head>
<body>
    <header>
        <h1>PORADNIA SPECJALISTYCZNA</h1>
    </header>
    <section id="panel_lewy">
        <h3>LEKARZE SPECJALIŚCI</h3>
        <table>
            <tr>
                <td colspan="2">Poniedziałek</td>
            </tr>
            <tr>
                <td>Anna Kowalska</td>
                <td>otolaryngolog</td>
            </tr>
            <tr>
                <td colspan="2">Wtorek</td>
            </tr>
            <tr>
                <td>Jan Nowak</td>
                <td>kardiolog</td>
            </tr>
        </table>
        <h3>LISTA PACJENTÓW</h3>
        <?php
            $polaczenie=mysqli_connect('localhost','root','','poradnia');
            $zap1 = mysqli_query($polaczenie,'SELECT id,imie,nazwisko,choroba FROM pacjenci');
            while($wynik=mysqli_fetch_row($zap1)) {
                echo $wynik[0]." ".$wynik[1]." ".$wynik[2]." ".$wynik[3]."<br>";
            }
        ?>
        <br>
        <br>
        <form method="post" action="pacjent.php">
            <label for="input_id">Podaj id:</label>
            <br>
            <input type="number" name="id" id="input_id">
            <br>
            <input type="submit" value="Pokaż szczegóły">
        </form>
    </section>
    <section id="panel_prawy">
        <h3>KARTA PACJENTA</h3>
        <p>Nie wybrano pacjenta</p>
    </section>
    <footer>
        <p>utworzone przez: 0000000000</p>
        <a href="kwerendy.txt" download="kwerendy.txt">Kwerendy do pobrania</a>
    </footer>
</body>
</html>