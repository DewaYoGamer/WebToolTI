<?php
	$conn = mysqli_connect("localhost", "root","","DataMahasiswaTI");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>