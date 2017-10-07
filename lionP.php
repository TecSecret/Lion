


<?php

	include('conexao.php');
			
	abrirConexao();

	$email = $_POST['email'];
	$senha = $_POST['password'];
	$retorno = $_POST['retorno'];
		
		$query = mysql_query("SELECT * FROM tbAdm WHERE emailAdm ='$email'");
		$valido = mysql_num_rows($query);
		if($valido > 0){
			
			$query = mysql_query("SELECT * FROM tbAdm WHERE senhaAdm ='$senha'");
			$valido = mysql_num_rows($query);
			
			if($valido > 0){
				
				session_start();
				$_SESSION['email'] = $email;
				$s_SESSION['password'] = $pass;
				header("Location:admL.php?email=".$email);
				
			}else{
				
				echo("<script type='text/javascript'>
				alert('Usuário invalido!');
				window.location.href='".$retorno."';
				</script>");
				
			}
			
		}else{
			
			$query = mysql_query("SELECT * FROM tbFuncionario WHERE emailFunc ='$email'");
			$valido = mysql_num_rows($query);
			if($valido > 0){
			
				$query = mysql_query("SELECT * FROM tbFuncionario WHERE senhaFunc ='$senha'");
				$valido = mysql_num_rows($query);
			
				if($valido > 0){
				
					session_start();
					$_SESSION['email'] = $email;
					$_SESSION['password'] = $pass;
					header("Location:funcionarioL.php?email=".$email);
				
				}else{
				
					echo("<script type='text/javascript'>
					alert('Usuário invalido!');
					window.location.href='".$retorno."';
					</script>");
				
				}
			
			}else{
			
				$query = mysql_query("SELECT * FROM tbCliente WHERE emailCliente ='$email'");
				$valido = mysql_num_rows($query);
				if($valido > 0){
			
					$query = mysql_query("SELECT * FROM tbCliente WHERE senhaCliente ='$senha'");
					$valido = mysql_num_rows($query);
			
					if($valido > 0){
				
						session_start();
						$_SESSION['email'] = $email;
						$_SESSION['password'] = $pass;
						header("Location:clienteL.php?email=".$email);
				
					}else{
				
						echo("<script type='text/javascript'>
						alert('Usuário invalido!');
						window.location.href='".$retorno."';
						</script>");
				
					}
			
				}else{
			
					echo("<script type='text/javascript'>
					alert('Usuário invalido!');
					window.location.href='".$retorno."';
					</script>");
				
				}
				
			}
		
		}	
	
?>
