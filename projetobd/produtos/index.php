<?php
    require_once("../cabecalho2.html");
?>
    <h1>Gerenciamento de Produtos</h1>

    <a href="" class="btn btn-primary mt-3">Adicionar Produto</a>

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
            </tr>
            <tr>
                <td>Um corpo na Biblioteca</td>
                <td>Livro de Agatha Christie</td>
                <td>R$20,00</td>
                <td>Mistério</td>
            </tr>
            <tr>
                <td>Hobbit</td>
                <td>Livro de J. R. R. Tolkien</td>
                <td>R$50,00</td>
                <td>Fantasia</td>
            </tr>
        </tbody>

    </table>

<?php
    require_once("../rodape2.html");
?>