<?php
    require_once("../cabecalho.php");
?>

<h3>Inserir Consulta</h3>
<form action="" method="POST">
    <div class="row">
        <div class="col">
            <label for="data_consulta" class="form-label">Informe a data da consulta: </label>
            <input type="text" class="form-control" name="data_consulta">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="categoria" class="form-label">Selecione a categoria: </label>
            <select class="form-select" name="categoria">
                <?php
                    $linhas = retornarCategorias();
                    while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
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
    if($_POST){
        $data_consulta = $_POST['data_consulta'];
        $categoria = $_POST['categoria'];
        if($data_consulta != "" && $descricao != "" && $valor != "" && $categoria != ""){
            if(inserirConsulta($data_consulta, $categoria))
                echo "Registro inserido com sucesso!";

            else
                echo "Erro ao inserir consulta!";
        } else {
            echo"Preencha todos os campos!";
        }
    }
    require_once("../rodape.html");