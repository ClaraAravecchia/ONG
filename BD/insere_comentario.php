<?php

	require_once("../classeForm/classeInput.php");
	require_once("../classeForm/classeForm.php");
	require_once("../classeForm/classeButton.php");

	date_default_timezone_set('America/Sao_Paulo');
	$ID = $_POST['ID_POSTAGEM'];

	$v = array("action"=>"insere.php?tabela=comentario","method"=>"post");
	$f = new Form($v);
	
	$v = array("type"=>"text","name"=>"ID_COMENTARIO","placeholder"=>"ID DO COMENTARIO", "value"=>null);
	$f->add_input($v);

	
	$v = array("type"=>"textarea","name"=>"TEXTO","placeholder"=>"TEXTO...", "value"=>null);
	$f->add_input($v);
	
	$v = array("type"=>"hidden","name"=>"DATA_COMENTARIO", "value"=>date("Y-m-d"));
	$f->add_input($v);
	
	$v = array("type"=>"hidden", "name"=>"ID_POSTAGEM", "value"=>$ID);
	$f->add_input($v);
	
	
	$v = array("type"=>"button","class"=>"cadastra_comentario","texto"=>"ENVIAR");
	$f->add_button($v);	
	
	$html = $f->exibe();
	echo $html;	
?>