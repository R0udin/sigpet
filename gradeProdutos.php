<h3>Produtos</h3>
<hr>
<div class="container">
    <table class="highlight" style="top:40px;">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Valor de compra</th>
                <th>Valor de venda</th>
                <th>Estoque</th>
                <th>Criticidade</th>
                <th>Fornecedor</th>


                <th><a href="?controller=ProdutosController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($produtos) {
                foreach ($produtos as $produto) {
                    ?>
                    <tr>
                        <td><?php echo $produto->FOR_ID; ?></td>
                        <td><?php echo $produto->DESCRICAO; ?></td>
                        <td><?php echo $produto->VALOR_COMPRA; ?></td>
                        <td><?php echo $produto->VALOR_VENDA; ?></td>
                        <td><?php echo $produto->ESTOQUE; ?></td>
                        <td><?php echo $produto->CRITICO; ?></td>
                        <td><?php echo $produto->FORNECEDORE_ID; ?></td>
                        <td>
                            <a href="?controller=ProdutosController&method=editar&id=<?php echo $produto->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ProdutosController&method=excluir&id=<?php echo $produto->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Nenhum registro encontrado</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
