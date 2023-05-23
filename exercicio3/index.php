<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio3/style.css">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Exercicio 3</h1>
    <form action="/exercicio3/index.php" method="post">
    <div>
        <label for="name">Digite o seu Nome:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Digite a sua idade:</label>
        <input type="number" min="0"  onkeypress="return event.charCode >= 48" min="1" name="age">
    </div>
    <div>
        <label for="sex">Digite seu sexo:</label>
            <select name="sex" id="">
                <option>feminino</option>
                <option>masculino</option>
            </select>        
    </div>
    <input type="submit" value="Enviar">
    </form>
    <br>   
    <?php
    if(isset($_POST["age"]) && isset($_POST["sex"]) && isset($_POST["name"])) {
        $name = $_POST["name"];
        $sex = $_POST["sex"];
        $age = $_POST["age"];
        if ($sex== "feminino"  && $age<25 ){
            echo "<div class='result'> $name: ACEITA</div>";
        } 
        else {
            echo "<div class='result'> $name : NÃO ACEITA</div>";
        }
    }
    ?>    
</body>
</html>
