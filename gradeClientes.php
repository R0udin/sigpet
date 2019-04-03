<h3>Clientes</h3>
<hr>
<div class="container">
    <table class="highlight" style="top:40px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>RG</th>
                <th>Data de nascimento</th>
                <th>Data de cadastro</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Tipo</th>
                <th>CNPJ</th>
                <th>Referencia</th>
                <th>Celular</th>

                <th><a href="?controller=ClientesController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($clientes) {
                foreach ($clientes as $cliente) {
                    ?>
                    <tr>
                        <td><?php echo $cliente->NOME_CLIENTE; ?></td>
                        <td><?php echo $cliente->CPF_CLIENTE; ?></td>
                        <td><?php echo $cliente->RG_CLIENTE; ?></td>
                        <td><?php echo $cliente->DT_NASCIMENTO; ?></td>
                        <td><?php echo $cliente->DT_CADASTRO; ?></td>
                        <td><?php echo $cliente->TELEFONE; ?></td>
                        <td><?php echo $cliente->EMAIL; ?></td>
                        <td><?php echo $cliente->TIPO_CLIENTE; ?></td>
                        <td><?php echo $cliente->CNPJ_CLIENTE; ?></td>
                        <td><?php echo $cliente->REFERENCIA_CLIENTE; ?></td>
                        <td><?php echo $cliente->CELULAR; ?></td>
                        <td>
                            <a href="?controller=ClientesController&method=editar&id=<?php echo $cliente->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=ClientesController&method=excluir&id=<?php echo $cliente->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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
