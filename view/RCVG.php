<?php
require '../model/RCGV.php';
?>
<div id="container">
  <div id="section">
    <div class="container"> <img src="../images/other/subheader_pic.jpg" alt="" />
      <div class="content">
        <h2>Relatório Comparativo de Vendas <strong>Gráfico</strong></h2>
        <div align="center">
          <table width="778" border="0" align="center" cellspacing="30">
            <tr>
              <th scope="col">DATA INICIAL:
                <input type="text" name="DATA INICIAL" value="01/01/2019" size="10" /></th>
              <th scope="col">DATA FINAL:
                <input type="text" name="DATA FINAL" value="01/01/2019" size="10" />
              </th>
            <th scope="col">TIPO:
<select name="TIPO">
    <?php while ($row = pg_fetch_assoc($tipopg))
                                {
                                        echo "<option value=$row[DESCRICAO_PAGAMT]>$row[DESCRICAO_PAGAMT]</option>";
                                }
	?>
</select></th>
<th scope="col">CODIGO: <input type="text" name="CODIGO" value="1" size="11" />
</th>
    <th scope="col">VENDEDOR:<select name="VENDEDOR">
    <?php while ($row = pg_fetch_assoc($nomefunc))
                                {
                                        echo "<option value=$row[NOME_FUNCIONARIO]>$row[NOME_FUNCIONARIO]</option>";
                                }
	?>
</select></th>
    <th scope="col">CLIENTE: <select name="CLIENTE">
    <?php while ($row = pg_fetch_assoc($nomecliente))
                                {
                                        echo "<option value=$row[NOME_CLIENTE]>$row[NOME_CLIENTE]</option>";
                                }
	?>
</select></th>
    <th scope="col">
<!--BOTAO BUSCAR-->
<form name="busca" action="buscar.php" method="POST">

<input type="submit" name="buscar" value="Buscar" />

</form></th>
            </tr>
          </table>
        </div>
        <p>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- //#sub-header -->

<div id="content" class="clearfix">
  <div class="container">
    <div class="column wide">
      <h2>Tabela Vendas</h2>
      <table border=1>
		<thead>
			<tr >
				<th colspan="4">Vendas</th>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					2018
				</td>
				<td>
					2019
				</td>
				<td>
					2020
				</td>
			</tr>
			<?php
			for($i=0;$i<12;$i++){
				echo "<tr>";
					echo "<td>$mes[$i]</td>";
					echo "<td>$venda18[$i]</td>";
					echo "<td>$venda19[$i]</td>";
					echo "<td>$venda20[$i]</td>";
				echo "</tr>";

			}
			?>
		</thead>
		<tbody>

		</tbody>
	  </table>
    </div>
    <!-- //.column -->
    <div class="column mid">
      <h2></h2>
      <div class="box">
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);
	  var jan18 = <?php echo $venda18[0] ?>;
	  var fev18 = <?php echo $venda18[1] ?>;
	  var mar18 = <?php echo $venda18[2] ?>;
	  var abr18 = <?php echo $venda18[3] ?>;
	  var mai18 = <?php echo $venda18[4] ?>;
	  var jun18 = <?php echo $venda18[5] ?>;
	  var jul18 = <?php echo $venda18[6] ?>;
	  var ago18 = <?php echo $venda18[7] ?>;
	  var set18 = <?php echo $venda18[8] ?>;
	  var out18 = <?php echo $venda18[9] ?>;
	  var nov18 = <?php echo $venda18[10] ?>;
	  var dez18 = <?php echo $venda18[11] ?>;
	  //
	  var jan19 = <?php echo $venda19[0] ?>;
	  var fev19 = <?php echo $venda19[1] ?>;
	  var mar19 = <?php echo $venda19[2] ?>;
	  var abr19 = <?php echo $venda19[3] ?>;
	  var mai19 = <?php echo $venda19[4] ?>;
	  var jun19 = <?php echo $venda19[5] ?>;
	  var jul19 = <?php echo $venda19[6] ?>;
	  var ago19 = <?php echo $venda19[7] ?>;
	  var set19 = <?php echo $venda19[8] ?>;
	  var out19 = <?php echo $venda19[9] ?>;
	  var nov19 = <?php echo $venda19[10] ?>;
	  var dez19 = <?php echo $venda19[11] ?>;
	  //
	  var jan20 = <?php echo $venda20[0] ?>;
	  var fev20 = <?php echo $venda20[1] ?>;
	  var mar20 = <?php echo $venda20[2] ?>;
	  var abr20 = <?php echo $venda20[3] ?>;
	  var mai20 = <?php echo $venda20[4] ?>;
	  var jun20 = <?php echo $venda20[5] ?>;
	  var jul20 = <?php echo $venda20[6] ?>;
	  var ago20 = <?php echo $venda20[7] ?>;
	  var set20 = <?php echo $venda20[8] ?>;
	  var out20 = <?php echo $venda20[9] ?>;
	  var nov20 = <?php echo $venda20[10] ?>;
	  var dez20 = <?php echo $venda20[11] ?>;
	  //
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Grafico anual', '2018', '2019', '2020'],
          ['JAN', jan18, jan19, jan20],
          ['FEV', fev18, fev19, fev20],
          ['MAR', mar18, mar19, mar20],
          ['ABR', abr18, abr19, abr20],
          ['MAI', mai18, mai19, mai20],
          ['JUN', jun18, jun19, jun20],
          ['JUL', jul18, jul19, jul20],
          ['AGO', ago18, ago19, ago20],
          ['SET', set18, set19, set20],
          ['OUT', out18, out19, out20],
          ['NOV', nov18, nov19, nov20],
          ['DEZ', dez18, dez19, dez20],


        ]);

        var options = {
          chart: {
            title: 'RELATORIO CORPORATIVO DE VENDAS GRAFICO',
            subtitle: 'Vendas, Meses e Valor: 2018-2020',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

      </div>
      <ul id="bottom-opt">
    <li><a onclick="myFunction()"><span>Imprimir</span></a></li>
    <li><a onclick="myFunction()"><span>Salvar PDF</span></a></li>
    <li><a href="../index.html"><span>Fechar</span></a></li>
    </ul>
      </div>
    </div>
    <!-- //.column -->

    <!-- //.column -->
  </div>
