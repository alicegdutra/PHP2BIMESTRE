<?php
    require_once "cabecalho.php";

    $valor = $_POST['valor'];
    $valor2 = $_POST['valor2']; //cria uma variável e recebe ela da página anterior
    $resultado = calcularSoma($valor, $valor2);
    echo "O resultado da soma é: $resultado";
?>


<?php
    require_once "rodape.php";
?>