<?php             


include('conexao.php');
				 
abrirConexao();

$email = $_GET['email'];

$condicao = $_POST['condicao'];

$id_chamado = $_POST['idChamado'];

$data = date('Y/m/d');

	if($condicao == 'final'){

		mysql_query("UPDATE tbChamado SET statusChamado = 'Finalizado' WHERE codChamado = '$id_chamado'");
		
		mysql_query("UPDATE tbChamado SET dataSaida = '$data' WHERE codChamado = '$id_chamado'");
		 
				header("location:verChamado.php?email=".$email);
			
	}else{

		mysql_query("DELETE FROM tbChamado WHERE codChamado = '$id_chamado'");

		header("location:verChamado.php?email=".$email);

	}
	

?>