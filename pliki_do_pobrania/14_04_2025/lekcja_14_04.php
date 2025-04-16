<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="input_a"><br>
        <input type="number" name="input_b"><br>
        <input type="checkbox" name="p" value="pole">Pole<br>
        <input type="checkbox" name="o" value="obwod">Obwód<br>
        <input type="submit" value="Oblicz"><br>
    </form>
    <?php
        @$a = $_POST['input_a'];
        @$b = $_POST['input_b'];
        if(isset($_POST['p']) == true && ($a != "" || $b != "")){ 
            @$pole = $a*$b;
            echo "Pole = $a * $b = $pole <br>";
        }
        else {

        }
        if(isset($_POST['o']) == true && ($a != "" || $b != "")){
            @$obwod = ($a*2)+($b*2);
            echo "Obwód = $a * 2 + $b * 2 = $obwod <br>";
        }
        else {

        }
        if((isset($_POST['p']) == false && isset($_POST['o']) == false) || ($a != "" || $b != "")) {
            echo "Nie wybrano metody obliczania lub nie wpisano liczb.";
        }
    ?>
    <script>
        // użytkownik formularzu podaje w dwóch polach tekstowych długości boków prostokąta. ponizej w polu wyboru moze zaznaczyc "Oblicz pole" lub "oblicz obwód". w kolejnej lini przycisk oblicz. napisz skrypt ktory ponizej przycisku wyswietli stosowne komunikaty z obliczeniami
    </script>
</body>
</html>