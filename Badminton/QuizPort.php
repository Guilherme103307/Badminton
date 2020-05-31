<!DOCTYPE html>
<html>
	<head>
		<title>Tela</title>
		<link rel="stylesheet" type="text/css" href="quiz.css">
		<meta charset="utf-8">
        <meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	</head>
	<body>
		<img src="quiz.png" class="img">
		
		<!--		<input type="button" class="btn1" id="botao" value="Iniciar Quiz" onClick="ativa()"  >
					<br><br><br>
				<div id="div"  style='display:none'>-->
					
					<fieldset class="fscadastro">
						<br><br>
						<div id="menu" style="float: left" >
							<div id="Questao1" 	style='display:none' >
								Questão 1

							</div>
								
						</div>

						<h1>Questões de Badminton</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>A duração de um jogo de badminton é:

</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)45 minutos

 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)Sem hora definida

</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)30 minutos

</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)15 minutos
</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Em que país o esporte de badminton veio?

</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)Grécia

</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)Alemanha

</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)França
 
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)Inglaterra
 </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>O golpe em que a batida é rápida e paralela ao solo é chamado:
 </h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)Driving
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)Lob
 
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)Drop
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) Smash
</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>
                        No badminton, Bird é o nome dado a:
</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)Uma raquete
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)Pássaro

</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)Falta
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)Peteca
</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Quantos jogadores o Badminton joga?

 </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)1 jogador de cada lado do campo
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)2 jogadores de cada lado do campo
 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)As duas alternativas acima
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Nenhuma das opções</label>
                    </div>
                
                </li>
            
            </ol>
            
             <input type="submit" value="Enviar" class="btn1" />
           <a href="Quiz.php" style="color: white">Quiz em inglês!!</a>
		
		</form>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

					</fieldset>

				</div>

				
			


		<!--<script type="text/javascript" src="js/Iniciar.js"></script> -->
		<script type="text/javascript" src="js/CertaErrada.js"></script>
	</body>		
</html>