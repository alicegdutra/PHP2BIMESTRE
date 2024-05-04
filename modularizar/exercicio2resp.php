<?php
    require_once "cabecalho.php";
    
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];
    $valor5 = $_POST['valor5'];
    $valor6 = $_POST['valor6'];
    $valor7 = $_POST['valor7'];

    $menor_valor = menorValor($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7);

    echo "O menor valor é {$menor_valor[0]} no índice {$menor_valor[1]}!";
?>


<?php
    require_once "rodape.php";
?>