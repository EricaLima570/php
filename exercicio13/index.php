<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio13/style.css">
    <title>Exercício 13</title>
</head>
<body>
    <h1>Contador de Números entre 100 e 200</h1>
    <form action="index.php" method="post">
        <label for="number">Digite um número (caso deseje encerrar ,digite 0):</label>
        <input type="number" name="number" id="number" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $count = 0;
        $number = $_POST["number"];
        
        while ($number != 0) {
            if ($number >= 100 && $number <= 200) {
                $count++;
            }
            $number = $_POST["number"];
        }
        
        echo "<p>Foram digitados $count números entre 100 e 200.</p>";
    }
    ?>
</body>
</html>