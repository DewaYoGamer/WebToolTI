<?php
	$conn = mysqli_connect("localhost", "yoga","notSHARED.","datamahasiswati");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>