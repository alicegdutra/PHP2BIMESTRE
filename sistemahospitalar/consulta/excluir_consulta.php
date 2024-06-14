<?php
    require_once("../cabecalho.php");
    session_start();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $_SESSION['id'] = $id;
    } 
    if ($_POST){
        $id = $_SESSION['id'];
        if(excluirConsulta($_SESSION['id']))
            header('Location: index.php');
        else
            echo "Erro ao excluir consulta!";
    }
    $dados = consultarConsultaId($id);
?>

    <h3>Excluir Consulta</h3>
    <form action="excluir_consulta.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="data_consulta" class="form-label">Informe a data</label>
                <input type="text" class="form-control" name="data_consulta" disabled
                    value="<?= $dados['data_consulta'] ?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="categoria" class="form-label"> Selecione a data:</label>
                <select class="form-select" name="data_consulta" disabled>
                    <?php
                       $linhas = retornarConsulta();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        if ($l['id'] == $dados["idconsulta"])
                            echo "<option selected value='{$l['id']}'>{$l['data_consulta']}</option>"; 
                        else 
                            echo "<option value='{$l['id']}'>{$l['data_consulta']}</option>"; 
                       } 
                    ?>
                </select>
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