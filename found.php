<?php
	$reg = $_GET['reg'];

	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "student";
	
	$conn = new mysqli($host, $username, $password, $database);
	if (!$conn) {
		die("Connection failed!");
	}
    
	
	$result = $conn->query("SELECT * FROM details WHERE reg='$reg' LIMIT 1;");
	if ($result->num_rows > 0) {
        // output data of each row
      $row = $result->fetch_assoc();
        //   echo "id: " . $row["reg"]. " - Name: " . $row["name"]. " " . $row["fa"]. "<br>";
        $params = array(
            'type' => 'database',
            'reg' => $reg,
            'name'=>$row["name"],
            'fa' => $row["fa"],
            'roll' => $row["roll"]
        );
        $query_string = http_build_query($params);
        header("Location: success.php?" . $query_string);
      } else {
        $params = array(
            'type' => 'database',
            'reg' => $reg
        );
        $query_string = http_build_query($params);
        header("Location: failure.php?" . $query_string);
        exit();
      }
      $conn->close();
?>