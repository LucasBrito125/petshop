<?php
// session_start inicia a sessão
session_start();

// pega as variaveis dos campos de login do index.html
$Usuario = $_POST['txtUsuario'];
$Senha = $_POST['txtSenha'];
$Senha = md5($Senha); //criptografa

$conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

//se tiver nulo algum dos dois, é pra voltar pra tela de login
if(empty($Usuario) || empty($Senha)){
    header('Location: index.html');
    exit();
}else{

    // A variavel $result pega as varias $Usuario e $Senha, faz uma pesquisa na tabela de funcionarios
    $result = mysqli_query($conexao, "SELECT * FROM funcionario WHERE usuario = '$Usuario' and senha = '$Senha'");
    //$encontrado = mysql_num_rows($result);
    //echo "$encontrado";

    /* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
    bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
    será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
    resultado ele redirecionará para a página cadastroFuncionario.php ou retornara  para a página
    do formulário inicial para que se possa tentar novamente realizar o login */

    if(mysql_num_rows($result) > 0 ){
        $_SESSION['usuario'] = $Usuario;
        $_SESSION['senha'] = $Senha;
        header('location:home.php');
    }else{
        //unset ($_SESSION['login']);
        //($_SESSION['senha']);
        //echo "<script> alert('Usuário ou senha incorretos'); </script>";
        header('location:index.html');
    } 
}
?>