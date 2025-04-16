<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularze</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr><td>Imię</td><td><input type="text" name="imie"></td></tr>
            <tr><td>Adres e-mail</td><td><input type="email" name="mail"></td></tr>
        </table>
        <label><input type="radio" name="plec" value="Mężczyzna">Mężczyzna</label><br>
        <label><input type="radio" name="plec" value="Kobieta">Kobieta</label><br>
        Główny kolor <select name="kolor">
            <option value="Niebieski">Niebieski</option>
            <option value="Czerwony">Czerwony</option>
            <option value="Zielony">Zielony</option>
        </select><br>
        Własny kolor <input type="color" name="wlasny_kolor"><br>
        <input type="submit" value="Wypisz">
    </form>
    <?php
        @$imie = $_POST['imie']; // Pobieranie danych z kontrolki imie formularza
        @$mail = $_POST['mail'];
        @$plec = $_POST['plec'];
        @$kolor = $_POST['kolor'];
        @$wlasny_kolor = $_POST['wlasny_kolor'];
        echo "$imie, płeć: $plec, twój e-mail to $mail<br>";
        if ($kolor == "Niebieski") {
            echo "Wybrany kolor: <label class='niebieski'>$kolor</label>";
        }
        elseif($kolor == "Czerwony") {
            echo "Wybrany kolor: <label class='czerwony'>$kolor</label>";
        }
        elseif($kolor == "Zielony") {
            echo "Wybrany kolor: <label class='zielony'>$kolor</label>";
        }
        echo "<br>Własny kolor: <label style='color:$wlasny_kolor;'>██████</label>";
    ?>
<style>
    .niebieski{
        color:blue;
    }
    .czerwony{
        color:red;
    }
    .zielony{
        color:green;
    }
</body>
</html>