<?php
    include("verificacao.php");
?>
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
    
    // permissao:
	// 1: root
	// 2: veterinario
	// 3: usr
	//4: Premium
    

	$c = new CabecalhoHTML();
	
	if(($_SESSION["login"]["permissao"]) == 1){
		$v = array(		
				"cadastro"=>"Cadastrar",	
				"veterinario"=>"Veterinário",
				"animal"=>"Animal",
				"raca"=>"Raça",
				"especie"=>"Espécie",
				"consulta"=>"Consulta",
				"doacao"=>"Doação",
				"tipo"=>"Tipo de Doação",
				"historico_atendimento"=>"Histórico de Atendimento",
				"postagem"=>"Postagem",
				"comentario"=>"Comentário"
				);
	}
	else if($_SESSION["login"]["permissao"] == 2){
		$v = array(			
				"animal"=>"Animal",
				"raca"=>"Raça",
				"especie"=>"Espécie",
				"consulta"=>"Consulta",
				"doacao"=>"Doação",
				"tipo"=>"Tipo de Doação",
				"historico_atendimento"=>"Histórico de Atendimento",
				"postagem"=>"Postagem",
				"comentario"=>"Comentário"
				);
	}
	else{	
		$v = array(							
				"postagem"=>"Postagem",
				"comentario"=>"Comentário"
				);
	}
	
				
	$c->add_menu($v);
	$c->exibe();


?>
