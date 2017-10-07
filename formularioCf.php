<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>

	
		<link rel="stylesheet" type="text/css" href="lion.css">

	
		<link rel="shortcut icon" href="img/lion.png" >


		<title>Lion - Cadastro</title>

	</head>

	<body id="voltarTopo">

<script src="jq/jquery-2.1.4.min.js"></script>

<?php

$email = $_GET['email'];

?>

<div id="containerCa">
		<div id="menuCa">
         
		 			 	<article class="glass down">
  							<a href="funcionarioL.php"><h9 class="cancel"></h9></a>
                         </article>
		 
            <ul>
            	<center><table>
					<tr>
						 <td><li><h3>Lion</h3></li></td>
						  <td><li><h3><img src="img/menu2.png" /></h3></li></td>
						 <td><li><li><a href="#" id="open">Cadastrar</a></li></li></td>
          			</tr>
		  		</table></table>
		  
            </ul>

        </div>
        
        <div id="blurM"></div>
        
       	<div id="optionCa">

            <center><ul>
            
						<li><a href="">Cliente</a></li>
                        
                        <?php
						echo("<li><a href='formularioPf.php?email=".$email."'>Serviço</a></li>");
						?>
          	
		  
            </ul></center>

        </div>

<script src='jq/jquery-2.1.4.min.js'></script>

<script>

var $l = jQuery.noConflict();

    $l(document).ready(function(){


        $l('.cancel').click(function(event){


        event.preventDefault();
        

			 $l('#blurM').slideToggle(500);
            $l('optionCa').slideToggle(500);
			 var overlay = document.querySelector('.glass');
			  if (overlay.className === 'glass down') {
				  
				<?php
				
				echo("window.location.href='funcionarioL.php?email=".$email."';");
				
				?>
				
			  } else {
				overlay.className = 'glass down';
			  }
            var intervalo = window.setInterval(function() {
            
				document.getElementById('menuCa').style.background='rgba(2,2,2,0.76)';
			
            }, 380);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 380);
            document.getElementById('voltarTopo').style.backgroundImage='url(img/voltar2.png)';

    });


        $l('#open').click(function(event){

         
         event.preventDefault();
	   
	   		$l('#blurM').slideToggle(500);   
            $l('#optionCa').slideToggle(500);   
             var overlay = document.querySelector('.glass');
			  if (overlay.className === 'glass down') {
				overlay.className = 'glass up';
				
				document.getElementById('menuCa').style.background='rgba(2,2,2,0.40)';
				
			  } else {
				overlay.className = 'glass down';
				
				 var intervalo = window.setInterval(function() {
 
                document.getElementById('menuCa').style.background='rgba(2,2,2,0.76)';
            
            }, 380);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 380);
				
			  }
			  
			  

        });

    
    });

    </script>
    
?>
      
         </div>	


			<div id="conteudoCa">
         
         		<h3 style="font-family:Helvetica;
                    margin-top:-56px;
                    width:100%;"><img src="img/mac16.jpg" /></h3>
         
		         	 
				<h1 style=" color:rgba(252,252,252,1);
                margin-top:-69%;
                margin-left:200px;
                 font-size:25px;
                 font-weight:100;
                 font-family:Helvetica;">Cadastre</h1>
                 
         <h4 style="color:rgba(252,252,252,1);
                 margin-top:-36px;
                 float:right;
                 margin-right:207px;
                 position:relative;
                 font-size:14px;
                 font-weight:100;
                 font-family:Helvetica;">Disponível no Brasil</h4>
                 
                  <hr style=" background:rgba(252,252,252,1);
                   -webkit-border-radius: 200px; 
                    -moz-border-radius: 200px; 
                    height: 1px;
                    width: 70%;
                    text-align: right;
                    margin-left:200px;
                    position:relative;
                    border: 0px solid;
                    margin-top:-16px;"></hr>
                    
                     <center><div id="blur"></div></center>
        			
                    <center><div id="formulario">
                    
                    <br/><br/>
                  
                 <?php   
                    	 
						 $nomeI = ''; 
						 
			include('conexao.php');
			
			abrirConexao();
						 
						 if(isset($_POST['editar'])){
							 
						 $idE = $_POST['editar'];
						 
						 $queryE = "SELECT * FROM tbCliente WHERE codCliente =".$idE;
						 
						 $dados = mysql_query($queryE);
						 
						 $resultado = mysql_fetch_object($dados);
						 
						 $titulo = 'Edição de cliente';
						 $nomeE = $resultado->nomeCliente;
						 $endE = $resultado->enderecoCliente;
						 $rgE = $resultado->rgCliente;
						 $cpfE = $resultado->cpfCliente;
						 $telE = $resultado->telefoneCliente;
						 $celE = $resultado->celularCliente;
						 $cidE = $resultado->cidadeCliente;
						 $emailE = $resultado->emailCliente;
						 $Senha = $resultado->senhaCliente;
						 $Senha2 = $resultado->senhaCliente;
						 $hSenha = 'Nova senha:';
						 $hSenha2 = 'Confirme a nova senha:';
						 $dateE = $resultado->nasctoCliente;
						 $opcao = 'Editar';
						 
						  $botao = 'upDate.php?editar='.$idE;
						 
						 }else{
							
						 $titulo = 'Cadastre um novo cliente';
						 $nomeE = '';
						 $endE = '';
						 $rgE = '';
						 $cpfE = '';
						 $telE = '';
						 $celE = '';
						 $cidE = '';
						 $emailE = '';
						 $Senha = '';
						 $Senha2 = '';
						 $dateE = '';
						 $hSenha = 'Senha:';
						 $hSenha2 = 'Confirme a senha:';
						 $botao = 'cliente.php';
						 $opcao = 'Cadastrar';
							 
						 }
						 
						 echo("<h1>".$titulo."</h1>
						 
						 <center><form name='login' id='logar' action=".$botao." method='post' > 
                   
                <br />  
                
                <input name='nomeC' type='text' placeholder='Nome' value='".$nomeE."' id='nomeC' size='40' minlength='2'  />
                
                        <br /><br />
                
                    <input name='endC' type='text' placeholder='Endereço:' value='".$endE."' id='endC' size='40' minlength='3' />
                    
                       <br />    <br />
                    
                    <input name='rgC' type='text' placeholder='RG:' value='".$rgE."' onKeyUp='mascara_rg(this.value)' id='rgC' size='16' minlength='9'  maxlength='12' /> 
                    
                    <input name='cpfC' type='text' placeholder='CPF:' value='".$cpfE."' onKeyUp='mascara_cpf(this.value)' id='cpfC' size='16' minlength='11' maxlength='14' /> 
                    
                     <br />    <br />
                    
                     <input name='numC' type='text' placeholder='Telefone:' value='".$telE."' onKeyUp='mascara_tel(this.value)' id='telC' size='16' minlength='8'  maxlength='9' />
                     
                     <input name='celC' type='text' placeholder='Celular:' value='".$celE."' onKeyUp='mascara_cel(this.value)' id='celC' size='16'  maxlength='10' /> 
                    
                      <br />    <br />
                    
                     <input name='cidC' type='text' placeholder='Cidade:' value='".$cidE."' id='cidC' size='40' minlength='3' />
                     
                       <br />    <br />

		             <input name='emailC' type='mail' placeholder='E-Mail:' value='".$emailE."' id='emailC' size='40' minlength='3' />
                     
                       <br />    <br />

                     <input name='senhaC' type='password' placeholder='".$hSenha."' value='".$Senha."' id='senhaC' size='16' minlength='6' />
                     
                     <input name='senha2C' type='password' placeholder='".$hSenha2."' value='".$Senha2."' id='senha2C' size='16' minlength='6'/> 
                    
                      <br />    <br />
                       
                      <h4>Data de nascimento
                     
                     <input name='nasC' type='date' placeholder='Idade:' value='".$dateE."' id='nasC' size='40'/></h4>
                 
                         <br/> <br />
						 
						  <input name='condicao' type='hidden' value='func'/>
						  <input name='email' type='hidden' value='".$email."'/>      
                        
                  
                    </form>

                     <input type='submit' value='".$opcao."' id='cadastro' onclick=' return validar()'>
                    
                    </div></center>
      
        
        </div>
                    
</div>


		<div id='conteudoCa2f'>
        
        <center><h1>Clientes cadastradros</h1></center>");
			
			$query = ('SELECT codCliente, nomeCliente, enderecoCliente, rgCliente, cpfCliente, telefoneCliente, celularCliente, cidadeCliente, emailCliente, nasctoCliente FROM tbCliente');
			
			$consulta = mysql_query($query);
									
			echo("<center><table name='cliente'>");            
            	echo("<tr>
                
                	<td><h3>Código</h3></td>
                    <td><h3>Nome</h3></td>
                    <td><h3>Endereço</h3></td>
                    <td><h3>RG</h3></td>
                    <td><h3>CPF</h3></td>
                    <td><h3>Telefone</h3></td>
                    <td><h3>Celular</h3></td>
                    <td><h3>Cidade</h3></td>
                    <td><h3>Nascimento</h3></td>
                    <td><h3>Editar</h3></td>
                    <td><h3>Remover</h3></td>
                    
                  </tr>");
				 
				  
				  while($linha = mysql_fetch_array($consulta)){

                    
					  
                       $id = $linha['codCliente'];
					   $nomeI = $linha['nomeCliente'];
				  
				  	
				  
					  echo("<tr>
					
						<td><h2>".$linha['codCliente']."</h2></td>
						<td><h2>".$linha['nomeCliente']."</h2></td>
						<td><h2>".$linha['enderecoCliente']."</h2></td>
						<td><h2>".$linha['rgCliente']."</h2></td>
						<td><h2>".$linha['cpfCliente']."</h2></td>
						<td><h2>".$linha['telefoneCliente']."</h2></td>
						<td><h2>".$linha['celularCliente']."</h2></td>
						<td><h2>".$linha['cidadeCliente']."</h2></td>
						<td><h2>".$linha['nasctoCliente']."</h2></td>
						<td > <form name='editar'  action='#conteudoCa' method='post' ><input type='submit' name='editar' value=".$id." id='editar'>
						<input name='condicao' type='hidden' value='func'/></form></td>
						
					  </tr>
					  
					  <tr>
					  
						<td colspan='9'><center><h2>".$linha['emailCliente']."</h2></center></td>
					  
					  </tr>

					  <tr>
					  
					  	<td colspan='11'><hr id='hrCa'></td>
					  
					  </tr>");      
					            
                  
				 }
                  
            echo("</table></center>");

            echo(" <script language='javascript' type='text/javascript'>
					
									function mascara_cpf(cpfC){
					
										var cpfT = login.cpfC.value;
					
										var teste = cpfT;
									
										if(cpfT.length == 3 || cpfT.length == 7){
										
											teste = teste+'.';
										
											login.cpfC.value = teste;
											
										}
										
										if(cpfT.length == 11){
											
											teste = teste+'-';
										
											login.cpfC.value = teste;
											
										}
										
									}
									
									function mascara_rg(rgC){
					
										var rgT = login.rgC.value;
					
										var teste = rgT;
									
										if(rgT.length == 2 || rgT.length == 6){
										
											teste = teste+'.';
										
											login.rgC.value = teste;
											
										}
										
										if(rgT.length == 10){
											
											teste = teste+'-';
										
											login.rgC.value = teste;
											
										}
										
									}
									
										function mascara_tel(numC){
					
										var numT = login.numC.value;
					
										var teste = numT;
									
										if(numT.length == 4){
										
											teste = teste+'-';
										
											login.numC.value = teste;
											
										}
										
									}
									
									function mascara_cel(numC){
					
										var celT = login.celC.value;
					
										var teste = celT;
									
										if(celT.length == 5){
										
											teste = teste+'-';
										
											login.celC.value = teste;
											
										}
										
									}
					
						function validar(){
						
							var nome = login.nomeC.value;
							var end = login.endC.value;
							var rg = login.rgC.value;
							var cpf = login.cpfC.value;
							var telefone = login.numC.value;
							var celular = login.celC.value;
							var cidade = login.cidC.value;
							var data = login.nasC.value;
							var email = login.emailC.value;
							var senha = login.senhaC.value;
							var senha2 = login.senha2C.value;
							
							var vN;
							var vE;
							var vR;
							var vC;
							var vT;
							var vCel;
							var vCid;
							var vEm
							var vS
							var vD;
							
							
							if(nome == '' || nome.length < 2){
							
								
								document.getElementById('nomeC').style.borderColor='#FF3E41';
								
								vN = false;
								
								
							}else{
							
								document.getElementById('nomeC').style.borderColor='#FFF';
								
								vN = true;
								
							}
							
								if(end == '' || end.length < 3){
								
									document.getElementById('endC').style.borderColor='#FF3E41';
									
									vE = false;
									
								
								}else{
									
									document.getElementById('endC').style.borderColor='#FFF';
									
									vE = true;
								
								}
								
									if(rg == '' || rg.length < 12){
									
										document.getElementById('rgC').style.borderColor='#FF3E41';
										
										vR = false;
									
									}else{
									
										document.getElementById('rgC').style.borderColor='#FFF';
										
										vR = true;
									
									}
									
										if(cpf == '' || cpf.length < 14){
										
											document.getElementById('cpfC').style.borderColor='#FF3E41';
											vC = false;
										
										}else{
										
											document.getElementById('cpfC').style.borderColor='#FFF';
											
										vC = true;
										}
								
										if(telefone == '' || telefone.length < 9){
										
											document.getElementById('telC').style.borderColor='#FF3E41';
											vT = false;
										
										}else{
										
											document.getElementById('telC').style.borderColor='#FFF';
											
										vT = true;
										}
										
										if(celular == '' || celular.length < 10){
										
											document.getElementById('celC').style.borderColor='#FF3E41';
											vCel = false;
										
										}else{
										
											document.getElementById('celC').style.borderColor='#FFF';
											
										vCel = true;
										}


										if(cidade == '' || cidade.length < 3){
										
											document.getElementById('cidC').style.borderColor='#FF3E41';
											vCid = false;
										
										}else{
										
											document.getElementById('cidC').style.borderColor='#FFF';
											
										vCid = true;
										}

										if(email == '' || email.length < 5){
										
											document.getElementById('emailC').style.borderColor='#FF3E41';
											vEm = false;
										
										}else{
										
											document.getElementById('emailC').style.borderColor='#FFF';
											
										vEm = true;
										}

										if(senha == '' || senha.length < 6 || senha != senha2 ){
										
											document.getElementById('senhaC').style.borderColor='#FF3E41';
											document.getElementById('senha2C').style.borderColor='#FF3E41';
											vS = false;
										
										}else{
										
											document.getElementById('senhaC').style.borderColor='#FFF';
											document.getElementById('senha2C').style.borderColor='#FFF';
											
										vS = true;
										}


										if(data == ''){
										
											document.getElementById('nasC').style.borderColor='#FF3E41';
											vD = false;
										
										}else{
										
											document.getElementById('nasC').style.borderColor='#FFF';
											
										vD = true;
										}

								
								if(vN == true && vE == true && vR == true && vC == true && vT == true && vCel == true && vCid == true && vD == true && vEm == true && vS == true){
											window.location.href='servico.php';
											
											document.getElementById('logar').submit();
										}
										
									
									
								
								
							
							
						}
					
					</script> ");
			
		?>
        
        </div>

		<div id="rodapeCa">

			
					<center><a href="index.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp Home</a><width=70 /td>
					<a href="servicos.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp Serviços</a>
                 	<a href="contatos.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp Contatos</a>
		 			<a href="#"> </br> </br> &nbsp &nbsp &nbsp &nbsp &nbsp Cadastro</a></a>
					
                     
                 <table id="tb">
                   
                   		<tr> 
                           
                           <td><h3><a href="https://www.facebook.com">f</a></h3></td>
                            
                            <td><h4><a href="https://www.youtube.com/">y</a></h4></td>
                            
                            <td><h5><a href="https://twitter.com/">t</a></h5></td>
                    
                   		</tr>
                   
                  </table>
                  
		
					 <h3 style="font-family:Helvetica;
                    color:#616161;
                    font-size:15px;
                    font-weight:200;
                    text-align:center;
                    margin-right:0px;
                    margin-top:20px;">Copyright © 2015 Lion Inc. Todos os direitos reservados.</h3>
                    
                     <h1><img src="img/lion3.png" /></h1>
		
		</div>
	</body>

</html>