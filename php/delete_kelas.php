<?php
include 'connect.php';

$idKelas = $_GET['id'];

// Check if there are any students in the class
$check = mysqli_query($conn, "SELECT COUNT(*) as jumlahMahasiswa FROM tbmahasiswa WHERE idKelas='$idKelas'");
$row = mysqli_fetch_assoc($check);

if ($row['jumlahMahasiswa'] > 0) {
    // There are students in the class, so we can't delete it
    echo "<script>alert('Tidak dapat menghapus kelas, Tolong hapus mahasiswa di dalamnya terlebih dahulu!'); window.location.href='../kelas_table.php';</script>";
} else {
    // No students in the class, so we can delete it
    $delete = mysqli_query($conn, "DELETE FROM tbkelas WHERE idKelas='$idKelas'");

    if (!$delete) {
        echo "Error: " . mysqli_error($conn);
    } else {
        header("Location: ../kelas_table.php");
    }
}
?>