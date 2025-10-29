<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <nav>
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </nav>
    <aside>
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
                $pol = mysqli_connect('localhost','root','','hodowla');
                $zap1 = mysqli_query($pol,'SELECT rasa FROM rasy');
                while($wynik=mysqli_fetch_row($zap1)) {
                echo "<li>"."$wynik[0]"."</li>";
            }
            ?>
        </ol>
    </aside>
    <main>
        <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
        <?php
            $pol = mysqli_connect('localhost','root','','hodowla');

            $zap2 = mysqli_query($pol,'SELECT DISTINCT(swinki.data_ur),rasy.rasa,swinki.miot FROM rasy JOIN swinki ON swinki.id = rasy.id WHERE swinki.id = 1;');
            $dane=mysqli_fetch_row($zap2);
            echo "<h2>Rasa: "."$dane[1]"."</h2>";
            echo "<p>Data urodzenia: "."$dane[0]"."</p>";
            echo "<p>Oznaczenie miotu: "."$dane[2]"."</p>";
        ?>
        <hr>
        <h2>Świnki na tym miocie</h2>
        <?php
            $pol = mysqli_connect('localhost','root','','hodowla');

            $zap3 = mysqli_query($pol,'SELECT imie,cena,opis FROM swinki WHERE rasy_id=1;');
            while($dane=mysqli_fetch_row($zap3)) {
            echo "<h3>$dane[0] - $dane[1] zł</h3>";
            echo "<p>$dane[2]</p>";
            }
        ?>
    </main>
    <footer>
        <p>Stronę wykonał: 213087329432732748</p>
    </footer>
</body>
</html>