<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio 4 </title>
</head>
<body>
    <form action="" method="post">
        <h2>Exercicio 4</h2>
        <br>
        <div>
            <label for="value1">Digite o primeiro valor</label>
            <input required type="number" name="value1">
        </div>
        <div>
            <label for="value2">Digite o segundo valor</label>
            <input required type="number" name="value2">
        </div>
        <div>
            <label for="value3">Digite o terceiro valor</label>
            <input required type="number" name="value3">
        </div>
        <input type="submit" value="Enviar">       
    </form>
    <?php
    if (isset( $_POST["value1"])){
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $value3 = $_POST['value3'];
        if ($value1 >= $value2 && $value1 >= $value3) {
            if ($value2 >= $value3) {
                $first = $value1;
                $second = $value2;
                $third = $value3;
            } else {
                $first = $value1;
                $second = $value3;
                $third = $value2;
            }
        } elseif ($value2 >= $value1 && $value2 >= $value3) {
            if ($value1 >= $value3) {
                $first = $value2;
                $second = $value1;
                $third = $value3;
            } else {
                $first = $value2;
                $second = $value3;
                $third = $value1;
            }
        } else {
            if ($value1 >= $value2) {
                $first = $value3;
                $second = $value1;
                $third = $value2;
            } else {
                $first = $value3;
                $second = $value2;
                $third = $value1;
            }
        }
        echo "Ordem decrescente: $first, $second, $third";
    }
    ?>
</body>
</html>