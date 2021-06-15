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
    <title>Cadastro Funcionario </title>    
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src='http://momentjs.com/downloads/moment.min.js'></script>
    <script type="text/javascript" src="verificacoesJS.js"></script>
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
            <form action="cadastrarOS.php" method="POST" class="form-horizontal">
                <h1 style>Cadastro Ordem de Serviço</h1>
                 <h1 class="page-header"></h1>

                 <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtCPFCliente">CPF</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <input list="txtCPFCliente" name="txtCPFCliente" type="text" class="form-control">
                            <datalist id="txtCPFCliente">
                            <select name = "txtCPFCliente">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idCliente, nomeCliente, cpf FROM cliente order by nomeCliente";
		                        $cli = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($cli)){
                                    echo '<option value="'.$row['cpf'].'"></option>';
		                        }
	                        ?>
                            </select>
                        </div>
                    </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtNomeCliente">Nome</label>
                    <div class="col-sm-3">
                        <div class=" input-group">
                            <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                            </svg>
                            </div>
                            <input list="txtNomeCliente" name="txtNomeCliente" type="text" class="form-control">
                            <datalist id="txtNomeCliente">
                            <select name = "txtNomeCliente">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idCliente, nomeCliente FROM cliente order by nomeCliente";
		                        $cli = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($cli)){
                                    echo '<option value="'.$row['nomeCliente'].'"></option>';
		                        }
	                        ?>
                          </select>
                        </div>
                    </div>

                    <label class="col-sm-1 control-label" for="txtTelefone">Telefone</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input list="txtTelefone" name="txtTelefone" type="text" class="form-control">
                            <datalist id="txtTelefone">
                            <select name = "txtTelefone">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idCliente, nomeCliente, telefone FROM cliente order by nomeCliente";
		                        $cli = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($cli)){
                                    echo '<option value="'.$row['telefone'].'"></option>';
		                        }
	                        ?>
                         </select>
                        </div>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtNomePet">Nome Pet</label>
                    <div class="col-sm-3">
                        <div class=" input-group">
                            <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                            </svg>
                            </div>
                            <input list="txtNomePet" name="txtNomePet" type="text" class="form-control">
                            <datalist id="txtNomePet">
                            <select name = "nomePet">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idPet, nomePet FROM pet order by nomePet";
		                        $pet = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($pet)){
                                    echo '<option value="'.$row['nomePet'].'"></option>';
		                        }
	                        ?>
                         </select>
                        </div>
                    </div>

                    <label class="col-sm-1 control-label" for="txtRaca">Raça</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input list="txtRaca" name="txtRaca" type="text" class="form-control">
                            <datalist id="txtRaca">
                            <select name = "txtRaca">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idRaca, nomeRaca FROM raca order by nomeRaca";
		                        $pet = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($pet)){
                                    echo '<option value="'.$row['nomeRaca'].'"></option>';
		                        }
	                        ?>
                            </select>
                        </div>
                    </div>

                    <label class="col-sm-1 control-label" for="txtIdade">Idade</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input list="txtIdade" name="txtIdade" type="text" class="form-control">
                            <datalist id="txtIdade">
                            <select name = "txtIdade">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idPet, idadePet FROM pet order by nomeCliente";
		                        $pet = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($pet)){
                                    echo '<option value="'.$row['idadePet'].'"></option>';
		                        }
	                        ?>
                            </select>
                        </div>
                    </div>
                </div>                



                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txtServico">Tipo de Serviço</label>
                    <div class="col-sm-4">
                        <div class=" input-group">
                            <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                            </svg>
                            </div>
                            <input list="txtServico" name="txtServico" type="text" class="form-control">
                            <datalist id="txtServico">
                            <select name = "txtServico">
                            <option value=""></option>
                            <?php
		                        $sql = "SELECT idServico, nomeServico FROM servicos order by nomeServico";
		                        $serv = mysqli_query($conexao, $sql );
		                        while($row = mysqli_fetch_assoc($serv )){
                                    echo '<option value="'.$row['nomeServico'].'"></option>';
		                        }
	                        ?>
                            </select>
                        </div>
                    </div>

                    <label class="col-sm-2 control-label" for="txtValorServico">Valor do Serviço</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input list="txtValorServico" name="txtValorServico" type="text" class="form-control">
                        </div>
                    </div>
                </div> 
                   

                <div class="form-group">
                     <label class="col-sm-2 control-label" for="txtResponsavel">Responsavel</label>
                     <div class="col-sm-10">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </div>
                                <input list="txtResponsavel" name="txtResponsavel" type="text" class="form-control">
                                <datalist id="txtResponsavel">
                                <select name = "txtResponsavel">
                                    <option value=""></option>
	                                <?php
		                                $sql = "SELECT idFuncionario, nomeFuncionario, usuario FROM funcionario order by nomeFuncionario";
		                                $fun = mysqli_query($conexao, $sql);
		                                while($row = mysqli_fetch_assoc($fun)){
                                            echo '<option data-value="'.$row['idFuncionario'].'" value="'.$row['nomeFuncionario'].', '.$row['usuario'].'"></option>';
		                                }
	                                ?>               
                                </select>
                            </div>
                      </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txtDesc">Descrição do Serviço</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="txtDesc" id="txtDesc" ></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12 text-center" id="botao">
                        <input type="submit" value="Enviar" id="botao_submit" class="btn btn-success btn-lg ">
                        <input type="reset" value="Limpar" id="botao_limpar" class="btn btn-danger btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>
 
     
  </body>

  </html>