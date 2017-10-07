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
  							<a href="lionPd.php"><h9 class="cancel"></h9></a>
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
        
        <div id="blurMP"></div>
        
       	<div id="optionCa">

            <center><ul>
            
           			<?php
						echo("<li><a href='formularioCf.php?email=".$email."'>Cliente</a></li>");
					?>
					
						<li><a href="">Serviço</a></li>
          	
		  
            </ul></center>

        </div>

<script src="jq/jquery-2.1.4.min.js"></script>

<script>

var $l = jQuery.noConflict();

    $l(document).ready(function(){


        $l(".cancel").click(function(event){


        event.preventDefault();
        

			 $l("#blurMP").slideToggle(500);
            $l("#optionCa").slideToggle(500);
			 var overlay = document.querySelector(".glass");
			  if (overlay.className === "glass down") {
				
				<?php
				
				echo("window.location.href='funcionarioL.php?email=".$email."';");
				
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
	   
	   		$l("#blurMP").slideToggle(500);   
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


			<div id="conteudoCaP">
         
         		<h3 style="font-family:Helvetica;
                    margin-top:-56px;
                    width:100%;"><img src="img/mac8.jpg" /></h3>
         
		         	 
				<h1 style=" color:rgba(252,252,252,1);
                margin-top:-61%;
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
                    margin-top:-14px;"></hr>
                    
                     <center><div id="blurP"></div></center>
        			
                    <center><div id="formularioP">
                    
                    <br/><br/>
                    
                    
                    
             <?php 
                   
				    include('conexao.php');
            
            		abrirConexao();
					
            		 if(isset($_POST['editarP'])){
                             
                         $idP = $_POST['editarP'];
                         
                         $queryE = "SELECT * FROM tbServico WHERE codServico =".$idP;
                         
                         $dados = mysql_query($queryE);
                         
                         $resultado = mysql_fetch_object($dados);
                         
                         $titulo = 'Edição de serviço';
                         $codS = $resultado->codigoServico;
						 $nomeS = $resultado->nomeServico;
                         $descS = $resultado->descServico;  
                         $valorS = $resultado->valorServico;
                         $obsS = $resultado->obsServico;
                         $opcao = 'Editar';
                         
                          $botao = 'upDateP.php?editarP='.$idP;
                         
                         }else{
                            
                         $titulo = 'Cadastre um novo Serviço';
                         $codS = '';
						 $nomeS = '';
                         $descS = '';
                         $valorS = '';
                         $obsS = '';
                         $botao = 'servico.php?email=".$email."';
                         $opcao = 'Cadastrar';
                             
                         }
				   
                    echo("<h1>".$titulo."</h1>
                    
                    <br />
                    
                    	 <center><form name='login' id='logarP' action='".$botao."' method='post' > 
                   
                <br />   <br />  
                
                 <input name='codS' type='text' placeholder='Codigo' value='".$codS."' id='codS' size='40' minlength=4'  />
                
                	  <br /><br />
                
                <input name='nomeS' type='text' placeholder='Nome do serviço' value='".$nomeS."' id='nomeS' size='40' minlength='2'  />
                
                        <br /><br />
                    
					<textarea name='descS' cols='42' rows='2' placeholder='Descrição' id='descS' minlength='2'>".$descS."</textarea>
                
                      <br /><br />
					
                    <input name='valorS' type='text' placeholder='Valor:' value='".$valorS."' id='valorS' size='5' minlength='1' />  
                    
                     <input name='obsS' type='text' placeholder='Observação:' value='".$obsS."' id='obsS' size='27' minlength='2' />
                     
                       <br />    <br /> <br />    <br />
                         
                         <input name='condicao' type='hidden' value='func'/>  
						<input name='email' type='hidden' value='".$email."'/>      
                  
                    </form>
					
					 <input type='submit' value='".$opcao."' id='cadastro' onclick=' return validar()'>
                    
                    </div></center>
      
        
        </div>
                    
</div>

        <div id='conteudoCa2f'>
        
        <center><h1>Serviços disponíveis</h1></center>");
            
           $query = ('SELECT  codServico, codigoServico, nomeServico, valorServico, obsServico FROM tbServico');
            
            $consulta = mysql_query($query);
                                    
            echo("<center><table name='Funcionario'>");            
                echo("<tr>
                
                     <td><h3>Código</h3></td>
                    <td><h3>Nome</h3></td>
                    <td><h3>Valor</h3></td>
                    <td><h3>Observação</h3></td>
                    
                  </tr>");
                  
                  while($linha = mysql_fetch_array($consulta)){
                      
					  $id = $linha['codServico'];
					  
                      echo("<tr>
                    
                        <td><h2>".$linha['codigoServico']."</h2></td>
                        <td><h2>".$linha['nomeServico']."</h2></td>
                        <td><h2>R$ ".$linha['valorServico']."</h2></td>
                        <td><h2>".$linha['obsServico']."</h2></td>
                        <td> <form name='editar'  action='#conteudoCa' method='post' ><input type='submit' name='editarP' value=".$id." id='editar'>
						<input name='condicao' type='hidden' value='func'/></form></td>
                        
                      </tr>
                      
                      <tr>
                      
                        <td colspan='9'><hr id='hrCa'></td>
                      
                      </tr>");      
                                
                  
                 }
                  
            echo("</table></center>");
            
			echo(" <script language='javascript' type='text/javascript'>
					
						function validar(){
						
							var cod = login.codS.value;
							var nome = login.nomeS.value;
							var desc = login.descS.value;
							var valor = login.valorS.value;
							var obs = login.obsS.value;
							
							var vC;
							var vN;
							var vD;
							var vV;
							var vO;
							
							
							
							if(cod == '' || cod.length < 4){
							
								
								document.getElementById('codS').style.borderColor='#FF3E41';
								
								vC = false;
								
								
							}else{
							
								document.getElementById('codS').style.borderColor='#FFF';
								
								vC = true;
								
							}
							
							if(nome == '' || nome.length < 3){
								
									document.getElementById('nomeS').style.borderColor='#FF3E41';
									
									vN = false;
									
								
								}else{
									
									document.getElementById('nomeS').style.borderColor='#FFF';
									
									vN = true;
								
								}
							
								if(desc == '' || desc.length < 3){
								
									document.getElementById('descS').style.borderColor='#FF3E41';
									
									vD = false;
									
								
								}else{
									
									document.getElementById('descS').style.borderColor='#FFF';
									
									vD = true;
								
								}
								
									if(valor == ''){
									
										document.getElementById('valorS').style.borderColor='#FF3E41';
										
										vV = false;
									
									}else{
									
										document.getElementById('valorS').style.borderColor='#FFF';
										
										vV = true;
									
									}
									
										if(obs.length > 0 && obs.length < 3){
										
											document.getElementById('obsS').style.borderColor='#FF3E41';
											vO = false;
										
										}else{
										
											document.getElementById('obsS').style.borderColor='#FFF';
											
										vO = true;
										}
								
								
								if(vC == true && vN == true && vD == true && vV == true && vO == true){
											
											
											document.getElementById('logarP').submit();
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