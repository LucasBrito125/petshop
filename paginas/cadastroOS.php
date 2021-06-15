<?php
    session_start();   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
                header('location:logout.php');
        }else{
          $logado = $_SESSION['usuario'];
        }

    $conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');
    $query = mysqli_query($conexao, "SELECT idServico, nomeServico FROM servicos order by nomeServico");
     
     ?>


<!doctype html>
<html lang="pt-br">
  <head>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script type="text/javascript" src="verificacoesJS.js"></script>
    <meta charset="utf-8">
    <title>Cadastro Ordem de Serviço</title>    
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

<script type='text/javascript'>
	$(document).ready(function(){
		$("input[name='txtCpfCliente']").blur(function(){
			var $nome_cliente = $("input[name='txtNomeCliente']");
			var $contato = $("input[name='txtContato']");
            var $cpf = $("input[name='txtCpfCliente']");
			$.getJSON('function.php',{ 
				$cpf: $(this).val() 
			    },function(json){
					$nome_cliente.val(json.nome_cliente);
					$contato.val(json.contato);
				});
		});
	});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
</head>

<body id="fundo2">
  <?php
      include_once 'header.php';
  ?>

  
<div class="col-sm-2 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="container">
            <form action="cadastrarOS.php" method="POST" class="form-horizontal">
                <h1>Cadastro Ordem de Serviço</h1>
                 <h1 class="page-header"></h1>

                 <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtCpfCliente">CPF</label>
                    <div class="col-sm-2">
                        <div class=" input-group">
                            <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                            </svg>
                            </div>
                            <input list="txtCpfCliente" name="txtCpfCliente" type="text" class="form-control">
                                <datalist id="txtCpfCliente">
                                <select name = "txtCpfCliente">
                                <option value=""></option>
                                <?php 
                                    $query = mysqli_query($conexao, "SELECT idCliente, nomeCliente, cpf FROM cliente order by nomeCliente");
                                    while($cliente = mysqli_fetch_assoc($query)){ 
                                        echo '<option data-value="'.$cliente['idCliente'].'" value="'.$cliente['cpf'].', '.$cliente['nomeCliente'].'"></option>';
		                            }
                                ?>
                              
                                </select>
                        </div>
                    </div>
                 
                    <label class="col-sm-1 control-label" for="txtNomeCliente">Nome</label>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <input type="text" name="txtNomeCliente" id="txtNomeCliente" required title="9 characters minimium" pattern=".{9,}" class="form-control">
                        </div>
                    </div>
                

             
                    <label class="col-sm-1 control-label" for="txtContato">Contato</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input type="tel" id="txtContato" name="txtContato" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" class="form-control" placeholder="(11) 11111-1111">
                        </div>
                    </div>
                    </div>
                
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtNomeAnimal">Nome Pet</label>
                    <div class="col-sm-10">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <input list="txtNomePet" name="txtNomePet" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                          
                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtRaca">Raça</label>                    
                        <div class="col-sm-5">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" id="basic-addon-user"></span>
                                </div>
                                <input type="text" name="txtRaca" id="txtRaca" required title="2 characters minimium" pattern=".{2,}" class="form-control">
                            </div>
                        </div>
                    
                    
                    <label class="col-sm-2 control-label" for="txtIdade">Idade</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-home" id="basic-addon-home"></span>
                                </div>
                                <input type="text" id="txtIdade" name="txtIdade" required class="form-control">
                            </div>
                        </div>                     
                </div> 
            
                
                <div class="form-group">
                        <label class="col-sm-1 control-label" for="txtTipoServico">Tipo de serviço</label>
                            <div class="col-sm-4">
                            <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                     <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                 </svg>
                             </div>
                             <input list="txtTipoServico" name="txtTipoServico" type="text" class="form-control">
                                </div>
                            </div>          
                        

                        
                    <label class="col-sm-1 control-label" for="txtValorServico">Valor do serviço</label>                    
                        <div class="col-sm-2">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-user" id="basic-addon-user"></span>
                                </div>
                                <input type="text" name="txtValorServico" id="txtValorServico" required title="2 characters minimium" pattern=".{2,}" class="form-control">
                            </div>
                        </div>     
                </div>
                
                <div class="form-group">
  <label class="col-sm-1 control-label" for="txtResponsavel">Responsavel</label>
    <div class="col-sm-4">
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
		$sql = "SELECT idFuncionario, nomeFuncionario,usuario FROM funcionario order by nomeFuncionario";
		$fun = mysqli_query($conexao, $sql );
		while($row = mysqli_fetch_assoc($fun)){
            echo '<option data-value="'.$row['idFuncionario'].'" value="'.$row['nomeFuncionario'].', '.$row['usuario'].'"></option>';
		}
	?>
                              
            </select>
        </div>
    </div>          
  </div> 
               
                <div class="form-group">
                    <label for="txtDescServico">Descrição do serviço</label>
                    <textarea class="form-control" name="txtDescServico" id="txtDescServico" rows="3"></textarea>
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