<?php
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$waktu_pembayaran = $_POST['waktu_pembayaran'];
$bulan_bayar = $_POST['bulan_bayar'];
$jumlah_bayar = $_POST['jumlah_bayar'];
$status = $_POST['status'];
//koneksi database
$conn = mysql_connect("dbhost","db_user","db_password");
mysql_select_db("absensi_siswa");

$query = "insert into siswa set nis='$nis',nama='$nama', jenis_kelamin='$jenis_kelamin',tgl_lahir='$tglLahir'";
$hasil = mysql_query($query);
if($hasil){
 echo "Data siswa telah disimpan";
}else{
 echo "Error! gagal menyimpan data siswa:".mysql_error();
}
?>[/code]