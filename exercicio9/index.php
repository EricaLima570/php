<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title> Exercicio 9 </title>
</head>
<body>
	<form action="index.php" method="post">
        <label for="quantidade">Digite o número de vezes que deseja imprimir a palavra "SOL":</label>
        <input type="number" id="quantidade" name="quantidade" min="1" required>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST["quantidade"])) {
        $quantidade = intval($_POST["quantidade"]);

        if ($quantidade >= 1) {
            echo "<h2>Resultado:</h2>";
            for ($i = 0; $i < $quantidade; $i++) {
                echo "SOL ";
            }
        } else {
            echo "<p>O número deve ser maior ou igual a 1.</p>";
        }
    }
    ?>
</body>
</html>