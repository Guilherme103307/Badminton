<?php
	include_once("cone.php");
	$result_comentario = "SELECT * FROM Comentarios";
	$resultado_comentario = mysqli_query($conexao, $result_comentario);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Tela</title>
		<link rel="stylesheet" type="text/css" href="pesquisa.css">
		<link rel="stylesheet" type="text/css" href="Comentario.css">
		<meta charset="utf-8">
		<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	</head>
	<body>
		<img src="cabeçalho.png" class="img">
		<div class="corpo">
			<br><br>
			<h1 style="font-weight: normal;"> Badminton, O que é?</h1>
			<br>

				 <div style="float: left; display: inline;">
				 	
					<div class="texto">
					 	 &nbsp;  &nbsp; &nbsp;

						Badminton é um esporte dinâmico praticado entre dois ou quatro jogadores. Ainda que seja semelhante ao tênis, que usa raquetes e está dividido por uma rede, ele possui suas peculiaridades.
						<br> 	 &nbsp;  &nbsp; &nbsp;
						Ao invés de uma bola, ele é jogado com uma espécie de peteca, chamada de volante ou birdie. Ao contrário do que se possa imaginar, ela atinge velocidade superior a de uma bola de tênis, podendo chegar até 300 km/h.
						<br> 	 &nbsp;  &nbsp; &nbsp;
						Essa modalidade exige um grande treinamento físico por parte dos atletas e envolve agilidade, coordenação e reflexo. Ela é praticada por homens, mulheres e crianças, sendo considerado o esporte de raquete mais rápido do mundo.
							<h1 style="font-weight: normal;">História</h1>
							 &nbsp;  &nbsp; &nbsp;

						Esse esporte não tem uma origem precisa, mas acredita-se que o badminton teve início na Índia com o nome poona. Oficiais ingleses que trabalhavam no país, gostaram do jogo e o levaram para a Europa, em meados do século XIX. 
						<br> 	 &nbsp;  &nbsp; &nbsp;
						No território inglês, o poona adquiriu o nome badminton. A teoria para a nova denominação justifica-se porque, supostamente, o esporte foi jogado pela primeira vez na Badminton House, território que pertencia ao Duque de Beaufort's. 
						<br> 	 &nbsp;  &nbsp; &nbsp;
						O badminton começou a se popularizar na Inglaterra e passou a ser necessário a padronização de regras.

						</div>

					<div  style="float: right; display: inline;">
						<img src="jogador.jpg" style=" height: 500px;">

					</div>
					<div class="texto2">

					
						 Em 1875, alguns oficiais fundaram um clube de badminton na cidade de Folkstone. Uma das normas definiu que os jogos deveriam ser praticados entre dois ou quatro adversários. 
						 <br> 	 &nbsp;  &nbsp; &nbsp;
						Da Inglaterra, o esporte foi levado para outros países da Europa e, consequentemente, Ásia e América. No ano 1934 foi criada a International Badminton Federation (IBF) – em português, Federação Internacional de Badmninton-, que atualmente se chama Federação Mundial de Badminton (BWF). 
						<br> 	 &nbsp;  &nbsp; &nbsp;
						Nove países fundaram a IBF: Inglaterra, Escócia, Holanda, País de Gales, Dinamarca, Canadá, França, Irlanda e Nova Zelândia. A Índia juntou-se à Federação pouco tempo depois, em 1936. 
						<br><br>
					</div>

				</div>

			<h1 style="font-weight: normal;">Benefícios do badminton: </h1>
	
			 
			 	• Ajuda a definir os músculos;
			 	<br> 
				• Fortalece o sistema imunológico; 
				<br> 
				• Reduz o estresse e a ansiedade; 
				<br> 
				• Previne a osteoporose;
				<br> 
				• Reduz o colesterol ruim e aumenta o bom;
				<br> 
				• Desperta o espírito de competição saudável;
				<br> 
				• Combate o sedentarismo;
				<br> 
				• Auxilia no desenvolvimento de habilidades (reflexo, inteligência e produtividade).
				<br> 

			<h1 style="font-weight: normal;">Fundamentos: </h1>
			
				<div class="texto3">
					 &nbsp;  &nbsp; &nbsp;
					O badminton está baseado em movimentos de saque e defesa. A quadra de badminton é dividida por uma rede que está cerca de 1,55 metros do solo.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Uma partida de badminton possui três sets de 21 pontos cada. Vence o jogo quem fizer dois sets primeiro.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Jogado com raquete e peteca, ganha ponto quem deixar a peteca tocar no espaço adversário. Portanto, o importante é não deixar a peteca tocar no chão.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Geralmente a peteca é feita com penas de ganso e pesa entre pesando entre 4 a 5 gramas. Entretanto, ela pode ser feita de nylon.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Já a raquete de Badminton pesa cerca de 100 gramas. Ainda que sejam leves, elas são feitas de material muito resistente.
					<br><br><br><br><br>

				</div>

				<div  style="float: right; display: inline;">
						<img src="raquete.png" >
						<br><br><br><br><br>
				</div>

				
			<h1 style="font-weight: normal;">Quadra de Badminton: </h1>
			
					 &nbsp;  &nbsp; &nbsp;
				A quadra de badminton varia em dimensões consoante o número de jogadores (individual ou pares), medindo 13,4 metros em comprimento e 5,18 metros em largura se for singulares, e 6,10 metros se for em duplas.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				O campo é dividido em dois por uma rede, sendo ela feita com uma corda fina e tendo uma lona branca de 7,5 centímetros de largura na parte superior em todo o seu comprimento, medindo 76 centímetros e estando a cerca de 1,55 metros do solo.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				As linhas exteriores nos lados marcam a largura do campo de pares e as interiores marcam para individuais. No fundo do campo tem uma linha um pouco mais curta, esta marca o limite do campo de pares quando é feito o serviço (após a equipa adversário devolver o seu serviço, o campo volta a ter o comprimento normal).
				<br> 	 &nbsp;  &nbsp; &nbsp;
				Você também pode ver na imagem abaixo, que a 1,98m da rede está uma linha que demarca o inicio da zona de serviço. Essa área de serviço corresponde à área que você tem para fazer o serviço, e na qual deve cair o serviço (se você fizer um serviço curto e o volante cair na zona antes da área de serviço você perde a jogada e o adversário ganha um ponto).
				<br><br><br>

				<img src="quadra.jpg" style="margin-left: 300px;">

				<br><br><br>

				<div>
				<div class="texto4">
					<h1 style="font-weight: normal;" > Jogadores: </h1>
			
					 &nbsp;  &nbsp; &nbsp;
					O Badminton pode ser praticado entre 2 jogadores adversários (modalidade simples) ou entre 4 jogadores (modalidade duplas), sendo 2 de cada equipe. No início, o juiz lança uma moeda no ar e por meio da cara ou coroa ele indica qual time irá começar.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Com o saque inicial o jogo se desenvolve com diversos movimentos de ataque e defesa. É importante que a peteca não ultrapasse as linhas da quadra. O primeiro set termina com 21 pontos. Entre ele, o segundo e o terceiro set há um intervalo.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					No jogo de badminton, é considerado falta se o jogador encostar na rede, a peteca encostar no corpo ou ocorrer invasão do espaço adversário. Não é permitido dar dois toques consecutivos na peteca no mesmo lado da quadra.
					<br><br><br><br><br><br>

				</div>

				<div class="texto5">
					<h1 style="font-weight: normal;" > Regras do Badminton: </h1>
			
			     	 &nbsp;  &nbsp; &nbsp;
					As regras do badminton são simples e não existem assim tantas. Vamos agora referir algumas que são mais comuns.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Serviço: O serviço deve sempre ser feito na diagonal, e se não for feito desse jeito, o adversário ganha o ponto.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Tocar na Rede: Se você toca na rede quando estiver a jogar e o toque for substancial com o corpo ou raquete, é considerado falta e o adversário ganha o ponto.
					<br> 	 &nbsp;  &nbsp; &nbsp;
					Servir do lado errado: Como já foi dito, o lado do serviço depende do seu número de pontos. Se o fizer do lado errado, é automaticamente falta e ponto para o adversário, caso ele não dê sequência à jogada.

						<br><br><br><br><br><br>
					</div>

				</div>


			<h1 style="font-weight: normal;" > Principais golpes (batidas): </h1>
			
				 &nbsp;  &nbsp; &nbsp;
				- Drop shot: batida curta em que a peteca (volante) cai junto à rede.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				- Lob: batida forte e longa em que a peteca encobre o jogador adversário.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				- Drive: batida rápida e paralela ao chão. Nesta jogada a peteca passa bem rente à rede.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				 - Smash: parecida com a cortada do Voleibol. É uma batida rápida e forte na peteca, na direção de cima para baixo.
				 <br><br>



			<h1 style="font-weight: normal;" > Serviço: </h1>
			
				 &nbsp;  &nbsp; &nbsp;
				O serviço deve ser feito na área de serviço (ver abaixo na imagem quadra de Badminton), e se o seu número de pontos for par, tem de fazer o lado direito, se for ímpar, tem de fazer do lado esquerdo. 
				<br>  &nbsp;  &nbsp; &nbsp;
				O serviço tem que ser sempre feito na diagonal (se você serve na área de serviço direita, tem que mandar para a área direita do seu adversário), sendo que se cair fora dessa área, o seu adversário ganha o ponto.
				<br> 	 &nbsp;  &nbsp; &nbsp;
				Normalmente os serviços são alternados entre dois tipos: longo e curto:
				<br><br> 	 &nbsp;  &nbsp; &nbsp;
	           -Serviço curto: Posicionar o seu pé esquerdo à frente (se você for destro), e no movimento de balançar a raquete, fazer rápido e abrandar apenas quando estiver quase a servir para confundir o adversário.
	           <br><br>	 &nbsp;  &nbsp; &nbsp;
	           -Serviço longo:  Fazer o mesmo que no curto em posicionamento, e no movimento da raquete deve fazer um lançamento forte e rápido como um chicote e sendo alto e largo para o fundo do campo adversário, tendo atenção para que ele não caia fora.




			<h1 style="font-weight: normal;" >Juízes: </h1>
			
				 &nbsp;  &nbsp; &nbsp;
				O jogo de badminton tem cerca de 12 juízes, sendo eles separados por funções:
				-Árbitro Geral: Este é auxiliado pelos restantes juízes e é o que tem a palavra final quanto a decisões relativas ao cumprimento das regras durante o jogo.
				<br><br> 	 &nbsp;  &nbsp; &nbsp;
				-Juiz de Linha: Num jogo estão presentes 10 juízes de linha, sendo eles responsáveis por ver se a peteca cai fora do limite do campo e também avisar o árbitro geral de alguma infração nas regras.
				<br><br> 	 &nbsp;  &nbsp; &nbsp;
				-Juiz de Serviço: O juiz de serviço tem como única finalidade observar o momento do serviço para ver se é executado corretamente e se são cumpridas todas as regras por ambos os jogadores.

			<h1 style="font-weight: normal;" >Penalizações: </h1>
			
				<br> 	 &nbsp;  &nbsp; &nbsp;
				Dentro da partida, algumas situações são consideradas "falta":
				<br><br>
				<br>  &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				1) se o atleta, a raquete ou a roupa encostar na rede durante o jogo; 
					<br><br>  &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				2) se a peteca tocar o jogador, a roupa, o teto ou os arredores da quadra; 
					<br><br>   &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				3) se a peteca cair fora dos limites da quadra; 
					<br><br>   &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				4) se o jogador acertar a peteca no lado do adversário; 
					<br><br>   &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				5) se a peteca for tocada duas vezes por um jogado ou dupla; 
					<br><br>   &nbsp;  &nbsp; &nbsp;    &nbsp; &nbsp; &nbsp; 
				6) se houver interferência da peteca ou comportamentos inadequados, o jogador perde o saque ou o adversário pontua; 
					<br><br>   &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				7) se o recebedor não receber o serviço, mas sim o seu parceiro; 
					<br><br>   &nbsp;  &nbsp; &nbsp;	&nbsp;  &nbsp; &nbsp;
				8) se o servidor fazer a jogada e errar.

		
			    <h1 style="font-weight: normal;" >Equipamentos: </h1>

			   <img src="equi.jpg"  style="float:right; width: 400px; margin-left: 50px" >
			
				&nbsp;  &nbsp; &nbsp;
				• Peteca: pode ser feita com penas de ganso ou sintéticas (nylon), o peso varia entre 4g e 6g. Em outros países, a peteca pode ser denominada de pluma, volante, bird ou shuttlecock; 
				<br><br>  &nbsp;  &nbsp; &nbsp;
				• Raquete: esse é o principal equipamento do esporte e a sua escolha é fundamental para alcançar um bom resultado na partida. Quanto ao material da raquete pode ser alumínio, aço ou grafite;
				<br><br>  &nbsp;  &nbsp; &nbsp; 
				• Quadra e rede: a quadra é o local onde é realizado o jogo. Ela possui um formato retangular, com cerca de 13m de comprimento por 6m de largura. Já a rede fica a uma distância de 1,52m do chão e centralizada na quadra; 
				<br><br>  &nbsp;  &nbsp; &nbsp;
				• Uniforme: em competições o uniforme oficial é indispensável. A recomendação é que a camisa tenha o nome ou o sobrenome do atleta e escudo do país que está representando.
				<br><br>     &nbsp;  &nbsp; &nbsp;
				A prática do badminton também necessita de outros equipamentos:
				<br><br>  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; 
				• Tênis: devem ser confortáveis, acolchoados e flexíveis; 
				<br><br>  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  
				• Cotoveleiras, tornozeleiras e joelheiras: esses equipamentos são utilizados para proteger parcialmente as articulações; 
				<br><br>  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; 
				• Bolsa de badminton: serve para proteger a raquete e peteca, além de carregar toalhas, camisetas e  materiais de higiene;
				<br><br>  &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;
				• Óculos: pouco utilizado em competições, os atletas usam óculos com um Equipamento de Proteção Individual (EPI).
				<br><br><br><br><br>
			

				


			<h1 style="font-weight: normal;" >Competições de badminton: </h1>
			
			    &nbsp;  &nbsp; &nbsp;
				• BWF Thomas Cup: também chamado de World Men’s Team Championships é uma competição internacional de equipes masculinas; 
				<br><br>  &nbsp;  &nbsp; &nbsp;
				• BWF Uber Cup: competição internacional de equipes femininas; 
				<br><br>  &nbsp;  &nbsp; &nbsp;
				• BWF Sudirman Cup: competição internacional com equipes mistas;
				<br><br>  &nbsp;  &nbsp; &nbsp; 
				• Yonex Gran Prix de Badminton: competição internacional;
				<br><br>  &nbsp;  &nbsp; &nbsp;
				• Campeonato Brasileiro de Badminton: competição nacional.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				Nos Jogos Olímpicos, o badminton começou a ser disputado em 1992, na edição de Barcelona. Nas Olimpíadas, o Brasil disputou pela primeira vez em 2016, no Rio de Janeiro, mas não conseguiu ganhar medalhas. Confira abaixo o quadro geral:
				<br><br>

				<img src="olimpiadas.png" style="margin-left: 80px;">

				<br><br>


			<h1 style="font-weight: normal;" >Curiosidades do Badminton: </h1>
		
				&nbsp;  &nbsp; &nbsp;
				O badminton, com mais de 2000 anos de história, é um dos esportes mais praticados do planeta. Parte dos Jogos Olímpicos desde 1992, em Barcelona, a modalidade vem crescendo ao redor do mundo, mas ainda é dominada pelos países asiáticos, como China, Coreia do Sul e Indonésia.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				1) Em competições internacionais, o tapete de PVC onde os jogadores atuam pode chegar a custar R$50.000,00!
				<br><br>  &nbsp;  &nbsp; &nbsp;
				2) A velocidade da peteca chega a ultrapassar os 300km/h! É o esporte de raquete mais rápido do mundo.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				3) A força da peteca é tão grande, que ela pôde furar algo.
				<br><br>  &nbsp;  &nbsp; &nbsp; 
				4) As petecas profissionais são feitas de 16 penas da asa esquerda do ganso! Isso porque o animal dorme sobre a asa direita, prejudicando o formato das penas.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				5) No passado as cordas das raquetes eram feitas a partir do estômago de gatos.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				6) As raquetes são superleves. Modelos profissionais pesam em torno de 70 gramas. Já as petecas pesam cerca de 5 gramas.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				7) O badminton: tem um árbitro geral, vendo a partida de cima; um de serviço, controlando o saque; e até dez juízes de linha, conferindo (ou pelo menos, tentando) a trajetória da peteca.
				<br><br>  &nbsp;  &nbsp; &nbsp;
				8) Não tem descanso para os atletas. Enquanto no tênis, por exemplo, a bola fica em jogo durante cerca de 8% do tempo total da partida, no badminton a peteca vai para lá e para cá por 45% do tempo da partida!
				<br><br>  &nbsp;  &nbsp; &nbsp;
				9) O esporte faz muito bem para a saúde: coração, músculos e tensão agradecem!
				<br><br>  &nbsp;  &nbsp; &nbsp;
				10) O badminton é super fácil de ensinar na aula de Educação Física.
				<br><br> 

				<h1 style="font-weight: normal;" >Comentários: </h1>

		</div>


	<div>
		<table class="table" >
			<?php
			$id = 0;
			?>
				
			<tr class="titulo">
				<th width="50" style="text-align: left; padding-left: 10px; ">#</th>
				<th width="300" style="text-align: left; padding-left: 10px;">Nome</th>
				<th width="200" style="text-align: left; padding-left: 10px;">Turma</th>
				<th width="500" style="text-align: left; padding-left: 10px;">Comentário</th>
			</tr>
					<?php while($rows_comentario = mysqli_fetch_assoc($resultado_comentario)){ ?>
					
			<?php
				$id = $id + 1;
			?>

			<tr class="corpo">
				<td width="50" style="text-align: left; padding-left: 10px;"><?php echo $id;?></td>
				<td width="300" style="text-align: left; padding-left: 10px;"><?php echo $rows_comentario['nome']; ?></td>
				<td width="200" style="text-align: left; padding-left: 10px;"><?php echo $rows_comentario['turma']; ?></td>
				<td width="500" style="text-align: left; padding-left: 10px;"><?php echo $rows_comentario['comentario']; ?></td>
				<td>
					<button class="btn"> <a href="Respostas.php" >Ver Respostas</button>
				</td>
			</tr>
			<?php } ?>
			</table>


		<div class="rodape">
			<button class="btn1"> <a href="EnviarComentarios.php" > Enviar Comentários </a></button>
			<button class="btn2"> <a href="TelaPrincipal.php" >Voltar à Tela Inicial</a> </button>
			<button class="btn2"> <a href="vivencia.php">Vivencia</a>  </button>
		
		</div>

		</fieldset>
		</form>
	</div>
	<script type="text/javascript" src="js/galeria.js"></script>
	</body>
</html>