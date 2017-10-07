<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<head>

	
		<link rel="stylesheet" type="text/css" media="screen and (min-width:0px)" href="login2.css">
		<link rel="stylesheet" type="text/css" media="screen and (min-width:700px)" href="login.css">

		<link rel="shortcut icon" href="img/lion.png" >



		<title>Lion - Seus chamados</title>

	</head>

	<body id="bodyM">

<script src="jq/jquery-2.1.4.min.js"></script>

<?php

    include('conexao.php');
            
    abrirConexao();

   $email = $_GET['email'];

if(!empty($_POST)){


     $codChamado = $_POST['idChamado'];

     $mensageiro = $_POST['mensageiro'];

}else{

    $codChamado = $_GET['idChamado'];

    $mensageiro = $_GET['mensageiro'];

}


if($mensageiro == 'cliente'){

     $query = ('SELECT * FROM tbCliente');
         $consulta = mysql_query($query);
         while($linha = mysql_fetch_array($consulta)){
             
              if($email == $linha['emailCliente']){
                  
                $id_cliente = $linha['codCliente'];
      				  $imagem = $linha['fotoCliente'];
      				  $nome = $linha['nomeCliente'];

                if($linha['fotoCapa'] == ''){

                  $capa = 'leao.jpg';

                }else{

                  $capa = $linha['fotoCapa'];

                }
      				  
            }

         }

         echo("<div id='menuDialogo'>

        <a href='verChamado.php?email=".$email."' id='voltarChamado'><img name='imgF' src='img/voltar2.png' /></a>

          
                <h2>Mensagens</h2>
        
        <table>

        <tr>

        <td><h3>".$nome."</h3></td>
        <td><div id='fotoDialogo' style=' 
        background:rgba(1,1,1,0) url(img/".$imagem.");
        background-repeat:no-repeat;
        background-size: 40px 40px;'></div><td>
          
        </tr>

        </table>

            </div>");

     }else{

        if($mensageiro == 'adm'){


             $query = ('SELECT * FROM tbAdm');
             $consulta = mysql_query($query);
             while($linha = mysql_fetch_array($consulta)){
                 
                  if($email == $linha['emailAdm']){
                      
                    $id_func = $linha['codAdm'];
            
                    $nome = $linha['nomeAdm'];

                     $capa = 'leao.jpg';
                      
            }

        }

         echo("<div id='menuDialogo'>

        <a href='admL.php?email=".$email."' id='voltarChamado'><img name='imgF' src='img/voltar2.png' /></a>

          
                <h2>Mensagens</h2>
        
        <table>

        <tr>

        <td><h3>".$nome."</h3></td>
          
        </tr>

        </table>

            </div>");

    }else{

            $query = ('SELECT * FROM tbFuncionario');
             $consulta = mysql_query($query);
             while($linha = mysql_fetch_array($consulta)){
                 
                  if($email == $linha['emailFunc']){
                      
                    $id_func = $linha['codFunc'];
            
                    $nome = $linha['nomeFunc'];

                     $capa = 'leao.jpg';
                      
            }

         }

          echo("<div id='menuDialogo'>

        <a href='funcionarioL.php?email=".$email."' id='voltarChamado'><img name='imgF' src='img/voltar2.png' /></a>

          
                <h2>Mensagens</h2>
        
        <table>

        <tr>

        <td><h3>".$nome."</h3></td>
          
        </tr>

        </table>

            </div>");

     }

    }

    echo("<script type='text/javascript'>

         var intervalo = setInterval(function() { $('#mensagem').load('dialogo.php?email=".$email."&idChamado=".$codChamado."&mensageiro=".$mensageiro." #espaco'); }, 5000);

      </script>");


     echo("<div id='mensagem' style=' width: 80%;
                                height: auto;
                                padding-bottom: 150px;
                                position: absolute;
                                margin-left:10%;
                                -webkit-transition:all ease-out 2.5s;
                                        -moz-transition:all ease-out 2.5s;
                                        -o-transition:all ease-out 2.5s;
                                        -ms-transition:all ease-out 2.5s;
                                        transition:all ease-out 2.5s;'>");

 $query = ('SELECT * FROM tbMensagem');
                            $consulta = mysql_query($query);
                            while($linha = mysql_fetch_array($consulta)){
                                
                                 if( $linha['codChamado'] == $codChamado){
                                    
                                   if( $linha['condicao'] == 0 && $mensageiro == 'cliente'  || $linha['condicao'] != 0 && $mensageiro != 'cliente' ){

                                         echo("<div id='espaco' style='padding:0;
                                        list-style-type:none;
                                        width: 90%;
                                        height: 15px;
                                        margin-top: 50px;
                                        float: right;
                                        text-align: right;'>

                                           
                                            <br><br>

                                                <p style='border-radius:.75rem;
                                                background:rgb(200,200,200);;
                                                font-family:Helvetica;
                                                color:#383641;
                                                padding:.6875rem;
                                                margin:0;
                                                font-weight:100;
                                                font-size:.875rem;
                                                margin-right:20px;'>".$linha['dialogo']."</p>

                                                <p id'hora' style='font-family:Helvetica;
                                                color:#383641;
                                                padding:.6875rem;
                                                margin:0;
                                                font-size:.875rem;
                                                float:left;
                                                font-weight:100;
                                                margin-top:-33px;
                                                margin-left:20px;'>".$linha['horaMensagem']."</p>

                                            

                                        </div>");

                                   }else{

                                        echo("<div id='espaco' style='padding:0;
                                        list-style-type:none;
                                        width: 90%;
                                        height: 15px;
                                        margin-top: 50px;
                                        float: left;'>

                                           
                                            <br><br>

                                                <p style='border-radius:.75rem;
                                                background:rgb(16,136,224);;
                                                font-family:Helvetica;
                                                color:#FFF;
                                                padding:.6875rem;
                                                margin:0;
                                                font-weight:100;
                                                font-size:.875rem;
                                                margin-left:20px;'>".$linha['dialogo']."</p>

                                                <p id'hora' style='font-family:Helvetica;
                                                color:#FFF;
                                                padding:.6875rem;
                                                margin:0;
                                                font-size:.875rem;
                                                float:right;
                                                font-weight:100;
                                                margin-top:-33px;
                                                margin-right:20px;'>".$linha['horaMensagem']."</p>


                                            

                                        </div>");

                                    }

                                }

                            }

            echo("</div>

                <div id='conteudoM' style='background:url(img/".$capa.");
                background-repeat: no-repeat;
                background-size: 100%;
                height:60px;
                width:100%;
                z-index:80;
                bottom: 0;
                position: fixed;
                background-position: center -610px;
                filter: url(img/".$capa.");
                -webkit-filter: blur(5px);
                -moz-filter: blur(5px);
                -ms-filter: blur(5px);
                -o-filter: blur(5px);
                filter: blur(5px);'>
                
                </div>

                <div id='rodapeDialogo'>

                <form name='enviar' id='enviar' action='validaMensagem.php?email=".$email."&idChamado=".$codChamado."&mensageiro=".$mensageiro."' method='post' > 

            	  <textarea name='caixa' placeholder='Deixe seu recado...' id='caixa' minlength='2'></textarea>

                  <input name='pessoa' type='hidden' value='cliente'/> 

                </form>

                <input type='submit' value='Enviar' name='enviarM' id='enviarM' onclick=' return enviarJ()'>

                 <form name='pdf' id='pdf' action='pdf.php?email=".$email."&idChamado=".$codChamado."' method='post' > 

                    <input type='submit' value='' id='dow'>

                 </form>

                 <button id='gravarD'></button>


            </div>");

            echo("<style>
                
               #bodyM{background:url(img/".$capa.");
                background-size:100%;
                 background-attachment:fixed;
                  background-repeat:no-repeat;
                  width100%;}

                  </style>");

            ?>


<script type="text/javascript">

//gravação

window.SpeechRecognition = window.SpeechRecognition ||
window.webkitSpeechRecognition ||
null;
 
//caso não suporte esta API DE VOZ            
if (window.SpeechRecognition === null) {
    document.getElementById('unsupported').classList.remove('hidden');
}else {
    //......
}

var verifica = false;
var escrever = false;
var escreverS = false;

var recognizer = new window.SpeechRecognition();

var transcription = "";

            //Para o reconhecedor de voz, não parar de ouvir, mesmo que tenha pausas no usuario
            recognizer.continuous = true;

            recognizer.start();

            recognizer.onresult = function(event){

                transcription = "";
                for (var i = event.resultIndex; i < event.results.length; i++) {
                    if(event.results[i].isFinal){

                        transcription =event.results[i][0].transcript; /*+' (Taxa de acerto [0/1] : ' + event.results[i][0].confidence + ')'*/

                        transcription = transcription.replace(' ', '')

                        //alert(transcription);

                        if(transcription == 'Assistente' || transcription == 'assistente'){

                            verifica = true;
                            document.getElementById('gravar').style.background="url(img/micro.png)";
                            document.getElementById('gravar').style.backgroundSize="15px 30px";
                            document.getElementById('gravar').style.backgroundRepeat="no-repeat";
                            document.getElementById('gravar').style.webkitTransition ="all ease-out 0.4s";
                        }

                        if(transcription == 'Parar' || transcription == 'parar'){                          

                          verifica = false;
                          escrever = false;
                            escreverS = false;
                           document.getElementById('gravar').style.background="url(img/micro2.png)";
                            document.getElementById('gravar').style.backgroundSize="15px 30px";
                            document.getElementById('gravar').style.backgroundRepeat="no-repeat";
                           document.getElementById('gravar').style.webkitTransition ="all ease-out 0.4s";
                            document.getElementById('caixa').style.border='0px solid';
                               document.getElementById('caixa').style.borderColor='#1088e0';

                        }


                        if(verifica == true){

                           if(transcription == 'Enviar' || transcription == 'enviar'){

                               escrever = false;
                               document.getElementById('caixa').style.border='0px solid';
                               document.getElementById('caixa').style.borderColor='#1088e0';
                               enviarM.click();

                           }

                          if(transcription == 'Escrever uma mensagem' || transcription == 'escrever uma mensagem' || transcription == 'Escreva uma mensagem' || transcription == 'escreva uma mensagem' || transcription == 'Mandar mensagem' || transcription == 'mandar mensagem' || escrever == true){

                            document.getElementById('caixa').style.border='2px solid';
                            document.getElementById('caixa').style.borderColor='#1088e0';

                            if(escrever == true){

                              if(transcription == 'Limpar' || transcription == 'limpar'){

                                  enviar.caixa.value = "";

                                }else{


                                  if(transcription == 'Apagar' || transcription == 'apagar'){

                                  
                                   enviar.caixa.value =enviar.caixa.value.substring(0, enviar.caixa.value.length-1);

                                }else{

                                    enviar.caixa.value += " "+transcription;

                                }

                              }


                            }else{

                              escrever = true;

                            }

                          } 

                       }

                    }else{
                        transcription += event.results[i][0].transcript;
                    }
                }
            }

            document.querySelector("#gravarD").addEventListener("click",function(){

               if(verifica == false){

                    
                    document.getElementById('gravarD').style.background="url(img/micro.png)";
                     document.getElementById('gravarD').style.backgroundSize="15px 30px";
                      document.getElementById('gravarD').style.backgroundRepeat="no-repeat";
                    document.getElementById('gravarD').style.webkitTransition ="all ease-out 0.4s";
                    verifica = true;
                    recognizer.start();

                }else{
                  
                    document.getElementById('gravarD').style.background="url(img/micro2.png)";
                     document.getElementById('gravarD').style.backgroundSize="15px 30px";
                      document.getElementById('gravarD').style.backgroundRepeat="no-repeat";
                   document.getElementById('gravarD').style.webkitTransition ="all ease-out 0.4s";
                    verifica = false;

              }
                  
            });


</script>

            <script language='javascript' type='text/javascript'>
          
                  function enviarJ(caixa){
          
                  var valor = enviar.caixa.value;
                    
                      if(valor != ""){

                          document.getElementById('enviar').submit();

                      }

                  }

            </script>
                    

	</body>

</html>