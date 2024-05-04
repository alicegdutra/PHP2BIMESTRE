<?php require_once "cabecalho.php"; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="exercicio5resp.php" method="post">
                <div class="form-group">
                    <label>Informe um número :</label>
                    <input type="text" class="form-control" name="numero">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>


<?php
    require_once "rodape.php";
?>