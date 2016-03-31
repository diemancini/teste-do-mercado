<?php

	require 'insere_busca_dados.php';

	print '<!DOCTYPE html>
		<html lang="en">
		<head>
		  <title>Cadastro de Mercadoria</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="css/bootstrap.min.css">
		  <script src="js/jquery.min.js"></script>
		  <script src="js/bootstrap.min.js"></script>
		  <script src="js/validator.js"></script>
		</head>
		<body>
	
		<div class="container">
		  <div class="col-md-20 text-center"> 
		    <h2>Cadastro de Mercadoria</h2>
		  </div>
		  <form class="form-horizontal" data-toggle="validator" method="post" action="seleciona.php" role="form">

		    <div class="form-group">
		      <label for="codigo" class="col-sm-2 control-label">Código da Mercadoria</label>
		      <div class="col-sm-8">
		        <input id="codigo" class="form-control" name="codigo_mercadoria" type="text" data-minlength="10" required>
		        <div class="help-block with-errors"></div>
		      </div>
		    </div>

		    <div class="form-group has-feedback">
		      <label for="tipo" class="col-sm-2 control-label">Tipo da Mercadoria</label>
		      <div class="col-sm-8">
		        <input id="tipo" class="form-control" pattern="^[_A-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]{1,}$" maxlength="20" name="tipo_mercadoria" type="text" required>
		      </div>
		    </div>

		    <div class="form-group has-feedback">
		      <label for="nome" class="col-sm-2 control-label">Nome da Mercadoria</label>
		      <div class="col-sm-8">
		        <input id="nome" class="form-control" maxlength="40" name="nome_mercadoria" type="text" required>
		      </div>
		    </div>

		    <div class="form-group has-feedback">
		      <label for="tn" class="col-sm-2 control-label">Tipo de Negócio</label>
		      <div class="col-sm-8">
		        <input id="tn" class="form-control" pattern="^[_A-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]{1,}$" maxlength="40" name="tipo_negocio" type="text" required>
		      </div>
		    </div>

		    <div class="form-group has-feedback">
		      <label for="quant" class="col-sm-2 control-label">Quantidade</label>
		      <div class="col-sm-8">
		        <input id="quant" class="form-control" pattern="^[_0-9]{1,}$" name="quantidade" type="text" required>
		      </div>
		    </div>

		    <div class="form-group has-feedback">
		      <label for="pc" class="col-sm-2 control-label">Preço</label>
		      <div class="col-sm-8">
		        <input id="pc" class="form-control" pattern="^[_0-9,.]{1,}$" name="preco" type="text" required>
		      </div>
		    </div>

            <div class="form-group col-md-20 text-center"> 
		      <button type="submit" class="btn btn-success">Enviar</button>
		    </div>
		   
		  </form>

		</div>
	
		</body>
		</html>';
?>