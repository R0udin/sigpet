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
					alert("Campo é obrigatorio");
					formcontato.FOR_ID.focus();
					return false;
				}if(pDESCRICAO == ""){
					alert("Campo é obrigatorio");
					formcontato.DESCRICAO.focus();
					return false;
				}if(pVALOR_COMPRA == ""){
					alert("Campo é obrigatorio");
					formcontato.VALOR_COMPRA.focus();
					return false;
				}if(pVALOR_VENDA == ""){
					alert("Campo é obrigatorio");
					formcontato.VALOR_VENDA.focus();
					return false;
				}if(pESTOQUE == ""){
					alert("Campo é obrigatorio");
					formcontato.ESTOQUE.focus();
					return false;
				}if(pCRITICO == ""){
					alert("Campo é obrigatorio");
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
							if(!empty($_SESSION[isset($produto->FOR_ID)])){
								echo "value='".$_SESSION[isset($produto->FOR_ID)]."'";
								unset($_SESSION[isset($produto->FOR_ID)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->FOR_ID)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->FOR_ID)]."</p>";
								unset($_SESSION[isset($produto->FOR_ID)]);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Descrição do produto:</label>
                <input type="text" class="form-control col-sm-8" name="DESCRICAO" id="DESCRICAO" value="<?php
                echo isset($produto->DESCRICAO) ? $produto->DESCRICAO : null;
                ?>" />
                <?php
							if(!empty($_SESSION[isset($produto->DESCRICAO)])){
								echo "value='".$_SESSION[isset($produto->DESCRICAO)]."'";
								unset($_SESSION[isset($produto->DESCRICAO)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->DESCRICAO)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->DESCRICAO)]."</p>";
								unset($_SESSION[isset($produto->DESCRICAO)]);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($produto->VALOR_COMPRA) ? $produto->VALOR_COMPRA : null;
                ?>" />
                <?php
							if(!empty($_SESSION[isset($produto->VALOR_COMPRA)])){
								echo "value='".$_SESSION[isset($produto->VALOR_COMPRA)]."'";
								unset($_SESSION[isset($produto->VALOR_COMPRA)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->VALOR_COMPRA)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->VALOR_COMPRA)]."</p>";
								unset($_SESSION[isset($produto->VALOR_COMPRA)]);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" />
                <?php
							if(!empty($_SESSION[isset($produto->VALOR_VENDA)])){
								echo "value='".$_SESSION[isset($produto->VALOR_VENDA)]."'";
								unset($_SESSION[isset($produto->VALOR_VENDA)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->VALOR_VENDA)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->VALOR_VENDA)]."</p>";
								unset($_SESSION[isset($produto->VALOR_VENDA)]);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" />
                <?php
							if(!empty($_SESSION[isset($produto->ESTOQUE)])){
								echo "value='".$_SESSION[isset($produto->ESTOQUE)]."'";
								unset($_SESSION[isset($produto->ESTOQUE)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->ESTOQUE)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->ESTOQUE)]."</p>";
								unset($_SESSION[isset($produto->ESTOQUE)]);
							}
                ?>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Criticidade:</label>
                <input type="text" class="form-control col-sm-8" name="CRITICO" id="CRITICO" value="<?php
                echo isset($produto->CRITICO) ? $produto->CRITICO : null;
                ?>" />
                <?php
							if(!empty($_SESSION[isset($produto->CRITICO)])){
								echo "value='".$_SESSION[isset($produto->CRITICO)]."'";
								unset($_SESSION[isset($produto->CRITICO)]);
							}
						 ?>	
						 <?php
							if(!empty($_SESSION[isset($produto->CRITICO)])){
								echo "<p style='color: #f00; '>".$_SESSION[isset($produto->CRITICO)]."</p>";
								unset($_SESSION[]);
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
		<script src="../js/bootstrap.min.js"></script>
</div>
