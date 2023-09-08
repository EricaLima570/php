<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 8 </title>
</head>
<body>
    <form action="" method="get">
        <label for="numero"> Digite um número:  </label>
        <input type="number" id="numero" name="numero">
        <button type="submit">Enviar</button>
    </form>
<?php
    if (isset($_GET['numero'])) {
        $numero = intval($_GET['numero']);

        if ($numero >= 1) {
            echo "<h2>Números de 1 até $numero:</h2>";
            for ($i = 1; $i <= $numero; $i++) {
                echo "$i ";
            }

            $produto = 1;
            for ($i = 1; $i <= $numero; $i++) {
                $produto *= $i;
            }

            echo "<h2>Produto dos números de 1 até $numero:</h2>";
            echo $produto;
        } else {
            echo "<p>O número deve ser maior ou igual a 1.</p>";
        }
    }
    ?>
</body>
</html>