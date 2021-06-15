<?php
    session_start();   
    if((!isset ($_SESSION['usuario'])) and (!isset ($_SESSION['senha']))){
                header('location:logout.php');
        }else{
          $logado = $_SESSION['usuario'];
        }

        $conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');
    
     
?>


<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
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
        .table{
            background: #708090;
        }
        .opcao{
            color: #000;
            font-size: 17px;
            font-weight: 800;
        }
        td,th{
            font-size: 17px;
            color: black;
            font-weight: 500;

        }
        th{
            font-weight: 600; 
            font-size: 18px;
        }
      
    </style>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
        <script type="text/javascript" src="verificacoesJS.js"></script>
        <meta charset="utf-8">
        <title>Listar funcionarios</title>    
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../bootstrap-5.0.0-beta3-dist/css/bootstrap.min.css">
        <link href="bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/css.css">
    
    </head>
    <body id="fundo2">
    <?php
        include_once 'header.php';
    ?>

            <div class="col-sm-9 col-sm-offset-3 col-md-12 col-md-offset-0 main">
            <div class="container">
            <form action="listar_usuario.php"  method="POST" class="form-horizontal">
			<h1 style> Listar Funcionarios</h2>
            <h1 class="page-header"></h1>
            <table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Função</th>
                <th>Telefone</th>
			</tr>
		</thead>
		<tbody>
			<?php 
            
            require ("conexao.php");
           	$conexao = new mysqli("us-cdbr-east-03.cleardb.net", "b93ac2ca02a47f", "4428a355", "heroku_bd928228b7e37d8");
            $query = "SELECT * FROM funcionario order by idFuncionario";
            //$resulta = $conexao->query($query);
            mysqli_query($conexao,$query) or die("Erro ao listar funcionários");
			if ($resulta->num_rows > 0){

                while ( $row = $resulta->fetch_assoc()){            
            
                    echo '<tr>';
                    echo '<td>'. $row['idFuncionario'] .'</td>';
                    echo '<td>'. $row['nomeFuncionario'] .'</td>';
                    echo '<td>'. $row['funcao'] .'</td>';
                    echo '<td>'. $row['telefone'] .'</td>';
                    echo '</tr>';
                }
            }
            ?>
		</tbody>
	</table>
    </form>
    </div>
    </div>
	
    </body>
</html>
