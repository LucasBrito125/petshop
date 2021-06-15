<?php
session_start();
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

$nomePet = $_POST['txtNomePet'];    
$especie = $_POST['txtEspecie'];
$raca = $_POST['txtRaca'];    
$idadePet = $_POST['txtIdade'];
$porte = $_POST['txtPorte'];    
$pelagem = $_POST['txtPelagem'];
$obs = $_POST['txtObs'];
$proprietario = $_POST['txtProprietario'];

 
$q = mysqli_query($conexao,"select idCliente from cliente where nomeCliente = '$proprietario'");
$id = mysqli_fetch_assoc($q);
$idProprietario = $id[idCliente];

$sql = "INSERT INTO pet(nomePet, especie, raca,idadePet, porte, pelagem, observacao,proprietario) values('$nomePet', '$especie', '$raca', $idadePet, '$porte', '$pelagem', '$obs', $idProprietario);";
echo $proprietario;

if(mysqli_query($conexao, $sql)){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Cadastro efetuado com sucesso')
    window.location.href='home.php';
</script>");

    
 }else{
    echo $sql;
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erro ao cadastrar Pet')
  
</script>");
 }



?>