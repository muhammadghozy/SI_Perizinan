<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>
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

<body class="login-page" style="background: url(https://sso.uns.ac.id/module.php/uns/img/symphony.png) fixed; min-height: 659px;">
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <img src="https://sso.uns.ac.id/module.php/uns/img/logo-uns.png" alt="Logo Universitas Sebelas Maret">
                        </div>
                        <div class="card-body">
                            <h3 class="text-center font-weight">Login</h3>

                            <form method="POST" action="cek_login.php">
                                <div class="form-group">
                                    <label class="small mb-1">NIM / NIP</label>
                                    <input class="form-control py-4" name="nim" type="text" placeholder="NIM/NIP" />
                                </div>
                                <div class="form-group">
                                    <label class="small mb-1">Password</label>
                                    <input class="form-control py-4" name="password" type="password" placeholder="Password" />
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <a class="small" href="register.php">Sign up</a>
                                    <button class="btn btn-primary" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>