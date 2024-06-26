<?php
    require_once("../cabecalho.php");
?>

<h3>Gerenciar Paciente</h3>

<a href="/sistemahospitalar/paciente/inserir_paciente.php" class="btn btn-primary mt-3">Adicionar Paciente</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Endereço</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $linhas = listarPaciente();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <tr>
            <td><?= $l['nome'] ?></td>
            <td><?= $l['endereco'] ?></td>
            <td><?= $l['data_nascimento'] ?></td>
            <td>
                <a href="alterar_paciente.php?id=<?= $l['id'] ?>" class="btn btn-success">Alterar</a>
                <a href="excluir_paciente.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
            </td> 
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

<?php   
    require_once("../rodape.html");
?>
