<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Poliklinik | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url('https://ayosehat.kemkes.go.id/imagex/content/b39e6d8b79bd74609ed45acb2415351c.webp'); background-size: cover; background-position: center;">
    <div class="login-box">
        <div class="card card-outline card-success">
            <div class="card-header text-center">
                <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/index.php" class="h1">Dinus Poliklinik</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Login Pasien</p>
                <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" name="nama">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="No KTP" name="no_ktp">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <?php
                        if (isset($_SESSION['error'])) {
                            echo "<p class='text-danger mt-1 mb-3'>" . $_SESSION['error'] . "</p>";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-success btn-block" name="submit">Login</button>
                        </div>
                    </div>
                </form>
                <?php 
                    include '../../../controllers/pasien/auth.php';
                    login();
                ?>
                <p class="mb-0">
                    <a href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/register-pasien.php" class="text-center">Register a new account</a>
                </p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/js/adminlte.min.js"></script>
</body>
</html>