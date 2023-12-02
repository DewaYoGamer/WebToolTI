<?php
	$conn = mysqli_connect("localhost", "root","","datamahasiswati");

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>