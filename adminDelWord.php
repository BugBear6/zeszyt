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

<section class="zeszyt-main admin-main">
	<div class="container">
		<div class="row">
			<div class="infoBox ">
				<div class="infoBoxContainer">
					<p>Wyszukaj, usuń lub edytuj słowa</p>
					<div class = "inputContainer">
						<input type="text" id="wordEs" class="newWord entryField" placeholder="español">
						<input type="text" id="wordPol" class="newWord entryField" placeholder="polskie">
					</div>

					<table id = "resultsTable">
					</table>

				</div>
			</div>
	</div>

	</div>
</section><!-- /#zeszyt-main -->
	
<footer>
	<div class="container">
		<div class="row"></div>
	</div>
</footer>

	<script src="js/delWord.js"></script>
	<script src="js/esLetters.js"></script>
</body>
</html>