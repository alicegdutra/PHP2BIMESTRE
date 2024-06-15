<?php
    require_once("../cabecalho.php");

?>
<h3>Adicionar Paciente</h3>
    <form action="" method="POST">
        <div class="row">
            <label for="nome" class="form-label">Informe o nome</label>
            <input type ="text" class="form-control" name="nome"> 
        </div>
        <div class="row">
            <label for="endereco" class="form-label">Informe o endereço</label>
            <input type ="text" class="form-control" name="endereco"> 
        </div>
        <div class="row">
            <label for="data_nascimento" class="form-label">Informe a data de nascimento</label>
            <input type ="date" class="form-control" name="data_nascimento"> 
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
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $data_nascimento= $_POST['data_nascimento'];
        if($nome != "" && $endereco != "" && $data_nascimento != ""){
            if(inserirPaciente($nome, $endereco, $data_nascimento))
                echo "Registro inserido com sucesso!";

            else
                echo "Erro ao inserir produto!";
        } else {
            echo"Preencha todos os campos!";
        }
    }

    require_once("../rodape.html");