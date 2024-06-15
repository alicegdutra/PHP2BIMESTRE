<?php
    require_once("../cabecalho.php");

?>
<h3>Adicionar Exames</h3>
    <form action="" method="POST">
        <div class="row">
            <label for="tipo_exame" class="form-label">Informe o Tipo de Exame</label>
            <input type ="text" class="form-control" name="tipo_exame"> 
        </div>
        <div class="row">
            <label for="resultado" class="form-label">Informe o Resultado</label>
            <input type ="text" class="form-control" name="resultado"> 
        </div>
        <div class="row">
            <div class="col"> 
                <label for="consulta" class="form-label">Selecione a Data de Consulta: </label>
                <select name="consulta"> 
                    <?php
                       $linhas = listarConsulta();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l['id']}'>{$l['data_consulta']}</option>";
                       } 
                    ?>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="paciente" class="form-label">Selecione o Paciente:</label>  
                  <select name="paciente">  
                    <?php
                       $linhas = listarPaciente();
                       while($l = $linhas->fetch(PDO::FETCH_ASSOC)){
                        echo "<option value='{$l["id"]}'> {$l["nome"]} {$l["endereco"]} {$l["data_nascimento"]}</option>";
                       } 
                    ?>
                </select>
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
    if($_POST){
        $tipo_exame = $_POST['tipo_exame'];
        $resultado = $_POST['resultado'];
        $consulta= $_POST['consulta'];
        $paciente= $_POST['paciente'];
        if($tipo_exame != "" && $resultado != "" && $consulta != "" && $paciente != "" ){
            if(inserirExame($tipo_exame, $resultado, $consulta))
                echo "Registro inserido com sucesso!";

            else
                echo "Erro ao inserir produto!";
        } else {
            echo"Preencha todos os campos!";
        }
    }

    require_once("../rodape.html");