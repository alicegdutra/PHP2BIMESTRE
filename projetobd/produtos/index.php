<?php
    require_once("../cabecalho2.html");
?>
    <h3>Gerenciamento de Produtos</h3>
    <a href="inserir_produto.php" class="btn btn-primary mt-3">Adicionar Produto</a>

    <table class="mt-3 table table-hover table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Valor</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Persuasão</td>
                <td>Livro de Jane Austen</td>
                <td>R$10,00</td>
                <td>Romance</td>
                <td>
                    <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                    <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>Um corpo na Biblioteca</td>
                <td>Livro de Agatha Christie</td>
                <td>R$20,00</td>
                <td>Mistério</td>
                <td>
                    <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                    <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            <tr>
                <td>Hobbit</td>
                <td>Livro de J. R. R. Tolkien</td>
                <td>R$50,00</td>
                <td>Fantasia</td>
                <td>
                    <a href="alterar_produto.php" class="btn btn-warning">Alterar</a>
                    <a href="excluir_produto.php" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        </tbody>

    </table>

<?php
    require_once("../rodape2.html");
?>