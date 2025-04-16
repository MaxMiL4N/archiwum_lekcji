<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p><b>1.</b> Jak oceniasz swoje umiejętności obsługi formularzy w języku PHP?</p>
    <table style="width:250px;text-align:center;"><tr><td style="width:70px;">Słabo</td><td style="width:70px;">Dobrze</td><td style="width:70px;">Bardzo dobrze</td></tr></table>
    <input type="range" value="0" name="skala_oceny" max="2" style="width:250px;">
    <p><b>2.</b> Napisz w kilku słowach własną ocenę swojego zaangażowania w naukę przedmiotu.</p>
    <textarea name="textarea" style="resize:none;width:250px;height:50px;"></textarea>
    <p><b>3.</b> Wybierz zdjęcie najlepiej opisujące ciebie.</p>
    <select name="select">
        <option>Silly</option>
        <option>Eepy</option>
        <option>Angy</option>
    </select>
    <p><input type="submit" value="Wyślij"></p>
</form>
<?php
    @$ocena_umiejetnosci = $_POST['skala_oceny'];
    @$napisany_tekst = $_POST['textarea'];
    @$wybrane_zdjecie = $_POST['select'];

    if ($napisany_tekst != "") {
// PYT 1
    

    if ($ocena_umiejetnosci == 0) {
        echo "<p><b>Ocena umiejętności:</b> Słabo</p>";
    }
    elseif ($ocena_umiejetnosci == 1) {
        echo "<p><b>Ocena umiejętności:</b> Dobrze</p>";
    }
    elseif ($ocena_umiejetnosci == 2) {
        echo "<p><b>Ocena umiejętności:</b> Bardzo dobrze</p>";
    }

// PYT 2

    echo "<table>
                <tr>
                    <td style='height:50px;'><b>Ocena własna:</b></td>
                    <td style='width:250px;height:50px;'>$napisany_tekst</td>
                </tr>
            </table>";
    
// PYT 3

    echo "<b>Zdjęcie opisujące ciebie:</b><br><img src='$wybrane_zdjecie.png' style='height:100px;'>";

}
else {
    echo "❌ <b style='color:red;'>Nie uzupełniono ankiety.</b> ❌";
}
?>
    <!--
        Utwórz ankietę składającą się z trzech pytań. 
        Pyt 1: Jak oceniasz swoje umiejętności obsługi formularzy w języku PHP? 3 warianty odpowiedzi: Słabo - Dobrze - Bardzo dobrze
        Pyt 2: Napisz w kilku słowach własną ocenę swojego zaangażowania w naukę przedmiotu. 
        Pyt 3: Z listy rozwijanej wybierz jedną z trzech opcji która zawiera nazwy plików graficznych najlepiej opisujące ciebie.
    -->
</body>
</html>