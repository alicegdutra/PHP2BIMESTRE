
<?php
    require_once("../cabecalho.php");
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
    } else
        $id = $_SESSION['id'];
    if ($_POST){
        $tipo_exame = $_POST['tipo_exame'];
        $resultado = $_POST['resultado'];
        $consulta = $_POST['consulta'];
        $paciente = $_POST['paciente'];
        
        if($tipo_exame != "tipo_exame" && $resultado != "resultado" && $consulta != "consulta" ){
            if(alterarMedico($tipo_exame, $resultado, $consulta, $paciente $_SESSION['id']))
                echo "Registro alterado com sucesso!";
            else
                echo "Erro ao alterar o registro!";
            echo "Preencha todos os campos!";
        }
    }
    $dados = consultarMedicoId($id);
?>

    <h3>Alterar Médico</h3>
    <form action="" method="POST">
        <div class="row">
            <div class="col">
                <label for="tipo_exame" class="form-label">Informe o Tipo de Exame:</label>
                <input type="text" class="form-control" name="tipo_exame" 
                    value="<?= $dados['tipo_exame'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="resultado" class="form-label">Informe o resultado:</label>
                <input type="text" class="form-control"  name="resultado" value="<?= $dados['resultado'] ?>">
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
