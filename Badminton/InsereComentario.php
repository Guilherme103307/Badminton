<?php
	include_once("cone.php");
	
	$nome=$_POST['nome'];
	$turma=$_POST['turma'];
	$comentario=$_POST['comentario'];
	
	$sql="INSERT INTO comentarios (nome, turma, comentario)VALUES ('".$nome."', '".$turma."', '".$comentario."');";
	mysqli_query($conexao,$sql);

	header("location: Pesquisa.php" )

?>