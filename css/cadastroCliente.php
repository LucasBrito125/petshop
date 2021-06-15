<?php
    session_start();   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
                header('location:logout.php');
        }else{
          $logado = $_SESSION['usuario'];
        }

     require ("conexao.php");

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Cadastro Cliente </title>    
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
            <form action="cadastrarFun.php" method="POST" class="form-horizontal">
                <h1 style>Cadastro CLientes</h1>
                 <h1 class="page-header"></h1>

                 <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtNomeCliente">Nome</label>
                    <div class="col-sm-11">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                </svg>
                            </div>
                            <input type="text" name="txtNomeCliente" id="txtNomeCliente" required title="9 characters minimium" pattern=".{9,}" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtCpfcliente">CPF</label>
                    <div class="col-sm-3">
                        <div class=" input-group">
                            <div class="input-group-addon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt-cutoff" viewBox="0 0 16 16">
                                <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zM11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"/>
                                <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293 2.354.646zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118l.137-.274z"/>
                            </svg>
                            </div>
                            <input type="text" id="txtCpfcliente" name="txtCpfcliente" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="333.333.333-22" class="form-control"> 
                            <!--input type="text" id="txtCpf" name="txtCpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="333.333.333-22" class="form-control"--> 
                        </div>
                    </div>

                    <label class="col-sm-2 control-label" for="txtTelefonecliente">Telefone para contato</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                 </svg>
                            </div>
                            <input type="tel" id="txtTelefonecliente" name="txtTelefonecliente" pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" class="form-control" placeholder="(11) 11111-1111">
                        </div>
                    </div>

                    <label class="col-sm-1 control-label" for="txtCEPcliente">CEP</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                            <input type="text" id="txtCEPcliente" name="txtCEPcliente" pattern=".{8,}" placeholder="12.345-678" title="Digite um CEP no padrao: 12.345-678" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtEnderecocliente">Endereço</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtEnderecocliente" name="txtEnderecocliente" class="form-control">
                        </div>
                    </div>

                    <label class="col-sm-1 control-label" for="txtBairrocliente">Bairro</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtBairrocliente" name="txtBairrocliente" class="form-control">
                        </div>
                    </div>

                <label class="col-sm-1 control-label" for="txtUFcliente">UF</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                            <input list="txtUFcliente" name="txtUFcliente" type="text" class="form-control">
                            <datalist id="txtUFcliente">
                                <option value="">
                                <option value="AC">
                                <option value="AL">
                                <option value="AP">
                                <option value="AM">
                                <option value="BA">
                                <option value="CE"> 
                                <option value="DF">
                                <option value="ES">
                                <option value="GO">
                                <option value="MA">
                                <option value="MT">
                                <option value="MS">
                                <option value="MG">
                                <option value="PA">
                                <option value="PB">
                                <option value="PR">
                                <option value="PE">
                                <option value="PI">
                                <option value="RJ">
                                <option value="RN">
                                <option value="RS">
                                <option value="RO">
                                <option value="RR">
                                <option value="SC">
                                <option value="SP">
                                <option value="SE">
                                <option value="TO">
                        </div>
                    </div>
                </div> 

                <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtCidadecliente">Cidade</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-addon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtCidadecliente" name="txtCidadecliente" class="form-control">
                        </div>
                    </div>
                    
                    

                    <label class="col-sm-1 control-label" for="txtIdadecliente">Idade</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtIdadecliente" name="txtIdadecliente" class="form-control">
                        </div>
                    </div>
                    
                </div>
                
                <div class="form-group">

                    <label class="col-sm-1 control-label" for="txtSexocliente">Sexo</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-octagon-fill" viewBox="0 0 16 16">
                                    <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zM5.496 6.033a.237.237 0 0 1-.24-.247C5.35 4.091 6.737 3.5 8.005 3.5c1.396 0 2.672.73 2.672 2.24 0 1.08-.635 1.594-1.244 2.057-.737.559-1.01.768-1.01 1.486v.105a.25.25 0 0 1-.25.25h-.81a.25.25 0 0 1-.25-.246l-.004-.217c-.038-.927.495-1.498 1.168-1.987.59-.444.965-.736.965-1.371 0-.825-.628-1.168-1.314-1.168-.803 0-1.253.478-1.342 1.134-.018.137-.128.25-.266.25h-.825zm2.325 6.443c-.584 0-1.009-.394-1.009-.927 0-.552.425-.94 1.01-.94.609 0 1.028.388 1.028.94 0 .533-.42.927-1.029.927z"/>
                                </svg>
                            </div>
                            <input list="txtSexocliente" name="txtSexocliente" type="text"  class="form-control">
                            <datalist id="txtSexocliente">
                                <option value="">
                                <option value="Feminino">
                                <option value="Masculino">
                        </div>
                    </div>

                    <label class="col-sm-2 control-label" for="txtDataCadastrocliente">Data Cadastro</label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar2-week-fill" viewBox="0 0 16 16">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zm9.954 3H2.545c-.3 0-.545.224-.545.5v1c0 .276.244.5.545.5h10.91c.3 0 .545-.224.545-.5v-1c0-.276-.244-.5-.546-.5zM8.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM3 10.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtDataCadastrocliente" name="txtDataCadastrocliente"  class="form-control">
                        </div>
                    </div>

                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="txtAcesso">Acesso ao sistema: </label>
                    <div class="col-sm-3"> 
                            <label class="radio-inline"><input type="radio" name="txtAcesso" value="sim" checked><a class="opcao">Sim</a></label>
                            <label class="radio-inline"><input type="radio" name="txtAcesso" value="nao"><a class="opcao">Nao</a></label>
                    </div> 
                 
                    <div class="form-group">
                    <label class="col-sm-1 control-label" for="txtnomePet">Nome do Pet</label>
                    <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-addon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtnomePet" name="txtnomePet" class="form-control">
                        </div>
                    </div>
                    
                    

                    <label class="col-sm-1 control-label" for="txtracaPet">Raça do Pet</label>
                    <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07A7.001 7.001 0 0 0 8 16a7 7 0 0 0 5.29-11.584.531.531 0 0 0 .013-.012l.354-.354.353.354a.5.5 0 1 0 .707-.707l-1.414-1.415a.5.5 0 1 0-.707.707l.354.354-.354.354a.717.717 0 0 0-.012.012A6.973 6.973 0 0 0 9 2.071V1h.5a.5.5 0 0 0 0-1h-3zm2 5.6V9a.5.5 0 0 1-.5.5H4.5a.5.5 0 0 1 0-1h3V5.6a.5.5 0 1 1 1 0z"/>
                                </svg>
                            </div>
                            <input type="text" id="txtracaPet" name="txtracaPet" class="form-control">
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

  </body>
</html>