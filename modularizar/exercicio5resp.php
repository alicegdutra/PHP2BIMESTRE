<?php
    require_once "cabecalho.php";

    $numero = $_POST['numero'];
    echo "O fatorial de $numero é: <br>" . calcularFatorial($numero);
?>

<?php
    require_once "rodape.php";
?>
