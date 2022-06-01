<? require 'koneksi.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Pembayaran SPP SMKN 12 Malang</title>
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
    <div class="fixed-background"></div>
    <main>
        <div class="container">
            <div class="row h-100">
                <div class="col-12 col-md-10 mx-auto my-auto">
                    <div class="card auth-card">
                        <div class="position-relative image-side ">
                            <p class=" text-white h2">Pembayaran TK Al-ma`muriyah</p>
                            <p class="white mb-0">
                                Membantu Siswa Dalam Pembayaran SPP online.
                                <br>Jika sudah daftar, masuk   
                                <a href="Pages.Auth.Login.php" class="blues">disini</a>.
                            </p>
                        </div>
                        <div class="form-side">
                            <a href="Dashboard.Default.php">
                                <span class="logo-single"></span>
                            </a>
                            <h6 class="mb-4">Daftar</h6>

                            <form>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" />
                                    <span>Name</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" />
                                    <span>E-mail</span>
                                </label>
                                <label class="form-group has-float-label mb-4">
                                    <input class="form-control" type="password" placeholder="" />
                                    <span>Password</span>
                                </label>
                                <div class="d-flex justify-content-end align-items-center">
                                    <button class="btn btn-primary btn-lg btn-shadow" type="submit">DAFTAR</button>
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
</body>

</html>