<?php
	include_once("cone.php");
	$result_resposta = "SELECT * FROM Respostas where idComentarios=idRespostas";
	$resultado_resposta = mysqli_query($conexao, $result_resposta);

	$result_comentario = "SELECT * FROM Comentarios where idComentarios= 1 ";
	$resultado_comentario = mysqli_query($conexao, $result_comentario);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tela</title>
		<link rel="stylesheet" type="text/css" href="Respostas.css">
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	</head>
	<body>
		<img src="cabeçalho.png" class="img">

		
		
		<br><br><br><br>
		<?php while($rows_comentario = mysqli_fetch_assoc($resultado_comentario)){ 
			
			    $id = $rows_comentario['idComentarios'];
			    $nome = $rows_comentario['nome'];
			    $turma =$rows_comentario['turma'];
			    $comentario = $rows_comentario['comentario'];
	 		}
	 	 ?>

	
		<table  class="table">

			<tr class="titulo">
				<th width="50" style="text-align: left; padding-left: 10px; ">#</th>
				<th width="300" style="text-align: left; padding-left: 10px;">Nome</th>
				<th width="200" style="text-align: left; padding-left: 10px;">Turma</th>
				<th width="500" style="text-align: left; padding-left: 10px;">Comentario</th>
			</tr>

			<tr class="titulo">
			<td width="50" style="text-align: left; padding-left: 10px;"><?php echo $id;?></td>
			<td width="300" style="text-align: left; padding-left: 10px;"><?php echo $nome; ?></td>
			<td width="200" style="text-align: left; padding-left: 10px;"><?php echo $turma ?></td>
			<td width="500" style="text-align: left; padding-left: 10px;"><?php echo $comentario ?></td></tr>
			
		</table>
	<br><br><br><br>
	<div>
		<table class="table" >
			<?php
			$id = 0;
			?>
				
			<tr class="titulo">
				<th width="50" style="text-align: left; padding-left: 10px; ">#</th>
				<th width="300" style="text-align: left; padding-left: 10px;">Nome</th>
				<th width="200" style="text-align: left; padding-left: 10px;">Turma</th>
				<th width="500" style="text-align: left; padding-left: 10px;">Resposta</th>
			</tr>


			<?php while($rows_resposta = mysqli_fetch_assoc($resultado_resposta)){ ?>
					
			<tr class="corpo">
				<td width="50" style="text-align: left; padding-left: 10px;"><?php echo $rows_resposta['idRespostas'];?></td>
				<td width="300" style="text-align: left; padding-left: 10px;"><?php echo $rows_resposta['nome']; ?></td>
				<td width="200" style="text-align: left; padding-left: 10px;"><?php echo $rows_resposta['turma']; ?></td>
				<td width="500" style="text-align: left; padding-left: 10px;"><?php echo $rows_resposta['Resposta']; ?></td>
				
			</tr>
			<?php } ?>
			</table>

	
		<div class="rodape">
			<button class="btn1"> <a href="EnviarResposta.php" > Enviar Respostas </a></button>
			<button class="btn2"> <a href="TelaPrincipal.php" >Voltar à Tela Inicial</a> </button>
		
		</div>

		</fieldset>
		</form>
	</div>
	</body>
</html>