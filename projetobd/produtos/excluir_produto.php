<?php
    require_once("../cabecalho2.html");
?>

<h3>Excluir Produtos</h3>
<form>
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome: </label>
            <input type="text" class="form-control" name="descricao" disabled>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor: </label>
            <input type="text" class="form-control" name="valor" disabled>
        </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria: </label>
            <select class="form-select" name="categoria" disabled>
                <option value="1">Categoria 1</option>
                <option value="2">Categoria 2</option>
                <option value="3">Categoria 3</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p>Deseja realmente excluir?</p>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </div>
    </div>
</form>

<?php
    require_once("../rodape2.html");
?>