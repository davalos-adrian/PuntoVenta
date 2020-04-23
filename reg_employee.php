<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('./views');
	$twig = new \Twig\Environment($loader, [
	    'cache' => false,
	]);
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location: index.php');
		die();
	} else {
		echo $twig->render('body.html', 
									[
										'title' => 'Registro empleados',
										'content' => 'reg_employee.html',
										'username' => $_SESSION['username']
									]);
	}
?>
