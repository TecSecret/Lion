<?php
    
    function abrirConexao(){
    
       @mysql_connect('localhost','root','') or die ("ERRO: Conex�o falhou!");
        @mysql_select_db('bdLion') or die ("Erro: N�o selecionou o banco");
    
    }
    
    function fecharConexao(){
        @mysql_close(@mysqli_connect('localhost','root', ''));
    }
?>