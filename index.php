<? require 'koneksi.php'; ?>



<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran



//Query input menginput data kedalam tabel anggota

//Mengeksekusi/menjalankan query diatas	
if(isset($_POST["simpan"])){
    $nama_lengkap=$_POST['Name'];
    $email=$_POST['Email'];
    $password=md5($_POST['Password']);
     //untuk password digunakan enskripsi md5
    //$sql = "INSERT into anggota values ('$nisn','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp', '$email','$password', '$kota', '$agama')";
    $hasil = mysqli_query($koneksi, "INSERT INTO registrasi  VALUES ('$nama_lengkap','$email','$password')");
    if ($hasil) {
        echo "Berhasil simpan data anggota";
        exit;
    }
    else {
        echo "Gagal simpan data anggota";
        var_dump($hasil);
        exit;
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pembayaran SPP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
        <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
        <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    
        <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
        <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
        <link rel="stylesheet" href="css/vendor/fullcalendar.min.css" />
        <link rel="stylesheet" href="css/vendor/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="css/vendor/datatables.responsive.bootstrap4.min.css" />
        <link rel="stylesheet" href="css/vendor/select2.min.css" />
        <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
        <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
        <link rel="stylesheet" href="css/vendor/bootstrap-stars.css" />
        <link rel="stylesheet" href="css/vendor/nouislider.min.css" />
        <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
        <link rel="stylesheet" href="css/main.css" />
    
        <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
        <link rel="icon" href="logo.ico" type="image/x-icon">
    </head>
    
    <body id="app-container" class="menu-default show-spinner" >
        
            
                <br>
                <br>
                <br>
                <br>
                    <div class="col-12">
                        <a class="navbar-logo" href="#">
                            <span class="logo d-none d-xs-block"></span>
                            <span class="logo-mobile d-block d-xs-none"></span>
                        </a>
                        <br>
                        <center>
                        <p class=" black h1">Selamat Datang !</p>
                        <p class=" green-lime h3">Di web pembayaran SPP TK-Al-Ma`muriyah</p>
                        </center>
                        
                        
                    </div>
                    <br>
                    <br>
                   <center>
                    <div class="col-lg-12 col-xl-50">
                        <div class="icon-cards-row">
                            <div class="glide dashboard-numbers">
                                <div class="glide__track" data-glide-el="track">
                                    <ul class="glide__slides">
                                        
                                        <li class="glide__slide">
                                            <a href="Pages.Auth.Login.Siswa.php" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-student-male-female"></i>
                                                    <p class="card-text mb-0">MASUK SEBAGAI SISWA</p>
                                                    
                                                </div>
                                            </a>
                                        </li>
                                        <li class="glide__slide">
                                            <a href="Pages.Auth.Login.Petugas.php" class="card">
                                                <div class="card-body text-center">
                                                    <i class="iconsminds-consulting"></i>
                                                    <p class="card-text mb-0">MASUK SEBAGAI PETUGAS</p>
                                                    
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </center>
                
                            
    
        <script src="js/vendor/jquery-3.3.1.min.js"></script>
        <script src="js/vendor/bootstrap.bundle.min.js"></script>
        <script src="js/vendor/Chart.bundle.min.js"></script>
        <script src="js/vendor/chartjs-plugin-datalabels.js"></script>
        <script src="js/vendor/moment.min.js"></script>
        <script src="js/vendor/fullcalendar.min.js"></script>
        <script src="js/vendor/datatables.min.js"></script>
        <script src="js/vendor/perfect-scrollbar.min.js"></script>
        <script src="js/vendor/progressbar.min.js"></script>
        <script src="js/vendor/jquery.barrating.min.js"></script>
        <script src="js/vendor/select2.full.js"></script>
        <script src="js/vendor/nouislider.min.js"></script>
        <script src="js/vendor/bootstrap-datepicker.js"></script>
        <script src="js/vendor/Sortable.js"></script>
        <script src="js/vendor/mousetrap.min.js"></script>
        <script src="js/vendor/glide.min.js"></script>
        <script src="js/dore.script.js"></script>
        <script src="js/scripts.js"></script>
    
    </body>
</html>