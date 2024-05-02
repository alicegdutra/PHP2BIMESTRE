<?php
    require_once "cabecalho.php";
?>

<form action="exercicio2resp.php" method="post">
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor</label>
            <input type="number" class="form-control" name="valor" id="valor">

            <p>
            <label>Informe o valor 1:</label>
            <input type="text" name="valor1">
            </p>
            <label>Informe o valor 2:</label>
            <input type="text" name="valor2">
            <p>
            <label>Informe o valor 3:</label>
            <input type="text" name="valor3">
            </p>
            <label>Informe o valor 4:</label>
            <input type="text" name="valor4">
            <p>
            <label>Informe o valor 5:</label>
            <input type="text" name="valor5">
            </p>
            <label>Informe o valor 6:</label>
            <input type="text" name="valor6">
            <p>
            <label>Informe o valor 7:</label>
            <input type="text" name="valor7">
            </p>
        </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

<?php
    require_once "rodape.php";
?>