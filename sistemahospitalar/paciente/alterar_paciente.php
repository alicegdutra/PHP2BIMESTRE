
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
        $endereco = $_POST['endereco'];
        $data_nascimento = $_POST['data_nascimento'];
        
        if($nome != "nome" && $endereco != "endereco" && $data_nascimento != "data_nascimento" ){
            if(alterarPaciente($nome, $endereco, $data_nascimento, $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
        } else {
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarPacienteId($id);
?>

    <h3>Alterar Paciente</h3>
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
                <label for="instrumento" class="form-label">Informe o endereço</label>
                <input type="text" class="form-control"     name="endereco" value="<?= $dados['endereco'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="data_nascimento" class="form-label">Informe a data de nascimento</label>
                <input type="date" class="form-control"     name="data_nascimento" value="<?= $dados['data_nascimento'] ?>">
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
