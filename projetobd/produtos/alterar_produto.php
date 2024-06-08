<?php
    require_once("../cabecalho2.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;

    } else
        $id = $_SESSION['id'];
    if($_POST){
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $valor = $_POST['valor'];
        $categoria = $_POST['categoria'];
        if($nome != "" && $descricao != "" && $valor != "" && $categoria != ""){
            session_start();
            if(alterarProduto($nome, $descricao, $valor, $categoria, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
    
            else
                echo "Erro ao alterar produto!";
        } else {
            echo"Preencha todos os campos!";
        }
    }
    $dados = consultarProdutoId($id);


?>

<h3>Aterar Produto</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome: </label>
            <input type="text" class="form-control" name="descricao" value="<?= $dados['descricao'] ?>">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor: </label>
            <input type="text" class="form-control" name="valor" 
                    value="<?= $dados['valor'] ?>">
        </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria: </label>
            <select class="form-select" name="categoria">
                <?php
                    $linhas = retornarCategorias();
                    while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if($l['id'] == $dados["categoria_id"])
                            echo "<option selected value='{$l['id']}'>{$l['descricao']}</option>";
                        else
                        echo "<option value='{$l['id']}'>{$l['descricao']}</option>";

                    }
                ?>
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