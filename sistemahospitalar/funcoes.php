
<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function retornarConsulta(){
        try {
            $sql = "SELECT * FROM consulta";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function consultarConsultaId($id){
        try{
            $sql = "SELECT * FROM consulta WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();


        } catch (Exception $e) {
            return 0;
        }
    
    }

    function excluirConsulta($id){
        try{
            $sql = "DELETE from consulta WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        } //finally         

    }

    


    
    function listarPaciente(){
        $conexao = conectarBanco();
        return $conexao->query("SELECT * FROM Paciente");
    }

    function alterarPaciente($nome, $endereco, $data_nascimento, $id){
        try{ 
            $sql = "UPDATE paciente SET nome = :nome, endereco = :endereco, data_nascimento = :data_nascimento WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":data_nascimento", $data_nascimento); //?????
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function consultarPacienteId($id){
        try{ 
            //Defino uma variável para declarar o SQL a ser executado
            $sql = "SELECT * FROM paciente WHERE id = :id";
            //Realizo a conexão com o banco de dados
            $conexao = conectarBanco();
            //Inicio a preparação do SQL para poder substituir os APELIDOS pelos valores passados por parâmetro
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            //Executo a consulta
            $stmt->execute();
            //Retorno o registro já em formato de ARRAY
            return $stmt->fetch();
        } catch (Exception $e){
            //Caso aconteça algum erro, retorno o valor 0
            return 0;
        }
    }

    
    function inserirPaciente($nome, $endereco, $data_nascimento){
        try{
            $sql = "INSERT INTO paciente (nome, endereco, data_nascimento) VALUES (:nome, :endereco, :data_nascimento)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":data_nascimento", $data_nascimento);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        } //finally         

    }
?>
    