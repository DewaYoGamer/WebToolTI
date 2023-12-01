<?php
include 'connect.php';

$idKelas = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbKelas WHERE idKelas='$idKelas'");

if (!$delete) {
    echo "Error: " . mysqli_error($conn);
} else {
    header("Location: ../kelas_table.php");
}
?>