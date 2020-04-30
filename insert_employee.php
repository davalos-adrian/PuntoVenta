<?php
	include "db_con.php";
	session_start();
	$RFC = $_POST['RFC'];
	$email = $_POST['email'];
	$password = hash('sha256', $_POST['password']);
	$active = 1;
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];

	$stmt = $pdo->prepare("
			INSERT INTO employees(id,email,password,active,firstname,lastname,phone,address)
			VALUES(?,?,?,?,?,?,?,?)");
	$result = $stmt->execute(array($RFC, $email, $password, $active, $firstname, $lastname, $phone, $address));
	if ($result) {
		$status = 201;
		$message = "Empleado insertado con exito";
	} else {
		$status = 500;
		$message = "No se pudo completar la solicitud, error en algun campo";
	}
	$response = array
	(
		"status" => $status,
		"message" => $message
	);
	die(json_encode($response));
?>
