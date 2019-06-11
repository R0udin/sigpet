<div class="container">
    <form action="?controller=ProdutosController&<?php echo isset($produto->id) ? isset($produtos[0]->id) ? "method=atualizar&id={$produto->id :: $produtos[0]->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Produtos</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Produto:</label>
                <input type="text" class="form-control col-sm-8" name="FOR_ID" id="FOR_ID" value="<?php
                echo isset($produto->FOR_ID) ? $produto->FOR_ID : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição do produto:</label>
                <input type="text" class="form-control col-sm-8" name="DESCRICAO" id="DESCRICAO" value="<?php
                echo isset($produto->DESCRICAO) ? $produto->DESCRICAO : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($produto->VALOR_COMPRA) ? $produto->VALOR_COMPRA : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Criticidade:</label>
                <input type="text" class="form-control col-sm-8" name="CRITICO" id="CRITICO" value="<?php
                echo isset($produto->CRITICO) ? $produto->CRITICO : null;
                ?>" />
            </div>
		<input type="hidden" name="FOR_ID" id="FOR_ID" value="<?php echo isset($produtos[0]->id) ? $produtos[0]->id : null; ?>" />
             <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Fornecedor:</label>
                <?php
                //var_dump($vendas->ID);
					if(isset($produtos)){
						$clienteSelected  = $produtos[0]->id;
					}
                    if (isset($fornecedores)){
						echo "<select id='fornecedor' name='fornecedor'>";
						  foreach($fornecedores as $fornecedores){
							if(isset($clienteSelected) && $clienteSelected == $fornecedores->id){
								echo "<option value='".$fornecedores->id."'selected>".$fornecedores->NOME_FORNECEDOR."</option>";
							}else{
								echo "<option value='".$fornecedores->id."'>".$fornecedores->NOME_FORNECEDOR."</option>";
							}
						  }
						echo "</select>";
                    }else{echo 'Fornecedores nao encontrados';}
                ?>
            </div>
		
            <div class="card-footer">
		    <input type="hidden" name="id" id="id" value="<?php echo isset($fornecedor->id) ? $fornecedor->id : null; ?>" />
		    <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <button class="btn btn-secondary">Limpar</button>
                    <a class="btn btn-danger" href="?controller=ProdutosController&method=listar">Cancelar</a>
            </div>

        </div>
    </form>
</div>
