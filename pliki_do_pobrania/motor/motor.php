<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <img src="motor.png" alt="motocykl" class="img_tlo">
    <header>
        <h1>Motocykle - moja pasja</h1>
    </header>
    <main>
        <h2>Gdzie pojechać?</h2>
        <dl>
            <?php
                $pol = mysqli_connect('localhost','root','','motory');
                $zap1 = mysqli_query($pol,"SELECT nazwa,opis,poczatek,zrodlo FROM wycieczki JOIN zdjecia ON zdjecia_id = zdjecia.id");
                while ($dane = mysqli_fetch_row($zap1)) {
                    echo "
                        <dt>$dane[0], rozpoczyna się w $dane[2], <a href='$dane[3].jpg'>Zobacz zdjęcie</a></dt>
                        <dd>$dane[1]</dd>
                    ";
                }
            ?>
        </dl>
    </main>
    <aside>
        <h2>Co kupić?</h2>
        <ol>
            <li>Honda CBR125R</li>
            <li>Yamaha YBR125</li>
            <li>Honda VFR800i</li>
            <li>Honda CBR1100XX</li>
            <li>BMW R1200GS LC</li>
        </ol>
    </aside>
    <article>
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek: <?php
            $zap2 = mysqli_query($pol,"SELECT COUNT(id) FROM wycieczki");
            $dane = mysqli_fetch_row($zap2);
            echo "$dane[0]";
            mysqli_close($pol);
        ?></p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
    </article>
    <footer>
        Stronę wykonał Shadow Milk Cookie i Silent Salt Cookie
    </footer>
</body>
</html>