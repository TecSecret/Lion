<?php

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

$verifica = $_POST['condicao'];

$queryInsert ="INSERT INTO tbCliente (nomeCliente, enderecoCliente, rgCliente, cpfCliente, telefoneCliente, celularCliente, cidadeCliente, emailCliente, senhaCliente, nasctoCliente, fotoCliente, fotoCapa) VALUES ('$nomeCliente', '$enderecoCliente', '$rgCliente', '$cpfCliente', '$numeroCliente', '$celularCliente', '$cidadeCliente', '$emailCliente', '$senhaCliente', '$nasctoCliente', 'usuario.png', '')";

include("conexao.php");
abrirConexao();

$email = $_POST['email'];

mysql_query ($queryInsert) or die (mysql_error());
if (mysql_affected_rows()>0){
	
	if($verifica == 'func'){
	
		echo ("<script>
				alert('Cliente cadastrado com sucesso!');
				window.location.href='formularioCf.php?email=".$email."#conteudoCa2f';
			</script>");
	
	}else{
	
		echo ("<script>
				alert('Cliente cadastrado com sucesso!');
				window.location.href='formulario.php?email=".$email."#conteudoCa2';
			</script>");
		
	}

} else { 
    
	echo ("Erro ao inserir dados!");

}

?>