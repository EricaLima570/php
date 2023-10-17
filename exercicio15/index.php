<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio15/style.css">
    <title>Exercicio 15</title>
</head>
<body>
    <h1>Decaimento Radioativo</h1>
    <form method="POST" action="index.php">
        <label for="massa_inicial">Massa Inicial do Material:</label>
        <input type="text" name="massa_inicial" id="massa_inicial" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['massa_inicial'])) {
        $massa_inicial = floatval($_POST['massa_inicial']);
        $massa_desejada = 0.10;
        $taxa_decaimento = 0.25;
        $tempo = 0;

        while ($massa_inicial > $massa_desejada) {
            $massa_inicial *= $taxa_decaimento;
            $tempo += 30;
        }

        echo "<p>Tempo necessário para a massa ser menor que 0.10: $tempo segundos.</p>";
    }
    ?>
</body>
</html>
