<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('Location: index.php');
		die();
	} else {
		echo $GLOBALS['twig']->render('body.html', 
									[
										'title' => 'Registro empleados',
										'content' => 'clients.html',
										'username' => $_SESSION['username']
									]);
	}
?>
