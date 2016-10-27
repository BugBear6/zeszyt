<?php

session_start();

$login = htmlentities($_POST['login']);
$password = htmlentities($_POST['password']);

if ($login == 'admin' && $password = 'admin'){
	$_SESSION['isAdmin'] = true;
	header('Location: adminAddWord.php');
} else 
	$_SESSION['isAdmin'] = false;
	header('Location: index.php');

	header ('Location: adminAddWord.php');

