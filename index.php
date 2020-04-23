<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('./views');
	$twig = new \Twig\Environment($loader, [
	    'cache' => false,
	]);
	session_start();
	if(!isset($_SESSION['username']))
	{
		$attempt = isset($_GET['login_attempt']) ? $_GET['login_attempt'] : 0;
		echo $twig->render('login.html', ["attempt" => $attempt]);
	} else {
		echo $twig->render('body.html', 
									[
										'title' => 'Inicio',
										'content' => 'clients.html',
										'username' => $_SESSION['username']
									]);
	}
?>
