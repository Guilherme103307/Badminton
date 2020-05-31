<?php
	include_once("cone.php");
	
	$nome=$_POST['nome'];
	$turma=$_POST['turma'];
	$resposta=$_POST['resposta'];
	
	$sql="INSERT INTO Respostas (nome, turma, resposta)VALUES ('".$nome."', '".$turma."', '".$resposta."');";
	mysqli_query($conexao,$sql);

	header("location: Pesquisa.php" )

?>