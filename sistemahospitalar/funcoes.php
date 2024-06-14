
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

    
    function inserirConsulta($data_consulta, $categoria){
        try{
            $sql = "INSERT INTO consulta (nome, descricao, valor, categoria_id) VALUES (:nome, :descricao, :valor, :categoria)";
            $conexao = conectarBanco();
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":valor", $valor);
            $stmt->bindValue(":categoria", $categoria);
            return $stmt->execute();
        } catch (Exception $e) {
            return 0;
        } //finally         

    }
?>
    