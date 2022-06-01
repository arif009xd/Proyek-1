<?php
include 'koneksi.php';

if (isset($_GET['No'])) {
    $id = $_GET['No'];

    $query = mysqli_query($koneksi, "SELECT * FROM data_siswa");

    $queryDelete = "DELETE FROM data_siswa WHERE No = '$id'";

    if(mysqli_query($koneksi, $queryDelete)) {
        echo "<script>alert('data berhasil di hapus'); window.location='Pages.Data.List.php'</script>";
    }else{
        echo "<script>alert('data gagal di hapus'); window.location='Pages.Data.List.php'</script>";
    }
}