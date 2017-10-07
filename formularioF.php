<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

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
  							<a href="index.html"><h9 class="cancel"></h9></a>
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
        
        <div id="blurMF"></div>
        
       	<div id="optionCa">

            <center><ul>
            
            		<?php
						echo("<li><a href='formulario.php?email=".$email."'>Cliente</a></li>
						<li><a>Funcionario</a></li>
						<li><a href='formularioP.php?email=".$email."'>Serviço</a></li>");
					?>
          	
		  
            </ul></center>

        </div>
        

<script src="jq/jquery-2.1.4.min.js"></script>

<script>

var $l = jQuery.noConflict();

    $l(document).ready(function(){


        $l(".cancel").click(function(event){


        event.preventDefault();
        

			 $l("#blurMF").slideToggle(500);
            $l("#optionCa").slideToggle(500);
			 var overlay = document.querySelector(".glass");
			  if (overlay.className === "glass down") {
				
				<?php
				echo("window.location.href='admL.php?email=".$email."';");
				?>
				
			  } else {
				overlay.className = "glass down";
			  }
            var intervalo = window.setInterval(function() {
            
				document.getElementById('menuCa').style.background="rgba(2,2,2,0.76)";
			
            }, 380);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 380);
            document.getElementById("voltarTopo").style.backgroundImage="url(img/voltar2.png)";

             /*<#conteudo style="-webkit-filter: blur(5px); 
    -moz-filter: blur(5px); 
    -o-filter: blur(5px); 
    -ms-filter: blur(5px); 
    filter: blur(5px);">*/

    });


        $l("#open").click(function(event){

         
         event.preventDefault();
	   
	   		$l("#blurMF").slideToggle(500);   
            $l("#optionCa").slideToggle(500);   
             var overlay = document.querySelector(".glass");
			  if (overlay.className === "glass down") {
				overlay.className = "glass up";
				
				document.getElementById('menuCa').style.background="rgba(2,2,2,0.40)";
				
			  } else {
				overlay.className = "glass down";
				
				 var intervalo = window.setInterval(function() {
 
                document.getElementById('menuCa').style.background="rgba(2,2,2,0.76)";
            
            }, 380);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 380);
				
			  }
			  
			  

        });

    
    });

    </script>

      
         </div>	


			<div id="conteudoCaF">
         
         		<h3 style="font-family:Helvetica;
                    margin-top:-56px;
                    width:100%;"><img src="img/mac5.jpg" /></h3>
         
		         	 
	         <h1 style=" color:rgba(180,180,180,1);
                 margin-top:-61%;
                 margin-left:200px;
                 font-size:25px;
                 font-weight:100;
                 font-family:Helvetica;">Cadastre</h1>
                 
         <h4 style="color:rgba(180,180,180,1);
                 margin-top:-36px;
                 float:right;
                 margin-right:207px;
                 position:relative;
                 font-size:14px;
                 font-weight:100;
                 font-family:Helvetica;">Disponível no Brasil</h4>
                 
                  <hr style=" background:rgba(180,180,180,1);
                   -webkit-border-radius: 200px; 
                    -moz-border-radius: 200px; 
                    height: 1px;
                    width: 70%;
                    text-align: right;
                    margin-left:200px;
                    position:relative;
                    border: 0px solid;
                    margin-top:-14px;"></hr>
                    
                     <center><div id="blurF"></div></center>
        			
                    <center><div id="formularioF">
                    
                    <br/><br/>

                    <?php

                      include('conexao.php');
            
                abrirConexao();

                    if(isset($_POST['editarF'])){
                             
                         $idF = $_POST['editarF'];
                         
                         $queryE = "SELECT * FROM tbFuncionario WHERE codFunc =".$idF;
                         
                         $dados = mysql_query($queryE);
                         
                         $resultado = mysql_fetch_object($dados);
                         
                         $titulo = 'Edição de funcionário';
                         $nomeF = $resultado->nomeFunc;
                         $endF = $resultado->enderecoFunc;  
                         $raF = $resultado->raFunc;
                         $cpfF = $resultado->cpfFunc;
                         $cargoF = $resultado->cargoFunc;
						 $emailF = $resultado->emailFunc;
						 $Senha = $resultado->senhaFunc;
						 $Senha2 = $resultado->senhaFunc;
						 $hSenha = 'Nova senha:';
						 $hSenha2 = 'Confirme a nova senha:';
                         $dateF = $resultado->nasctoFunc;
                         $opcao = 'Editar';
                         
                          $botao = 'upDateF.php?editarF='.$idF;
                         
                         }else{
                            
                         $titulo = 'Cadastre um novo funcionário';
                         $nomeF = '';
                         $endF = '';
                         $raF = '';
                         $cpfF = '';
                         $cargoF = '';
						 $emailF = '';
						 $Senha = '';
						 $Senha2 = '';
						 $dateF = '';
						 $hSenha = 'Senha:';
						 $hSenha2 = 'Confirme a senha:';
                         $botao = 'funcionario.php?email=".$email."';
                         $opcao = 'Cadastrar';
                             
                         }
                    
                    echo("<h1>".$titulo."</h1>
                    
                    <br />
                    
                    	 <center><form name='login' id='logarF' action='".$botao."' method='post' > 
                   
                <br />  
                
                <input name='nomeF' type='text' placeholder='Nome' value='".$nomeF."' id='nomeF' size='40' minlength='2'  />
                
                        <br /><br />
                
                    <input name='endF' type='text' placeholder='Endereço:' value='".$endF."' id='endF' size='40' minlength='3' />
                    
                       <br />    <br />
                    
                    <input name='raF' type='text' placeholder='RA:' value='".$raF."' id='raF' size='16' minlength='9' /> 
                    
                    <input name='cpfF' type='text' placeholder='CPF:' value='".$cpfF."' onKeyUp='mascara_cpf(this.value)' id='cpfF' size='16' minlength='11'  maxlength='14' /> 
                    
                      <br />    <br />
                    
                     <input name='cargoF' type='text' placeholder='Cargo:' value='".$cargoF."' id='cargoF' size='40' minlength='2' />
                     
                       <br />    <br />
					   
					     <input name='emailF' type='mail' placeholder='E-Mail:' value='".$emailF."' id='emailF' size='40' minlength='3' />
                     
                       <br />    <br />

                     <input name='senhaF' type='password' placeholder='".$hSenha."' value='".$Senha."' id='senhaF' size='16' minlength='6' />
                     
                     <input name='senha2F' type='password' placeholder='".$hSenha2."' value='".$Senha2."' id='senha2F' size='16' minlength='6'/> 
                    
                      <br />    <br />
                       
                      <h4>Data de nascimento
                     
                     <input name='nasF' type='date' placeholder='Idade:' value='".$dateF."' id='nasF' size='40'/></h4>
                 
                         <br/> <br />
						 
						  <input name='condicao' type='hidden' value='cliente'/>  
						<input name='email' type='hidden' value='".$email."'/>      
                         
                         
                    </form>

			<input type='submit' value='".$opcao."' id='cadastro' onclick=' return validar()'>
                    
                    </div></center>
      
        
        </div>
                    
</div>
		
         
		<div id='conteudoCa2'>
        
        <center><h1>Funcionários cadastrados</h1></center>");
            
            $query = ('SELECT codFunc, nomeFunc, enderecoFunc, raFunc, cpfFunc, cargoFunc, emailFunc, nasctoFunc FROM tbFuncionario');
            
            $consulta = mysql_query($query);
                                    
            echo("<center><table name='Funcionario'>");            
                echo("<tr>
                
                     <td><h3>Código</h3></td>
                    <td><h3>Nome</h3></td>
                    <td><h3>Endereço</h3></td>
                    <td><h3>RA</h3></td>
                    <td><h3>CPF</h3></td>
                    <td><h3>Cargo</h3></td>
                    <td><h3>Nascimento</h3></td>
                    <td><h3>Editar</h3></td>
                    <td><h3>Remover</h3></td>
                    
                  </tr>");
                  
                  while($linha = mysql_fetch_array($consulta)){
                      
					  $id = $linha['codFunc'];
                  
                      echo("<tr>
                    
                        <td><h2>".$linha['codFunc']."</h2></td>
                        <td><h2>".$linha['nomeFunc']."</h2></td>
                        <td><h2>".$linha['enderecoFunc']."</h2></td>
                        <td><h2>".$linha['raFunc']."</h2></td>
                        <td><h2>".$linha['cpfFunc']."</h2></td>
                        <td><h2>".$linha['cargoFunc']."</h2></td>
                        <td><h2>".$linha['nasctoFunc']."</h2></td>
                        <td> <form name='editar'  action='#conteudoCa' method='post' ><input type='submit' name='editarF' value=".$id." id='editar'></form></td>
                       <td><form name='excluir' action='excluir.php?email=".$email."' method='post' ><input type='submit' name='excluirF' value=".$id." id='remover'></a></form></td>
                        
                      </tr>
                      
					   <tr>
					  
						<td colspan='9'><center><h2>".$linha['emailFunc']."</h2></center></td>
					  
					  </tr>

					  
                      <tr>
                      
                        <td colspan='9'><hr id='hrCa'></td>
                      
                      </tr>");      
                                
                  
                 }
                  
            echo("</table></center>");

		echo(" <script language='javascript' type='text/javascript'>
					
						function mascara_cpf(cpfC){
					
										var cpfT = login.cpfF.value;
					
										var teste = cpfT;
									
										if(cpfT.length == 3 || cpfT.length == 7){
										
											teste = teste+'.';
										
											login.cpfF.value = teste;
											
										}
										
										if(cpfT.length == 11){
											
											teste = teste+'-';
										
											login.cpfF.value = teste;
											
										}
										
									}
					
						function validar(){
						
							var nome = login.nomeF.value;
							var end = login.endF.value;
							var ra = login.raF.value;
							var cpf = login.cpfF.value;
							var cargo = login.cargoF.value;
							var date = login.nasF.value;
							var email = login.emailF.value;
							var senha = login.senhaF.value;
							var senha2 = login.senha2F.value;
							
							var vN;
							var vE;
							var vR;
							var vC;
							var vCar;
							var vEm
							var vS
							var vD;
							
							
							
							if(nome == '' || nome.length < 2){
							
								
								document.getElementById('nomeF').style.borderColor='#FF3E41';
								
								vN = false;
								
								
							}else{
							
								document.getElementById('nomeF').style.borderColor='#FFF';
								
								vN = true;
								
							}
							
								if(end == '' || end.length < 3){
								
									document.getElementById('endF').style.borderColor='#FF3E41';
									
									vE = false;
									
								
								}else{
									
									document.getElementById('endF').style.borderColor='#FFF';
									
									vE = true;
								
								}
								
									if(ra == '' || ra.length < 9){
									
										document.getElementById('raF').style.borderColor='#FF3E41';
										
										vR = false;
									
									}else{
									
										document.getElementById('raF').style.borderColor='#FFF';
										
										vR = true;
									
									}
									
										if(cpf == '' || cpf.length < 14){
										
											document.getElementById('cpfF').style.borderColor='#FF3E41';
											vC = false;
										
										}else{
										
											document.getElementById('cpfF').style.borderColor='#FFF';
											
										vC = true;
										}
								
										if(cargo == '' || cargo.length < 3){
										
											document.getElementById('cargoF').style.borderColor='#FF3E41';
											vCar = false;
										
										}else{
										
											document.getElementById('cargoF').style.borderColor='#FFF';
											
										vCar = true;
										}
										
										if(email == '' || email.length < 5){
										
											document.getElementById('emailF').style.borderColor='#FF3E41';
											vEm = false;
										
										}else{
										
											document.getElementById('emailF').style.borderColor='#FFF';
											
										vEm = true;
										}

										if(senha == '' || senha.length < 6 || senha != senha2 ){
										
											document.getElementById('senhaF').style.borderColor='#FF3E41';
											document.getElementById('senha2F').style.borderColor='#FF3E41';
											vS = false;
										
										}else{
										
											document.getElementById('senhaF').style.borderColor='#FFF';
											document.getElementById('senha2F').style.borderColor='#FFF';
											
										vS = true;
										}


										if(date == ''){
										
											document.getElementById('nasF').style.borderColor='#FF3E41';
											vD = false;
										
										}else{
										
											document.getElementById('nasF').style.borderColor='#FFF';
											
										vD = true;
										}

								
								if(vN == true && vE == true && vR == true && vC == true && vCar == true && vD == true && vEm == true && vS == true){
											window.location.href='servico.php';
											
											document.getElementById('logarF').submit();
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