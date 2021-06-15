<?php
    session_start();   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
                header('location:logout.php');
        }else{
          $logado = $_SESSION['usuario'];
        }

    $conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');
    $query = mysqli_query($conexao, "SELECT idCliente, nomeCliente, telefone FROM cliente order by nomeCliente");
     
?>


<!doctype html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="verificacoesJS.js"></script>
    <meta charset="utf-8">
    <title>Cadastro Animal </title>    
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">
    <script type="text/javascript" src="jquery-1.6.4.js"></script>


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
                    <form action="cadastrarAni.php"  method="POST" class="form-horizontal">
                <h1 style>Cadastro Pet</h1>
                <h1 class="page-header"></h1>

     <div class="form-group">
    <label class="col-sm-1 control-label" for="txtNomePet">Nome do Pet</label>
    <div class="col-sm-4">
      <div class="input-group">
        <div class="input-group-addon">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
             <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
        </div>
        <input type="text" id="txtNomePet" name="txtNomePet" class="form-control">
      </div>
    </div>



    <label class="col-sm-1 control-label" for="txtEspecie">Especie</label>
    <div class="col-sm-3">
        <div class="input-group">
            <div class="input-group-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
            <input list="txtEspecie" name="txtEspecie" type="text" class="form-control">
            <datalist id="txtEspecie">
            <select name="Especie" id="Especie">
            <?php
                $query = mysqli_query($conexao, "SELECT idEspecie, nomeEspecie FROM especie order by nomeEspecie");
                    while($especie = mysqli_fetch_assoc($query)){
                    echo '<option data-value="'.$especie[idEspecie].'" value="'.$especie['nomeEspecie'].'"></option>';
                    }                    
            ?>             
            </select>
        </div>
    </div>  
    

    <label class="col-sm-1 control-label" for="txtRaca">Raça</label>
    <div class="col-sm-2">
        <div class="input-group">
            <div class="input-group-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
            <input list="txtRaca" name="txtRaca" type="text" class="form-control">
            <datalist id="txtRaca">
            <select name="txtRaca" id="txtRaca">
            <?php
                $query = mysqli_query($conexao, "SELECT idRaca, nomeRaca FROM raca order by nomeRaca");
                    while($raca = mysqli_fetch_assoc($query)){
                    echo '<option data-value="'.$raca[idRaca].'" value="'.$raca['nomeRaca'].'"></option>';
                    }                    
            ?>             
            </select>
        </div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-1 control-label" for="txtIdade">Idade do Pet</label>
    <div class="col-sm-4">
      <div class="input-group">
        <div class="input-group-addon">
             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
             <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>
        </div>
        <input type="text" id="txtIdade" name="txtIdade" class="form-control">
      </div>
    </div>



    <label class="col-sm-1 control-label" for="txtPorte">Porte</label>
    <div class="col-sm-3">
        <div class="input-group">
            <div class="input-group-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
                <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
                </svg>
            </div>
            <input list="txtPorte" name="txtPorte" type="text" class="form-control">
            <datalist id="txtPorte">
            <select name = "txtPorte">
                <option data-value="pequeno" value="Pequeno"></option>
                <option data-value="medio" value="Médio"></option>
                <option data-value="grande" value="Grande"></option>
            </select>
        </div>
    </div>

    <label class="col-sm-1 control-label" for="txtPelagem">Pelagem</label>
    <div class="col-sm-2">
        <div class="input-group">
            <div class="input-group-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
            <input list="txtPelagem" name="txtPelagem" type="text" class="form-control">
            <datalist id="txtPelagem">
            <select name = "txtPelagem">
                <option data-value="Curta" value="Curta"></option>
                <option data-value="Grande" value="Grande"></option>
            </select>
        </div>
    </div>
</div>
  
  <div class="form-group">
  <label class="col-sm-1 control-label" for="txtProprietario">Proprietario</label>
    <div class="col-sm-4">
        <div class="input-group">
            <div class="input-group-addon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                </svg>
            </div>
            <input list="txtProprietario" name="txtProprietario" type="text" class="form-control">
            <datalist id="txtProprietario">
            <select name="txtProprietario" id="txtProprietario">
            <?php
                $query = mysqli_query($conexao, "SELECT idCliente, nomeCliente FROM cliente order by nomeCliente");
                    while($raca = mysqli_fetch_assoc($query)){
                    echo '<option data-value="'.$raca[idCliente].'" value="'.$raca['nomeCliente'].'"></option>';
                    }                    
            ?>             
            </select>
        </div>
    </div>     
    
    <label class="col-sm-1 control-label" for="txtObs">Observação:</label>
            <div class="col-sm-6">
                <div class="input-group">
                    <div class="input-group-addon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>
            <input type="text" id="txtObs" name="txtObs"  class="form-control">
                </div>
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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
$(function () {
$("#txtProprietario").autocomplete({
source: 'proc_pesq_msg.php'
});
});
</script>
</body>
</html>