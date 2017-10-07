
	<?php

	include('conexao.php');
	abrirConexao();
	$email = $_GET['email'];
	$codChamado = $_POST['idChamado'];

	$query = ('SELECT * FROM tbChamado');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['codChamado'] == $codChamado){

	         	 		$codFunc = $linha['codFuncionario'];
	         	 		$codServico = $linha['codServico'];
	         	 		$codAdm = $linha['codAdm'];
	         	 		$descChamado = $linha['descChamado'];
	         	 		$entrada = $linha['dataEntrada'];
	         	 		$saida = $linha['dataSaida'];

	         	 	}

	         	 }

	$query = ('SELECT * FROM tbCliente');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['emailCliente'] == $email){

	         	 		$nome = $linha['nomeCliente'];

	         	 		$cpf = $linha['cpfCliente'];

	         	 		$rg =  $linha['rgCliente'];

	         	 	}

	         	 }


	 if($codAdm == 0 && $codFunc == 0){

	 	$html = '
		<html>
		<head>

			<title>Lion - Registro de dialogos</title>

			<link rel="shortcut icon" href="img/lion.png" >

		</head>
		<style>
		
			#imgC{

				width:100px;
				height:100px;

			}

			#conteudo h1{

				color:#000;
				font-family: helvetica;
				font-size: 22px;
				font-weight: 100;
				text-align:center;


			}

			#hrC{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;

			}

			#rodape{

				width:100%;
				position:absolute;
				bottom:0;

			}

			#rodape h3{

				color:#000;
				font-family: helvetica;
				font-size: 12px;
				font-weight: 100;
				text-align:center;

			}

		</style>
		<body>

			<div id="conteudo">
				
				<center><img src="img/lion3.png" id="imgC"/></center>

				<hr id="hrC">

				<h1>Como você não foi atendido(a) não à um boleto a ser gerado!</h1>

			</div>

			<div id="rodape">

			<h3>Copyright © 2015 Lion Inc. Todos os direitos reservados.</h3>

			</div>

		</body>
	</html>';

	 }else{

	 	if($codFunc == 0){

	 		$query = ('SELECT * FROM tbAdm');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['codAdm'] == $codAdm){

	         	 		$nomeA = $linha['nomeAdm'];
	         	 		$cargo = 'Administrador';

	         	 	}

	         	 }

	 	}else{

	 		$query = ('SELECT * FROM tbFuncionario');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['codFunc'] == $codFunc){

	         	 		$nomeA = $linha['nomeFunc'];
	         	 		$cargo = $linha['cargoFunc'];

	         	 	}

	         	 }

	    }


	    $query = ('SELECT * FROM tbServico');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['codServico'] == $codServico){

	         	 		$nomeServico = $linha['nomeServico'];
	         	 		$descServico = $linha['descServico'];
	         	 		$valorServico = $linha['valorServico'];


	         	 	}

	         	 }

		$html = '
		<html>
		<head>

			<title>Lion - Registro de dialogos</title>

			<link rel="shortcut icon" href="img/lion.png" >

		</head>
		<style>
		
			#imgC{

				width:100px;
				height:100px;

			}

			#conteudo h1{

				color:#000;
				font-family: helvetica;
				font-size: 24px;
				font-weight: 100;
				text-align:center;


			}

			#hrC{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;

			}

			#cliente{

				width:60%;
				height:auto;

			}

			#cliente h1{

				color:#000;
				font-family: helvetica;
				font-size: 20px;
				font-weight: 100;
				text-align:center;

			}

			#cliente h2{

				color:#000;
				font-family: helvetica;
				font-size: 18x;
				font-weight: 100;

			}

			#cliente hr{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;
			   	margin-left:0px;


			}

			#atendente{

				width:60%;
				height:auto;

			}

			#atendente h1{

				color:#000;
				font-family: helvetica;
				font-size: 20px;
				font-weight: 100;
				text-align:center;

			}

			#atendente h2{

				color:#000;
				font-family: helvetica;
				font-size: 18x;
				font-weight: 100;

			}

			#atendente hr{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;
			   	margin-left:0px;


			}

			#servico{

				width:60%;
				height:auto;

			}

			#servico h1{

				color:#000;
				font-family: helvetica;
				font-size: 20px;
				font-weight: 100;
				text-align:center;

			}

			#servico h3{

				color:#000;
				font-family: helvetica;
				font-size: 19x;
				font-weight: bold;

			}

			#servico h2{

				color:#000;
				font-family: helvetica;
				font-size: 18x;
				font-weight: 100;

			}

			#servico hr{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;
			   	margin-left:0px;


			}

			#conta{

				width:60%;
				height:auto;

			}

			#conta h2{

				color:#000;
				font-family: helvetica;
				font-size: 18x;
				font-weight: 100;

			}

			#obs{

				color:#000;
				font-family: helvetica;
				font-size: 14x;
				font-weight: 100;

			}

			#conta hr{

				background:#000;
			    height: 2px;
			   	width: 100%;
			   	position:relative;
			   	border: 0px solid;
			   	margin-left:0px;


			}

			#rodape{

				width:100%;
				position:absolute;
				bottom:0;

			}

			#rodape h3{

				color:#000;
				font-family: helvetica;
				font-size: 12px;
				font-weight: 100;
				text-align:center;

			}

		</style>
		<body>

			<div id="conteudo">

				<center><img src="img/lion3.png" id="imgC"/></center>
				
				<hr id="hrC">

				<h1>Boleto</h1>

			</div>

			<div id="cliente">

				<h1>Cliente</h1>

				<h2>'.$nome.'</h2>

				<h2>CPF: '.$cpf.'</h2>

				<h2>RG: '.$rg.'</h2>

				<hr>

			</div>

			<div id="atendente">

				<h1>Atendente</h1>

				<h2>'.$nomeA.'</h2>

				<h2>Cargo: '.$cargo.'</h2>

				<hr>

			</div>

			<div id="servico">

				<h1>Serviço utilizado</h1>

				<h3>'.$nomeServico.'</h3>

				<h2>Descrição: '.$descServico.'</h2>

				<h2>Descrição do problema: '.$descChamado.'</h2>

				<hr>

			</div>

			<div id="conta">

				<h2>Chamado realizado em: '.$entrada.'</h2>

				<h2>Chamado finalizado em: '.$saida.'</h2>

				<h2>Total a pagar: R$ '.$valorServico.'</h2>

				<hr>

			</div>

			<h3 id="obs">Observação: Este boleto deve ser pago até 7 dias úteis. A ultrapassar o prazo será adicionado R$ 3,50 diarios na conta.</h3>


			<div id="rodape">

			<h3>Copyright © 2015 Lion Inc. Todos os direitos reservados.</h3>

			</div>

		</body>
	</html>';

}


?>

<?php


	
	

/* Carrega a classe DOMPdf */
	require_once("dompdf/dompdf_config.inc.php");

	/* Cria a instância */
	$dompdf = new DOMPDF();

       

				/* Carrega seu HTML */
				$dompdf->load_html($html);

				/* Renderiza */
				$dompdf->render();

				/* Exibe */
				$dompdf->stream(
					"saida.pdf", /* Nome do arquivo de saída */
					array(
						"Attachment" => false /* Para download, altere para true */
					)
				);

?>


