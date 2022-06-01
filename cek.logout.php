<?php
session_start();
session_destroy();

echo "<script>alert('Selamat Anda Telah Logout'); window.location='Pages.Auth.Login.Petugas.php'</script>";
exit();
?>