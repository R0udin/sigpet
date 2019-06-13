<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
<div class="container">
    <form action="?controller=FuncionariosController&<?php echo isset($funcionario->id) ? "method=atualizar&id={$funcionario->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Funcionarios</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label for="NOME_FUNCIONARIO" class="col-sm-2 col-form-label text-right">Nome do Funcionario:</label>
                <input type="text" class="form-control col-sm-8" name="NOME_FUNCIONARIO" id="NOME_FUNCIONARIO" value="<?php
                echo isset($funcionario->NOME_FUNCIONARIO) ? $funcionario->NOME_FUNCIONARIO : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="FUNCAO" class="col-sm-2 col-form-label text-right">Função</label>
                <input type="text" class="form-control col-sm-8" placeholder="Digite a função do funcionário" name="FUNCAO" id="FUNCAO" value="<?php
                echo isset($funcionario->FUNCAO) ? $funcionario->FUNCAO : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="LOGIN" class="col-sm-2 col-form-label text-right">Login do funcionário:</label>
                <input type="text" class="form-control col-sm-8" name="LOGIN" id="LOGIN" value="<?php
                echo isset($funcionario->LOGIN) ? $funcionario->LOGIN : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="SENHA" class="col-sm-2 col-form-label text-right">Senha do funcionário:</label>
                <input type="password" class="form-control" name="SENHA" id="SENHA" value="<?php
                echo isset($funcionario->SENHA) ? $funcionario->SENHA : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="ADMISSAO" class="col-sm-2 col-form-label text-right">Data de admissão:</label>
                <input type="date" class="date form-control col-sm-8" name="ADMISSAO" id="ADMISSAO" value="<?php
                echo isset($funcionario->ADMISSAO) ? $funcionario->ADMISSAO : null;
                ?>" required/>
            <div class="form-group form-row">
                <label for="DEPARTAMENTO_ID" class="col-sm-2 col-form-label text-right">Departamento:</label>
                <input type="text" class="form-control" name="DEPARTAMENTO_ID" id="DEPARTAMENTO_ID" value="<?php
                echo isset($funcionario->DEPARTAMENTO_ID) ? $funcionario->DEPARTAMENTO_ID : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="EMAIL" class="col-sm-2 col-form-label text-right">EMAIL do funcionário:</label>
                <input type="email" class="form-control col-sm-8" name="EMAIL" id="EMAIL" value="<?php
                echo isset($funcionario->EMAIL) ? $funcionario->EMAIL : null;
                ?>" required/>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($funcionario->id) ? $funcionario->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=FuncionariosController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>
