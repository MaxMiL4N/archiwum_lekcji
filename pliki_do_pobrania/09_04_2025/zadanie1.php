<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
    <a href="zadanie2.php">ZADANIE 2</a> <a href="zadanie3.php">ZADANIE 3</a><br><br>

    <form action="" method="post">
        <input type="text" name="srednia"> Średnia<br>
        <input type="text" name="zachowanie"> Zachowanie<br>
        <input type="submit" value="Czy jest pasek?"><br>
    </form>
    <?php
        @$srednia = $_POST['srednia'];
        @$zachowanie = $_POST['zachowanie'];
        echo "Średnia: $srednia <br>";
        echo "Zachowanie: $zachowanie <br>";
        if ($srednia >= 4.75 && ($zachowanie == "wzorowe" || $zachowanie == "bardzo dobre")) {
            echo "<h3>Jest pasek!</h3> <p style='color:red;'>█████████████████████████████████</p>";
        }
        else {
            echo "<h3>Nie ma paska!</h3>";
        }
    ?>
</body>
</html>