<?php

$codigoServico = $_POST['codS'];
$nomeServico = $_POST['nomeS'];
$descServico = $_POST['descS'];
$valorServico = $_POST['valorS'];
$obsServico = $_POST['obsS'];
$email = $_GET['email'];

$queryInsert ="INSERT INTO tbServico (codigoServico, nomeServico, descServico, valorServico, obsServico) VALUES ('$codigoServico',    '$nomeServico', '$descServico', '$valorServico', '$obsServico')";

$verifica = $_POST['condicao'];

include("conexao.php");
abrirConexao();

$email = $_POST['email'];

mysql_query ($queryInsert) or die (mysql_error());
if (mysql_affected_rows()>0){
	
	if($verifica == 'func'){
	
			echo ("<script>
				alert('Serviço cadastrado com sucesso!');
				window.location.href='formularioPf.php?email=".$email."#conteudoCa2f';
			</script>");	
		
	}else{
	
			echo ("<script>
				alert('Serviço cadastrado com sucesso!');
				window.location.href='formularioP.php?email=".$email."#conteudoCa2';
			</script>");
		
	}
   
} else { 
    
	echo ("Erro ao inserir dados!");

}

?>