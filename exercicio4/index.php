<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
	<title> Exercicio 4 </title>
</head>
<body>
	<form action="" method="post">
        <h2>Exercicio 3</h2>
        <br>
        <div>
            <label for="value1">Digite o primeiro valor</label>
            <input type="number" name="value1">
        </div>
        <div>
            <label for="value2">Digite o segundo valor</label>
            <input type="number" name="value2">
        </div>
        <div>
            <label for="value3">Digite o terceiro valor</label>
            <input type="number" name="value3">
        </div>
        <input type="submit" value="Enviar">       
    </form>
    <?php
    if (isset( $_POST["value1"])){
        $value1 = $_POST['value1'];
        $value2 = $_POST['value2'];
        $value3 = $_POST['value3'];

        $values = [$value1, $value2, $value3];

        // ordena os números em ordem decrescente
        rsort($values);

        // imprime os números em ordem decrescente
        echo "<h2> Valores em ordem decrescente:</h2>";
        
        foreach ($values as $value) {
            echo "<p class='result'>".$value."<p>";
        }
    }
    ?>
</body>
</html>