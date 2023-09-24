<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio12/style.css">
    <title>Exercício 12</title>
</head>
<body>
    <h1>Imprimir Palavra</h1>
    <form action="index.php" method="post">
        <label for="palavra">Digite uma palavra: </label>
        <input type="text" id="palavra" name="palavra">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_POST["palavra"])) {
        $palavra = $_POST["palavra"];

        for ($i = 1; $i <= 4; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo $palavra . ' ';
            }
            echo "<br>";
        }
    }
    ?>
</body>
</html>





