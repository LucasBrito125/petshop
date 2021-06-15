<?php 
  $conexao= mysqli_connect('us-cdbr-east-03.cleardb.com','b93ac2ca02a47f','4428a355','heroku_bd928228b7e37d8') or die('Erro ao conectar ao banco de dados');

    $idEspecie = $_REQUEST['Especie'];

    $query = mysqli_query($conexao, "SELECT idRaca, idEspecie, nomeRaca FROM raca where idEspecie = $idEspecie order by nomeRaca");

    while ( $row = mysqli_fetch_array($query) ){
        $html[] = array(
			    'idRaca'	=> $row['idRaca'],
			    'nomeRaca' => utf8_encode($row['nomeRaca']),
		);
    }
    echo(json_encode($html));
?>
