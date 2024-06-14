<?php
    require_once("../cabecalho.php");
?>
    <h3>Gerenciamento de Consultas</h3>
    <a href="inserir_consulta.php" class="btn btn-primary mt-3">Adicionar Consulta</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Data da consulta</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $linhas = retornarConsulta();
                while ($l = $linhas->fetch(PDO::FETCH_ASSOC)){
            ?>
            <tr>
                <td><?= $l['dada_consulta'] ?></td>
                <td>
                    <a href="alterar_consulta.php?id=<?= $l['id'] ?>" class="btn btn-warning">Alterar</a>
                    <a href="excluir_consulta.php?id=<?= $l['id'] ?>" class="btn btn-danger">Excluir</a>
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