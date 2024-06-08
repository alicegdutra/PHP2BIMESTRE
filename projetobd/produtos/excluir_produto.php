<?php
    require_once("../cabecalho2.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;

    } else
        $id = $_SESSION['id'];
    if($_POST){
            if(excluirProduto($_SESSION['id']))
                header('Location: index.php');
    
            else
                echo "Erro ao alterar produto!";
        } else {
            echo"Preencha todos os campos!";
        }
    $dados = consultarProdutoId($id);


?>

<h3>Excluir Produto</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe o nome: </label>
            <input type="text" class="form-control" name="descricao" disabled>
                value ="<?= $dados['nome']?>" 
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="valor" class="form-label">Informe o valor: </label>
            <input type="text" class="form-control" name="valor" disabled>
                value ="<?= $dados['valor']?>
        </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria: </label>
            <select class="form-select" name="categoria" disabled>
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
            <button type="submit" class="btn btn-danger">Salvar</button>
        </div>
    </div>
</form>

<?php
    
    require_once("../rodape2.html");