
	<?php

	include('conexao.php');
	abrirConexao();
	$email = $_GET['email'];
	$codChamado = $_GET['idChamado'];

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


		#tbC{

			margin-top:50px;


		}


		#tdT{

			color:#000;
			font-family: helvetica;
			font-size: 14px;
			font-weight: bold;


		}

		#tdC{

			color:#000;
			font-family: helvetica;
			font-size: 12px;
			font-weight: 100;


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

			<h1>Registro de dialogos</h1>

			<table id="tbC">';
			
				$query = ('SELECT * FROM tbMensagem');
	         	 $consulta = mysql_query($query);
	         	 while($linha = mysql_fetch_array($consulta)){

	         	 	if($linha['codChamado'] == $codChamado){


	         	 		if($linha['condicao'] == 0){

	         	 			$html.='<tr>
	         	 			
		         	 			<td id="tdT">Cliente:</td>
		         	 			<td id="tdC">'.$linha["dialogo"].'</td>
	         	 			
	         	 			</tr>';

	         	 		}else{

	         	 			$html.='<tr>
	         	 			
		         	 			<td id="tdT">Atendente:</td>
		         	 			<td id="tdC">'.$linha["dialogo"].'</td>
	         	 			
	         	 			</tr>';

	         	 		}

	         	 	}

	         	 }
			
		$html.='</table>

		</div>

		<div id="rodape">

		<h3>Copyright © 2015 Lion Inc. Todos os direitos reservados.</h3>

		</div>

	</body>
</html>';
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


