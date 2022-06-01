<?php require 'koneksi.php'; 

$sql = mysqli_query($koneksi , "SELECT * FROM user_petugas");

if (isset($_POST['update'])) {
    $nama_depan=$_POST['nama_depan'];
    $nama_belakang=$_POST['nama_belakang'];
    $sekolah=$_POST['sekolah'];
    $email=$_POST['email'];
    $notelpon=$_POST['no.telpon'];
    $bio=$_POST['bio'];
    $status=$_POST['status'];
    $password=$_POST['password'];


    $namafile = $_FILES['foto']['name'];
    $ukuranfile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

        if ($error == 4) { // 4 adalah jumlah dari error
            echo "<script>alert('Pilih Gambar Dahulu');</script>";
            echo "<script>window.location.replace('Pages.Profil.php');</script>";
            exit;
        }

        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namafile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));

        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>alert('Bukan Gambar');</script>";
            echo "<script>window.location.replace('Pages.Profil.php');</script>";
            exit;
        }
        if ($ukuranfile > 1000000) {
            echo "<script>alert('Ukuran Terlalu besar');</script>";
            echo "<script>window.location.replace('Pages.Profil.php');</script>";
            exit;
        }

        // gambar siap di upload
        // generate nama gambar baru
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensiGambar;

        move_uploaded_file($tmpname, 'foto/' . $namafilebaru);

        $query = $koneksi->query("INSERT INTO user_petugas VALUES('$nama_depan', '$nama_blakang' ,'$email','$no_telpon','$sekolah','$status', '$bio', '$password', '$namafilebaru')");

        if ($query != 0) {
            echo "<script>alert('berhasil ditambahkan');</script>";
            echo "<script>window.location.replace('Pages.Profil.php');</script>";
            exit;
        } else {
            echo "<script>alert('gagal ditambahkan');</script>";
            echo "<script>window.location.replace('Pages.Profil.php');</script>";
            exit;
        }
    }
    ?>

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran Spp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="font/iconsmind-s/css/iconsminds.css" />
    <link rel="stylesheet" href="font/simple-line-icons/css/simple-line-icons.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap.rtl.only.min.css" />
    <link rel="stylesheet" href="css/vendor/bootstrap-datepicker3.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="icon" href="logo.ico" type="image/x-icon">
</head>

<body id="app-container" class="menu-default show-spinner vertical boxed">
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

        <a class="navbar-logo" href="Dashboard.Default.html">
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

                <div class="position-relative d-none d-sm-inline-block">
                    
                </div>

                <div class="position-relative d-inline-block">
                    
                </div>

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline-block">
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name">Petugas</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-1.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="Pages.Profil.php">Akun</a>
                    <a class="dropdown-item" href="index.php">Keluar</a>
                </div>
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
                            <i class="iconsminds-book"></i>Halaman
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
                                <li class="active">
                                    <a href="Pages.Data.List.php">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Data
                                            Petugas</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="Pages.Transaksi.php">
                                        <i class="simple-icon-wallet"></i> <span class="d-inline-block">Transaksi</span>
                                    </a>
                                </li>
                                <li>
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
                    

                            </ul>
                        </div>
                    </li>
                </ul>
                
                
            </div>
        </div>
    </div>

    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Data Petugas</h1>
                        <div class="top-right-button-container" >
                            <a  href="tambah_data_petugas.php">
                            <button class="btn btn-primary btn-lg top-right-button mr-1"type="button"> + TAMBAH DATA</button>
                            </a>
                        </div>
                    </div>

                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                        <div class="collapse dont-collapse-sm" id="displayOptions">
                            
                            <div class="d-block d-md-inline-block">
                                <div class="btn-group float-md-left mr-1 mb-1">
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Data Petugas</h5>
                        <div style="width:1080px;height:500px;overflow-y:scroll;overflow-x:hidden;">
                            <p style="width:250%;"></p> 

                        <table class="table table-bordered">
                            <thead align="center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Depan</th>
                                    <th scope="col">Nama Belakang</th>
                                    <th scope="col">Sekolah</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">No telepon</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Bio</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Aksi</th>


                                </tr>
                            </thead>
                            <tbody align="center">
                                <tr>
                                    <?php
                                    $num = 1;
                                     while($data = mysqli_fetch_assoc($sql)) :
                                     ?>
                                     <tbody>
                                         <tr>
                                             <td><?=$num++?></td>
                                             <td><?=$data['nama_depan']?></td>
                                             <td><?=$data['nama_belakang']?></td>
                                             <td><?=$data['email']?></td>
                                             <td><?=$data['no_telepon']?></td>
                                             <td><?=$data['sekolah']?></td>
                                             <td><?=$data['status']?></td>
                                             <td><?=$data['bio']?></td>
                                             <td><?=$data['password']?></td>
                                             <td>
                                                    <a class="btn btn-primary" href="Pages.Profil.php?nip=<?php echo $data['nip'];?>">Edit</a>
                                                    <a class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus');" href="delete_datalist.php?No=<?php echo $data['no'];?>">Hapus</a>
                                             </td>
                                </tr>
                                </tbody>
                                <?php endwhile; ?>
                                     </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
    
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/jquery.contextMenu.min.js"></script>
    <script src="js/vendor/bootstrap-datepicker.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>