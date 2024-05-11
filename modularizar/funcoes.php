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

    return array($menor_valor, $i); // Retorna o menor valor encontrado
}

function calcularSoma($valor, $valor2) {
    $soma = $valor + $valor2;
    if ($valor != $valor2) {
        return $soma;
    } else {
         return $soma * 3;
    }
}

function multiplicacao($valor) {
    $resposta = array();
    for ($cont = 0; $cont < 11; $cont++) {
        $mult = $valor * $cont;
        $resposta[] = "$valor x $cont = $mult";
    }
    return $resposta;
}

function calcularFatorial($numero) {
    $fatorial = 1;
    $r = "";
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
        $r .= "$i ";
        if ($i < $numero) {
            $r .= "x ";
        }
    }
    $r .= "= $fatorial";
    return $r;
}

function ordenarValores($valorA, $valorB) {
    if ($valorA > $valorB)
        return "Valores em ordem crescente: $valorB - $valorA";
    elseif ($valorB > $valorA)
        return "Valores em ordem crescente: $valorA - $valorB";
    else
        return "Números iguais: $valorA. Insira os números novamente.";
}

function converterCm($valor){
    $cm = $valor*100;
    echo "$valor m, em centímeros, equivale a : $cm cm";
}


function calcularArea($area){
    $tintaL = $area / 3;
    $latas = ($tintaL/18);
    $total = $latas * 80; 
    echo "A quantidade de lata(s) de tinta necessária(s): $latas<br>";
    echo "Preço total: R$ ".number_format($total, 2, ',', '.');
}



function dataAniversario($valor){
        $anoatual = 2024;
        $idade = $anoatual - $valor;
        $dias = $idade * 365;
        $idade2 = 2025 - $valor;
}

    function calcularImc($valor1, $valor2){
        $imc = $valor1 / ($valor2**2);
        echo "o valor do IMC é: $imc";
        echo "<a href='https://www.programasaudefacil.com.br/calculadora-de-imc'> Leia mais </a>";
}

?>