<?php
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

function retorna($txtCpfCliente){
	$sql = "SELECT * FROM cliente WHERE  cpf= '$txtCpfCliente' LIMIT 1";
	$resultado = mysqli_query($conexao, $sql);

	if($resultado->num_rows){
		$row = mysqli_fetch_assoc($resultado);
		$valores['nome_cliente'] = $row['nomeCliente'];
		$valores['telefone'] = $row['telefone'];
	}else{
		$valores['nome_cliente'] = 'Aluno não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['txtCpfCliente'])){
	echo retorna($_GET['txtCpfCliente']);
}
?>