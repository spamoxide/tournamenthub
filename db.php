<?php
	// $host = "localhost";
	// $user = "root";
	// $pass = "";
	// $dbname = "tounament";
	$host = "sql208.epizy.com";
	$user = "epiz_25953094";
	$pass = "XzJnAQoLpM";
	$dbname = "epiz_25953094_tournament";

	$conn = mysqli_connect($host, $user, $pass, $dbname);

	if($conn === false)
	{
   		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
?>