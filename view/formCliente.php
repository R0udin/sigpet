<script  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });>

</script>
<div class="container">
    <form action="?controller=ClientesController&<?php echo isset($cliente->id) ? "method=atualizar&id={$cliente->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">CLientes</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label for="NOME_CLIENTE" class="col-sm-2 col-form-label text-right">Nome do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="NOME_CLIENTE" id="NOME_CLIENTE" value="<?php
                echo isset($cliente->NOME_CLIENTE) ? $cliente->NOME_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="CPF_CLIENTE" class="col-sm-2 col-form-label text-right">CPF do cliente:</label>
                <input type="text" class="cpf form-control col-sm-8" name="CPF_CLIENTE" id="CPF_CLIENTE" value="<?php
                echo isset($cliente->CPF_CLIENTE) ? $cliente->CPF_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="RG_CLIENTE" class="col-sm-2 col-form-label text-right">RG do cliente:</label>
                <input type="text" class="rg form-control col-sm-8" name="RG_CLIENTE" id="RG_CLIENTE" value="<?php
                echo isset($cliente->RG_CLIENTE) ? $cliente->RG_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="DT_NASCIMENTO" class="col-sm-2 col-form-label text-right">Data de nascimento:</label>
                <input type="date" class="date form-control col-sm-8" name="DT_NASCIMENTO" id="DT_NASCIMENTO" value="<?php
                echo isset($cliente->DT_NASCIMENTO) ? $cliente->DT_NASCIMENTO : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="DT_CADASTRO" class="col-sm-2 col-form-label text-right">Data de cadastro:</label>
                <input type="date" class="date form-control col-sm-8" name="DT_CADASTRO" id="DT_CADASTRO" value="<?php
                echo isset($cliente->DT_CADASTRO) ? $cliente->DT_CADASTRO : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="TELEFONE" class="col-sm-2 col-form-label text-right">Telefone do cliente:</label>
                <input type="text" class="telefone form-control col-sm-8" name="TELEFONE" id="TELEFONE" value="<?php
                echo isset($cliente->TELEFONE) ? $cliente->TELEFONE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="EMAIL" class="col-sm-2 col-form-label text-right">EMAIL do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="EMAIL" id="EMAIL" value="<?php
                echo isset($cliente->EMAIL) ? $cliente->EMAIL : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="CNPJ_CLIENTE" class="col-sm-2 col-form-label text-right">CNPJ do cliente:</label>
                <input type="text" class="cnpj form-control col-sm-8" name="CNPJ_CLIENTE" id="CNPJ_CLIENTE" value="<?php
                echo isset($cliente->CNPJ_CLIENTE) ? $cliente->CNPJ_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="TIPO_CLIENTE" class="col-sm-2 col-form-label text-right">Tipo do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="TIPO_CLIENTE" id="TIPO_CLIENTE" value="<?php
                echo isset($cliente->TIPO_CLIENTE) ? $cliente->TIPO_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="REFERENCIA_CLIENTE" class="col-sm-2 col-form-label text-right">Referencia do cliente:</label>
                <input type="text" class="form-control col-sm-8" name="REFERENCIA_CLIENTE" id="REFERENCIA_CLIENTE" value="<?php
                echo isset($cliente->REFERENCIA_CLIENTE) ? $cliente->REFERENCIA_CLIENTE : null;
                ?>" required/>
            </div>
            <div class="form-group form-row">
                <label for="CELULAR" class="col-sm-2 col-form-label text-right">Celular do cliente:</label>
                <input type="text" class="celular form-control col-sm-8" name="CELULAR" id="CELULAR" value="<?php
                echo isset($cliente->CELULAR) ? $cliente->CELULAR : null;
                ?>" required/>
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <button class="btn btn-secondary">Limpar</button>
                <a class="btn btn-danger" href="?controller=ClientesController&method=listar">Cancelar</a>
            </div>
        </div>
    </form>
</div>
