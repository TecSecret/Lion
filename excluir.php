<?php  
 include('conexao.php');
                  
abrirConexao();

	$email = $_GET['email'];
     $valida = $_POST['excluir'];
	 $validaF = $_POST['excluirF'];  
	 $validaP = $_POST['excluirS'];  

	if($valida != ""){
	
    $delete = @mysql_query("DELETE FROM tbCliente WHERE codCliente = $valida");
	header ("Location:formulario.php?email=".$email."#conteudoCa2");
	
	}else{
		
		if($validaF != ""){
	
			$delete = @mysql_query("DELETE FROM tbFuncionario WHERE codFunc = $validaF");
			header ("Location:formularioF.php?email=".$email."#conteudoCa2");

		}else{
		
			$delete = @mysql_query("DELETE FROM tbServico WHERE codServico = $validaP");
			header ("Location:formularioP.php?email=".$email."#conteudoCa2");
			
		}
	}


?>  