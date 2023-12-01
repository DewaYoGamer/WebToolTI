<?php
	$conn = mysqli_connect("localhost", "yoga","notSHARED.","DataMahasiswaTI");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>