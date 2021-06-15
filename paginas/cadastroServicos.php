<?php
    session_start();   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
                header('location:logout.php');
        }else{
          $logado = $_SESSION['usuario'];
        }

        $conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

     ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de serviços </title>    
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">

    <style>
        h1{
            font-size: 50px;
            text-align: center;
            color: #000;
        }
        label{
            color: #000;
            font-size: 17px;
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
       
    </style>

</head>

<body id="fundo2">
  <?php
      include_once 'header.php';
  ?>

  
  <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-0 main">
    <div class="container">
        <form action="cadastroServ.php" method="POST" class="form-horizontal">
            <h1 style>Cadastro de Serviços</h1>
             <h1 class="page-header"></h1>

             <div class="form-group">
                <label class="col-sm-2 control-label" for="txtnome">Nome</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <input type="text" name="txtnome" id="txtnome" required title="9 characters minimium" pattern=".{4,}" class="form-control">
                    </div>
                </div>
            </div>
                       
            <div class="form-group">
            <label class="col-sm-2 control-label" for="txtanimal">Animal</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-addon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                            <input list="txtanimal" name="txtanimal" type="text" class="form-control">
                            <datalist id="txtanimal">
                                <option value="">
                                <option value="Cachorros">
                                <option value="Felinos">
                                <option value="Ambos">
                                
                        </div>
                    </div>
                </div> 
                
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="txtDescricao">Descrição do Serviço</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" name="txtDescricao" id="txtDescricao" ></textarea>
                    </div>
                </div>
        

            <div class="form-group">
                <div class="col-sm-12 text-center" id="botao">
                    <input type="submit" value="Enviar" id="botao_submit" class="btn btn-success btn-lg " >
                    <input type="reset" value="Limpar" id="botao_limpar" class="btn btn-danger btn-lg" >
                </div>
            </div>
        </form>
    </div>
</div>

        </body>

        </html>