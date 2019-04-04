<div class="container">
  <div class="section">
    <h4>Fornecedores</h4>
    <table class="highlight" style="top:40px;">
        <thead>
            <tr>
                <th>Fornecedor</th>
                <th>CNPJ</th>
                <th>CPF</th>
                <th>Inscrição estadual</th>
                <th>Tipo</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>CEP</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Celular</th>

                <th><a href="?controller=FornecedoresController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($fornecedores) {
                foreach ($fornecedores as $fornecedor) {
                    ?>
                    <tr>
                        <td><?php echo $fornecedor->NOME_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CNPJ_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CPF_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->INSCRICAOESTADUAL_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->TIPO_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->NDERECO_FORNECEDOR_7; ?></td>
                        <td><?php echo $fornecedor->BAIRRO_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CIDADE_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->UF_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CEP_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->EMAIL_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->TELEFONE_FORNECEDOR; ?></td>
                        <td><?php echo $fornecedor->CELULAR_FORNECEDOR; ?></td>
                        <td>
                            <a href="?controller=FornecedoresController&method=editar&id=<?php echo $fornecedor->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=FornecedoresController&method=excluir&id=<?php echo $fornecedor->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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
</div>
