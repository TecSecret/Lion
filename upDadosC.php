<?php             


include('conexao.php');
				 
abrirConexao();

$email = $_GET['email'];

$condicao = $_POST['condicao'];

if($condicao == 'foto'){

$imagem = $_POST['fotoE'];

	mysql_query("UPDATE tbCliente SET fotoCliente = '$imagem' WHERE emailCliente = '$email'");
	
	 
			header("location:clienteL.php?email=".$email."#perfilC");
		
}else{
		
	if($condicao == 'capa'){
		
		$capa = $_POST['fileCapa'];

		mysql_query("UPDATE tbCliente SET fotoCapa = '$capa' WHERE emailCliente = '$email'");
	
	 
		header("location:clienteL.php?email=".$email."#perfilC");
	
	
	}else{
		
		if($condicao == 'nome'){
		
			$nome = $_POST['nomeC'];

			mysql_query("UPDATE tbCliente SET nomeCliente = '$nome' WHERE emailCliente = '$email'");
	
	 
			header("location:clienteL.php?email=".$email."#perfilC");	
			
		}else{

			if($condicao == 'senha'){
		
				$senha = $_POST['senhaN'];

				mysql_query("UPDATE tbCliente SET senhaCliente = '$senha' WHERE emailCliente = '$email'");
		
		 
				echo("<script type='text/javascript'>
	    	
					alert('Senha modificada com sucesso!');
					window.location.href='clienteL.php?email=".$email."#perfilC';
				</script>");

			}else{
			
				if($condicao == 'senhaF'){
			
					$senha = $_POST['senhaNf'];
	
					mysql_query("UPDATE tbFuncionario SET senhaFunc = '$senha' WHERE emailFunc = '$email'");
			
			 
					echo("<script type='text/javascript'>
				
						alert('Senha modificada com sucesso!');
						window.location.href='funcionarioL.php?email=".$email."';
					</script>");
					
				}else{
					
					$senha = $_POST['senhaNa'];
	
					mysql_query("UPDATE tbAdm SET senhaAdm = '$senha' WHERE emailAdm = '$email'");
			
			 
					echo("<script type='text/javascript'>
				
						alert('Senha modificada com sucesso!');
						window.location.href='admL.php?email=".$email."';
					</script>");
				
				}

			}	
			
		}
	
	}

}
	

?>