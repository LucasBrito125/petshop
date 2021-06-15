<?php
session_start();
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

$cpfCliente = $_POST['txtCPFCliente'];
$nomeCliente = $_POST['txtNomeCliente'];
$telefone= $_POST['txtTelefone'];
$nomePet = $_POST['nomePet'];
$raca = $_POST['txtRaca'];
$idade = $_POST['txtIdade'];
$servico = $_POST['txtServico'];
$valorServico = $_POST['txtValorServico'];
$responsavel = $_POST['txtResponsavel'];
$descricao = $_POST['txtDesc'];


echo "$cpfCliente<br>";
echo "$nomeCliente<br>";
echo "$telefone<br>";
echo "$nomePet<br>";
echo "$raca<br>";
echo "$idade<br>";
echo "$servico<br>";
echo "$valorServico<br>";
echo "$responsavel<br>";
echo "$descricao<br>";


$q = mysqli_query($conexao, "select idPet from pet where nomePet = '$nomePet' and idade = $idade");
$id = mysqli_fetch_assoc($q);
$idPet = $id[idPet];
echo "$idPet<br>";


$q = mysqli_query($conexao, "select idServico from servicos where nomeServico = '$servico'");
$id = mysqli_fetch_assoc($q);
$idServico = $id[idServico];
echo "$idServico<br>";

$q = mysqli_query($conexao, "select idFuncionario from funcionario where nomeFuncionario = '$responsavel'");
$id = mysqli_fetch_assoc($q);
$idFuncionario = $id[idFuncionario];
echo "$idFuncionario<br>";

$q = mysqli_query($conexao, "select idCliente from cliente where cpf = '$cpfCliente' and nomeCliente = '$nomeCliente'");
$id = mysqli_fetch_assoc($q);
$idCliente = $id[idCliente];
echo "$idCliente<br>";

$cpf = str_replace(".","", $cpf);
$cpf = str_replace("-","", $cpf);
$sql = "INSERT INTO ordemservico(idCliente, idPet, tipoServico, valorServico, responsavel) 
values($idCliente, $idPet, $idServico, '$valorServico', '$idFuncionario');";
//$sql = "INSERT INTO pet(nomePet, especie, raca,idadePet, porte, pelagem, observacao,proprietario) values('$nomePet', '$especie', $raca, '$idadePet', '$porte', '$pelagem', '$obs','$proprietario');";
echo $sql;
 if(mysqli_query($conexao, $sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Cadastro efetuado com sucesso')
    window.location.href='home.php';
</script>");

    
 }else{
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erro ao cadastrar OS')
  
</script>");
 }



?>
