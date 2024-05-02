<?php
    require_once "cabecalho.php";
    
    $valor1 = $_POST['valor1'];
    $menor_valor = $valor1;
    $i = 1;
    $valor2 = $_POST['valor2'];

    echo "O menor valor é $menor_valor no índice $i!";
?>


<?php
    require_once "rodape.php";
?>