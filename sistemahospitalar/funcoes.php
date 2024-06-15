
<?php

    function conectarBanco(){
        $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
        return $conexao;
    }

    function listarPaciente(){
        $conexao = conectarBanco();
        return $conexao->query("SELECT * FROM paciente");
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

    function inserirMedico($nome, $especialidade, $crm){
        try{
            $sql = "INSERT INTO medico (nome, especialidade, crm) VALUES (:nome, :especialidade, :crm)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":especialidade", $especialidade);
            $stmt->bindValue(":crm", $crm);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        }         

    }

    function listarMedico(){
        $conexao = conectarBanco();
        return $conexao->query("SELECT * FROM medico");
    }

    function alterarMedico($nome, $especialidade, $crm, $id){
        try{ 
            $sql = "UPDATE medico SET nome = :nome, especialidade = :especialidade, crm = :crm WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":especialidade", $especialidade);
            $stmt->bindValue(":crm", $crm);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function consultarMedicoId($id){
        try{ 
            $sql = "SELECT * FROM medico WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e){
            return 0;
        }
    }

    function excluirMedico($id){
        try{ 
            $sql = "DELETE FROM medico WHERE id = :id";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":id", $id);
            return $stmt->execute();
        } catch (Exception $e){
            return 0;
        }
    }

    function retornarExame(){
        try {
            $sql = "SELECT e.*, c.data_consulta as consulta, p.nome as paciente 
                        FROM exame e 
                        INNER JOIN consulta c ON e.consulta_id = c.id
                        INNER JOIN paciente p ON p.id = c.paciente_id";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        } catch (Exception $e) {
            return 0;
        }
    }

    function listarConsulta(){
        try{
            $sql = "SELECT * FROM consulta";
            $conexao = conectarBanco();
            return $conexao->query($sql);
        }  catch(Exception $e){
            return 0;
        }
    }

        
    function inserirExame($tipo_exame, $resultado, $consulta){
        try{
            $sql = "INSERT INTO exame (tipo_exame, resutado, consulta_id) VALUES (:tipo_exame, :resultado, :consulta)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":tipo_exame", $tipo_exame);
            $stmt->bindValue(":resultado", $resultado);
            $stmt->bindValue(":consulta", $consulta);
            return $stmt->execute();
        } catch (Exception $e) {
            echo $e;
            return 0;
        }         

    }


?>
    