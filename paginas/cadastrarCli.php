<?php
session_start();
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

$nome = $_POST['txtNomeCliente'];
$cpf = $_POST['txtCpfCliente'];
$idade = $_POST['txtIdadeCliente'];
$sexo = $_POST['txtSexoCliente'];
$cidade = $_POST['txtCidade'];
$uf = $_POST['txtUF'];
$bairro = $_POST['txtBairro'];
$cep = $_POST['txtCEP'];
$endereco = $_POST['txtEndereco'];
$telefone = $_POST['txtTelefoneCliente'];


$cpf = str_replace(".","", $cpf);
$cpf = str_replace("-","", $cpf);
$sql = "INSERT INTO cliente(nomeCliente, cpf, idade, sexo, cidade, uf, bairro, cep, endereco, telefone, data_cadastro) values('$nome', '$cpf', $idade, '$sexo', '$cidade', '$uf', '$bairro', '$cep', '$endereco', '$telefone', now());";
//$sql = "INSERT INTO pet(nomePet, especie, raca,idadePet, porte, pelagem, observacao,proprietario) values('$nomePet', '$especie', $raca, '$idadePet', '$porte', '$pelagem', '$obs','$proprietario');";

 if(mysqli_query($conexao, $sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Cadastro efetuado com sucesso')
    window.location.href='home.php';
</script>");

    
 }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erro ao cadastrar cliente')
  
</script>");
 }



?>
