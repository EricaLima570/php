<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Exercicio 10</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <label>Insira 20 números</label>
            <input type="text" id="value" name="value">
            <input type="submit" value="Enviar">
        </form>
        <?php
        // Verifica se o formulário foi submetido
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

            // Configuração de conexão com o banco de dados
            $dbHost = 'database_titans';
            $dbUser = 'user_erica';
            $dbPassword = 'ls23072019';
            $dbName = 'titans';

            // Conectar ao banco de dados
            $conexao = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

            // Verificar erros na conexão
            if ($conexao->connect_errno) {
                echo "Erro:" . $conexao->connect_error;
            } else {
                // Inserir os dados na tabela do banco de dados
                $insertQuery = "INSERT INTO exercicio10 (numbers, sumPositives, countNegatives) VALUES ('$value', '$sumPositives', '$countNegatives')";

                if ($conexao->query($insertQuery)) {
                    echo "Dados inseridos com sucesso no banco de dados";
                } else {
                    echo "Erro ao inserir dados no banco de dados: " . $conexao->error;
                }

                // Fechar a conexão com o banco de dados
                $conexao->close();
            }
        }
        ?>
    </body>
</html>
