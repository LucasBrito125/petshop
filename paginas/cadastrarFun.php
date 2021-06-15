<?php
session_start();
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

$nome = $_POST['txtNomeFuncionario'];
$cpf = $_POST['txtCpf'];
$idade = $_POST['txtIdade'];
$sexo = $_POST['txtSexo'];
$funcao = $_POST['txtFuncao'];
$cidade = $_POST['txtCidade'];
$uf = $_POST['txtUF'];
$bairro = $_POST['txtBairro'];
$cep = $_POST['txtCEP'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefone'];
$data_contratacao = $_POST['txtDataContratacao'];
$usuario = $_POST['txtUsuario'];    
$senha = $_POST['txtSenha'];
$senha = md5($senha);



$cpf = str_replace(".","", $cpf);
$cpf = str_replace("-","", $cpf);
$sql = "INSERT INTO funcionario(nomeFuncionario, cpf, idade, sexo, funcao, cidade, uf, bairro, cep, endereco, telefone, data_contratacao, usuario, senha) values('$nome', '$cpf', $idade, '$sexo', '$funcao', '$cidade', '$uf', '$bairro', '$cep', '$endereco', '$telefone', '$data_contratacao', '$usuario', '$senha');";


 if(mysqli_query($conexao, $sql)){
    echo ("<script LANGUAGE='JavaScript'>
     window.alert('Cadastro efetuado com sucesso')
     window.location.href='home.php';
    </script>");
 }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erro ao cadastrar funcionario')
    window.location.href='cadastroFuncionario.php';
</script>");
 }



?>