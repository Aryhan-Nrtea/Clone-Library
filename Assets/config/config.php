<?php 
    //define credentials
    $host = "localhost";
    $database = "e_library";
    $user = "root";
    $pass = "";

    //connecttion query
	$conn = new mysqli($host, $user, $pass, $database);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 ?>