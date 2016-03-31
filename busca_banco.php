<?php	

	require 'insere_busca_dados.php';

	print '<!DOCTYPE html>
				<html lang="en">
				<head>
				  <title>Informações sobre Operações</title>
				  <meta charset="utf-8">
				  <meta name="viewport" content="width=device-width, initial-scale=1">
				  <link rel="stylesheet" href="css/bootstrap.min.css">
				  <script src="js/jquery.min.js"></script>
				  <script src="js/bootstrap.min.js"></script>
				</head>
				<body>
		
				<div class="container">
				  <div class="col-md-20 text-center"> 
				    <h2>Informações sobre Operações</h2>
				  </div>
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Código da Mercadoria</th>
				        <th>Tipo da Mercadoria</th>
				        <th>Nome da Mercadoria</th>
				        <th>quantidade</th>
				        <th>Preço</th>
				        <th>Nome de Negócio</th>
				      </tr>
				    </thead>';

	print '<tbody>';

	$resultado = busca_banco();
	while ($row = pg_fetch_row( $resultado )) {
		print      '<tr>
					  <td>'.$row[0].'</td>
					  <td>'.$row[1].'</td>
					  <td>'.$row[2].'</td>
					  <td>'.$row[3].'</td>
					  <td>'.$row[4].'</td>
					  <td>'.$row[5].'</td>
					</tr>';
	}

	print '
			    </tbody>
		      </table>
		      <div class="col-md-20 text-center"> 
		        <form class="form-horizontal" method="post" action="seleciona.php" role="form">
                  <button type="submit" class="btn btn-success btn-lg">Selecionar Operaçao</button>  
                </form>
              </div>
		    </div>
			
	      </body>
	      </html>';

?>