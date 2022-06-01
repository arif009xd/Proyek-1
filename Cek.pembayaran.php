<? require 'koneksi.php'; ?>
<?php
    session_start();
    if (empty($_SESSION["email"])) {
        header("location:Pages.Auth.Login.Siswa.php");
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
    <link rel="stylesheet" href="css/vendor/component-custom-switch.min.css" />
    <link rel="stylesheet" href="css/vendor/glide.core.min.css" />
    <link rel="stylesheet" href="css/vendor/perfect-scrollbar.css" />
    <link rel="stylesheet" href="css/vendor/baguetteBox.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="logo smk.ico" type="image/x-icon">
    <link rel="icon" href="logo smk.ico" type="image/x-icon">
</head>

<body id="app-container" class="menu-default show-spinner">
    <nav class="navbar fixed-top">
        <div class="d-flex align-items-center navbar-left">

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
                    <span class="name">Angela Dewi Citra A.</span>
                    <span>
                        <img alt="Profile Picture" src="img/profiles/l-4.jpg" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="Cek.pembayaran.php">Beranda</a>
                    <a class="dropdown-item" href="Profilsiswa.php">Akun</a>
                    <a class="dropdown-item" href="cek.logout.siswa.php">Keluar</a>
                </div>
            </div>
        </div>
    </nav>

    
    <br>
    </br>
    <br>
    </br>
    <br>
    </br>
    <br>
    </br>
    
        <div class="row mb-3">
            <div class="col-lg-6 col-md-10 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Informasi Siswa</h5>
                        <table class="table">
                        <thead>
                                                                
                        </thead>
                        <tbody>
                                                                        
                        <tr>
                            <th scope="row">Tahun Ajaran : <b>2022/2023</b></th>
                        </tr>
                        <tr>
                            <th scope="row">Nama         : </th>
                        </tr>
                        <tr>
                            <th scope="row">NIS          : </th>
                        </tr>
                        <tr>
                            <th scope="row">Kelas        : </th>
                        </tr>
                        <tr>
                            <th scope="row">Status       : </th>
                        </tr>
                        <center>
                        <tr>
                            <img src="img/profiles/l-4.jpg" alt="Image" align="bottom" style="width:100px;height:100px;">
                        </tr>
                        </center>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            

                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div style="text-align:right;">
                            <a href="Tagihan.Pembayaran.Siswa.php">
                                    <button type="button" class="btn btn-primary btn0-lg top-right-button mr-2">Cetak Bukti Pembayaran</button></a>
                                </div>
                            <h5 class="card-title">Tagihan Bulanan</h5>

                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Bulan-Tahun</th>
                                        <th scope="col">Tagihan</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Juli-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Agustus-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>September-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Oktober-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>November-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Desember-2022</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Januari-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Februari-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: green"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Maret-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: red"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>April-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: red"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>Mei-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: red"></span></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Juni-2023</td>
                                        <td>Rp.20.000</td>
                                        <td><span style="color: red"></span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
            
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/perfect-scrollbar.min.js"></script>
    <script src="js/vendor/baguetteBox.min.js"></script>
    <script src="js/vendor/glide.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>