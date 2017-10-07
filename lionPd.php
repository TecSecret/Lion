<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 		
		<link rel="stylesheet" type="text/css" href="lionP.css">

	
		<link rel="shortcut icon" href="img/lion.png" >

<title>Bem-Vindo</title>

</head>


	<body>
   
   			<script src="jq/jquery-2.1.4.min.js"></script>

<div id="container">
		<div id="menu">
         
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
       	<div id="option">

            <center><ul>
            
						<li><a href="formulario.php">Cliente</a></li>
						<li><a href="formularioF.php">Funcionario</a></li>
						<li><a href="formularioP.php">Serviço</a></li>
          	
		  
            </ul></center>

        </div>
	</div>
	
	

<script src="jq/jquery-2.1.4.min.js"></script>

<script>

var $l = jQuery.noConflict();

    $l(document).ready(function(){

        $l(".cancel").click(function(event){


        event.preventDefault();
        

            $l("#option").slideToggle(500);
			 var overlay = document.querySelector(".glass");
			  if (overlay.className === "glass down") {
				window.location.href="lionPt.php";
			  } else {
				overlay.className = "glass down";
				
					var overlay2 = document.querySelector(validaDiv[verifica]);

			  if ($cont == 0){

			  	document.body.style.background="url(img/mac9.jpg)";
				document.body.style.backgroundRepeat="no-repeat";
				document.body.style.backgroundSize="100% 1000px";
				document.body.style.backgroundAttachment="fixed";


			  } 

			  }
            var intervalo = window.setInterval(function() {
            	 document.getElementById('menu').style.background="rgba(2,2,2,0.76)";
            
            }, 500);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 500);
            document.getElementById("voltarTopo").style.backgroundImage="url(img/voltar2.png)";

             /*<#conteudo style="-webkit-filter: blur(5px); 
    -moz-filter: blur(5px); 
    -o-filter: blur(5px); 
    -ms-filter: blur(5px); 
    filter: blur(5px);">*/

    });


        $l("#open").click(function(event){

         
         event.preventDefault();
	   
            $l("#option").slideToggle(500);   
             var overlay = document.querySelector(".glass");
			  if (overlay.className === "glass down") {
				overlay.className = "glass up";
				 document.getElementById('menu').style.background="rgba(2,2,2,0.40)";
				document.body.style.background="url(img/mac9Blur.jpg)";
				document.body.style.backgroundRepeat="no-repeat";
				document.body.style.backgroundSize="100% 1000px";
				document.body.style.backgroundAttachment="fixed";
				document.body.style.webkitTransition="all ease-out 2.5s";
				$cont ++;
			
			  } else {
				overlay.className = "glass down";
			 var intervalo = window.setInterval(function() {
            	 document.getElementById('menu').style.background="rgba(2,2,2,0.76)";
            
            }, 500);
            
            window.setTimeout(function() {
                clearInterval(intervalo);
            }, 500);
				var overlay2 = document.querySelector(validaDiv[verifica]);
			$cont --;
			  if ($cont == 0){

			  	document.body.style.background="url(img/mac9.jpg)";
				document.body.style.backgroundRepeat="no-repeat";
				document.body.style.backgroundSize="100% 1000px";
				document.body.style.backgroundAttachment="fixed";
				

			  } 
			  
			  }

        });


    });

    </script>

<script>

var $a = jQuery.noConflict();

var verifica ;

var valida = new Array(); 

var validaDiv = new Array(); 

var validaUp = new Array(); 

var validaDown = new Array(); 


	valida[0] = "#open1"; 
	valida[1] = "#open2"; 
	valida[2] = "#open3"; 
	valida[3] = "#open4"; 
	valida[4] = "#open5"; 
	valida[5] = "#open6"; 
	valida[6] = "#open7"; 
	valida[7] = "#open8";
	valida[8] = "#open9"; 
	valida[9] = "#open10"; 
 
	validaDiv[0] = ".glass1";
	validaDiv[1] = ".glass2";
	validaDiv[2] = ".glass3";
	validaDiv[3] = ".glass4";
	validaDiv[4] = ".glass5";
	validaDiv[5] = ".glass6";
	validaDiv[6] = ".glass7";
	validaDiv[7] = ".glass8";
	validaDiv[8] = ".glass9";
	validaDiv[9] = ".glass10";

	validaUp[0] = "glass1 up1";
	validaUp[1] = "glass2 up2";
	validaUp[2] = "glass3 up3";
	validaUp[3] = "glass4 up4";
	validaUp[4] = "glass5 up5";
	validaUp[5] = "glass6 up6";
	validaUp[6] = "glass7 up7";
	validaUp[7] = "glass8 up8";
	validaUp[8] = "glass9 up9";
	validaUp[9] = "glass10 up10";

	validaDown[0] = "glass1 down1";
	validaDown[1] = "glass2 down2";
	validaDown[2] = "glass3 down3";
	validaDown[3] = "glass4 down4";
	validaDown[4] = "glass5 down5";
	validaDown[5] = "glass6 down6";
	validaDown[6] = "glass7 down7";
	validaDown[7] = "glass8 down8";
	validaDown[8] = "glass9 down9";
	validaDown[9] = "glass10 down10";

	$cont = 0;

function tranform(){


	$a(valida[verifica]).slideToggle(500);

	
	var overlay = document.querySelector(validaDiv[verifica]);
			  if (overlay.className === validaDown[verifica]) {
				overlay.className = validaUp[verifica];
				document.body.style.background="url(img/mac9Blur.jpg)";
				document.body.style.backgroundRepeat="no-repeat";
				document.body.style.backgroundSize="100% 1000px";
				document.body.style.backgroundAttachment="fixed";
				document.body.style.webkitTransition="all ease-out 2.5s";
				$cont ++;
				
			  } else {
				overlay.className = validaDown[verifica];
				$cont --;
				
			  }   



			  if($cont == 0){

			  	document.body.style.background="url(img/mac9.jpg)";
				document.body.style.backgroundRepeat="no-repeat";
				document.body.style.backgroundSize="100% 1000px";
				document.body.style.backgroundAttachment="fixed";

			  }

			  

}
	
    $a(document).ready(function(){
		
		$a(".go1").click(function(event){

         
         event.preventDefault();
	   
         verifica = 0;

			tranform();
			
			 
            
            
        });
		
		$a(".go2").click(function(event){

         
         event.preventDefault();
	   
          verifica = 1;

          tranform();
            
        });
		
		$a(".go3").click(function(event){

         
         event.preventDefault();
	   
           verifica = 2;

          tranform();
            
        });

          
		$a(".go4").click(function(event){

         
         event.preventDefault();
	   
           verifica = 3;

          tranform();
            
        });
		
		$a(".go5").click(function(event){

         
         event.preventDefault();
	   
            verifica = 4;

          tranform();
            
        });
		
		$a(".go6").click(function(event){

         
         event.preventDefault();
	   
            verifica = 5;

          	tranform();

        });
		
		$a(".go7").click(function(event){

         
         event.preventDefault();
	   
            verifica = 6;

          	tranform();
            
        });
		
		$a(".go8").click(function(event){

         
         event.preventDefault();
	   
            verifica = 7;

          	tranform();
            
        });
		
		$a(".go9").click(function(event){

         
         event.preventDefault();
	   
           verifica = 8;

          	tranform();
            
        });
		
		$a(".go10").click(function(event){

         
         event.preventDefault();
	   
            verifica = 9;

          	tranform();
            
        });
		
    });
	

    </script>

	
	<div id="titulo">
	
		<h1>Dados dos clientes</h1>
	
	</div>
	
	<div id="set">
	
		<h1>SETEMBRO</h1>
	
	</div>
	
	<div id="indicSet">
	
		<table>
			
			<tr>
			
				<td><h5>Pedido</h5></td>
				<td><h5>Descrição</h5></td>
				<td><h5>Data</h5></td>
				<td><h5>Status</h5></td>
			
			</tr>
		
		</table>
	
	</div>
	
	<div id="t1">
	
		<table>
			
			<tr>
			
				<td><h5>.10</h5></td>
				<td ><h4>Reparo de placa</h4></td>
				<td><h3>09/09/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass1 down1">
  				<a href="#t1"><h8 class="go1"></h8></a>
               </article>
			</tr>
		
		</table>
	
	</div>

	<div id="open1">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 09/09/2015</h4>
					
					<h4>Relato: Mal funcionamento da placa de video</h4>

					<h4>Responsável: José Aleluia</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/appleIcon.png"/></center>
					
		
		
		<div id="tb1">

			<h4> Aparelho: MacBook</h4>
			<h4>Marca: Apple</h4>


			</div>
	
	</div>
	
		
	<div id="t2">
	
		<table>
			
			<tr>
			
				<td><h5>.9</h5></td>
				<td ><h4>Troca de item</h4></td>
				<td><h3>08/09/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass2 down2">
  				<a href="#t2"><h8 class="go2"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>

	<div id="open2">
		
		<h4> Cliente: Helen Sunt</h4>

			<h4>Data: 08/09/2015</h4>
					
					<h4>Relato: Produto com defeito de fabrica</h4>

					<h4>Responsável: kendon Derck</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/samsung.png"/></center>
					
		
		
		<div id="tb2">

			<h4> Aparelho: Galaxy S6</h4>
			<h4>Marca: Samsung</h4>


			</div>
	
	</div>
	
	<div id="t3">
	
		<table>
			
			<tr>
			
				<td><h5>.8</h5></td>
				<td ><h4>Troca de tela</h4></td>
				<td><h3>08/09/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass3 down3">
  				<a href="#open3"><h8 class="go3"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>

	<div id="open3">
		
		<h4> Cliente: Josh Oslen</h4>

			<h4>Data: 08/09/2015</h4>
					
					<h4>Relato: Tela trincada</h4>

					<h4>Responsável: Hobs Jornam</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/motorola.png"/></center>
					
		
		
		<div id="tb3">

			<h4> Aparelho: Moto X</h4>
			<h4>Marca: Motorola</h4>


			</div>
	
	</div>
	
	<div id="t4">
	
		<table>
			
			<tr>
			
				<td><h5>.7</h5></td>
				<td ><h4>Troca de Software</h4></td>
				<td><h3>06/09/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass4 down4">
  				<a href="#open4"><h8 class="go4"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>

	<div id="open4">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 06/09/2015</h4>
					
					<h4>Relato: Substituição do software</h4>

					<h4>Responsável: Aico Colossos</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/positivo.png"/></center>
					
		
		
		<div id="tb4">

			<h4> Aparelho: Não identificado</h4>
			<h4>Marca: Positivo</h4>


			</div>
	
	</div>
	
	<div id="t5">
	
		<table>
			
			<tr>
			
				<td><h5>.6</h5></td>
				<td ><h4>Reparo no precessador</h4></td>
				<td><h3>01/09/2015</h3></td>
				<td><h2>Finalizado</h2></td>
				<article class="glass5 down5">
  				<a href="#open5"><h8 class="go5"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>

	<div id="open5">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 01/09/2015</h4>
					
					<h4>Relato: Mal funcionamento do processador</h4>

					<h4>Responsável: José Aleluia</h4>

					<h4>Saída: 8/09/2015</h4>

					<center><img src="img/lenovo.png"/></center>
					
		
		
		<div id="tb5">

			<h4> Aparelho: Não identificado</h4>
			<h4>Marca: Lenovo</h4>


			</div>
	
	</div>
	
	<div id="ago">
	
		<h1>AGOSTO</h1>
	
	</div>
	
	<div id="indicAgo">
	
		<table>
			
			<tr>
			
				<td><h5>Pedido</h5></td>
				<td><h5>Descrição</h5></td>
				<td><h5>Data</h5></td>
				<td><h5>Status</h5></td>
			
			</tr>
		
		</table>
	
	</div>
	
	<div id="t6">
	
		<table>
			
			<tr>
			
				<td><h5>.5</h5></td>
				<td ><h4>Troca de peças</h4></td>
				<td><h3>24/08/2015</h3></td>
				<td><h2>Finalizado</h2></td>
				<article class="glass6 down6">
  				<a href="#open6"><h8 class="go6"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>
    
    <div id="open6">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 28/08/2015</h4>
					
					<h4>Relato: Substituição de peças defeituosas</h4>

					<h4>Responsável: Pig Gnu</h4>

					<h4>Saída: 03/09/2015</h4>

					<center><img src="img/appleIcon.png"/></center>
					
		
		
		<div id="tb6">

			<h4> Aparelho: iPhone 5s</h4>
			<h4>Marca: Apple</h4>


			</div>
	
	</div>
	
	<div id="t7">
	
		<table>
			
			<tr>
			
				<td><h5>.4</h5></td>
				<td ><h4>Reparo geral</h4></td>
				<td><h3>21/08/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass7 down7">
  				<a href="#open7"><h8 class="go7"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>
    
    <div id="open7">
		
		<h4> Cliente: Dorival Sanluan</h4>

			<h4>Data: 21/08/2015</h4>
					
					<h4>Relato: Análise completa do micro</h4>

					<h4>Responsável: Angel Alisiun</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/appleIcon.png"/></center>
					
		
		
		<div id="tb7">

			<h4> Aparelho: iMac</h4>
			<h4>Marca: Apple</h4>


			</div>
	
	</div>
	
	<div id="t8">
	
		<table>
			
			<tr>
			
				<td><h5>.3</h5></td>
				<td ><h4>Reparo geral</h4></td>
				<td><h3>17/08/2015</h3></td>
				<td><h2>Finalizado</h2></td>
				<article class="glass8 down8">
  				<a href="#open8"><h8 class="go8"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>
	
    <div id="open8">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 17/08/2015</h4>
					
					<h4>Relato: Análise completa do micro</h4>

					<h4>Responsável: Angel Alisiun</h4>

					<h4>Saída: 30/08/2015</h4>

					<center><img src="img/intel.png"/></center>
					
		
		
		<div id="tb8">

			<h4> Aparelho: Ultrabook</h4>
			<h4>Marca: Intel</h4>


			</div>
	
	</div>
    
	<div id="t9">
	
		<table>
			
			<tr>
			
				<td><h5>.2</h5></td>
				<td ><h4>Reparo de placa</h4></td>
				<td><h3>12/08/2015</h3></td>
				<td><h2>Finalizado</h2></td>
				<article class="glass9 down9">
  				<a href="#open9"><h8 class="go9"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>
    
    <div id="open9">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 12/08/2015</h4>
					
					<h4>Relato: Defeitos na placa de rede</h4>

					<h4>Responsável: José Aleluia</h4>

					<h4>Saída: 19/08/2015</h4>

					<center><img src="img/lg.png"/></center>
					
		
		
		<div id="tb9">

			<h4> Aparelho: Não identificado</h4>
			<h4>Marca: LG</h4>


			</div>
	
	</div>
	
		<div id="t10">
	
		<table>
			
			<tr>
			
				<td><h5>.1</h5></td>
				<td ><h4>Reforma de carcaça</h4></td>
				<td><h3>10/08/2015</h3></td>
				<td><h2>Em andamento</h2></td>
				<article class="glass10 down10">
  				<a href="#open10"><h8 class="go10"></h8></a>
               </article>
			
			</tr>
		
		</table>
	
	</div>
    
    <div id="open10">
		
		<h4> Cliente: José Bonifácio</h4>

			<h4>Data: 10/08/2015</h4>
					
					<h4>Relato: Queda e deformação de carcaça</h4>

					<h4>Responsável: Jacóby Ametist</h4>

					<h4>Saída: Não identificado</h4>

					<center><img src="img/appleIcon.png"/></center>
					
		
		
		<div id="tb10">

			<h4> Aparelho: iPhone 6</h4>
			<h4>Marca: Apple</h4>


			</div>
	
	</div>
   
   <div id="rodape">
             
                 <center><table id="tb">
                   
                   		<tr> 
                           
                           <td><h3><a href="https://www.facebook.com">f</a></h3></td>
                            
                            <td><h4><a href="https://www.youtube.com/">y</a></h4></td>
                            
                            <td><h5><a href="https://twitter.com/">t</a></h5></td>
                    
                   		</tr>
                   
                  </table></center>
		
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

	 
  
   
   