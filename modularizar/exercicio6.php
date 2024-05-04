<?php require_once "cabecalho.php"; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="exercicio6resp.php" method="post">
                <div class="form-group">
                    <label>Informe o valor A:</label>
                    <input type="text" class="form-control" name="valorA">
                    <label>Informe o valor B:</label>
                    <input type="text" class="form-control" name="valorB">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>


<?php
    require_once "rodape.php";
?>