<?php error_reporting(-1);

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
