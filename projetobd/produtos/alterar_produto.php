<?php
    require_once("../cabecalho2.php");
?>

<h3>Aterar Produto</h3>
<form>
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome: </label>
            <input type="text" class="form-control" name="descricao">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor: </label>
            <input type="text" class="form-control" name="valor">
        </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria: </label>
            <select class="form-select" name="categoria">
                <option value="1">Categoria 1</option>
                <option value="2">Categoria 2</option>
                <option value="3">Categoria 3</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>

<?php
    require_once("../rodape2.html");