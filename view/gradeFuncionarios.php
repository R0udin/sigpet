<div class="container">
  <div class="section">
    <h4>Funcionarios</h4>
    <table class="highlight" style="top:40px;">
        <thead>
            <tr>
                <th>Funcionario</th>
                <th>Função</th>
                <th>Admissao</th>
                <th>Nivel de acesso</th>
                <th>Departamento</th>
                <th>Email</th>

                <th><a href="?controller=FuncionariosController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($funcionarios) {
                foreach ($funcionarios as $funcionario) {
                    ?>
                    <tr>
                        <td><?php echo $funcionario->NOME_FUNCIONARIO; ?></td>
                        <td><?php echo $funcionario->FUNCAO; ?></td>
                        <td><?php echo $funcionario->ADMISSAO; ?></td>
                        <td><?php echo $funcionario->ACESSO_TOTAL; ?></td>
                        <td><?php echo $funcionario->DEPARTAMENTO_ID; ?></td>
                        <td><?php echo $funcionario->EMAIL; ?></td>
                        <td>
                            <a href="?controller=FuncionariosController&method=editar&id=<?php echo $funcionario->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=FuncionariosController&method=excluir&id=<?php echo $funcionario->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
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
