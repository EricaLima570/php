<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio2/style.css">
    <title>Exercicio 2</title>
</head>
<body>
    <h1>Exercicio 2</h1>
    <form action="/exercicio2/index.php" method="post">
        <div>
            <label for="value1">Digite um número</label>
            <input type="number" name="value1">
        </div>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if (isset($_POST["value1"])){
            $value1 = $_POST["value1"];
            if ($value1 % 10 == 0) {
                echo "<div class='result'>Número divisivel por 10</div>";
            }
            if ($value1 % 5 == 0) {
                echo "<div class='result'>Número divisível por 5</div>";
            }
            if ($value1 % 2 == 0) {
                echo "<div class='result'>Número divisível por 2</div>";
            }
            if($value1%5!=0 && $value1%2!=0 && $value1%10!=0) {
                echo "<div class='result'>$value1 Não é divisivel por 10,5 ou 2</div>";
            }
        }
    ?>    
</body>
</html>