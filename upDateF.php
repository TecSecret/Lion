<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php             


include('conexao.php');
				 
abrirConexao();

$idF = $_REQUEST['editarF'];

		$nomeFunc = $_POST['nomeF'];
		$enderecoFunc = $_POST['endF'];
		$raFunc = $_POST['raF'];
		$cpfFunc = $_POST['cpfF'];
		$cargoFunc = $_POST['cargoF'];
		$emailFunc = $_POST['emailF'];
		$senhaFunc = $_POST['senhaF'];
		$nasctoFunc = $_POST['nasF'];

		mysql_query("UPDATE tbFuncionario SET nomeFunc = '$nomeFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET enderecoFunc = '$enderecoFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET raFunc = '$raFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET cpfFunc = '$cpfFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET cargoFunc = '$cargoFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET emailFunc = '$emailFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET senhaFunc = '$senhaFunc' WHERE codFunc = '$idF'");
		mysql_query("UPDATE tbFuncionario SET nasctoFunc = '$nasctoFunc' WHERE codFunc = '$idF'");
		 echo ("<script>
			alert('Funcionário editado com sucesso!');
			window.location.href='formularioF.php#conteudoCa2';
		</script>");
	

?>