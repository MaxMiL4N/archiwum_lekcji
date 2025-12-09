<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <nav>
        <div id="blok1" onclick="strona(1)">
            Baza
        </div>
        <div id="blok2" onclick="strona(2)">
            Opisy
        </div>
        <div id="blok3" onclick="strona(3)">
            Galeria
        </div>
    </nav>
    <script>
        function strona(x) {
            if (x == 1) {
                document.getElementById("blok1").style.backgroundColor = "mistyrose";
                document.getElementById("blok2").style.backgroundColor = "#FFAEA5";
                document.getElementById("blok3").style.backgroundColor = "#FFAEA5";

                document.getElementById("sekcja1").style.display = "block";
                document.getElementById("sekcja2").style.display = "none";
                document.getElementById("sekcja3").style.display = "none";
            }
            else if (x == 2) {
                document.getElementById("blok2").style.backgroundColor = "mistyrose";
                document.getElementById("blok1").style.backgroundColor = "#FFAEA5";
                document.getElementById("blok3").style.backgroundColor = "#FFAEA5";

                document.getElementById("sekcja2").style.display = "block";
                document.getElementById("sekcja1").style.display = "none";
                document.getElementById("sekcja3").style.display = "none";
            }
            else if (x == 3) {
                document.getElementById("blok3").style.backgroundColor = "mistyrose";
                document.getElementById("blok2").style.backgroundColor = "#FFAEA5";
                document.getElementById("blok1").style.backgroundColor = "#FFAEA5";

                document.getElementById("sekcja3").style.display = "block";
                document.getElementById("sekcja2").style.display = "none";
                document.getElementById("sekcja1").style.display = "none";
            }
        }
    </script>
    <main>
        <section id="sekcja1">
            <h3>
                Baza Smoków
            </h3>
            <form action="" method="POST">
                <select name="wybor_kraju">
                    <?php
                        $pol = mysqli_connect("localhost","root","","smoki");
                        $zap1 = mysqli_query($pol,"SELECT DISTINCT smok.pochodzenie FROM smok ORDER BY smok.pochodzenie ASC");
                        while ($dane = mysqli_fetch_row($zap1)) {
                            echo "
                                <option>
                                    $dane[0]
                                </option>
                            ";
                        }
                    ?>
                </select>
                <input type="submit" value="Szukaj">
            </form>
            <table>
                <tr>
                    <th>Nazwa</th><th>Długość</th><th>Szerokość</th>
                </tr>
                <?php
                    @$kraj = @$_POST['wybor_kraju'];
                    $zap2 = mysqli_query($pol,"SELECT nazwa,dlugosc,szerokosc FROM smok WHERE pochodzenie LIKE '$kraj';");
                    while ($dane = mysqli_fetch_row($zap2)) {
                        echo "
                            <tr>
                                <td>
                                    $dane[0]
                                </td>
                                <td>
                                    $dane[1]
                                </td>
                                <td>
                                    $dane[2]
                                </td>
                            </tr>
                        ";
                    }
                ?>
            </table>
        </section>
        <section id="sekcja2">
            <h3>Opisy smoków</h3>
            <dl>
                <dt>
                    Smok czerwony
                </dt>
                <dd>
                    Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.
                </dd>
                <dt>
                    Smok zielony
                </dt>
                <dd>
                    Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.
                </dd>
                <dt>
                    Smok niebieski
                </dt>
                <dd>
                    Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.
                </dd>
            </dl>
        </section>
        <section id="sekcja3">
            <h3>
                Galeria
            </h3>
            <img src="smok1.JPG" alt="Smok Czerwony">
            <img src="smok2.JPG" alt="Smok wielki">
            <img src="smok3.JPG" alt="Skrzydlaty łaciaty">
        </section>
    </main>
    <footer>

    </footer>
</body>
</html>