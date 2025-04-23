<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamów jedzenie</title>
</head>
<body>
    <!--
        w języku php stwórz system do obliczenia wartości zamówienia. twoja strona to system zamawiania jedzenia. do wyboru jest pizza, zapiekanka, hotdog, hamburger.
        checkbox, obok każdego jest do wyboru ilość w polu number. Po przycisku podsumowanie ma wyswietlic sie to co uzytkownik zamowil, cena jednostkowa oraz suma (np. zapiekanka x.xx zł x 2 = x.xx zł)
        Domyślkna wartość to 1.
        _________________________
        Pizza - 40.00 zł
        _________________________
        Zapiekanka - 15.00 zł
        _________________________
        Hotdog - 10.00 zł
        _________________________
        Hamburger - 20.00 zł
        _________________________
        Kurczak - 20.00 zł
        _________________________
    --> 

    <form action="" method="post">
        <h1>Wybierz jedzenie, ilość i kliknij w podsumowanie</h1>
        <h3>MENU:</h3>
        <table>
            <tr>
                <th>Jedzenie</th><th>Koszt</th><th>Ilość</th><th>Wybór</th>
            </tr>
            <tr>
                <th style="text-align:left;">🍕 Pizza</th><td>40 zł</td><td><input style="width:35px;"  type="number" name="ilosc_pizza" value="1"></td><td style="text-align:center;"><input type="checkbox" name="o[]" value="🍕 Pizza"></td>
            </tr>  
            <tr>
                <th style="text-align:left;">🥖 Zapiekanka</th><td>15 zł</td><td><input style="width:35px;" type="number" name="ilosc_zapiekanka" value="1"></td><td style="text-align:center;"><input type="checkbox" name="o[]" value="🥖 Zapiekanka"></td>
            </tr>
            <tr>
                <th style="text-align:left;">🌭 Hotdog</th><td>10 zł</td><td><input style="width:35px;"  type="number" name="ilosc_hotdog" value="1"></td><td style="text-align:center;"><input type="checkbox" name="o[]" value="🌭 Hotdog"></td>
            </tr>
            <tr>
                <th style="text-align:left;">🍔 Hamburger</th><td>20 zł</td><td><input style="width:35px;"  type="number" name="ilosc_hamburger" value="1"></td><td style="text-align:center;"><input type="checkbox" name="o[]" value="🍔 Hamburger"></td>
            </tr>
            <tr>
                <th style="text-align:left;">🐈‍⬛ Gulasz z kota</th><td>20 zł</td><td><input style="width:35px;"  type="number" name="ilosc_kurczak" value="1"></td><td style="text-align:center;"><input type="checkbox" name="o[]" value="🐈‍⬛ Gulasz z kota"></td>
            </tr>
        </table>
        <br><input type="submit" value="Podsumowanie">
    </form>
    <?php
        $koszt_pizza = 40;
        $koszt_zapiekanka = 15;
        $koszt_hotdog = 10;
        $koszt_hamburger = 20;
        $koszt_kurczak = 20;

        $iloscpizza = $_POST['ilosc_pizza'];
        $ilosczapiekanka = $_POST['ilosc_zapiekanka'];
        $iloschotdog = $_POST['ilosc_hotdog'];
        $iloschamburger = $_POST['ilosc_hamburger'];
        $ilosckurczak = $_POST['ilosc_kurczak'];

    if ($iloscpizza < 0 || $ilosczapiekanka < 0 || $iloschotdog < 0 || $iloschamburger < 0 || $ilosckurczak < 0) {
        echo "Wybrano negatywne wartości.";
    }
    else {
        if (isset($_POST['o'])) {
            echo "<table><tr>
                <th>Wybrane jedzenie</th>
                <th>Cena jednostkowa</th>
                <th>Ilość</th>
                <th>Koszt</th>
            </tr>";
            for ($i = 0;$i < count($_POST['o']);$i++) {
            echo "<tr><td>".$_POST['o'][$i]."</td><td>";
                if ($_POST['o'][$i] == "🍕 Pizza") {
                    $koszt_poj = 40;
                }
                elseif ($_POST['o'][$i] == "🥖 Zapiekanka") {
                    $koszt_poj = 15;
                }
                elseif ($_POST['o'][$i] == "🌭 Hotdog") {
                    $koszt_poj = 10;
                }
                elseif ($_POST['o'][$i] == "🍔 Hamburger") {
                    $koszt_poj = 20;
                }
                elseif ($_POST['o'][$i] == "🐈‍⬛ Gulasz z kota") {
                    $koszt_poj = 20;
                }
            echo $koszt_poj." zł</td><td>";
            if ($_POST['o'][$i] == "🍕 Pizza") {
                @$suma_pizza = ($koszt_pizza*$iloscpizza);
                echo $iloscpizza."</td><td style='text-align:right;'>".$suma_pizza." zł</td></tr>";
            }
            elseif ($_POST['o'][$i] == "🥖 Zapiekanka") {
                @$suma_zapiekanka = ($koszt_zapiekanka*$ilosczapiekanka);
                echo $ilosczapiekanka."</td><td style='text-align:right;'>".$suma_zapiekanka." zł</td></tr>";
            }
            elseif ($_POST['o'][$i] == "🌭 Hotdog") {
                @$suma_hotdog = ($koszt_hotdog*$iloschotdog);
                echo $iloschotdog."</td><td style='text-align:right;'>".$suma_hotdog." zł</td></tr>";
            }
            elseif ($_POST['o'][$i] == "🍔 Hamburger") {
                @$suma_hamburger = ($koszt_hamburger*$iloschamburger);
                echo $iloschamburger."</td><td style='text-align:right;'>".$suma_hamburger." zł</td></tr>";
            }
            elseif ($_POST['o'][$i] == "🐈‍⬛ Gulasz z kota") {
                @$suma_kurczak = ($koszt_kurczak*$ilosckurczak);
                echo $ilosckurczak."</td><td style='text-align:right;'>".$suma_kurczak." zł</td></tr>";
            }
            }
            echo "<tr>
                <td></td><td></td><th>SUMA</th><th style='text-align:right;'>".(@$suma_pizza+@$suma_zapiekanka+@$suma_hotdog+@$suma_hamburger+@$suma_kurczak)." zł</th>
            </tr>";
            echo "</table>";
        }
        else{
            echo "Nic nie wybrano.";
        }
    }
    ?>
</body>
</html>