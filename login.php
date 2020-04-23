<?php
	include "db_con.php";
	session_start();
	$email = $_POST['email'];
	$password = hash('sha256', $_POST['password']);
	$stmt = $pdo->prepare("
			SELECT *
			FROM employees
			WHERE email = ? AND password = ?");
	$stmt->execute(array($email, $password));
	$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (count($res) > 0) 
	{
		$_SESSION['user_id'] = $res[0]['id'];
		$_SESSION['username'] = $email;
		header("Location: index.php");
	} else {
		header("Location: index.php?login_attempt=1");
	}
	
?>
