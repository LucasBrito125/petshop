<?php
	//LOCALHOST
	$host   = "us-cdbr-east-03.cleardb.net";
	$login  = "b93ac2ca02a47f";
	$senha  = "4428a355";
	$banco  = "heroku_bd928228b7e37d8";


	//CONECTANDO AO SERVIDOR
	$conexao = mysqli_connect($host, $login, $senha, $banco)
	// or die ("<script>
	// 			 alert('[Erro] - Problemas no servidor do banco!');
	// 		 </script>");
	or die(mysql_error());
		

	//SELECIONA O BANCO DE DADOS
	$db = mysql_select_db($banco)
	or die ("<script>
				 alert('[Erro] - Problema ao acessar o banco $banco!');
			 </script>");

	//echo "<script> alert('Conexao $banco!'); </script>"
?>
