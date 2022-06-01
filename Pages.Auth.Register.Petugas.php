

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
    <link rel="stylesheet" href="css/vendor/bootstrap-float-label.min.css" />
    <link rel="stylesheet" href="css/main.css" />

    <link rel="shortcut icon" href="logo.ico" type="image/x-icon">
    <link rel="icon" href="logo.ico" type="image/x-icon">
</head>
<body class="background show-spinner no-footer">
<?php
//Include file koneksi ke database
include "koneksi.php";
//menerima nilai dari kiriman form pendaftaran
//Query input menginput data kedalam tabel anggota

//Mengeksekusi/menjalankan query diatas	
if(isset($_POST["simpan"])){
    $nama_lengkap=$_POST['Name'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
     //untuk password digunakan enskripsi md5
    //$sql = "INSERT into anggota values ('$nisn','$nama_lengkap','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$no_hp', '$email','$password', '$kota', '$agama')";
    // $query = "INSERT INTO registrasi_petugas VALUES ('".$nama_lengkap."','".$email."','".$password."')"; 
    $hasil = mysqli_query($koneksi, "INSERT INTO registrasi_petugas VALUES ('$nama_lengkap','$email','$password')");
    if ($hasil) {
        echo "<script>alert('selamat akun sudah di buat'); window.location='Pages.Auth.Login.Petugas.php'</script>";

        exit;
    } 
    else {
        echo "Gagal simpan data anggota";
        // var_dump($hasil);
        // exit;
    }  
} ?>
    <div class="fixed-background"></div>
    <main>
        <form action="" method="post">
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 pt-5 mx-auto my-auto">
                    <div class="card auth-card my-5">
                        <div class="position-relative image-side ">
                            <p class=" text-black h2">Pembayaran SPP TK Al Ma`muriyah</p>
                            <p class="black mb-0">
                                Membantu Siswa Dalam Pembayaran SPP online.
                                <br>Jika sudah daftar,
                                <a href="Pages.Auth.Login.Siswa.html" class="green">disini</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.php">
                            </a>
                            <h6 class="mb-4">Daftar</h6>

                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" name="Name"/>
                                    <span>Name</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" name="Email"/>
                                    <span>E-mail</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" name="Password" placeholder="" />
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-lg btn-shadow" name="simpan" type="submit">DAFTAR</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </main>
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body>

<!-- <body class="background show-spinner no-footer">
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">
                            <p class=" text-black h2">Pembayaran SPP TK Al-Ma`muriyah</p>
                            <p class="black mb-0">
                                Membantu Siswa Dalam Pembayaran SPP online.
                                <br>Jika sudah daftar, masuk
                                <a href="Pages.Auth.Login.Petugas.php" class="blue">disini</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.php">
                                <span class="logo-single"></span>
                            </a>
                            <h6 class="mb-4">Daftar</h6>

                            <form>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" name="Name" />
                                    <span>Name</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" name="Email" />
                                    <span>E-mail</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" name="Password" placeholder="" />
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button class="btn btn-primary btn-lg btn-shadow" name="simpan" type="submit">DAFTAR</button>
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
    <script src="js/dore.script.js"></script>
    <script src="js/scripts.js"></script>
</body> -->

</html>