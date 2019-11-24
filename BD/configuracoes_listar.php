<?php error_reporting(-1);

    ini_set("display_errors", 1); 

if(isset($_GET["t"])){

	if($_GET["t"]=="login"){
		
		$colunas = array(   "ID_LOGIN as ID",
							"NOME as NOME",
							"ENDERECO as 'ENDEREÇO'",
							"TELEFONE as TELEFONE",
							"EMAIL as 'E-MAIL'"
						);				
				$t[0][0] = "LOGIN";
				$t[0][1] = null;
	}
	
	else if($_GET["t"]=="veterinario"){
		
		$colunas = array(   "ID_VETERINARIO as ID",
							"NOME as NOME",
							"ENDERECO as 'ENDEREÇO'",
							"TELEFONE as TELEFONE",
							"CRV as CRV"
						);				
				$t[0][0] = "VETERINARIO";
				$t[0][1] = null;
	}

	else if($_GET["t"]=="especie"){
		
		$colunas = array(   "ID_ESPECIE as ID",
							"NOME as NOME"
						);				
				$t[0][0] = "ESPECIE";
				$t[0][1] = null;
	}
	
	else if($_GET["t"]=="historico_atendimento"){
		
		$colunas = array(   "ID_HISTORICO_ATENDIMENTO as ID",
							"DATA_ATENDIMENTO as 'DATA DE ATENDIMENTO'",
							"MEDICACAO as 'MEDICAÇÃO'",
							"OBSERVACAO as 'OBSERVAÇÃO'"
						);
				$t[0][0] = "HISTORICO_ATENDIMENTO";
				$t[0][1] = null;
	}
	
	else if($_GET["t"]=="raca"){
		
		$colunas = array(   "ID_RACA as 'ID'",
							"RACA.NOME as 'NOME'",
							"ESPECIE.NOME as 'ESPECIE'"
						);				
				$t[0][0] = "RACA";
				$t[0][1] = "ESPECIE";
			
	}
	
	else if($_GET["t"]=="animal"){
		
		$colunas = array(   "ID_ANIMAL as ID",
							"ANIMAL.NOME as NOME",
							"IDADE as IDADE",
							"OBSERVACAO as 'OBSERVAÇÃO'",
							"RACA.NOME as 'RAÇA'",
							"LOGIN.NOME as 'LOGIN'"
						);
				$t[0][0] = "ANIMAL";
				$t[0][1] = "RACA";
				$t[1][0] = "ANIMAL";
				$t[1][1] = "LOGIN";
	}
	
	else if($_GET["t"]=="postagem"){
		
		$colunas = array(   "ID_POSTAGEM as ID",
							"TEXTO as TEXTO",
							"DATA_POSTAGEM as 'DATA DE POSTAGEM'",
							"ID_LOGIN as 'ID DO LOGIN'"
						);
				$t[0][0] = "POSTAGEM";
				$t[0][1] = null;//"LOGIN";
	}
	else if($_GET["t"]=="consulta"){
		
		$colunas = array(   "ID_CONSULTA as ID",
							"ID_ANIMAL as ANIMAL",
							"ID_VETERINARIO as 'VETERINARIO'",
							"ID_HISTORICO_ATENDIMENTO as 'HISTORICO DE ATENDIMENTO'"
						);
				$t[0][0] = "CONSULTA";
				$t[0][1] = null;//"LOGIN";
	}
	else if($_GET["t"]=="comentario"){
		
		$colunas = array(   "ID_COMENTARIO as ID",
							"TEXTO as CONTEÙDO",
							"DATA_COMENTARIO as 'DATA'",
							"ID_POSTAGEM as 'ID DA POSTAGEM'"
						);
				$t[0][0] = "COMENTARIO";
				$t[0][1] = null;//"LOGIN";
	}
}
?>
