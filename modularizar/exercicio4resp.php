<?php
    require_once "cabecalho.php";

    $valor = $_POST['valor'];
    $resposta = multiplicacao($valor);
    foreach ($resposta as $resposta) {
        echo $resposta . "<br>";
    }
?>


<?php
    require_once "rodape.php";
?>
