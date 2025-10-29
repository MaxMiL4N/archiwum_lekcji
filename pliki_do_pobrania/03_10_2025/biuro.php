<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        BIURO PODRÓŻY
    </header>
    <aside id="lewy">
        <h2>Promocje</h2>
        <table>
            <tr>
                <td>Warszawa</td><td>od 600 zł</td>
            </tr>
            <tr>
                <td>Wenecja</td><td>od 1200 zł</td>
            </tr>
            <tr>
                <td>Paryż</td><td>od 1200 zł</td>
            </tr>
        </table>
    </aside>
    <main>
        <h2>W tym roku jedziemy do...</h2>
        <?php
            $pol = mysqli_connect('localhost','root','','podroze');
            $zap1 = mysqli_query($pol,'SELECT nazwaPliku,podpis from zdjecia ORDER BY podpis ASC');
            while ($dane=mysqli_fetch_row($zap1)) {
                echo "<img src='$dane[0]' title='$dane[1]'>";
            };
        ?>
    </main>
    <aside id="prawy">
        <h2>Kontakt</h2>
        <a href="mailto:biuro@wycieczki.pl">Napisz do nas</a>
        <p>telefon: 444555666</p>
    </aside>
    <section>
        <h3>W poprzednich latach byliśmy...</h3>
        <ol>
            <?php
                $pol = mysqli_connect('localhost','root','','podroze');
                $zap2 = mysqli_query($pol,'SELECT cel,dataWyjazdu FROM wycieczki WHERE dostepna = 1');
                while ($dane=mysqli_fetch_row($zap2)) {
                echo "<li>Dnia $dane[1] pojechaliśmy do $dane[0]</li>";
            };
            ?>
        </ol>
    </section>
    <footer>
            Stronę wykonał Benjamin x Christopher Redfield
    </footer>
</body>
</html>