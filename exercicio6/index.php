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
        <label for="value1">Digite um valore entre 1 e 12</label>
        <input type="number" name="value1">
        <input type="submit" value="Enviar">  
    </div>
    </form>   
</body>
<?php

    if (key_exists('num', $_GET)){
    $num = $_GET['num'];
    }
    
    $indicemes=array(  
        1 => 'Janeiro',
        2 => 'Fevereiro',
        3 => 'Março',
        4 => 'Abril',
        5 => 'Maio',
        6 => 'Junho',
        7 => 'Julho',
        8 => 'Agosto',
        9 => 'Setembro',
        10 =>'Outubro',
        11 =>'Novembro',
        12 =>'Dezembro',
    );

    if ($value1>= 1 && $value1 <= 12) {
        echo "<div class='result'>Número $value1 corresponde ao mês de $indicemes[$value1] .</div>";
    } else {
        echo "<div class='result'>$value1 Não corresponde a um mês válido.</div>";
    }
    

?>
</html>