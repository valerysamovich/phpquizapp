<!DOCTYPE HTML>
<html>
<head>
<!--
HTML Documnet
PHP Quiz Application 1.0.0
Created August 24th, 2013
Created by Valery Y. Samovich
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP Quiz Application</title>
<link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>
<?php
// Error Reporting functions
// error_reporting(E_ALL);
// print_r($_POST);

	$quizId = $_GET['id'];
?>
<!--Wrapper-->
<div id = 'wrapper'>

<!--Header-->
<header>
	<p>Quiz Application</p>
</header>
<!--End of the header-->

<!--Section-->
<section>
<?php
// Error Reporting functions
// error_reporting(E_ALL);
// print_r($_POST);

if($quizId == 1){
	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
	$score = 0;
	
	if ($answer1 == "A"){$score++;}
	if ($answer2 == "A"){$score++;}
	if ($answer3 == "B"){$score++;}
	echo "<p id='score'>Your Score is $score of 3</p>";
}
?>
<?php
if($quizId == 2){
	$answer1 = $_POST['answerOne'];
	$answer2 = $_POST['answerTwo'];
	$answer3 = $_POST['answerThree'];
	$score = 0;
	
	if ($answer1 == "B"){$score++;}
	if ($answer2 == "B"){$score++;}
	if ($answer3 == "C"){$score++;}
	echo "<p id='score'>Your Score is $score of 3</p>";
}
?>
</section>
<!--End of the section-->

<!--Footer-->
<footer>
	<p>&copy; <?php require ("functions.php"); showDate(); ?> Quiz App | <a href="http://www.linkedin.com/pub/valery-samovich/22/81/1bb/" id="developer" title="Discover more info about developer">Valery Samovich</a></p>
</footer>
<!--End of the footer-->

</div>
<!--End of the wrapper-->
</body>
</html>