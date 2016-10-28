<?php

	session_start();

	if ( isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == true )
		$isAdmin = true;
	else
		$isAdmin = false;

?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Zeszyt</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
	<div class="container">
		<div class="row">
			<ul class="buttons">
				<li id = "openLoginForm"><?php if($isAdmin) echo "Zarządzaj"; else echo "Zaloguj"; ?> <span>></span>
					<div id ="loginForm">
						<div class="loginFormContainer">
							<form action="login.php" method="post">
								<?php if($isAdmin) echo "<ul><li> <a href = 'adminAddWord.php'>Dodaj słowa <span>></span></a> </li>"; else echo '<input type="text" name="login">'; ?>
								<?php if($isAdmin) echo "<li> <a href = 'adminDelWord.php'>Edytuj słowa <span>></span></a> </li></ul>"; else echo '<input type="password" name="password">'; ?>
								<?php if($isAdmin) echo "<a href = 'logout.php' id='logoutBtn'>Wyloguj się <span>></span></a>"; else echo '<button id ="loginBtn">Zaloguj się <span>></span></button>'; ?>
							</form>
						</div>
					</div>
				</li>
				<li id = "soundBtn">Dźwięk 	<span id="onOff">on</span></li>
				<li id = "helpBtn">Pomoc		<span>></span>
					<div id ="helpBox">
						<div class="helpBoxContainer">
							<ul>
								<li><span class="esLetter">í</span> = [i </li>
								<li><span class="esLetter">á</span> = [a </li>
								<li><span class="esLetter">é</span> = [e </li>
								<li><span class="esLetter">ó</span> = [o </li>
								<li><span class="esLetter">ú</span> = [u </li>
								<li><span class="esLetter">ñ</span> = ; </li>
								<li><span class="esLetter">ü</span> = : </li>
								<li><span class="esLetter">¡</span> = [! </li>
								<li><span class="esLetter">¿</span> = [? </li>
							</ul>
						<p>Podawaj zawsze rodzajnik określony przy rzeczowniku. </p>
						</div>
					</div>
				</li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
</header>