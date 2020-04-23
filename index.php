<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('./views');
	$GLOBALS['twig'] = new \Twig\Environment($loader, [
	    'cache' => false,
	]);
	session_start();
	if(!isset($_SESSION['username']))
	{
		$attempt = isset($_GET['login_attempt']) ? $_GET['login_attempt'] : 0
		echo $GLOBALS['twig']->render('login.html', ["attempt" => $attempt]);
	} else {
		echo $GLOBALS['twig']->render('body.html', 
									[
										'title' => 'Registro clientes',
										'content' => 'clients.html',
										'username' => $_SESSION['username']
									]);
	}
?>
