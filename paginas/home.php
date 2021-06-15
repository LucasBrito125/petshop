<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>HOMEPAGE </title>    
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src='http://momentjs.com/downloads/moment.min.js'></script>
    <script type="text/javascript" src="verificacoesJS.js"></script>
    <style>
        h1{
            font-size: 60px;
            font-style: italic;
            text-align: center;
            color: black;
           
            
          
   
           
            
    background: url(../img/logo.png) no-repea
        }
        h2{
            font-size: 30px;
            font-style: italic;
            text-align: center;
            color: black;}
        .page-header{
           background: white;
           width: 100%;
           height: 100px;
           font-size: 20px;
            font-style: arial;
            border-width: medium;
            border-style: solid;
            border-color: black;
        }
        label{
            color: #000;
            font-size: 17px;
        }

        .card{
            border: 1px solid #D1DDE2;
		background: white;
		width: 25%;
        min-width: 200px;
		border-radius: 10px;
		overflow: hidden;
		float: left;
		margin-right: 10px;
        margin-left: 10px;
		margin-bottom: 20px;

		font-family: "Open Sans";
		font-size: 15px;
        }.cardImg {
      /*width: 250px;*/
      height: 200px;
    }

       
        #botao{
            margin-top: 20px;
        }
        #botao_submit{
            margin-right: 100px;
            
        }
        .opcao{
            color: #000;
            font-size: 17px;
            font-weight: 800;
        }
        #usuario{
            color: #000; 
            font-size: 15px; 
            margin-left: 300%;
        }
    </style>
  </head>

  <body id="fundo2">
    <?php
        include_once 'header.php';
    ?>

        <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-0 main">
        <div class="container">
        <h1 style>🐶PETGEST🐶</h1>
         <h2 class="mural">📅MURAL DE RECADOS📅</h2>
        <h1 class="page-header">Boa noite! no dia de hoje teremos uma carga horaria de apenas 6hrs referente ao feriado de natal!Boas festas.</h1>
        
     <div class="container-fluid d-flex flex-wrap">
        <div class="card" style="width: 18rem;">
            <img src="../img/funci.jpg" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">CADASTRO FUNCIONARIOS</h5>
                <p class="card-text"></p>
                <a href="cadastroFuncionario.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../img/clientes.jpg" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">CADASTRO CLIENTES</h5>
                <p class="card-text"></p>
                <a href="cadastroCliente.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>
      
        <div class="card" style="width: 18rem;">
            <img src="../img/fundoHome2.jpg" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">CADASTRO PETS</h5>
                <p class="card-text"></p>
                <a href="cadastroAnimal.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../img/OS.png" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">CADASTRO ORDEM DE SERVIÇO</h5>
                <p class="card-text"></p>
                <a href="cadastrooOs.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>
        
        <div class="card" style="width: 18rem;">
            <img src="../img/serv.jpg" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">CADASTRO SERVIÇOS</h5>
                <p class="card-text"></p>
                <a href="cadastroServicos.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../img/list.png" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">LISTAR FUNCIONARIOS</h5>
                <p class="card-text"></p>
                <a href="listarFunc.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img src="../img/list.png" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">LISTAR CLIENTES</h5>
                <p class="card-text"></p>
                <a href="listarClientes.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
            
        </div>
        <div class="card" style="width: 18rem;">
            <img src="../img/list.png" class="cardImg" alt="...">
            <div class="card-body">
                <h5 class="card-title">LISTAR PET</h5>
                <p class="card-text"></p>
                <a href="listarPet.php" class="btn btn-warning btn-lg">ENVIAR</a>
            </div>
        </div>
        </div>
        </div>

        </div>
  </body>
  </html>