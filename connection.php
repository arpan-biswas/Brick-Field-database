<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'brick';

	$conn = new mysqli($dbhost,$dbuser,$dbpass,$db);

	if ($conn->connect_error) {
		die("Connection Failed: ". $conn->connect_error);
	}
?>