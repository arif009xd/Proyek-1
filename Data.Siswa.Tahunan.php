<? require 'koneksi.php'; ?>



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
                    <li class="active">
                        <a href="Dashboard.Petugas.php">
                            <i class="iconsminds-student-hat"></i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li >
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
                                <li>
                                    <a href="Pages.Data.List.php">
                                        <i class="simple-icon-layers"></i> <span class="d-inline-block">Data
                                            Siswa</span>
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
        </div>
    </div>

    <main>
        <div class="container-fluid disable-text-selection">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2">
                        <h1>Rekap Tahunan</h1>
                        
                        
                    </div>
                    <div class="dropdown d-inline-block">
                        <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Tahun Ajaran
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">2018/2019</a>
                            <a class="dropdown-item" href="Rekap.Tahunan.2020.html">2020/2021</a>
                            
                        </div>
                        
                    </div>
                    <div class="dropdown d-inline-block">
                        
                        <button class="btn btn-outline-primary dropdown-toggle mb-1" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Kelas
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="Rekap.Tahunan.Rpl1.html">XII RPL 1</a>
                            <a class="dropdown-item" href="Rekap.Tahunan.Rpl2.html">XII RPL 2</a>
                            
                        </div>
                        
                    </div>
                    <div class="separator mb-5"></div>
                </div>
            </div>

            <div class="col-xl-12 col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tabel Rekap Data Siswa Tahun 2020/2021</h5>
                        <div style="width:1080px;height:500px;overflow-y:scroll;overflow-x:hidden;">
                            <p style="width:250%;"></p>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">2020/2021</th>
                                    

                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Aldo Renad S.P</td>
                                    <td>5635</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Angela Dewi C.A</td>
                                    <td>5661</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.200.000</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Anissa Alifia P.</td>
                                    <td>5669</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.200.000</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Bagas Raynaldi S.</td>
                                    <td>5696</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                    
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Deta Shakila N.</td>
                                    <td>5727</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.150.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Dicky Risal F.</td>
                                    <td>5746</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.100.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Dina Oktafia</td>
                                    <td>5751</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Dwi Andriyanto</td>
                                    <td>5763</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Dwi Andriyanto</td>
                                    <td>5763</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">10</th>
                                    <td>Febriati Mayori</td>
                                    <td>5805</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.100.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">11</th>
                                    <td>Herlina Kharisma P.</td>
                                    <td>5841</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.200.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">12</th>
                                    <td>Keysha Nabila M.</td>
                                    <td>5884</td>
                                    <td>XII RPL 1</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">13</th>
                                    <td>Mokhamad Tegas</td>
                                    <td>4620</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">14</th>
                                    <td>Nailu Burhanil F.</td>
                                    <td>4093</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.200.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">15</th>
                                    <td>Nova Wulansari</td>
                                    <td>6798</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.150.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">16</th>
                                    <td>Nungki Pratama A.</td>
                                    <td>6004</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">17</th>
                                    <td>Popy Septy A.</td>
                                    <td>6132</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.200.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">18</th>
                                    <td>Reza Aprillia A.</td>
                                    <td>6245</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">19</th>
                                    <td>Rico Tomboti</td>
                                    <td>6345</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">20</th>
                                    <td>Risky Dewa S.</td>
                                    <td>6187</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">21</th>
                                    <td>Riza Adjie W.</td>
                                    <td>6229</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.100.000</td>
                                </tr>
                                <tr>
                                    <th scope="row">22</th>
                                    <td>Sandra Lidya F.</td>
                                    <td>6116</td>
                                    <td>XII RPL 2</td>
                                    <td>Rp.300.000</td>
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