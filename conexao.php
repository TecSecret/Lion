<?php
    
    function abrirConexao(){
    
       @mysql_connect('localhost','root','') or die ("ERRO: Conexão falhou!");
        @mysql_select_db('bdLion') or die ("Erro: Não selecionou o banco");
    
    }
    
    function fecharConexao(){
        @mysql_close(@mysqli_connect('localhost','root', ''));
    }
?>