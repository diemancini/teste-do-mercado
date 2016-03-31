<?php

    include 'insere_busca_dados.php';

	print '<!DOCTYPE html>
		<html lang="en">
		<head>
		  <title>Cadastro de Mercadoria</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="js/jquery.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		</head>
		<body>
	
		<div class="container">
		  <div class="col-md-20 text-center"> 
		    <h2>Selecionar ação</h2> 
		  </div> 
	      <div class="col-md-20 text-center"> 
		    <form class="form-horizontal" method="post" action="index.php" role="form">
              <button type="submit" class="btn btn-success btn-lg btn-block">Formulário</button>  
            </form>
         
            <form class="form-horizontal" method="post" action="busca_banco.php" role="form">
              <button type="submit" class="btn btn-info btn-lg btn-block">Informações</button>  
            </form>   
          </div>   
		</div>
	
		</body>
		</html>';

		#echo "$valores";
?>