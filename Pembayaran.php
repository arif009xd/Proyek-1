<? require 'koneksi.php'; ?>

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
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Data
                                            Siswa</span>
                                    </a>
                                </li>
                                <li class="active">
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
                    <div class="mb-3">
                        <h1>Transaksi Pembayaran</h1>
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

            <div class="card mb-4">
                <div class="card-body">
                    <center>
                    <h5 class="mb-4"><b>Cari NISN</b></h5>

                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-sm-4">
                            <div class="input-group typeahead-container">
                                <input type="text" class="form-control typeahead" name="query" id="query"
                                    placeholder="Cari..." data-provide="typeahead"
                                    autocomplete="off">
                                <div class="input-group-append ">
                                    <a href="Pembayaran.html">
                                    <button type="submit" class="btn btn-primary default">
                                        <i class="simple-icon-magnifier"></i>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    </center>
                </div>
            </div>

            <div class="row">
                        <div class="col-12 col-xl-9 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                            <h5 ><b>Informasi Siswa</b></h5>
                            <table class="table">
                            <thead>
                                                                    
                            </thead>
                            <tbody>

                            <br>
                            <br>                                                
                            <tr>
                                <th scope="row">Tahun Ajaran : 2021/2022</th>
                            </tr>
                            <tr>
                                <th scope="row">Nama         : Angela Dewi C.A</th>
                            </tr>
                            <tr>
                                <th scope="row">NIS          : 5661</th>
                            </tr>
                            <tr>
                                <th scope="row">Kelas        : XII RPL 1</th>
                            </tr>
                            <tr>
                                <th scope="row">Status       : Aktif</th>
                            </tr>
    
                            </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-3 mb-4">
                            <div class="card h-60">
                                <div class="card-body">
                                    <img src="img/profiles/l-4.jpg" alt="Image" align="bottom" style="width:200px;height:280px;">
                                    <br>
                                    <br>
                                    <input type="file" accept="image/*"/>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">

                     <h5 ><b>Transaksi Pembayaran</b></h5>
                     <div style="width:1080px;height:160px;overflow-y:hidden;overflow-x:scroll;">
                        <p style="width:250%;"></p>
                            <table class="table">
                                <thead class="thead-light" align="center">
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Juli</th>
                                        <th scope="col">Agustus</th>
                                        <th scope="col">September</th>
                                        <th scope="col">Oktober</th>
                                        <th scope="col">November</th>
                                        <th scope="col">Desember</th>
                                        <th scope="col">Januari</th>
                                        <th scope="col">Februari</th>
                                        <th scope="col">Maret</th>
                                        <th scope="col">April</th>
                                        <th scope="col">Mei</th>
                                        <th scope="col">Juni</th>

                                        
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td scope="row">1</td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-success default mb-1">RP.25.000</button></a>
                                        </td>
                                        <td><button type="button" class="btn btn-success default mb-1">RP.25.000</button></td>
                                        <td><button type="button" class="btn btn-success default mb-1">RP.25.000</button></td>
                                        <td><button type="button" class="btn btn-success default mb-1">RP.25.000</button></td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>

                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>
                                        <td><a href="Pages.Button.Pembayaran.php">
                                            <button type="button" class="btn btn-danger default mb-1">Rp.0</button></a>
                                        </td>

                                        
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </div>
            
            <div class="row mb-4">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 ><b>Transaksi Terakhir</b></h5>

                            <table class="table">
                                <thead class="thead-light" align="center">
                                    <tr>
                                        <th scope="col">Pembayaran</th>
                                        <th scope="col">Tagihan</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <tr>
                                        <td scope="row">Pembayaran SPP-Juli 2020 s/d Oktober 2020</td>
                                        <td>Rp.100.000</td>
                                        <td>1 Juli 2021</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            

            
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5><b>Cetak Bukti Pembayaran</b></h5>

                            <form>
                                <div class="form-group col-md-7">
                                    <label for="inputBulan">Tanggal</label>
                                    <input type="date" class="form-control" id="inputBulan">
                                    <a href="Pembayaran.html">
                                
                                <a href="Bukti.Pembayaran.Petugas.html">
                                    <br>
                                    <button type="button" class="btn btn-primary btn0-lg top-right-button mr-5">Cetak</button></a>
                                
                            </div>
                            

                            </form>
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
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>