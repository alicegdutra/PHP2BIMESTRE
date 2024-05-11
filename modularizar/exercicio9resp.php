<?php

    require_once "cabecario.php";

    $valor = $_POST['valor'];
    
    dataAniversario($valor);

    echo "idade atual: $idade , dias vividos $dias e sua idade em 2025 é $idade2";

?>
    
<?php
    require_once "rodape.php";
?>