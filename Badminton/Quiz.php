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

						<h1>Badminton Issues</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>The duration of a badminton game is:
</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) 45 minutes
 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) No Set Time 
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) 30 minutes
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) 15 minutes</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>In which country did the Badminton sport come about?
</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) Greece
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) Germany
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) France
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) England </label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>The blow in which the beat is fast and parallel to the ground is called:</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Drive 
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Lob
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Drop
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
                        In badminton,Bird is the name given to:</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) Racket</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) Bird
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Lack</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Shuttlecock</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How many players does Badminton play?
 </h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)1 player on each side of the field</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) 2 players on each side of the field</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)The two alternatives above</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) None of the switches</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="btn1" />
		     <a href="QuizPort.php" style="color: white">Voltar</a>
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