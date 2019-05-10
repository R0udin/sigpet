
<div class="container">
    <form action="?controller=VendasController&<?php echo isset($venda->id) ? "method=atualizar&id={$venda->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:40px">
            <div class="card-header">
                <span class="card-title">Vendas</span>
            </div>
            <div class="card-body">
            </div>
			<input type="hidden" name="FOR_ID" id="FOR_ID" value="<?php echo isset($venda->FOR_ID) ? $venda->FOR_ID : null; ?>" />
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Cliente:</label>
                <?php
                //var_dump($clientes);

                    if ($clientes){
                    echo "<select id='cliente' name='cliente'>";
                      foreach($clientes as $cliente){
                        echo "<option value='".$cliente->id."'>".$cliente->NOME_CLIENTE."</option>";
                      }
                      echo "</select>";
                    }else{echo 'Clientes nao encontrados';}

                ?>
            </div>
            <div class="form-group form-row">
				<table>
					<tr>
						<td>
							<label class="col-sm-2 col-form-label text-right">Nome do produto:</label>
						</td>
						<td width="50%">
								<select id='nmproduto' onchange='atualizaEst();'>
							<?php
								//var_dump($clientes);

								if ($produtos){
									echo "<option disabled selected value> -- select an option -- </option>";
								  foreach($produtos as $produto){
									echo "<option value=".$produto->id.">".$produto->DESCRICAO."</option>";
									echo "<span id='".$produto->id."' value=".$produto->ESTOQUE." hidden></span>";
								  }
								}else{echo 'Produtos não encontrados';}

							?>
								</select>
							<?php
								//var_dump($clientes);

								if ($produtos){
								  foreach($produtos as $produto){
									  //echo $produto->ESTOQUE;
									echo "<span id='".$produto->id."' hidden>".$produto->ESTOQUE."/".$produto->VALOR_VENDA."</span>";
								  }
								}else{echo 'Produtos não encontrados';}

							?>
						</td>
						<td>
							<label class="col-sm-2 col-form-label text-right">Quantidade do produto:</label>
						</td>
						<td>
							<select id='qtproduto'></select>
						</td>
						<td>
							<input type="button" class="btn" id="incluir" value="Incluir" onclick="incluirTab();">
						</td>
					</tr>
				</table>
				<table id="carrinho" name="carrinho">
					<thead>
						<td></td>
						<td>Nome do Produto</td>
						<td>Quantidade</td>
						<td>Valor Un.</td>
						<td>Valor Total</td>
					</thead>
				</table>
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de compra:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_COMPRA" id="VALOR_COMPRA" value="<?php
                echo isset($venda->VALOR_VENDA1_CAB) ? $venda->VALOR_VENDA1_CAB : null;
                ?>" />
			<!--
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Valor de venda:</label>
                <input type="text" class="form-control col-sm-8" name="VALOR_VENDA" id="VALOR_VENDA" value="<?php
                //echo isset($produto->VALOR_VENDA) ? $produto->VALOR_VENDA : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Estoque:</label>
                <input type="text" class="form-control col-sm-8" name="ESTOQUE" id="ESTOQUE" value="<?php
                //echo isset($produto->ESTOQUE) ? $produto->ESTOQUE : null;
                ?>" />
            </div>
			-->
            <div class="form-group form-row">
            <div class="card-footer">
                    <input type="hidden" name="id" id="id" value="<?php echo isset($cliente->id) ? $cliente->id : null; ?>" />
                    <button class="btn btn-success" type="submit">Salvar</button>
                    <button class="btn btn-secondary">Limpar</button>
                    <a class="btn btn-danger" href="?controller=ProdutosController&method=listar">Cancelar</a>
            </div>

        </div>
    </form>
</div>

<script type="text/javascript">
var total = 0;

function incluirTab() {

	//vars do nome do produto
	var selproduto = document.getElementById("nmproduto");
	var vlprod = selproduto.options[selproduto.selectedIndex].value; //id
	var nmprod = selproduto.options[selproduto.selectedIndex].text;  //nome
	var spanprod = document.getElementById(vlprod);  //preço
	precoprod = spanprod.innerHTML.split('/')[1];

	//vars do estoque do produto
	var selestoque = document.getElementById("qtproduto");
	var vlqt = selestoque.options[selestoque.selectedIndex].value;

   // alert(vlprod);

	var table = document.getElementById('carrinho');

	var tr = document.createElement('tr');
	tr.setAttribute('name',vlprod+"prodrow");

	var td = document.createElement('td'); //button
	var td1 = document.createElement('td'); //nome produto
	var td2 = document.createElement('td'); //quantidade produto
	var td3 = document.createElement('td'); //preço produto
	var td4 = document.createElement('td'); //preço total produto

	td1.value = vlprod;
	td1.innerHTML = nmprod;
	td1.setAttribute('name',vlprod+"prod");

	td2.value = vlqt;
	td2.innerHTML = vlqt;
	td2.setAttribute('name',vlprod+"qnt");
	
	td3.value = vlprod;
	td3.innerHTML = precoprod;
	td3.setAttribute('name',vlprod+"preco");
	
	td4.id = vlprod;
	multprod = parseFloat(precoprod)*parseFloat(vlqt);
	td4.innerHTML = multprod;
	td4.setAttribute('name',vlprod+"total");

	// CREATE BUTTON
	var button = document.createElement('input');

	// SET INPUT ATTRIBUTE.
	button.setAttribute('type', 'button');
	button.setAttribute('value', 'Remove');

	// ADD THE BUTTON's 'onclick' EVENT.
	button.setAttribute('onclick', 'removeRow(this)');

	td.appendChild(button);

	tr.appendChild(td);
	tr.appendChild(td1);
	tr.appendChild(td2);
	tr.appendChild(td3);
	tr.appendChild(td4);

	table.appendChild(tr);
	
	total = total + multprod;
	
	document.getElementById('VALOR_COMPRA').value = total;

}

function removeRow(oButton) {
	var carrinho = document.getElementById('carrinho');
	//alert(oButton.parentNode.parentNode.lastChild.innerHTML);
	total = total - parseFloat(oButton.parentNode.parentNode.lastChild.innerHTML);
	document.getElementById('VALOR_COMPRA').value = total;
	carrinho.deleteRow(oButton.parentNode.parentNode.rowIndex);       // BUTTON -> TD -> TR.
}

select = document.getElementById('nmproduto');
selectqt = document.getElementById('qtproduto');
function atualizaEst() {
	selectqt.innerHTML = "";
	id = select.options[select.selectedIndex].value;
	//alert(id.toString());
	idEst = document.getElementById(id);
	//alert(idEst.innerHTML);
	est = idEst.innerHTML.split('/')[0];
	for(i=0;i<=est;i++){
		var opt = document.createElement('option');
		opt.value = i;
		opt.innerHTML = i;
		selectqt.appendChild(opt);
	}
	
}

</script>
