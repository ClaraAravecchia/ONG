<?php error_reporting(-1);

    ini_set("display_errors", 1);
    
	require_once("conexao.php");
	
	require_once("classeControllerBD.php");
	

	$c = new ControllerBD($conexao);

	$FK = $_POST['FK'];

	$sql = "SELECT COMENTARIO.TEXTO 
FROM COMENTARIO WHERE COMENTARIO.ID_POSTAGEM= $FK";
	
	$stmt = $conexao->prepare($sql);
			
	$stmt->execute();
	
	$divs = "";

	while($linha=$stmt->fetch(PDO::FETCH_ASSOC)){
		$divs .= "<div class='MeuDiv' style='background-color:orange;'>
	 			<p>".$linha["TEXTO"]."</p>
			 </div>";	
	}
   echo $divs;
?>
