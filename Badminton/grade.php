<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1 style="text-align: center; font-family: Arial, sans-serif;  ">Result...</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo "<div style='text-align: center; font-family: Arial, sans-serif;' id='results'>$totalCorrect / 5 Points </div>";
            

        ?>

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
	<br><br><br>
		<button
			style="width: 200px;
			margin-left: 450px;
	 		height: 35px;
	   		background-color: #008B8B; border: none;
	 		height: 35px;
	 		color: white; "> 

	 		<a href="Quiz.php" 
	 		style="		text-decoration:none;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 15px;
						color: white; ">Try Again</a>

 		 </button>

		<button style="width: 200px;
	 		height: 35px;
	   		background-color: #008B8B; border: none;
	 		height: 35px;
	 		color: white; ">

	 		 <a href="TelaPrincipal.php"

	 		  style="	text-decoration:none;
						font-family: Arial, Helvetica, sans-serif;
						font-size: 15px;
						color: white; " >Back to Home Screen</a>

	 	 </button>

</body>

</html>