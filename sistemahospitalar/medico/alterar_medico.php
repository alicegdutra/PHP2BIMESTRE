
<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $crm = $_POST['crm'];
        
        if($nome != "nome" && $especialidade != "especialidade" && $crm != "crm" ){
            if(alterarMedico($nome, $especialidade, $crm, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarMedicoId($id);
?>

    <h3>Alterar Médico</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" 
                    value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label">Informe a especialidade</label>
                <input type="text" class="form-control"  name="especialidade" value="<?= $dados['especialidade'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="crm" class="form-label">Informe o CRM</label>
                <input type="crm" class="form-control" name="crm" value="<?= $dados['crm'] ?>">
            </div>
        </div>
        
        
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-success">
                    Salvar
                </button>
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");
