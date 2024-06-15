<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirPaciente($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o paciente!";
    }
    $dados = consultarPacienteId($id);
?>

    <h3>Excluir Paciente</h3>
    <form action="excluirpaciente.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="titulo" class="form-label">Informe o nome</label>
                <input type="text" class="form-control" name="nome" disabled value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="instrumento" class="form-label">Informe o Endereço</label>
                <input type="text" class="form-control"   name="endereco" value="<?= $dados['endereco'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="estilo" class="form-label">Informe a Data de Nascimento</label>
                <input type="date" class="form-control" name="estilo" value="<?= $dados['data_nascimento'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <input type="submit" class="btn btn-danger" value="Excluir" name="btnExcluir">
            </div>
        </div>
    </form>

<?php
    require_once("../rodape.html");