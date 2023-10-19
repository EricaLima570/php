<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 16</title>
</head>
<body>
    <h1>Verificador de Números Pares e Ímpares</h1>

    <form method="post" action="index.php">
        <h2>Informe 15 números inteiros:</h2>
        <?php
        for ($i = 1; $i <= 15; $i++) {
            echo "<label for='numero$i'>Número $i:</label>";
            echo "<input type='number' name='numero$i' required><br><br>";
        }
        ?>
        <input type="submit" value="Enviar" class="submit-button">

    </form>
</body>
</html>
