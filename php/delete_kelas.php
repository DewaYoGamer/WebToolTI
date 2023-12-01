<?php
include 'connect.php';

$idKelas = $_GET['id'];

// Check if there are any students in the class
$check = mysqli_query($conn, "SELECT * FROM tbmahasiswa WHERE idKelas='$idKelas'");
if (mysqli_num_rows($check) > 0) {
    // There are students in the class, show an error message
    echo "<script>alert('Data tidak bisa dihapus karena ada mahasiswa!'); window.location.href='../kelas_table.php';</script>";
} else {
    // There are no students in the class, delete it
    $delete = mysqli_query($conn, "DELETE FROM tbkelas WHERE idKelas='$idKelas'");
    if (!$delete) {
        echo "Error: " . mysqli_error($conn);
    } else {
        header("Location: ../kelas_table.php");
    }
}
?>