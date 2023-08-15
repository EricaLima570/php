<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=drive-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Exercicio 5 </title>
</head>
<body>
    <form action="" method="post">
        <h2>Exercicio 5</h2>
        <br>
        <div>
            <label for="value1">lado 1 do triangulo</label>
            <input type="number" name="value1">
        </div>
        <div>
            <label for="value2">lado 2 do triangulo</label>
            <input type="number" name="value2">
        </div>
        <div>
            <label for="value3">lado 3 do triangulo</label>
            <input type="number" name="value3">
        </div>
        <input type="submit" value="Enviar">       
    </form>
    <?php
    if(isset($_POST['value1']) && isset($_POST['value2']) && isset($_POST['value3'])) {
        $num1 = $_POST['value1'];
        $num2 = $_POST['value2'];
        $num3 = $_POST['value3'];
      
	    if (($value1 + $value2 > $value3) && ($value1 + $value3 > $value2) && ($value2 + $value3 > $value1)) {
            if (($value1 == $value2) && ($value2 == $value3)) {
                echo  '<p>Triângulo equilátero</p>';
            } 
            else if (($num1 != $num2) && ($num1 != $num3) && ($num2 != $num3)) {
                echo '<p>Triângulo escaleno</p>';
            } 
            else {
                echo '<p>Triângulo isosceles</p>';
            }
        } 
        else {
            echo '<p>Não é um triângulo</p>';
        }
    }
    ?>
</body>
</html>