<?php

$email = $_GET['email'];
$id_servico = $_POST['id_servico'];
$id_cliente = $_POST['id_cliente'];
$descChamado = $_POST['problemaS'];

$data = date('Y/m/d');

$queryInsert ="INSERT INTO tbChamado (descChamado, dataEntrada, statusChamado, dataSaida, codCliente, codServico, codFuncionario, codAdm) VALUES ('$descChamado', '$data', 'Pendente', '0000-00-00', '$id_cliente', '$id_servico', '0', '0')";

include("conexao.php");
abrirConexao();
mysql_query ($queryInsert) or die (mysql_error());
if (mysql_affected_rows()>0){
	
	echo ("<script>
			alert('Seu chamado foi encaminhado!');
			window.location.href='clienteL.php?email=".$email."#servicoC';
		</script>");
   
} else { 
    
	echo ("Erro ao inserir dados!");

}

?>