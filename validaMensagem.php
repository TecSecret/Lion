<?php




$email = $_GET['email'];

$mensageiro = $_GET['mensageiro'];

date_default_timezone_set('Brazil/East');
date_default_timezone_set('America/Sao_Paulo');

$hora = date('H:i');

if($mensageiro == 'cliente'){

	$recebe = 0;

}else{

	$recebe = 1;

}

$codChamado = $_GET['idChamado'];

$verifica = $_POST['pessoa'];

include("conexao.php");
abrirConexao();

	$mensagem = $_POST['caixa'];

	$queryInsert ="INSERT INTO tbMensagem (dialogo, condicao, codChamado, horaMensagem) VALUES('$mensagem', '$recebe', '$codChamado', '$hora')";
			
	mysql_query ($queryInsert) or die (mysql_error());
			
		if (mysql_affected_rows()>0){

				echo("<script>window.location.href='dialogo.php?email=".$email."&idChamado=".$codChamado."&mensageiro=".$mensageiro."';</script>");

		} else { 
    
				echo ("Erro ao inserir dados!");
			
	}

?>