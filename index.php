<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('./views');
	$GLOBALS['twig'] = new \Twig\Environment($loader, [
	    'cache' => false,
	]);
	session_start();

	if(!isset($_SESSION['username']))
	{
		echo $GLOBALS['twig']->render('login.html');
	} else {
		echo $GLOBALS['twig']->render('body.html', 
									[
										'name' => 'John',
										'title' => 'Registro clientes',
										'content' => 'clients.html',
										'username' => $_SESSION['username']
									]);
	}
?>
