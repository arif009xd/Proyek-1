
<?php
require 'koneksi.php';
$nip = $_GET['nip'];

$query = $koneksi->query("SELECT * FROM user_petugas WHERE nip = '$nip'");

$edit = $query->fetch_assoc();

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
    <link rel="stylesheet" href="css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="logo smk.ico" type="image/x-icon">
    <link rel="icon" href="logo smk.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">
            <a href="#" class="menu-button d-none d-md-block">
                <svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17">
                    <rect x="0.48" y="0.5" width="7" height="1" />
                    <rect x="0.48" y="7.5" width="7" height="1" />
                    <rect x="0.48" y="15.5" width="7" height="1" />
                </svg>
                <svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17">
                    <rect x="1.56" y="0.5" width="16" height="1" />
                    <rect x="1.56" y="7.5" width="16" height="1" />
                    <rect x="1.56" y="15.5" width="16" height="1" />
                </svg>
            </a>

            <a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17">
                    <rect x="0.5" y="0.5" width="25" height="1" />
                    <rect x="0.5" y="7.5" width="25" height="1" />
                    <rect x="0.5" y="15.5" width="25" height="1" />
                </svg>
            </a>

            
        </div>

        <a class="navbar-logo" href="Dashboard.Default.php">
            <span class="logo d-none d-xs-block"></span>
            <span class="logo-mobile d-block d-xs-none"></span>
        </a>

        <div class="navbar-right">
            <div class="header-icons d-inline-block align-middle">
                <div class="d-none d-md-inline-block align-text-bottom mr-3">
                    <div class="custom-switch custom-switch-primary-inverse custom-switch-small pl-1" 
                    data-toggle="tooltip" data-placement="left" title="Dark Mode">
                    <input class="custom-switch-input" id="switchDark" type="checkbox" checked>
                    <label class="custom-switch-btn" for="switchDark"></label>
                </div>
            </div>

            <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                <i class="simple-icon-size-fullscreen"></i>
                <i class="simple-icon-size-actual"></i>
            </button>

        </div>

        <div class="user d-inline-block">
            <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="name">Petugas</span>
                <span>
                    <img alt="Profile Picture" src="foto/<?php echo $edit['foto'] ?>" />
                </span>
            </button>

            <div class="dropdown-menu dropdown-menu-right mt-3">
                <a class="dropdown-item" href="Pages.Profil.php">Akun</a>
                <a class="dropdown-item" href="index.php">Keluar</a>
            </div>
        </div>
    </nav>
    <div class="menu">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                    <li>
                        <a href="Dashboard.Petugas.php">
                            <i class="iconsminds-student-hat"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#layouts">
                            <i class="iconsminds-book"></i> Halaman
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                
                <ul class="list-unstyled" data-link="layouts" id="layouts">
                    
                    <li>
                        <div id="collapseProduct" class="collapse show">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="Pages.Data.List.php">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Data Siswa</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Transaksi.php">
                                        <i class="simple-icon-wallet"></i> <span class="d-inline-block">Transaksi</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="Pages.Profil.php">
                                        <i class="simple-icon-people"></i> <span class="d-inline-block">Profil</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Info.php">
                                        <i class="simple-icon-book-open"></i> <span class="d-inline-block">Info</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <main>
            <div class="container-fluid disable-text-selection">
                <div class="row">
                    <div class="col-12">

                        <div class="mb-3">
                            <h1>Profil</h1>
                        </div>


                        <form method="post" enctype="multipart/form-data">
                            <input type="hidden" name="gambar_lama" value="<?php echo $edit["foto"] ?>">
                            <div class="bg-white shadow rounded-lg  d-sm-flex">
                                <div class="profile-tab-nav border-right">
                                    <div class="p-4">
                                        <div class="img-circle text-center mb-3">
                                            <img src="foto/<?php echo $edit["foto"] ?>" alt="Image" class="shadow">
                                            
                                        </div>
                                        <h4 class="text-center">Petugas</h4>
                                        <br>
                                        <input type="file" name="data">
                                    </div>
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
                                            <i class="fa fa-home text-center mr-1"></i> 
                                            Profil
                                        </a>
                                        <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
                                            <i class="fa fa-key text-center mr-1"></i> 
                                            Password
                                        </a>
                                    </div>
                                </div>
                                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                                        <h3 class="mb-4">Pengaturan Akun</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>NIP</label>
                                                    <input type="text" class="form-control" name="nip" value="<?php echo $edit['nip'] ?> " readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Depan</label>
                                                    <input type="text" class="form-control" name="nama_depan" value="<?php echo $edit['nama_depan'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Belakang</label>
                                                    <input type="text" class="form-control" name="nama_belakang" value="<?php echo $edit['nama_belakang'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $edit['email'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>No.Telepon</label>
                                                    <input type="text" class="form-control"name="no_telepon" value="<?php echo $edit['no_telepon'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sekolah</label>
                                                    <input type="text" class="form-control" name="sekolah" value="<?php echo $edit['sekolah'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <input type="text" class="form-control" name="status" value="<?php echo $edit['status'] ?> ">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Bio</label>
                                                    <textarea class="form-control" rows="4">Kami petugas pembayaran spp TK AL-MA'MURIAH akan membantu siswa dan wali murid dalam pembayaran SPP</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button name="update" type="submit" class="btn btn-primary">Update</button>

                                    </div>
                                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                                        <h3 class="mb-4">Pengaturan Password</h3>
                                        <div class="row">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Password Baru</label>
                                                    <input type="password" class="form-control" name="password_baru">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Konfirmasi Password Baru</label>
                                                    <input type="password" class="form-control" name="konfirmasipassword">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Upload Foto</label>
                                                        <input type="file" class="form-control" name="foto">

                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary" name="update">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['update'])) {

                            $nip = $_POST['nip'];

                            $foto = $_POST["foto"];
                            echo $foto;

                            die();

                            $sql = $koneksi->query("SELECT * FROM user_petugas WHERE nip = '$nip' ");
                            $data = $sql->fetch_array();
                            $fotopetugas = $data['foto'];

                            $nama_depan=$_POST['nama_depan'];
                            $nama_belakang=$_POST['nama_belakang'];
                            $sekolah=$_POST['sekolah'];
                            $email=$_POST['email'];
                            $no_telepon=$_POST['no_telepon'];
                            $bio=$_POST['bio'];
                            $status=$_POST['status'];
                            $password=$_POST['password'];
                            $gambar_lama = $_POST["gambar_lama"];

                            if ($_FILES['foto']['error'] === 4) {
                                $foto = $gambar_lama;
                            } else {
                                
                                if ($fotopetugas != NULL) {
                                    if (file_exists("foto/$gambar_lama")) {
                                        unlink("foto/$gambar_lama");
                                    }
                                }

                                $namafile = $_FILES['foto']['name'];
                                $ukuranfile = $_FILES['foto']['size'];
                                $error = $_FILES['foto']['error'];
                                $tmpname = $_FILES['foto']['tmp_name'];

                                if ($error == 4) { 
                                    echo "<script>alert('Pilih Gambar Dahulu');</script>";
                                    echo "<script>window.location.replace('Pages.Profil.php?nip=$nip');</script>";
                                    exit;
                                }

                                $ekstensiGambarValid = ['jpg','jpeg','png'];
                                $ekstensiGambar = explode('.', $namafile);
                                $ekstensiGambar = strtolower(end($ekstensiGambar));

                                if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
                                    echo "<script>alert('Bukan Gambar');</script>";
                                }
                                if ($ukuranfile > 1000000) {
                                    echo "<script>alert('Ukuran Terlalu besar');</script>";
                                    echo "<script>window.location.replace('Pages.Profil.php?nip=$nip');</script>";
                                    exit;
                                }

                                $namafilebaru = uniqid();
                                $namafilebaru .= '.';
                                $namafilebaru .= $ekstensiGambar;

                            }

                            if (!empty($tmpname)) {
                                move_uploaded_file($tmpname, 'foto/' . $namafilebaru);
                                $query = $koneksi->query("UPDATE user_petugas SET nip = '$nip', nama_depan = '$nama_depan', nama_belakang= '$nama_belakang', email = '$email', no_telepon = '$no_telepon', sekolah= '$sekolah', status= '$status', bio= '$bio', password= '$password' foto = '$namafilebaru' WHERE nip = '$nip' ");
                            } else {
                                $query = $koneksi->query("UPDATE user_petugas SET nip = '$nip', nama_depan = '$nama_depan', nama_belakang= '$nama_belakang', email = '$email', no_telepon = '$no_telepon', sekolah= '$sekolah', status= '$status', bio= '$bio', password= '$password' WHERE nip='$nip'");
                                
                            }

                            
                            if ($query != 0) {
                                echo "<script>alert('Berhasil di Simpan');</script>";
                                echo "<script>window.location.replace('data_petugas.php');</script>";
                                exit;
                            } else {
                                echo "<script>alert('Gagal ditambahkan');</script>";
                                echo "<script>window.location.replace('Pages.Profil.php?nip=$nip');</script>";
                                exit;
                            }
                            
                        }
                        ?>
                    </div>                              
                </section>
                <div class="separator mb-5"></div>
            </div>
        </div>
    </div>
</main>

</div>
</body>
<script src="js/vendor/jquery-3.3.1.min.js"></script>
<script src="js/vendor/bootstrap.bundle.min.js"></script>
<script src="js/vendor/perfect-scrollbar.min.js"></script>
<script src="js/vendor/mousetrap.min.js"></script>
<script src="js/vendor/jquery.contextMenu.min.js"></script>
<script src="js/dore.script.js"></script>
<script src="js/scripts.js"></script>

</html>