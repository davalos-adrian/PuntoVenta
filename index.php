<?php
	require_once __DIR__ . '/vendor/autoload.php';
	$loader = new \Twig\Loader\FilesystemLoader('./views');
	$twig = new \Twig\Environment($loader, [
	    'cache' => './cache',
	]);

	echo $twig->render('body.html', ['name' => 'John',
									 'title' => 'Registro clientes',
									 'content' => 'clients.html']);
?>
