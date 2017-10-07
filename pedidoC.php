<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <head>

  
    <link rel="stylesheet" type="text/css" media="screen and (min-width:0px)" href="login2.css">
    <link rel="stylesheet" type="text/css" media="screen and (min-width:700px)" href="login.css">

  
    <link rel="shortcut icon" href="img/lion.png" >



    <title>Lion - Faça seu chamado</title>

  </head>

  <body id="pedidoC">

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
          $senha = $linha['senhaCliente'];
          $nome = $linha['nomeCliente'];
          $data = $linha['nasctoCliente'];
          
     echo("<div id='menuP'>

  <a href='clienteL.php?email=".$email."'><img name='imgF' src='img/voltar2.png' id='voltarC' /></a>

  <img src='img/lion3.png' id='logoM'/>
  

               <table>

        <tr>

        <td><h3>".$nome."</h3></td>
    <td><div id='fotoPerfil' style=' 
        background:rgba(1,1,1,0) url(img/".$imagem.");
    background-repeat:no-repeat;
      background-size: 40px 40px;'></div></td>
          
        </tr>

        </table>
            </div>");

             
             }

         }

         $id_servico = $_POST['id_servico'];
         $nome_servico = $_POST['nome_servico'];
         $obs_servico = $_POST['obs_servico'];
         $valor_servico = $_POST['valor_servico'];


  echo("<div id='conteudoF'>

    <h1>Faça seu chamado</h1>

    <div id='formularioP'>

         <form name='enviar' id='enviar' action='criarPedido.php?email=".$email."' method='post' >   
                
                <h2>".$nome_servico."</h2>
                
                    <textarea name='problemaS' cols='42' rows='2' placeholder='Descrição do problema' id='problemaS' minlength='2'></textarea>
           
                       <br />    <br />

                      <input name='senhaC' type='password' placeholder='Informe sua senha' value='' id='senhaC' size='40' minlength='3' />
                 
                         <br/> <br />

                         <input name='id_servico' type='hidden' value='".$id_servico."' id='id_servico' />

                           <input name='id_cliente' type='hidden' value='".$id_cliente."' id='id_cliente' />

                      <table>

                        <tr>

                          <td><h3>".$obs_servico."</h3></td>
                           <td><h3>Preço a pagar R$ ".$valor_servico."</h3></td>

                        </tr>

                      </table>
                        
                    </form>

                     <input type='submit' value='Finaizar' onclick=' return validar()' id='pedir'>


                     </div>
           
        </div>");

                    echo("<script language='javascript' type='text/javascript'>
          
            function validar(){

              var desc = enviar.problemaS.value;
              var senha = enviar.senhaC.value;

              var vD;
              var vS;
              
              if(desc == '' || desc.length < 4){
              
                
                document.getElementById('problemaS').style.borderColor='#FF3E41';
                
                vD = false;
                
                
              }else{
              
                document.getElementById('problemaS').style.borderColor='#FFF';
                
                vD = true;
                
              }
                
                if(senha == '' ||  senha != '".$senha."'){
              
                
                document.getElementById('senhaC').style.borderColor='#FF3E41';
                
                vS = false;
                
                
              }else{
              
                document.getElementById('senhaC').style.borderColor='#FFF';
                
                vS = true;
                
              }
                
                if(vD == true && vS == true){
                      
                      
                      document.getElementById('enviar').submit();
                    
                }
                    
                  
                  
                
                
              
              
            }
          
          </script>");

          ?> 

  <div id="rodapeCriar">
                     
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


  </body>

</html>