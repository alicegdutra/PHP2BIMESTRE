<?php
    require_once("../cabecalho.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;

    } else
        $id = $_SESSION['id'];
    if($_POST){
        $data_consulta = $_POST['data_consulta'];
        if($data_consulta != ""){
            session_start();
            if(alterarConsulta($data_consulta, $_SESSION['id']))
                echo "Consulta alterada com sucesso!";
    
            else
                echo "Erro ao alterar consulta!";
        } else {
            echo"Preencha todos os campos!";
        }
    }
    $dados = consultarProdutoId($id);


?>

<h3>Alterar Data:</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Informe a data: </label>
            <input type="date" class="form-control" name="data_consulta" value="<?= $dados['data_consulta'] ?>">
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
    
    require_once("../rodape.html");