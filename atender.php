<?php

include("conexao.php");
abrirConexao();

$email = $_GET['email'];
$cod_chamado = $_POST['codChamado'];
$condicao = $_POST['condicao'];

$data = date('Y/m/d');

if($condicao == 'add'){
	
	$cod_func = $_POST['codFunc'];
	mysql_query("UPDATE tbChamado SET statusChamado = 'Atendendo' WHERE codChamado = '$cod_chamado'");
	mysql_query("UPDATE tbChamado SET codFuncionario = '$cod_func' WHERE codChamado = '$cod_chamado'");

	echo ("<script>
			alert('Pertencente aos seus atendimentos agora!');
			window.location.href='funcionarioL.php?email=".$email."#atendimentosA';
		</script>");
   
  }else{


  	if($condicao == 'final'){

  		mysql_query("UPDATE tbChamado SET statusChamado = 'Finalizado' WHERE codChamado = '$cod_chamado'");
  		mysql_query("UPDATE tbChamado SET dataSaida = '$data' WHERE codChamado = '$cod_chamado'");
  		echo ("<script>
			alert('Chamado finalizado!');
			window.location.href='funcionarioL.php?email=".$email."#conteudoA';
		</script>");

  	}else{
		
		if($condicao == 'cancel'){

			mysql_query("UPDATE tbChamado SET statusChamado = 'Transferido' WHERE codChamado = '$cod_chamado'");
			mysql_query("UPDATE tbChamado SET codFuncionario = '0' WHERE codChamado = '$cod_chamado'");
	
			echo ("<script>
				alert('Transferido para a tabela de Chamados disponíveis!');
				window.location.href='funcionarioL.php?email=".$email."#conteudoA';
			</script>");
		
		}else{
			
			if($condicao == 'addA'){
				
				$cod_adm = $_POST['codAdm'];
				mysql_query("UPDATE tbChamado SET statusChamado = 'Atendendo' WHERE codChamado = '$cod_chamado'");
				mysql_query("UPDATE tbChamado SET codAdm = '$cod_adm' WHERE codChamado = '$cod_chamado'");

				echo ("<script>
						alert('Pertencente aos seus atendimentos agora!');
						window.location.href='admL.php?email=".$email."';
					</script>");
			
			}else{
			
				if($condicao == 'finalA'){
					
					mysql_query("UPDATE tbChamado SET statusChamado = 'Finalizado' WHERE codChamado = '$cod_chamado'");
					mysql_query("UPDATE tbChamado SET dataSaida = '$data' WHERE codChamado = '$cod_chamado'");
					echo ("<script>
						alert('Chamado finalizado!');
						window.location.href='admL.php?email=".$email."';
					</script>");

				
				}else{
					
					if($condicao == 'cancelA'){
					
						mysql_query("UPDATE tbChamado SET statusChamado = 'Transferido' WHERE codChamado = '$cod_chamado'");
						mysql_query("UPDATE tbChamado SET codAdm = '0' WHERE codChamado = '$cod_chamado'");
				
						echo ("<script>
							alert('Transferido para a tabela de Chamados disponíveis!');
							window.location.href='admL.php?email=".$email."';
						</script>");
					
					}
				
				}
			
			}
			
		}

  	}

  }

?>