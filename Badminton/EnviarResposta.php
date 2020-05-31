<!DOCTYPE html>
<html>
	<head>
		<title>Enviar Resposta</title>
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="Enviarcomentarios.css">
	
	</head>
	<body> 
		
		<img src="cabeçalho.png" class="img">

		<div class="div2" align="center" border="1">
		<br><br><br>
		
		<form method="post" action="InsereResposta.php">
		<fieldset class="fiel">
			
			<h2> Enviar Resposta</h2>

			
			<label style="float: left;">Nome Completo:</label>
			<br><br>
			<input type="text" id="nome" name="nome"  placeholder="Nome">
			<br><br>
			
			<label style="float: left;" >Turma:</label>
			<br><br>
			<input type="text" id="turma" name="turma"  placeholder="Turma">
			<br><br>
			
			<label style="float: left;" >Resposta:</label>
			<br><br>
			<input class="comentario" id="resposta"  name="resposta" >
			<br><br>

		
				<button class="btn" type="submit">Enviar</button>
				<button class="btn"> <a href="TelaPrincipal.php" >Voltar à Tela Inicial</a> </button>
		
		
		
	</fieldset>
	</form>
	</body>
</html>