<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

	<title>Zeszyt</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
	<div class="container">
		<div class="row">
			<ul class="buttons">
				<li id = "openLoginForm" tabindex="1">Zaloguj	<span>></span>
					<div id ="loginForm">
					<input type="text">
					<input type="text">
					<button id="loginBtn">Zaloguj się <span>></span></button>
					</div>
				</li>
				<li id = "soundBtn">Dźwięk 	<span id="onOff">on</span></li>
				<li id = "helpBtn">Pomoc		<span>></span></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</header>

<style>

.zeszyt-main{
	background-image: none
}

</style>

<section class="zeszyt-main">
	<div class="container">
		<div class="row">
			<div class="infoBox">
				<div class="infoBoxContainer">
					<p>Dodaj słowa</p>
					<div class="imgBox">
					</div>
				</div>
			</div><!--infoBox-->
			<div class="answersBox">
				<div class="answerBox"><input type="text" id="newWordEs" class="newWord entryField" placeholder="español"></div><!--answerBox-->
				<div class="answerBox"><input type="text" id="newWordPol" class="newWord" placeholder="polskie"></div><!--answerBox-->
				<div class="clearfix"></div>
			</div><!-- /.answersBox -->
			
			<input type="hidden" id="answer_hidden" name="answer_hidden">
	</div>
	<div class="row">
		<ul class="buttons">
			<li><button id="add">Dodaj</button></li>
			<li><button id="clear">Wyczyść</button></li>
			<li><button id="back">Powrót</button></li>
		</ul>						
	</div>
		</div>	<!-- /.row -->
	</div><!-- /.container -->
</section><!-- /#zeszyt-main -->
	
<footer>
	<div class="container">
		<div class="row"></div>
	</div>
</footer>

	<script src="js/admin.js"></script>
	<script src="js/esLetters.js"></script>
</body>
</html>