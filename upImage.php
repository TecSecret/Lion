<?php             


include('conexao.php');
				 
abrirConexao();

$email = $_GET['email'];

$imagem = $_POST['fotoE'];

	mysql_query("UPDATE tbCliente SET fotoCliente = '$imagem' WHERE emailCliente = '$email'");
	
	 
			header("location:clienteL.php?email=".$email."#perfilC");
		

	

?>