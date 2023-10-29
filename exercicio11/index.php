<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercicio 11</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form action="index.php" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];
        echo "<h2>Tabuada de $numero:</h2>";
        echo "<table border='5'>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>$numero  x   $i</td><td>=</td><td>$resultado</td></tr>";
        }

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
            // Inserir os dados na tabela no banco de dados
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                $query = "INSERT INTO exercicio11 (numero, tabuada) VALUES ('$numero', '$resultado')";

                if ($conexao->query($query) === TRUE) {
                    echo "Dados inseridos com sucesso no banco de dados";
                } else {
                    echo "Erro ao inserir dados no banco de dados: " . $conexao->error;
                }
            }

            // Fechar a conexão com o banco de dados
            $conexao->close();
        }
    }
    ?>
</body>
</html>
