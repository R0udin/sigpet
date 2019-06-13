<div class="container">
    <script type="text/javascript">
			function validar_form_contato(){
				var pFOR_ID = formcontato.FOR_ID.value;
				var pDESCRICAO = formcontato.DESCRICAO.value;
				var pVALOR_COMPRA = formcontato.VALOR_COMPRA.value;
				var pVALOR_VENDA = formcontato.VALOR_VENDA.value;
				var pESTOQUE = formcontato.ESTOQUE.value;
				var pCRITICO = formcontato.CRITICO.value;

				if(pFOR_ID == ""){
					alert("Campo nome é obrigatorio");
					formcontato.FOR_ID.focus();
					return false;
				}if(pDESCRICAO == ""){
					alert("Campo nome é obrigatorio");
					formcontato.DESCRICAO.focus();
					return false;
				}if(pVALOR_COMPRA == ""){
					alert("Campo nome é obrigatorio");
					formcontato.VALOR_COMPRA.focus();
					return false;
				}if(pVALOR_VENDA == ""){
					alert("Campo nome é obrigatorio");
					formcontato.VALOR_VENDA.focus();
					return false;
				}if(pESTOQUE == ""){
					alert("Campo nome é obrigatorio");
					formcontato.ESTOQUE.focus();
					return false;
				}if(pCRITICO == ""){
					alert("Campo nome é obrigatorio");
					formcontato.CRITICO.focus();
					return false;
				}
			}
		</script>

    <form name="formcontato" action="?controller=ProdutosController&<?php echo isset($produto->id) ? "method=atualizar&id={$produto->id}" : "method=salvar"; ?>" method="post" >
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
                <?php
							if(!empty($_SESSION['value_FOR_ID'])){
								echo "value='".$_SESSION['value_FOR_ID']."'";
								unset($_SESSION['value_FOR_ID']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_FOR_ID'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_FOR_ID']."</p>";
								unset($_SESSION['vazio_FOR_ID']);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição do produto:</label>
                <input type="text" class="form-control col-sm-8" name="DESCRICAO" id="DESCRICAO" value="<?php
                echo isset($produto->DESCRICAO) ? $produto->DESCRICAO : null;
                ?>" />
                <?php
							if(!empty($_SESSION['value_DESCRICAO'])){
								echo "value='".$_SESSION['value_DESCRICAO']."'";
								unset($_SESSION['value_DESCRICAO']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_DESCRICAO'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_DESCRICAO']."</p>";
								unset($_SESSION['vazio_DESCRICAO']);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($produto->VALOR_COMPRA) ? $produto->VALOR_COMPRA : null;
                ?>" />
                <?php
							if(!empty($_SESSION['value_VALOR_COMPRA'])){
								echo "value='".$_SESSION['value_VALOR_COMPRA']."'";
								unset($_SESSION['value_VALOR_COMPRA']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_VALOR_COMPRA'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_VALOR_COMPRA']."</p>";
								unset($_SESSION['vazio_VALOR_COMPRA']);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" />
                <?php
							if(!empty($_SESSION['value_VALOR_VENDA'])){
								echo "value='".$_SESSION['value_VALOR_VENDA']."'";
								unset($_SESSION['value_VALOR_VENDA']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_VALOR_VENDA'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_VALOR_VENDA']."</p>";
								unset($_SESSION['vazio_VALOR_VENDA']);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" />
                <?php
							if(!empty($_SESSION['value_ESTOQUE'])){
								echo "value='".$_SESSION['value_ESTOQUE']."'";
								unset($_SESSION['value_ESTOQUE']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_ESTOQUE'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_ESTOQUE']."</p>";
								unset($_SESSION['vazio_ESTOQUE']);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Criticidade:</label>
                <input type="text" class="form-control col-sm-8" name="CRITICO" id="CRITICO" value="<?php
                echo isset($produto->CRITICO) ? $produto->CRITICO : null;
                ?>" />
                <?php
							if(!empty($_SESSION['value_CRITICO'])){
								echo "value='".$_SESSION['value_CRITICO']."'";
								unset($_SESSION['value_CRITICO']);
							}
						 ?>	>
						 <?php
							if(!empty($_SESSION['vazio_CRITICO'])){
								echo "<p style='color: #f00; '>".$_SESSION['vazio_CRITICO']."</p>";
								unset($_SESSION['vazio_CRITICO']);
							}
                ?>
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
						echo "<select id='FORNECEDORE_ID' name='FORNECEDORE_ID'>";
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
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
</div>
