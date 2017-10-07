<?php

 $email = $_GET['email'];

$loginURL = "index.html"; // substituir por URL real
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (!isset($_SESSION['email'])) {
  // redirecciona para páginda de login
  header("Location: {$loginURL}");
}

if($_SESSION['email'] != $email){

		header("Location: {$loginURL}");
		unset($_SESSION['email']);
		unset($s_SESSION['password']);
		session_destroy();

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<head>

	
		<link rel="stylesheet" type="text/css" href="login.css">

	
		<link rel="shortcut icon" href="img/lion.png" >



		<title>Lion - Seja bem-vindo</title>

	</head>

	<body >

<script src="jq/jquery-2.1.4.min.js"></script>

<?php

    include('conexao.php');
            
    abrirConexao();

     $query = ('SELECT * FROM tbAdm');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){
             
              if($email == $linha['emailAdm']){
                  
				  $senha = $linha['senhaAdm'];
				  $nome = $linha['nomeAdm'];
                   $cod_adm = $linha['codAdm'];

        echo("<div id='menuF'>
         
             <ul>
            
                 <center><li><a>".$nome."</a></li>
                  <li><h3><img src='img/menu2.png' /></h3></li>
                  <li><a href='lionPt.php'>Sair</a></li>
          
            </ul>

        </div>");
				  
                 echo("<div id='flutuanteF'>

             <ul>
            
                 <center><li><h3><img name='imgF' src='img/lion3.png' /></h3></li>
				<li><a href='body' id='inicio'>Inicio</a></li>
                <li><a href='#conteudoA' id='bChamados'>Chamados</a></li>
				 <li><a href='#atendimentosA' id='bAtendimento'>Atendimentos</a></li>
                 <li><a id='bEmpresa' href='#empresa'>Empresa</a></li>
                <li><a id='config' href='#configCa'>Funções</a></li>
          
            </ul>

            </div>");
             
             }

         }
        

?>

<script type="text/javascript">
jQuery(document).ready(function($) { 
   
     $("#inicio").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("body").offset().top}, 800);
   });
   
   $("#config").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#configCa").offset().top}, 800);
   });

    $("#bChamados").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#conteudoA").offset().top}, 800);
   });

    $("#bEmpresa").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#empresa").offset().top}, 800);
   });
   
    $("#bAtendimento").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#atendimentosA").offset().top}, 800);
   });
   
});
</script>

<script type="text/javascript">
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 43) {
                 document.getElementById("flutuanteF").style.position="fixed";
                 document.getElementById("flutuanteF").style.marginTop="-40px"; 

            } else {

                document.getElementById("flutuanteF").style.position="absolute";
                document.getElementById("flutuanteF").style.marginTop="0px";
                 
            }

             
        });
    });
</script>

	
	<div id="conteudoA1">
	
		<h1>Sejá bem-vindo</h1>
		
	</div>


	<?php
	
		echo("<div id='conteudoA'>
		
		<h1>Chamados</h1>

        <div id='atendendoD'>");
		
		echo("<table cellpadding='0' cellspacing='0'>
            
                    <tr id='tituloTA'>
                    
                        <td>Número</td>
                        <td>Serviço</td>
                        <td>Solicitado</td>
                        <td>Status</td>
                        <td>Código do cliente</td>
                    
                    </tr>
                
                ");
		
		 $verifica = 0;
		
		 $query = ('SELECT * FROM tbChamado');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){

            $cod_chamado = $linha['codChamado'];

                if($linha['codFuncionario'] == 0 && $linha['codAdm'] == 0 && $linha['statusChamado'] != 'Finalizado'){

                 $query2 = ('SELECT * FROM tbServico');
                 $consulta2 = mysql_query($query2);
                 while($linha2 = mysql_fetch_array($consulta2)){

                    if($linha2['codServico'] == $linha['codServico']){
                           
                            echo("<tr id='itensTA' bgcolor='#fff'>");

                             echo("<td id='tdItens'>".$linha['codChamado']."</td>
                                      <td>".$linha2['nomeServico']."</td>
                                      <td>".$linha['dataEntrada']."</td>");
                                      
                                      if($linha['statusChamado'] == 'Transferido'){
                                      
                                        echo("<td> <FONT COLOR='fe1241'>Urgente</td>");

                                    }else{

                                        echo("<td><FONT COLOR='#000'>".$linha['statusChamado']."</td>");

                                    }

                                      echo("<td>".$linha['codCliente']."</td>
                                       <form name='fChamado' id='fChamado' action='atender.php?email=".$email."' method='post' > 

                                        <td rowspan='2'><input type='submit' name='atender' value='Atender' id='atenderA'></td>
                                        <input name='codAdm' type='hidden' value='".$cod_adm."' id='codAdm' />
                                        <input name='codChamado' type='hidden' value='".$cod_chamado."' id='codChamado' />
                                         <input name='condicao' type='hidden' value='addA' id='condicao' />


                                        </form>
                                      </tr>");
                            echo("<tr id='itensTA' bgcolor='#fff'>");
                                $verifica++;

                            echo("<td id='tdF' colspan='5'><center>".$linha['descChamado']."</center></td>
                            </tr>");

                         }




                     }


                }




           }
		
			echo("</table>
			
            </div>
			
        </div>");
	
	?>
    
    <div id="atendimentosA">

        <h1>Atendimentos</h1>

        <div id="atendendoD">

        <?php

            echo("<table cellpadding='0' cellspacing='0'>
            
                    <tr id='tituloTA'>
                    
                        <td>Número</td>
                        <td>Serviço</td>
                        <td>Solicitado</td>
                        <td>Status</td>
                        <td>Código do cliente</td>
                    
                    </tr>
                
                ");
                
     $verifica = 0;

     $query = ('SELECT * FROM tbChamado');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){

            $cod_chamado = $linha['codChamado'];

                if($linha['codAdm'] == $cod_adm){

                 $query2 = ('SELECT * FROM tbServico');
                 $consulta2 = mysql_query($query2);
                 while($linha2 = mysql_fetch_array($consulta2)){

                    if($linha2['codServico'] == $linha['codServico'] && $linha['statusChamado'] != 'Finalizado'){
                                    
                            echo("<tr id='itensTA' bgcolor='#fff'>");

                             echo("<td id='tdItens'>".$linha['codChamado']."</td>
                                      <td>".$linha2['nomeServico']."</td>
                                      <td>".$linha['dataEntrada']."</td>
                                      <td>".$linha['statusChamado']."</td>
                                      <td>".$linha['codCliente']."</td>



                                        <form name='mensagem' id='mensagen' action='dialogo.php?email=".$email."' method='post' > 

                                <td rowspan='2'><input type='submit' name='dialogo' value='Dialogo' id='dialogoB'>

                                <input name='idChamado' type='hidden' value='".$cod_chamado."'/> </td> 

                                 <input name='mensageiro' type='hidden' value='adm'/>

                                </form>


                                         <form name='fChamado' id='fChamado' action='atender.php?email=".$email."' method='post' > 

                                        <td rowspan='2'><input type='submit' name='cancelar' value='Cancelar' id='cancelar'></td>
                                         <input name='codFunc' type='hidden' value='".$cod_adm."' id='codFunc' />
                                        <input name='codChamado' type='hidden' value='".$cod_chamado."' id='codChamado' />
                                         <input name='condicao' type='hidden' value='cancelA' id='condicao' />

                                        </form>

                                      </tr>");
                                    
                            echo("<tr id='itensTA' bgcolor='#fff'>");
                               
                                $verifica++;

                            echo("<td id='tdF' colspan='5'><center>".$linha['descChamado']."</center></td>
                            </tr>");

                         }




                     }

                }

           }

           echo("</table>");

           if($verifica == 0){

                echo("<h3>Sem dados</h3>");

           }


           ?>

       </div>

    </div>

    <div id="empresa">

            <h1> Empresa </h1>

        <?php

        $nFunc = 0;
        $nCliente = 0;
        $nServico = 0;

        $query = ('SELECT * FROM tbFuncionario');
                 $consulta = mysql_query($query);
                 while($linha = mysql_fetch_array($consulta)){

                   $nFunc++;

                 }

        $query = ('SELECT * FROM tbCliente');
        $consulta = mysql_query($query);
            while($linha = mysql_fetch_array($consulta)){

                $nCliente++;

            }

        $query = ('SELECT * FROM tbServico');
        $consulta = mysql_query($query);
            while($linha = mysql_fetch_array($consulta)){

                $nServico++;

            }


            echo("<table id='tbE'>

                <tr>
                    <td id='tdE'><img src='img/funcionario.png' id='imgE'></td>
                     <td id='tdE'><img src='img/Cliente.png' id='imgE'></td>
                      <td id='tdE'><img src='img/servicos.png' id='imgE'></td>
                </tr>

                 <tr>
                    <td id='tdE1'>".$nFunc."</td>
                     <td id='tdE2'>".$nCliente."</td>
                      <td id='tdE3'>".$nServico."</td>
                </tr>

                <tr>
                    <td id='tdE1a'>Funcionários</td>
                     <td id='tdE2a'>Clientes</td>
                      <td id='tdE3a'>Serviços</td>
                </tr>

            </table>


                    ");


        ?>

    </div>
    
     <div id="configCa">
        
            <h1>Funções</h1>
        <?php
        
        echo(" 
            
			<center><a href='formulario.php?email=".$email."' id='formularioA'>Clientesᐳ</a>
			<a href='formularioF.php?email=".$email."' id='formularioA'>Funcionáriosᐳ</a>
            <a href='formularioP.php?email=".$email."' id='formularioA'>Serviçosᐳ</a>
			
			
            <form name='senhaFunc' id='senhaFunc' action='upDadosC.php?email=".$email."' method='post' > 
        
                <center><img src='img/senha.png' style='width:50px; 
                height:50px;
                padding-top:60px;'/>
                
                <h3 id='senhaLf'>Alterar senha</h3></td>
                <input type='password' name='senhaAa' placeholder='Senha antiga' size='30' id='senhaAf'>
                </br>

                <input type='password' name='senhaNa' placeholder='Novo senha' size='30' id='senhaNf'>
                </br>

                <input type='password' name='senhaVa' placeholder='Confirme a senha' size='30' id='senhaVf'>
                
                <input name='condicao' type='hidden' value='senhaA' id='condicao' />

                </br>
                
                </form></center>
                
                <center><input style=' background:#1088e0;
                    color:#FFF;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px;
                    margin-top:25px;
                    border: 0px solid;
                    width:100px;
                    height:25px;' type='submit' name='confirmarF' onclick=' return senhaF()' value='Confirmar' size='10' id='confirmaF'></center>
            
           ");

            echo("<script language='javascript' type='text/javascript'>

                function senhaF(){
                        
                        var senha1 = senhaFunc.senhaAa.value;
                        var senha2 = senhaFunc.senhaNa.value;
                        var senha3 = senhaFunc.senhaVa.value;
                        
                        var s1;
                        var s2;
                        var s3;
                        
                        if(senha1 == '' || senha1.length < 6 || senha1 != '".$senha."' ){
                            
                                
                                document.getElementById('senhaAf').style.borderColor='#FF3E41';
                                document.getElementById('senhaAf').style.color='#FF3E41';
                                
                                s1 = false;
                                
                            }else{
                            
                                document.getElementById('senhaAf').style.borderColor='#459ed6';
                                document.getElementById('senhaAf').style.color='#459ed6';
                                
                                s1 = true;
                                
                            }
                            
                            if(senha2 == '' || senha2.length < 6 || senha2 != senha3 ){
                            
                                
                                document.getElementById('senhaNf').style.borderColor='#FF3E41';
                                document.getElementById('senhaNf').style.color='#FF3E41';
                                document.getElementById('senhaVf').style.borderColor='#FF3E41';
                                document.getElementById('senhaVf').style.color='#FF3E41';
                                
                                 s2 = false;
                                 s3 = false;
                                
                            }else{
                            
                                document.getElementById('senhaNf').style.borderColor='#459ed6';
                                document.getElementById('senhaNf').style.color='#459ed6';
                                document.getElementById('senhaVf').style.borderColor='#459ed6';
                                document.getElementById('senhaVf').style.color='#459ed6';
                                
                                s2 = true;
                                s3 = true;
                                
                            }

                            if(s1 == true && s2 == true && s3 == true){
                    
                                document.getElementById('senhaFunc').submit();
                        
                            }       

                        }
                

                </script>");
          
          ?>

      </div>

		<div id="rodapeC">

			
					<center><a href="index.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp Home</a><width=70 /td>
					<a href="#"> </br> </br> &nbsp &nbsp &nbsp &nbsp Serviços</a>
                 	<a href="contatos.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp Contatos</a>
		 			<a href="cadastro.html"> </br> </br> &nbsp &nbsp &nbsp &nbsp &nbsp Cadastro</a></a>
					
                     
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