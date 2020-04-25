<?php

	//$db = parse_url(getenv("DATABASE_URL")); //Using heroku
	$db["host"] = "ec2-18-233-137-77.compute-1.amazonaws.com";
    $db["port"] = "5432";
	$db["user"] = "svlntrlweffegk";
    $db["pass"] = "b0e6579cb85c99254e2b528a5b3c568ee26f5d0b12f8502bde2d522b12a68357";
    $db["path"] = "dcrtf3c10m8sve";
	$pdo = new PDO("pgsql:" . sprintf(
	    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
	    $db["host"],
	    $db["port"],
	    $db["user"],
	    $db["pass"],
	    ltrim($db["path"], "/")
	));

?>