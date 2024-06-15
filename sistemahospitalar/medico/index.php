<?php
    require_once("../cabecalho.php");
?>

<h3>Gerenciar Médicos</h3>

<a href="/sistemahospitalar/medico/inserir_medico.php" class="btn btn-primary mt-3">Adicionar Médicos</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Especialidade</th>
            <th>CRM</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $linhas = listarMedico();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
        ?> 
        <tr>
            <td><?= $l['nome'] ?></td>
            <td><?= $l['especialidade'] ?></td>
            <td><?= $l['crm'] ?></td>
            <td>
                <a href="alterar_medico.php?id=<?= $l['id'] ?>" class="btn btn-success">Alterar</a>
                <a href="excluir_medico.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
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
