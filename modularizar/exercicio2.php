<?php require_once "cabecalho.php"; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="exercicio2resp.php" method="post">
                <div class="form-group">
                    <label>Informe o valor 1:</label>
                    <input type="text" class="form-control" name="valor1">
                </div>
                <div class="form-group">
                    <label>Informe o valor 2:</label>
                    <input type="text" class="form-control" name="valor2">
                </div>
                <div class="form-group">
                    <label>Informe o valor 3:</label>
                    <input type="text" class="form-control" name="valor3">
                </div>
                <div class="form-group">
                    <label>Informe o valor 4:</label>
                    <input type="text" class="form-control" name="valor4">
                </div>
                <div class="form-group">
                    <label>Informe o valor 5:</label>
                    <input type="text" class="form-control" name="valor5">
                </div>
                <div class="form-group">
                    <label>Informe o valor 6:</label>
                    <input type="text" class="form-control" name="valor6">
                </div>
                <div class="form-group">
                    <label>Informe o valor 7:</label>
                    <input type="text" class="form-control" name="valor7">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>


<?php
    require_once "rodape.php";
?>