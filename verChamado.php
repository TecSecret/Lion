<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<head>

	
		<link rel="stylesheet" type="text/css" media="screen and (min-width:0px)" href="login2.css">
		<link rel="stylesheet" type="text/css" media="screen and (min-width:700px)" href="login.css">

	
		<link rel="shortcut icon" href="img/lion.png" >



		<title>Lion - Seus chamados</title>

	</head>

	<body>

<script src="jq/jquery-2.1.4.min.js"></script>

<?php

    include('conexao.php');
            
    abrirConexao();

   $email = $_GET['email'];

     $query = ('SELECT * FROM tbCliente');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){
             
              if($email == $linha['emailCliente']){
                  
                $id_cliente = $linha['codCliente'];
      				  $imagem = $linha['fotoCliente'];
      				  $nome = $linha['nomeCliente'];
      				  
            }

         }
                 echo("

                 	<div id='complementoM'>

                 	<div id='menuChamado'>

	<a href='clienteL.php?email=".$email."' id='voltarChamado'><img name='imgF' src='img/voltar2.png' /></a>

          
				<h2>Chamados</h2>
        
        <table>

        <tr>

        <td><h3>".$nome."</h3></td>
		<td><div id='fotoChamado' style=' 
        background:rgba(1,1,1,0) url(img/".$imagem.");
		background-repeat:no-repeat;
    	background-size: 40px 40px;'></div><td>
          
        </tr>

        </table>

            </div>

            </div>


            <div id='conteudo_chamado'>


            	<div id='atendendoD'>");
			
			
				echo("<table cellpadding='0' cellspacing='0'>
				
						<tr id='tituloT'>
						
							<td>Número</td>
							<td>Serviço</td>
							<td>Solicitado</td>
							<td>Status</td>
							<td>Saída</td>
							<td>Responsável</td>
						
						</tr>
					
					");
					
	     $verifica = 0;

	     $query = ('SELECT * FROM tbChamado');
	         $consulta = mysql_query($query);
	         while($linha = mysql_fetch_array($consulta)){

	         	$codChamado = $linha['codChamado'];

	          if($id_cliente == $linha['codCliente']){
				
					$query2 = ('SELECT * FROM tbServico');
	         		$consulta2 = mysql_query($query2);
	         		while($linha2 = mysql_fetch_array($consulta2)){

	              		if( $linha2['codServico'] == $linha['codServico']){
						
								echo("<tr id='itensT' bgcolor='#fff'>");
									  $verifica++;
									 
									 $id_chamado = $linha['codChamado'];
									  echo("<td id='tdV'>".$linha['codChamado']."</td>
									  <td id='tdV'>".$linha2['nomeServico']."</td>
									  <td id='tdV'>".$linha['dataEntrada']."</td>
									  <td id='tdV'>".$linha['statusChamado']."</td>");

									  if($linha['dataSaida'] == 0000-00-00){

									  	 echo("<td id='tdV'>Indisponível</td>");

									  }else{

									  	echo("<td id='tdV'>".$linha['dataSaida']."</td>");

									  }
						
						}
				  
					}
					
					if($linha['codFuncionario'] == 0 && $linha['codAdm'] == 0){
									
								 echo("<td id='tdV'>Aguardando</td>");
								
						
							}else{
							
								if($linha['codAdm'] != 0){

								$query2 = ('SELECT * FROM tbAdm');
								$consulta2 = mysql_query($query2);
								while($linha2 = mysql_fetch_array($consulta2)){
									
									 if( $linha2['codAdm'] == $linha['codAdm']){
							
										echo("<td id='tdV'>".$linha2['nomeAdm']."</td>");
										
								
									}
								
								}

								}else{

								$query2 = ('SELECT * FROM tbFuncionario');
								$consulta2 = mysql_query($query2);
								while($linha2 = mysql_fetch_array($consulta2)){
									
									 if( $linha2['codFunc'] == $linha['codFuncionario']){
							
										echo("<td id='tdV'>".$linha2['nomeFunc']."</td>");
										
								
								}
								
							}

						}

				}


				if( $linha['statusChamado'] == 'Finalizado'){
							
								echo("<form name='boleto' id='boleto' action='boleto.php?email=".$email."' method='post' > 

									<td><input type='submit' name='opcaoE' value='Boleto' id='opcaoC'>

									<input name='idChamado' type='hidden' value='".$id_chamado."'/> 

									<input name='condicao' type='hidden' value='delete'/></td> 

									</form>");

								echo("<form name='excluir' id='configC' action='upChamadoC.php?email=".$email."' method='post' > 

									<td><input type='submit' name='opcaoE' value='Excluir' id='opcaoC'>

									<input name='idChamado' type='hidden' value='".$id_chamado."'/> 

									<input name='condicao' type='hidden' value='delete'/></td> 

									</form>");

							}else{


							echo("<form name='mensagem' id='mensagen' action='dialogo.php?email=".$email."' method='post' > 

									<td><input type='submit' name='dialogo' value='Dialogo' id='opcaoC'>

									<input name='idChamado' type='hidden' value='".$id_chamado."'/> </td> 

									<input name='mensageiro' type='hidden' value='cliente'/>

									</form>");
							
							echo("<form name='finalizar' id='configC' action='upChamadoC.php?email=".$email."' method='post' > 

									<td><input type='submit' name='opcaoC' value='Finalizar' id='opcaoC'>

									<input name='idChamado' type='hidden' value='".$id_chamado."'/> 

									<input name='condicao' type='hidden' value='final'/></td> 

									</form>");

							}

			}
				
		}
		 	
			echo("</tr>
			
			</table>");

	      if($verifica == 0){

	        echo("<h1 id='nada'>Sem dados</h1>");

		  }

	    ?>

		</div>

	</div>

	<div id="rodapeVer">
                     
                 <table id="tb">
                   
                   		<tr> 
                           
                           <td><h3><a href="https://www.facebook.com">f</a></h3></td>
                            
                            <td><h4><a href="https://www.youtube.com/">y</a></h4></td>
                            
                            <td><h5><a href="https://twitter.com/">t</a></h5></td>
                    
                   		</tr>
                   
                  </table>
                  
		
					 <h3 id="cop">Copyright © 2015 Lion Inc. Todos os direitos reservados.</h3>
                    
                     <img src="img/lion3.png" id="rLion" />
		
		</div>

	</body>

</html>