
<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
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
            $stmt->bindValue(":data_nascimento", $data_nascimento);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function consultarPacienteId($id){
        try{ 
            $sql = "SELECT * FROM paciente WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e){
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
        }         

    }

    function excluirPaciente($id){
        try{ 
            $sql = "DELETE FROM paciente WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }
?>
    