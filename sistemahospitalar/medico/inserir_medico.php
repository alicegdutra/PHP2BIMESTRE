<?php
    require_once("../cabecalho.php");

?>
<h3>Adicionar Médico</h3>
    <form action="" method="POST">
        <div class="row">
            <label for="nome" class="form-label">Informe o Nome</label>
            <input type ="text" class="form-control" name="nome"> 
        </div>
        <div class="row">
            <label for="especialidade" class="form-label">Informe a Especialidade</label>
            <input type ="text" class="form-control" name="especialidade"> 
        </div>
        <div class="row">
            <label for="crm" class="form-label">Informe o CRM</label>
            <input type ="text" class="form-control" name="crm"> 
        </div>
    
        <div class="row"> 
            <div class="col">
                <input type="submit"  value="Salvar" class="btn btn-success">
            </div>    
        </div>
    </form>
    <?php
    if($_POST){
        $nome = $_POST['nome'];
        $especialidade = $_POST['especialidade'];
        $crm= $_POST['crm'];
        if($nome != "" && $especialidade != "" && $crm != ""){
            if(inserirMedico($nome, $especialidade, $crm))
                echo "Registro inserido com sucesso!";

            else
                echo "Erro ao inserir produto!";
        } else {
            echo"Preencha todos os campos!";
        }
    }

    require_once("../rodape.html");