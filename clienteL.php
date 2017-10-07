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
   
   echo("<div id='menuC'>
         
            <ul>
            
                 <center><li><a>Lion</a></li>
                  <li><h3><img src='img/menu2.png'/></h3></li>
                  <li><a href='lionPt.php'>Sair</a></li>
          
            </ul>

    </div>");

     $query = ('SELECT * FROM tbCliente');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){
             
              if($email == $linha['emailCliente']){
                  
                  $imagem = $linha['fotoCliente'];
                  $capa = $linha['fotoCapa'];
                  $senha = $linha['senhaCliente'];
                  $nome = $linha['nomeCliente'];
                  $data = $linha['nasctoCliente'];
                  $email = $linha['emailCliente'];
                  
                 echo("
                    <div id='complemento'>
                    <div id='flutuanteC'>

             <ul>
            
                 <center><li><h3><img name='imgF' src='img/menu2.png' /></h3></li>
                <li><a href='body' id='inicio'>Inicio</a></li>
                <li><a href='#servicoC' id='scroll'>Serviços</a></li>
                <li><a id='config' href='#configC'>Configurações</a></li>
                 <li><a href='#perfilC' id='nomeCliente'>".$nome."</a></li>
                <li><div id='foto' style=' 
                background:rgba(1,1,1,0) url(img/".$imagem.");
                background-repeat:no-repeat;
                background-size: 40px 40px;
                -webkit-border-radius: 200px; 
                -moz-border-radius: 200px; 
                color:rgba(1,1,1,0);
                width:40px;
                border: 0px solid;
                margin-left:-40px;
                margin-top:-5px;
                height:40px;'></div></li>
          
            </ul>

            </div>
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
   
   $("#nomeCliente").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#perfilC").offset().top}, 800);
   });

    $("#scroll").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#servicoC").offset().top}, 800);
   });
   
    $("#config").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$("#configC").offset().top}, 800);
   });
   
});
</script>

<script type="text/javascript">

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 43) {
                 document.getElementById("complemento").style.position="fixed";
                 document.getElementById("complemento").style.marginTop="-40px";
                 document.getElementById("flutuanteC").style.background="rgba(2,2,2,0.80)";
                  document.getElementById("flutuanteC").style.boxShadow="0 0px 0 rgba(0,0,0,.1),0 0px 0px rgba(0,0,0,.1)";
                 document.getElementById("scroll").style.color="#fff";
                 document.getElementById("inicio").style.color="#fff";
                document.getElementById("nomeCliente").style.color="#fff";
                document.getElementById("config").style.color="#fff";

            } else {
                // document.getElementById("flutuanteC").style.background="rgba(2,2,2,0.20)";
                document.getElementById("complemento").style.position="absolute";
                document.getElementById("complemento").style.marginTop="0px";
                document.getElementById("flutuanteC").style.background="rgba(2,2,2,0.20)";
                 document.getElementById("flutuanteC").style.boxShadow="0 0px 0 rgba(0,0,0,.1),0 0px 0px rgba(0,0,0,.1)";
                document.images["imgF"].src = "img/menu2.png";
                 document.getElementById("scroll").style.color="#fff";
                 document.getElementById("inicio").style.color="#fff";
                document.getElementById("nomeCliente").style.color="#fff";
                document.getElementById("config").style.color="#fff";
                document.images["imgF"].src = "img/lion3.png";
            }

             if ($(this).scrollTop() > 670) {

                 document.getElementById("flutuanteC").style.background="rgba(255,255,255,0.90)";
                 document.getElementById("flutuanteC").style.boxShadow="0 1px 0 rgba(0,0,0,.1),0 1px 2px rgba(0,0,0,.1)";
                 document.getElementById("scroll").style.color="#000";
                  document.getElementById("inicio").style.color="#000";
                 document.getElementById("nomeCliente").style.color="#000";
                 document.getElementById("config").style.color="#000";
                 document.images["imgF"].src = "img/lion3.png";  
            
            }else{

                 document.images["imgF"].src = "img/menu2.png";
                 document.getElementById("flutuanteC").style.borderBottom="0px solid";
                
            }
            
            if ($(this).scrollTop() < 180) {
                
                  document.getElementById("conteudoC").style.webkitFilter=" blur(0px)";
                
                
                
            }
            
            if ($(this).scrollTop() > 180 && $(this).scrollTop() < 280) {
                
                 document.getElementById("conteudoC").style.webkitFilter=" blur(3px)";
                
                
                
            }
            
            if ($(this).scrollTop() > 280 && $(this).scrollTop() < 340) {
                
                 document.getElementById("conteudoC").style.webkitFilter=" blur(7px)";
                
                
                
            }
            
            if ($(this).scrollTop() > 340){
                
                 document.getElementById("conteudoC").style.webkitFilter=" blur(10px)"; 
                
            }

        });
    });
</script>


<?php


?>


        <div id="conteudoC">
        
             <div id="entrada"><img src="img/mac18.jpg" id="imgM"/></div>
             
             <div id="bem_vindo"><h1>Seja Bem-Vindo</h1></div>

        </div>

        <div id="servicoC">

                <center><h1>Serviços disponíveis</h1></center>


                <?php
                
                     $query = ('SELECT  * FROM tbServico');
            
                     $consulta = mysql_query($query);

                     $blur = 1270;
                     
                     echo("

                        <center><table>");
                     
                      while($linha = mysql_fetch_array($consulta)){
                      
                      $id = $linha['codServico'];

                      $nomeServico = $linha['nomeServico'];

                      $valorServico = $linha['valorServico'];

                      $obsServico = $linha['obsServico'];

                      $blur = $blur + 120;

                      echo("<tr>
                    
                        <td  colspan='3'><h2>".$nomeServico."</h2></td>
                     
                        
                      </tr>
                     
                     
                      
                      <tr>
                    
                         <td><h4>".$linha['descServico']."</h4></td>
                          <td ><h4>".$obsServico."</h4></td>
                         <td><h4>R$ ".$valorServico."</h4></td>
                        <form name='pedido' values='foto' id='pedido' action='pedidoC.php?email=".$email."' method='post' >

                        <td rowspan='2'><input type='submit' name='selecionado' value='Selecionar' id='selecionado'></td>
                        <input name='id_servico' type='hidden' value='".$id."' id='id_servico' />
                        <input name='nome_servico' type='hidden' value='".$nomeServico."' id='nome_servico' />
                        <input name='obs_servico' type='hidden' value='".$obsServico."' id='obs_servico' />
                        <input name='valor_servico' type='hidden' value='".$valorServico."' id='valor_servico' />

                        </form>
                      
                      </tr>
                      
                      <tr>
                      
                       <td colspan='9'><hr id='hrC'></td>
                      
                      </tr>
                      
                      ");     
                      
                       
                                
                  
                 }
                
                echo("</table></center>");


                echo("<script type='text/javascript'>
                        $(function () {
                           
                            $(window).scroll(function () {
                                
                                
                                if ($(this).scrollTop() > ".$blur."){
                                    
                                     document.getElementById('fotoP').style.webkitFilter=' blur(5px)';
                                    
                                }else{
                                    
                                    document.getElementById('fotoP').style.webkitFilter=' blur(0px)';

                                }

                            });
                        
                        });
                    
                    </script>");
                
                ?>

        </div>
        
        <?php
                
            
                echo("<div id='perfilC' style='background:url(img/".$capa.");
                    background-repeat:no-repeat;
                    background-size: 100%;
              -webkit-filter:brightness(40%);
                        width: 100%;
                        padding-bottom:50px;
                        height:500px;'>

                </div>

                <div id='perfilC2'>

                    <div id='fotoP' style=' 
                background:rgba(1,1,1,0) url(img/".$imagem.");
                background-repeat:no-repeat;
                background-size: 200px 200px;
                -webkit-border-radius: 200px; 
                -moz-border-radius: 200px; 
                float:left;
                color:rgba(1,1,1,0);
                position:relative;
                z-index:30;
                width:200px;
                border: 0px solid;
                margin-left:50px;
                height:200px;
                
                -webkit-transition: all 1s linear;
                -moz-transition: all 1s linear;
                border-color:rgba(204,24,30,1);'></div>
                
                <div id='dadosC'>

                    <h1>Perfil</h1>
                
                    <h2>".$nome."</h2>
                    <h3>".$data."</h3>
                    <h3>".$email."</h3>

                    <form name='fChamado' id='fChamado' action='verChamado.php?email=".$email."' method='post' > 

                    <td rowspan='2'><input type='submit' name='ver_chamado' value='Veja seus chamados' id='ver_chamado'></td>

                    </form>
                
                </div>

                </div>
                
                ");
                
                
                
                
        
        ?>
        
        <div id="configC">
        
            <h1>Configurações</h1>
        <?php
        
        echo("
        
        <table>
        
    
        
            <tr>
            
                <form name='fotoF' values='foto' id='fotoF' action='upDadosC.php?email=".$email."' method='post' > 
        
                <td><img src='img/foto.png' style='width:50px; 
                height:50px;
                margin-left:60px;'/></td>
                
               <td><h3 style='color:#1088e0;
                font-family:helvetica;
                font-size:20px;
                font-weight:100;
                margin-left:20px;
                padding-bottom:15px;
                padding-top:15px;'>Foto de perfil:</h3></td>
                
                <td><input style=' color:#1088e0;
                    -webkit-border-radius:5px; 
                    -moz-border-radius:5px; 
                    border: 2px solid;
                    border-color:#1088e0;
                    width:230px;' type='file' name='fotoE' size='10' id='fotoE'></td>
                    
                    <input name='condicao' type='hidden' value='foto' id='condicao' />
           
           </form>
           
              <td><input style=' background:#1088e0;
                    color:#FFF;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px;
                    margin-left:40px;
                    border: 0px solid;
                    width:100px;
                    height:25px;' type='submit' name='fotoB' value='Confirmar' onclick=' return foto()' size='10' id='fotoB'></td>
            
            </tr>
           
           
            
             </table>
            
            <hr id='hrConfig'>
            
             <table>
        
    
        
            <tr>
            
                <form name='fCapa' values='fotoCapa' id='fCapa' action='upDadosC.php?email=".$email."' method='post' > 
        
                <td><img src='img/foto.png' style='width:50px; 
                height:50px;
                margin-left:60px;'/></td>
                
               <td><h3 style='color:#1088e0;
                font-family:helvetica;
                font-size:20px;
                font-weight:100;
                margin-left:20px;
                padding-bottom:15px;
                padding-top:15px;'>Foto de capa:</h3></td>
                
                <td><input style=' color:#1088e0;
                    -webkit-border-radius:5px; 
                    -moz-border-radius:5px; 
                    border: 2px solid;
                    border-color:#1088e0;
                    width:230px;' type='file' name='fileCapa' size='10' id='fileCapa'></td>
                    
                    <input name='condicao' type='hidden' value='capa' id='condicao' />
           
           </form>
           
              <td><input style=' background:#1088e0;
                    color:#FFF;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px;
                    margin-left:40px;
                    border: 0px solid;
                    width:100px;
                    height:25px;' type='submit' name='capaB' value='Confirmar' onclick=' return foto_capa()' size='10' id='capaB'></td>
            
            </tr>
           
           
            
             </table>
            
            <hr id='hrConfig'>
            
           <table> 
            
            <tr>
        
            <form name='nomeF' id='nomeF' action='upDadosC.php?email=".$email."' method='post' > 
        
                <td><img src='img/nome.png' style='width:50px; 
                height:50px;
                margin-left:60px;'/></td>
                
                <td><h3 style='background:-webkit-radial-gradient(#00a8ff, #30a5ff, #20ffdd);
                -webkit-background-clip:text;
                color:rgba(0,0,0,0);
                font-family:helvetica;
                font-size:20px;
                font-weight:100;
                margin-left:20px;
                padding-bottom:15px;
                padding-top:15px;'>Nome</h3></td>
               
                <td><input style='background:-webkit-radial-gradient(#00a8ff, #30a5ff, #20ffdd);
                    -webkit-background-clip:text;
                    color:rgba(0,0,0,0);
                    height:20px; 
                    margin-top:0px;
                    margin-left:60px;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px; 
                    border: 2px solid;
                    border-color:#30a5ff;
                    text-align:center;' type='text' name='nomeC' placeholder='Novo nome' size='30' id='nomeC'></td>
                    
                    <input name='condicao' type='hidden' value='nome' id='condicao' />
                    
                </form>
                    
                     <td><input style=' background:#1088e0;
                    color:#FFF;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px;
                    margin-left:40px;
                    border: 0px solid;
                    width:100px;
                    height:25px;' type='submit' name='nomeB' value='Confirmar' onclick=' return nome()' size='10' id='nomeB'></td>
                    
            
            </tr>
            
          </table>
          
           <hr id='hrConfig'>
            
           <table> 
            
            <tr>
        
            <form name='senhaF' id='senhaF' action='upDadosC.php?email=".$email."' method='post' > 
        
                <td rowspan='3'><img src='img/senha.png' style='width:50px; 
                height:50px;
                margin-left:60px;
                padding-top:10px;'/></td>
                
                <td rowspan='3'><h3 id='senhaL'>Senha</h3></td>
                <td><input type='password' name='senhaA' placeholder='Senha antiga' size='30' id='senhaA'></td>

            </tr>
            <tr>

                <td><input type='password' name='senhaN' placeholder='Novo senha' size='30' id='senhaN'></td>

            </tr>
            <tr>

                <td><input type='password' name='senhaV' placeholder='Confirme a senha' size='30' id='senhaV'></td>
                
                <input name='condicao' type='hidden' value='senha' id='condicao' />
                
                </form>
                
                <td rowspan='3'><input style=' background:#1088e0;
                    color:#FFF;
                    -webkit-border-radius: 5px; 
                    -moz-border-radius: 5px;
                    margin-left:40px;
                    margin-top:-50px;
                    border: 0px solid;
                    width:100px;
                    height:25px;' type='submit' name='senhaM' onclick=' return senha()' value='Confirmar' size='10' id='confirmaR'></td>
            
            </tr>
            
          </table>");
          
          ?>
        
        </div>

        <?php

        echo("<script language='javascript' type='text/javascript'>

                function foto(){
                        
                        var foto = fotoF.fotoE.value;
                        
                        if(foto == ''){
                            
                                
                                document.getElementById('fotoE').style.borderColor='#FF3E41';
                                document.getElementById('fotoE').style.color='#FF3E41';
                                
                                
                            }else{
                            
                                document.getElementById('fotoE').style.borderColor='#1088e0';
                                document.getElementById('fotoE').style.color='#1088e0';
                                
                                document.getElementById('fotoF').submit();
                                
                            }
                
                        
                }
                
                function foto_capa(){
                        
                        var fotoCapa = fCapa.fileCapa.value;
                        
                        if(fotoCapa == ''){
                            
                                
                                document.getElementById('fileCapa').style.borderColor='#FF3E41';
                                document.getElementById('fileCapa').style.color='#FF3E41';
                                
                                
                            }else{
                            
                                document.getElementById('fileCapa').style.borderColor='#1088e0';
                                document.getElementById('fileCapa').style.color='#1088e0';
                                
                                document.getElementById('fCapa').submit();
                                
                            }
                
                        
                }
                
                function nome(){
                        
                        var nome = nomeF.nomeC.value;
                        
                        if(nome == ''){
                            
                                
                                document.getElementById('nomeC').style.borderColor='#FF3E41';
                                document.getElementById('nomeC').style.color='#FF3E41';
                                
                                
                            }else{
                            
                                document.getElementById('nomeC').style.borderColor='#1088e0';
                                document.getElementById('nomeC').style.color='#1088e0';
                                
                                document.getElementById('nomeF').submit();
                                
                            }
                
                        
                }
                
                function senha(){
                        
                        var senha1 = senhaF.senhaA.value;
                        var senha2 = senhaF.senhaN.value;
                        var senha3 = senhaF.senhaV.value;
                        
                        var s1;
                        var s2;
                        var s3;
                        
                        if(senha1 == '' || senha1.length < 6 || senha1 != '".$senha."' ){
                            
                                
                                document.getElementById('senhaA').style.borderColor='#FF3E41';
                                document.getElementById('senhaA').style.color='#FF3E41';
                                
                                s1 = false;
                                
                            }else{
                            
                                document.getElementById('senhaA').style.borderColor='#f1ad1a';
                                document.getElementById('senhaA').style.color='#f1ad1a';
                                
                                s1 = true;
                                
                            }
                            
                            if(senha2 == '' || senha2.length < 6 || senha2 != senha3 ){
                            
                                
                                document.getElementById('senhaN').style.borderColor='#FF3E41';
                                document.getElementById('senhaN').style.color='#FF3E41';
                                document.getElementById('senhaV').style.borderColor='#FF3E41';
                                document.getElementById('senhaV').style.color='#FF3E41';
                                
                                 s2 = false;
                                 s3 = false;
                                
                            }else{
                            
                                document.getElementById('senhaN').style.borderColor='#f1ad1a';
                                document.getElementById('senhaN').style.color='#f1ad1a';
                                document.getElementById('senhaV').style.borderColor='#f1ad1a';
                                document.getElementById('senhaV').style.color='#f1ad1a';
                                
                                s2 = true;
                                s3 = true;
                                
                            }
                
                
                    if(s1 == true && s2 == true && s3 == true){
                    
                        document.getElementById('senhaF').submit();
                    
                    }
                        
                }
                
                        
        </script>");
        
        ?>  

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