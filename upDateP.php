<?php             


include('conexao.php');
				 
abrirConexao();

$idP = $_REQUEST['editarP'];

		$codigoServico = $_POST['codS'];
		$nomeServico = $_POST['nomeS'];
		$descServico = $_POST['descS'];
		$valorServico = $_POST['valorS'];
		$obsServico = $_POST['obsS'];

		echo("<script>alert('ssss".$valorServico."');</script>");

		mysql_query("UPDATE tbServico SET codigoServico = '$codigoServico' WHERE codServico = '$idP'");
		mysql_query("UPDATE tbServico SET nomeServico = '$nomeServico' WHERE codServico = '$idP'");
		mysql_query("UPDATE tbServico SET descServico = '$descServico' WHERE codServico = '$idP'");
		mysql_query("UPDATE tbServico SET valorServico = '$valorServico' WHERE codServico = '$idP'");
		mysql_query("UPDATE tbServico SET obsServico = '$obsServico' WHERE codServico = '$idP'");
		
		$email = $_POST['email'];
		$verifica = $_POST['condicao'];
		
		if($verifica == 'func'){
			
			echo ("<script>
				alert('Serviço editado com sucesso!');
				window.location.href='formularioPf.php?email=".$email."#conteudoCa2f';
			</script>");

			
		}else{
		
			echo ("<script>
				alert('Serviço editado com sucesso!');
				window.location.href='formularioP.php?email=".$email."#conteudoCa2';
			</script>");
		
		}
	

?>