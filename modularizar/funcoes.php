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

function menorValor($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7){
    $menor_valor = $valor1;
    $i = 1;
    if ($valor2 < $menor_valor){
        $menor_valor = $valor2;
        $i = 2;
    }
    
    if ($valor3 < $menor_valor){
        $menor_valor = $valor3;
        $i = 3;
    }
    
    if ($valor4 < $menor_valor){
        $menor_valor = $valor4;
        $i = 4;
    }
  
    if ($valor5 < $menor_valor){
        $menor_valor = $valor5;
        $i = 5;
    }
   
    if ($valor6 < $menor_valor){
        $menor_valor = $valor6;
        $i = 6;
    }
    
    if ($valor7 < $menor_valor){
        $menor_valor = $valor7;
        $i = 7;
    }

    return $menor_valor; // Retorna o menor valor encontrado

function calcularSoma($valor, $valor2) {
    $soma = $valor + $valor2;
    if ($valor != $valor2) {
        return $soma;
    } else {
         return $soma * 3;
    }
}

}