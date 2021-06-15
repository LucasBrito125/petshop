<?php
session_start();
$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');


 $nome = $_POST['txtnome'];
$descricao = $_POST['txtDescricao'];
$animal = $_POST['txtanimal'];
$data = $_POST['txtdata'];

//echo $nome."<br>".$descricao."<br>".$animal."<br>".$data."<br>";
//$cpf = str_replace(".","", $cpf);
//$cpf = str_replace("-","", $cpf);
$sql = "INSERT INTO servicos(nomeServico, descricao, animal, dataCriacao) values('$nome', '$descricao', '$animal', '$data');";

 if(mysqli_query($conexao, $sql)){
        //echo "<script> alert('Servicos cadastrado com sucesso.'); </script>";
        //header('Location: cadastroServicos.php');
       // <meta http-equiv='refresh' content='0', url='cadastroFuncionario.php'>;
       echo ("<script LANGUAGE='JavaScript'>
       window.alert('Cadastro efetuado com sucesso')
       window.location.href='cadastroServicos.php';
   </script>");

 }else{
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Erro ao cadastrar serviço')
    window.location.href='cadastroServicos.php';
</script>");
 }

 ?>