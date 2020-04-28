<?php
	include "db_con.php";
	session_start();
	$RFC = $_POST['RFC'];
	$email = $_POST['email'];
	$password = hash('sha256', $_POST['password']);
	$name = $_POST['name'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$stmt = $pdo->prepare("
			INSERT INTO employees(RFC,email,password,name,lastname,phone,address)
			VALUES(?,?,?,?,?,?,?)");
	$result = $stmt->execute(array($RFC, $email, $password, $name, $lastname, $phone, $address));
	if ($result) {
		$status = 201;
		$message = "Empleado insertado con exito";
	} else {
		$status = 500;
		$message = "Error";
	}
	$response = array
	(
		"status" => $status,
		"message" => $message;
	)
	die(json_encode($response));
?>
