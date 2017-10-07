<?php

$email = $_POST['email'];
$nomeFunc = $_POST['nomeF'];
$enderecoFunc = $_POST['endF'];
$raFunc = $_POST['raF'];
$cpfFunc = $_POST['cpfF'];
$cargoFunc = $_POST['cargoF'];
$emailFunc = $_POST['emailF'];
$senhaFunc = $_POST['senhaF'];
$nasctoFunc = $_POST['nasF'];

$queryInsert ="INSERT INTO tbFuncionario (nomeFunc, enderecoFunc, raFunc, cpfFunc, cargoFunc, emailFunc, senhaFunc, nasctoFunc) VALUES ('$nomeFunc', '$enderecoFunc', '$raFunc', '$cpfFunc', '$cargoFunc', '$emailFunc', '$senhaFunc', '$nasctoFunc')";

include("conexao.php");
abrirConexao();
mysql_query ($queryInsert) or die (mysql_error());
if (mysql_affected_rows()>0){
   
   echo ("<script>
			alert('Funcionário cadastrado com sucesso!');
			window.location.href='formularioF.php?email=".$email."#conteudoCa2';
		</script>");

} else { 
    
	echo ("Erro ao inserir dados!");

}

?>