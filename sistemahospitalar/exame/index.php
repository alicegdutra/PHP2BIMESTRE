<?php
    require_once("../cabecalho.php");
?>

<h3>Gerenciar Exames</h3>

<a href="/sistemahospitalar/exame/inserir_exame.php" class="btn btn-primary mt-3">Adicionar Exames</a>

<table class="mt-3 table table-hover table-striped">
    <thead>
        <tr>
            <th>Tipo de Exame</th>
            <th>Resultado</th>
            <th>Consulta</th>
            <th>Paciente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $linhas = retornarExame();
            while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
        ?>
        <tr>
            <td><?= $l['tipo_exame'] ?></td>
            <td><?= $l['resutado'] ?></td>
            <td><?= $l['consulta'] ?> - <?= $l['paciente'] ?> </td>
            <td>
                <a href="alterar_exame.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                <a href="excluir_exame.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
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
