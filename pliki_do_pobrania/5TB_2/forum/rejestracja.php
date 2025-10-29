<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasze hobby</title>
    <link rel="stylesheet" href="hobby.css">
</head>
<body>
    <header>
        <h1>FORUM HOBBYSTYCZNE</h1>
    </header>
        <section id="panel_l">
            <?php
                $pol=mysqli_connect('localhost', 'root', '', 'forum');

                $php_nick = $_POST['nick'];
                $php_hobby = $_POST['hobby'];
                $php_zawod = $_POST['zawod'];
                $php_plec = $_POST['plec'];
                $php_login = $_POST['login'];
                $php_haslo = $_POST['haslo'];

                $zap=mysqli_query($pol,"INSERT INTO uzytkownicy values (null,'$php_nick','$php_hobby','$php_zawod','$php_plec')");

                echo "Konto $php_nick zostało zarejestrowane na forum hobbystycznym";

                mysqli_close($pol);
            ?>
        </section>
        <section id="panel_r">
            <h3>TEMATY NA FORUM</h3>
            <ul>
                <li>Hodowla</li>
                <ul>
                    <li>Psy</li>
                    <li>Koty</li>
                </ul>
                <li>Muzyka</li>
                <li>Gry komputerowe</li>
            </ul>
        </section>
</body>
</html>