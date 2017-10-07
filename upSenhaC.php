<?php             


include('conexao.php');
				 
abrirConexao();

$email = $_GET['email'];

$senha = $_POST['senhaN'];

	mysql_query("UPDATE tbCliente SET senhaCliente = '$senha' WHERE emailCliente = '$email'");
	
	 
			echo("<script type='text/javascript'>
    	
				alert('Senha modificada com sucesso!');
				window.location.href='clienteL.php?email=".$email."#perfilC';
			</script>");
		

	

?>