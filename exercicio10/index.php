<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=drive-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 10</title>
    </head>

<body>
    <form action="index.php" method="post">
        <label>Insira 20 números separando por virgula</label>
        <input type="text" id="value" name="value">
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["value"])) {
        $value = $_POST["value"];
        $numbers = explode(",", $value);

        // Remove espaços em branco adicionais e filtra apenas os valores numéricos
        $filteredNumbers = array_filter(array_map('trim', $numbers), 'is_numeric');

        // Calcula a soma dos números positivos
        $positiveNumbers = array_filter($filteredNumbers, function ($number) {
            return $number > 0;
        });

        $sumPositives = array_sum($positiveNumbers);

        // Conta o total de números negativos
        $negativeNumbers = array_filter($filteredNumbers, function ($number) {
            return $number < 0;
        });

        $countNegatives = count($negativeNumbers);

        echo "<p>A soma dos números positivos é: $sumPositives</p>";
        echo "<p>O total de números negativos é: $countNegatives</p>";
    }
    ?>
</body>
</html>