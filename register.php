<?php
include 'koneksi.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama            = $_POST['nama'];
    $nim             = $_POST['nim'];
    $email           = $_POST['email'];
    $alamat          = $_POST['alamat'];
    $no_telp         = $_POST['notelp'];
    $password        = $_POST['password'];
    $level           = 'Mahasiswa';
    $query = "SELECT nim FROM tuser WHERE nim = '$nim'";
    $result = $koneksi->query($query);
    if ($result->num_rows > 0) {
        echo "<script>alert('User telah tersedia');</script>";
    } else {
        $simpan = "INSERT INTO tuser (id, nama, nim, email,alamat, no_telp, password, level) VALUES('','$nama','$nim','$email','$alamat','$no_telp','$password', '$level')";
        $result = mysqli_query($koneksi, $simpan);
        var_dump($result);
        if ($result) {
            echo "<script>alert('Akun berhasil dibuat');document.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Akun gagal dibuat');document.location.href='register.php';</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sign in</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body class="login-page" style="background: url(https://files.diecoding.com/assets/images/pattern/symphony.png) fixed; min-height: 659px;">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <img src="https://sso.uns.ac.id/module.php/uns/img/logo-uns.png" alt="Logo Universitas Sebelas Maret">
                                </div>
                                <div class="card-body">
                                    <h3 class="text-center font-weight">Sign in</h3>

                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label class="small mb-1">Nama Lengkap</label>
                                            <input class="form-control py-4" name="nama" type="text" placeholder="Masukkan Nama Lengkap" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">NIM</label>
                                            <input class="form-control py-4" name="nim" type="text" placeholder="Masukkan NIM" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Email</label>
                                            <input class="form-control py-4" name="email" type="text" placeholder="Masukkan Email" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Alamat</label>
                                            <input class="form-control py-4" name="alamat" type="text" placeholder="Masukkan Alamat" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">No. Telpon</label>
                                            <input class="form-control py-4" name="notelp" type="text" placeholder="Masukkan No Telpon" />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1">Password</label>
                                            <input class="form-control py-4" name="password" type="password" placeholder="Masukkan Password" />
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="login.php">Login</a>
                                            <button class="btn btn-primary" type="submit">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>