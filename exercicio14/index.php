<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 14</title>
</head>
<body>
    <h1>Calculadora de Crescimento</h1>
    <form method="index.php" action="post">
        <label for="altura_chico">Altura de Chico(insira o valor em metros):</label>
        <input type="text" name="alt_chico" id="alt_chico" required>
        <br>
        <label for="alt_juca">Altura de Juca (insira o valor em metros):</label>
        <input type="text" name="alt_juca" id="alt_juca" required>
        <br>
        <input type="submit" name="calcular" value="Calcular">
    </form>
</body>
</html>
