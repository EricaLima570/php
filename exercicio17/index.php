<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 17</title>
</head>
<body>
    <h1>Calculadora de Vetor</h1>
        <form method="post">
            <label for="numeros">Digite 20 números inteiros separados por vírgula:</label>
            <input type="text" name="numeros" id="numeros">
            <input type="submit" value="Enviar">
        </form>  
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["numeros"])) {
                $numeros = $_POST["numeros"];
                $numeros = explode(",", $numeros);

                $maior = max($numeros);
                $menor = min($numeros);


                $numerosPares = 0;
                foreach ($numeros as $valor) {
                    if ($valor % 2 == 0) {
                        $numerosPares++;
                    }
                }
                $percentualPares = ($numerosPares / count($numeros)) * 100;

                $soma = array_sum($numeros);
                $media = $soma / count($numeros);

                echo "<h2>Resultados</h2>";
                echo "<p>Maior Valor: $maior</p>";
                echo "<p>Menor Valor: $menor</p>";
                echo "<p>Percentual de Números Pares: $percentualPares%</p>";
                echo "<p>Média dos Elementos: $media</p>";
            }   
        ?>     
</body>
</html>