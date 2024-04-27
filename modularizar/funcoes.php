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