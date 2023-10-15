<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio7/style.css">
    <title>Exercicio 7</title>
</head>
<body>
    <form action="/exercicio7/index.php" method="post">
    <h1>Exercicio 7</h1>
    <br>
    <h2>Insira o nome do livro e selecione o tipo do usuario:Professor ou Aluno</h2>
    <div>
        <label for="name">Digite o nome do livro:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="user">Selecione o usuário</label>
            <select name="user" id="user">
                <option>Professor</option>
                <option>Aluno</option>
            </select>        
    </div>
    <input type="submit" value="Enviar">
    </form>
    <?php
         if(isset($_POST['name']) && isset($_POST['user'])) {
            $name = $_POST["name"];
            $user = $_POST["user"];
            if ($user== "Professor"){
                echo "<div> $user: Você tem 10 dias para devolver o livro $name</div>";
            } 
            else {
                echo "<div> $user: Você tem 3 dias para devolver o livro $name</div>";
            }
         }
    ?>
    </body>
</html>
