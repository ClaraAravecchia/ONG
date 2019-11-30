<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link href="css/styles.css" type="text/css" rel="stylesheet" />
	</head>	
	<body>
		<div class="content">
			<header>
				<h1>ONG</h1>
			</header>
			
<?php
	error_reporting(-1);

    ini_set("display_errors", 1); 
    
    include("verificacao.php");

	$c = new CabecalhoHTML();
	$v = array(		
				"cadastro"=>"Cadastrar",		
				"login"=>"Login",
				"veterinario"=>"Veterinário",
				"animal"=>"Animal",
				"raca"=>"Raça",
				"especie"=>"Espécie",
				"consulta"=>"Consulta",
				"doacao"=>"Doação",
				"tipo"=>"Tipo de Doação",
				"historico_atendimento"=>"Histórico de Atendimento",
				"postagem"=>"Postagem",
				"comentario"=>"Comentário",
				"logout"=> "Logout"
				);
				
	$c->add_menu($v);
	$c->exibe();


?>