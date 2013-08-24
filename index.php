<!DOCTYPE HTML>
<head>
<!--
HTML Documnet
PHP Quiz Application 1.0.0
Created August 24th, 2013
Created by Valery Y. Samovich
-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="main.css" />
<title>PHP Quiz Application</title>
</head>
<?php
// Error Reporting functions
// error_reporting(E_ALL);
// print_r($_POST);

//Creating random number from 1 to 3
$randomId = rand(1,2);
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

// if random number is 1 display quiz number 1
if ($randomId == 1){
	echo "<form action='process.php?id=1' method='post' id='quizForm' id='1'>
	<ol>
		<li>
        <h3>What does PHP stand for?</h3>
        <div>
        	<input type='radio' name='answerOne' id='answerOne' value='A' />
        	<label for='answerOneA'>A) PHP: Hypertext Preprocessor</label>
       	</div>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='B' />
        	<label for='answerOneB'>B) Personal Hypertext Processor</label>
        </div>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='C' />
        	<label for='answerOneC'>C) Personal Home Page</label>
        </div>
        </li>
		
		<li>
        <h3>The PHP syntax is most similar to:</h3>
        <div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='A' />
        	<label for='answerTwoA'>A) Perl and C</label>
        </div>
		<div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='B' />
        	<label for='answerTwoB'>B) VBScript</label>
        </div>
        <div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='C' />
        	<label for='answerTwoC'>C) JavaScript</label>
        </div>
        </li>
	
        <li>
        <h3>When using the POST method, variables are displayed in the URL?</h3>
		<div>
	  		<input type='radio' name='answerThree' id='answerThree' value='A' />
        	<label for='answerThreeA'>A) True</label>
        </div>
        <div>
        	<input type='radio' name='answerThree' id='answerThree' value='B' />
        	<label for='answerThreeB'>B) False</label>
        </div>
        <div>
        	<input type='radio' name='answerThree' id='answerThree' value='C' />
        	<label for='answerThreeC'>C) Not always</label>
        </div>
    	</li>
    </ol>
	<input type='submit' value='Submit Quiz' />
	</form>";
}
		
// if random number is 2 display quiz number 2
if ($randomId == 2){
	echo "<form action='process.php?id=2' method='post' id='quizForm' id='2'>
	<ol>
		<li>
        <h3>PHP server scripts are surrounded by delimiters, which?</h3>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='A' />
        	<label for='answerOneA'>A) Parentheses</label>
        </div>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='B' />
        	<label for='answerOneB'>B) Angle brackets</label>
        </div>
		<div>
        	<input type='radio' name='answerOne' id='answerOne' value='C' />
        	<label for='answerOneC'>C) Semicolon</label>
		</div>
		</li>
		
		<li>
        <h3>What is the correct way to connect to a MySQL database?</h3>
		<div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='A' />
        	<label for='answerTwoA'>A) mysqli_db(host,username,password,dbname);</label>
       	</div>
		<div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='B' />
        	<label for='answerTwoB'>B) mysqli_connect(host,username,password,dbname);</label>
        </div>
		<div>
        	<input type='radio' name='answerTwo' id='answerTwo' value='C' />
        	<label for='answerTwoC'>C) mysqli_open(host,username,password,dbname);</label>
       	</div>
        </li>
		
        <li>
        <h3>All variables in PHP start with which symbol?</h3>
        <div>
        	<input type='radio' name='answerThree' id='answerThree' value='A' />
        	<label for='answerThreeA'>A) Exclamation mark</label>
        </div>
		<div>
        	<input type='radio' name='answerThree' id='answerThree' value='B' />
        	<label for='answerThreeB'>B) And symbol</label>
        </div>
        <div>
        	<input type='radio' name='answerThree' id='answerThree' value='C' />
        	<label for='answerThreeC'>C) Dollar sign</label>
        </div>
        </li>
	</ol>
    <input type='submit' value='Submit Quiz' />
    </form>";
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
<body>
</body>
</html>
