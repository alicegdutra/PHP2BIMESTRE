<?php

function exibirData(){
    echo "Hoje é dia ".date("d");
}

function somar($n1, $n2){
    return $n1 + $n2;
}

function subtrair($n1, $n2){
    return $n1 - $n2;
}

function multiplicar($n1, $n2){
    return $n1 * $n2;
}

function dividir($n1, $n2){
    return $n1 / $n2;
}

function positivoNegativo($numero){
    if ($numero > 0){
        return "Valor Positivo!";
    } elseif($numero < 0) {
        return "Valor Negativo!";
    } else{
        return "Valor igual a 0";
    }
}

function maiorValor($valor2, $menor_valor){
    if ($valor2 < $menor_valor){
        $menor_valor = $valor2;
        $i = 2;
    }
    $valor3 = $_POST['valor3'];
    if ($valor3 < $menor_valor){
        $menor_valor = $valor3;
        $i = 3;
    }
    $valor4 = $_POST['valor4'];
    if ($valor4 < $menor_valor){
        $menor_valor = $valor4;
        $i = 4;
    }
    $valor5 = $_POST['valor5'];
    if ($valor5 < $menor_valor){
        $menor_valor = $valor5;
        $i = 5;
    }
    $valor6 = $_POST['valor6'];
    if ($valor6 < $menor_valor){
        $menor_valor = $valor6;
        $i = 6;
    }
    $valor7 = $_POST['valor7'];
    if ($valor7 < $menor_valor){
        $menor_valor = $valor7;
        $i = 7;
    }
}