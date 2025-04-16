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
    <input type="checkbox" name="o[]" value="ból głowy">Ból głowy<br>
    <input type="checkbox" name="o[]" value="kaszel">Kaszel<br>
    <input type="checkbox" name="o[]" value="ból gardła">ból gardła<br>
    <input type="checkbox" name="o[]" value="ból ucha">Ból ucha<br>
    <input type="checkbox" name="o[]" value="ból mięśni">Ból mięśni<br>
    <input type="checkbox" name="o[]" value="ból brzucha">Ból brzucha<br>

    <input type="submit" value="Wyślij">
</form>
<?php
    if (isset($_POST['o'])) {
        for ($i = 0;$i < count($_POST['o']);$i++) {
        echo $_POST['o'][$i]."<br>";
        }
    }
    else{
        echo "Nie wybrano";
    }
?>
</body>
</html>