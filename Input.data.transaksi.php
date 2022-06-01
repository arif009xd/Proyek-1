<?php require 'koneksi.php'; 

if(isset($_POST['submit']))
{
 $nama =$_POST["Nama"];
 $nis =$_POST["Nis"];
 $kelas =$_POST["Kelas"];
 $waktu_pembayaran =$_POST["Waktu_Pembayaran"];
 $bulan_bayar =$_POST["Bulan_Bayar"];
 $jumlah_bayar =$_POST["Jumlah_Bayar"];
 $status =$_POST["status"];

 // Create connection
// Check connection
 
echo "Connected successfully";
 
$sql = "INSERT INTO data_transaksi VALUES('$nama', '$nis', '$kelas', '$waktu_pembayaran', '$bulan_bayar', '$jumlah_bayar', '$status')";
if (mysqli_query($koneksi, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($koneksi);
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
    <link rel="stylesheet" href="css/vendor/jquery.contextMenu.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="icon" href="logo.ico" type="image/x-icon">
</head>

<body id="app-container" class="menu-default show-spinner" style="background-image:url(img/login/balloon-lg.jpg;">
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
                    <a class="dropdown-item" href="utama.php">Keluar</a>
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
                                <li class="active">
                                    <a href="Pages.Data.List.php">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Data
                                            Siswa</span>
                                    </a>
                                </li>
                                <li >
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
                <ul class="list-unstyled" data-link="menu" id="menuTypes">
                    <li>
                        <a href="#" data-toggle="collapse" data-target="#collapseMenuDetached" aria-expanded="true"
                            aria-controls="collapseMenuDetached" class="rotate-arrow-icon collapsed">
                            <i class="simple-icon-arrow-down"></i> <span class="d-inline-block">Detached</span>
                        </a>
                        <div id="collapseMenuDetached" class="collapse">
                            <ul class="list-unstyled inner-level-menu">
                                <li>
                                    <a href="#">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Sub
                                            Level</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="dont-close-menu">
                            <a href="#">
                                <i class="simple-icon-arrow-right"></i> <span class="d-inline-block">Keep Sub Open</span>
                            </a>
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
                    <div class="mb-3">
                        <h1>Input Data Transaksi</h1>
                        <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb pt-0">
                            </ol>
                        </nav>

                    </div>

                    <div class="mb-2">
                        <a class="btn pt-0 pl-0 d-inline-block d-md-none" data-toggle="collapse" href="#displayOptions"
                            role="button" aria-expanded="true" aria-controls="displayOptions">
                            Display Options
                            <i class="simple-icon-arrow-down align-middle"></i>
                        </a>
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="card-content">
                        <form class="form-horizontal" action="" method="post">
                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <input name="Nama" type="text" class="form-control" id="inp-type-1" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-sm-3 control-label">Nis</label>
                                <div class="col-sm-9">
                                    <input name="Nis" type="text" class="form-control" id="inp-type-2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-sm-3 control-label">Kelas</label>
                                <div class="col-sm-9">
                                <input name="Kelas" type="text" class="form-control" id="inp-type-2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-sm-3 control-label">Waktu Pembayaran</label>
                                <div class="col-sm-9">
                                    <input name="Waktu_Pembayaran" type="date" class="form-control" id="inp-type-2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-sm-3 control-label">Bulan Bayar</label>
                                <div class="col-sm-9">
                                    <input name="Bulan Bayar" type="text" class="form-control" id="inp-type-2" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inp-type-2" class="col-sm-3 control-label">Jumlah Bayar</label>
                                <div class="col-sm-9">
                                    <input name="Jumlah Bayar" type="text" class="form-control" id="inp-type-2" >
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="inp-type-2" class="col-sm-3 control-label">status</label>
                            <div class="col-sm-9">
                                    <select name="status" id="status" class="form-control form-control-lg" required>
                                        <option value = "" selected disabled>Silahkan Pilih </option>
                                        <option value ="Lunas">Lunas</option>
                                        <option value ="Belum Lunas">Belum Lunas</option>
                                    </select>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="text-zero top-left-button-container">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg top-right-button mr-1">Submit</button>
                            </div>
                     
                        </form>
            </div>
        </div>
    </main>
    
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/mousetrap.min.js"></script>
    <script src="js/vendor/jquery.contextMenu.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>