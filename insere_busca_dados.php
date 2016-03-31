<?php

	function pg_connection_string() {
	  return "dbname=d5e5tubpc4tf11 host=ec2-54-225-112-119.compute-1.amazonaws.com port=5432 user=wvgngbyuidzwvy password=HLVpFrwbsycT9wF0yvm2QuofAB sslmode=require";
	}

	function gravar_banco($val) {
		$con = pg_connect(pg_connection_string());
	    if ($con) {
	    	pg_query($con, "INSERT INTO teste_mercado values (". $val . ")");  
	  	}
	}

	function busca_banco() {
		$resultado = "";
		$con = pg_connect(pg_connection_string());
	    if ($con) {
	        $resultado = pg_query($con, "SELECT codigo_mercadoria, tipo_mercadoria,
	      								        nome_mercadoria, quantidade,
	      								        preco, tipo_negocio FROM teste_mercado"); 
	  	}
	  	return $resultado;
	}

	$valores = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$valores .= $_POST["codigo_mercadoria"];
        $valores .= ", '". $_POST["tipo_mercadoria"] ."'";
		$valores .= ", '". $_POST["nome_mercadoria"] ."'";
		$valores .= ", ". $_POST["quantidade"];
		$valores .= ", ". $_POST["preco"];
		$valores .= ", '". $_POST["tipo_negocio"] ."'";
	}

	#echo "$valores";

	gravar_banco($valores);
?>
