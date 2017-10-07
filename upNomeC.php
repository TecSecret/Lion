<?php             


include('conexao.php');
				 
abrirConexao();

$email = $_GET['email'];

$nome = $_POST['opcaoC'];

	mysql_query("UPDATE tbCliente SET nomeCliente = '$nome' WHERE emailCliente = '$email'");
	
	 
			header("location:clienteL.php?email=".$email."#perfilC");
		

	

?>