<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirMedico($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir o Médico!";
    }
    $dados = consultarMedicoId($id);
?>

    <h3>Excluir Médico</h3>
    <form action="excluir_medico.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o Nome</label>
                <input type="text" class="form-control" name="nome" disabled value="<?= $dados['nome'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="especialidade" class="form-label">Informe o Especialidade</label>
                <input type="text" class="form-control"   name="endereco" value="<?= $dados['especialidade'] ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="crm" class="form-label">Informe o CRM</label>
                <input type="text" class="form-control" name="estilo" value="<?= $dados['crm'] ?>" disabled>
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