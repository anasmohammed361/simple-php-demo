<?php
	$name = $_GET['name'];
	$reg = $_GET['reg'];
	$roll = $_GET['roll'];
	$fa  = $_GET['fa'];
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "student";
	
	$conn = new mysqli($host, $username, $password, $database);
	if (!$conn) {
		die("Connection failed!");
	}
	$params = array(
		'name' => $name,
		'reg' => $reg,
	);
	$query_string = http_build_query($params);
	
	$result = $conn->query("INSERT INTO details VALUES('$reg', '$name', '$roll','$fa');");
	if ($result === TRUE) {
		echo "pok";
		header("Location: success.php?" . $query_string);
		exit();
	} else {
		echo "nmo";
		header("Location: failure.php?" . $query_string);
		exit();
	}
?>