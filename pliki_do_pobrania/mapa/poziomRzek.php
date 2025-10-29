<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <img src="obraz1.png" alt="Mapa polski">
    </header>
    <header>
        <h1>Rzeki w województwie dolnośląskim</h1>
    </header>
    <nav>
        <form action="" method="POST">
            <label class="menu"><input type="radio" name="menu" value="wszystkie">Wszystkie</label> 
            <label class="menu"><input type="radio" name="menu" value="stan_ostrzegawczy">Ponad stan ostrzegawczy</label> 
            <label class="menu"><input type="radio" name="menu" value="stan_alarmowy">Ponad stan alarmowy</label>
            <input type="submit" value="Pokaż">
        </form>
    </nav>
    <aside>
        <h3>Stany na dzień 2022-05-05</h3>
        <table>
            <tr>
                <th>Wodomierz</th><th>Rzeka</th><th>Ostrzegawczy</th><th>Alarmowy</th><th>Aktualny</th>
            </tr>
            <?php
                $pol = mysqli_connect('localhost','root','','rzeki');
                if(isset($_POST['menu'])) {
                if ($_POST['menu'] == "wszystkie") {
                    $zap1 = mysqli_query($pol,"SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05';");
                    while ($dane = mysqli_fetch_row($zap1)) {
                        echo "<tr>
                                <td>$dane[0]</td>
                                <td>$dane[1]</td>
                                <td>$dane[2]</td>
                                <td>$dane[3]</td>
                                <td>$dane[4]</td>
                            </tr>";
                    }
                }
                else if ($_POST['menu'] == "stan_ostrzegawczy") {
                    $zap1 = mysqli_query($pol,"SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05' AND stanWody > stanOstrzegawczy;");
                    while ($dane = mysqli_fetch_row($zap1)) {
                        echo "<tr>
                                <td>$dane[0]</td>
                                <td>$dane[1]</td>
                                <td>$dane[2]</td>
                                <td>$dane[3]</td>
                                <td>$dane[4]</td>
                            </tr>";
                    }                   
                }
                else if ($_POST['menu'] == "stan_alarmowy") {
                    $zap1 = mysqli_query($pol,"SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05' AND stanWody > stanAlarmowy;");
                    while ($dane = mysqli_fetch_row($zap1)) {
                        echo "<tr>
                                <td>$dane[0]</td>
                                <td>$dane[1]</td>
                                <td>$dane[2]</td>
                                <td>$dane[3]</td>
                                <td>$dane[4]</td>
                            </tr>";
                    }
                }
            }
                
            else {
                    $zap1 = mysqli_query($pol,"SELECT nazwa, rzeka, stanOstrzegawczy, stanAlarmowy, stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id = wodowskazy_id WHERE dataPomiaru='2022-05-05';");
                    while ($dane = mysqli_fetch_row($zap1)) {
                        echo "<tr>
                                <td>$dane[0]</td>
                                <td>$dane[1]</td>
                                <td>$dane[2]</td>
                                <td>$dane[3]</td>
                                <td>$dane[4]</td>
                            </tr>";
                    }
                }
            ?>
        </table>
    </aside>
    <article>
        <h3>Informacje</h3>
        <ul>
            <li>Brak ostrzeżeń o burzach z gradem</li>
            <li>Smog w mieście Wrocław</li>
            <li>Silny wiatr w Karkonoszach</li>
        </ul>
        <h3>Średnie stany wód</h3>
        <?php
            $zap2 = mysqli_query($pol,"SELECT dataPomiaru, AVG(stanWody) FROM pomiary GROUP BY dataPomiaru;");
            while ($dane = mysqli_fetch_row($zap2)) {
                echo "<p>$dane[0]: $dane[1]</p>";
            }
        ?>
        <a href="https://komunikaty.pl">Dowiedz się wiecej</a>
        <img src="obraz2.jpg" alt="rzeka">
    </article>
    <footer>
        <p>Stronę wykonał GingerBrave i Dark Cacao Cookie</p>
    </footer>
</body>
</html>