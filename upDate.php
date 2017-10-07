<?php             


include('conexao.php');
				 
abrirConexao();

$idE = $_REQUEST['editar'];

$nomeCliente = $_POST['nomeC'];
$enderecoCliente = $_POST['endC'];
$rgCliente = $_POST['rgC'];
$cpfCliente = $_POST['cpfC'];
$numeroCliente = $_POST['numC'];
$celularCliente = $_POST['celC'];
$cidadeCliente = $_POST['cidC'];
$emailCliente = $_POST['emailC'];
$senhaCliente = $_POST['senhaC'];
$nasctoCliente = $_POST['nasC']; 

	mysql_query("UPDATE tbCliente SET nomeCliente = '$nomeCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET enderecoCliente = '$enderecoCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET rgCliente = '$rgCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET cpfCliente = '$cpfCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET telefoneCliente = '$numeroCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET celularCliente = '$celularCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET cidadeCliente = '$cidadeCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET emailCliente = '$emailCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET senhaCliente = '$senhaCliente' WHERE codCliente = '$idE'");
	mysql_query("UPDATE tbCliente SET nasctoCliente = '$nasctoCliente' WHERE codCliente = '$idE'");
	
	$email = $_POST['email'];
	
	$verifica = $_POST['condicao'];
		
	if($verifica == 'func'){
			
			echo ("<script>
			alert('Cliente editado com sucesso!');
			window.location.href='formularioCf.php?email=".$email."#conteudoCa2f';
		</script>");
			
	}else{
	
	 echo ("<script>
			alert('Cliente editado com sucesso!');
			window.location.href='formulario.php?email=".$email."#conteudoCa2';
		</script>");

	}

?>