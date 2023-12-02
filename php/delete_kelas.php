<?php
include 'connect.php';

$idKelas = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM tbkelas WHERE idkelas='$idKelas'");

if (!$delete) {
    echo "Error: " . mysqli_error($conn);
} else {
    header("Location: ../kelas_table.php");
}
?>