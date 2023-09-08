<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/exercicio6/style.css">
    <title>Exercício 6</title>
</head>
<body>
    <h1>Exercício 6</h1>
    <form action="/exercicio6" method="get">
        <div>
            <label for="value1">Digite um valor entre 1 e 12</label>
            <input type="number" name="value1">
            <input type="submit" value="Enviar">  
        </div>
    </form>
    <?php
    if (isset($_GET["value1"])) {
        $value1 = $_GET['value1'];
        switch ($value1) {
            case 1:
                echo "Janeiro";
                break;
            case 2:
                echo "Fevereiro";
                break;
            case 3:
                echo "Março";
                break;
            case 4: 
                echo "Abril";
                break;
            case 5:
                echo "Maio";
                break;
            case 6:
                echo "Junho";
                break;
            case 7:
                echo "Julho";
                break;
            case 8:
                echo "Agosto";
                break;
            case 9:
                echo "Setembro";
                break;
            case 10:
                echo "Outubro";
                break;
            case 11:
                echo "Novembro";
                break;
            case 12:
                echo "Dezembro";
                break;
            default:
                echo "Não corresponde a um Mês válido";
                break;
        }
    }	
    ?>
</body>
</html>

