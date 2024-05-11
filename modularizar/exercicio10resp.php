<?php

    require_once "cabecario.php";

    $valorA = $_POST['valor1'];
    $valorB = $_POST['valor2'];

    calcularImc($valorA, $valorB);
?>
    
<?php
    require_once "rodape.php";
?>