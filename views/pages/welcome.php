<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Sistem Temu Janji Poliklinik</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/public/css/welcome_styles.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #00CF75;">
        <div class="container px-5">
            <a class="navbar-brand" href="#">Dinus Poliklinik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5" style="background-color: #029756;"> <!-- Ubah Color Banner disini -->
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center my-5">
                        <h1 class="display-5 fw-bolder text-white mb-2">Selamat Datang di Layanan Poliklinik Terpadu <br>Universitas Dian Nuswantoro</h1>
                        <p class="lead text-white-50 mb-4">Website poliklinik ini bertujuan untuk memberikan kemudahan proses layanan kesehatan </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Features section-->
    <section class="py-5 border-bottom" id="features">
        <div class="container px-5 my-5">
            <div class="row g-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-success bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Admin</h2>
                    <p>Jika Anda seorang Admin, silahkan Login untuk mengelola website!</p>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-admin.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-success bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Dokter</h2>
                    <p>Jika Anda seorang Dokter, silahkan Login untuk melayani Pasien!</p>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-dokter.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="feature bg-success bg-gradient text-white rounded-3 mb-3"><i class="bi bi-person"></i></div>
                    <h2 class="h4 fw-bolder">Login Sebagai Pasien</h2>
                    <p>Jika Anda seorang Pasien, silahkan Login untuk menggunakan layanan kami!</p>
                    <a class="text-decoration-none" href="http://<?= $_SERVER['HTTP_HOST'] ?>/bk-poliklinik/views/pages/auth/login-pasien.php">
                        Klik Link Berikut
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer-->
    <footer class="main-footer px-4 py-2">
        <strong>Copyright ©
            <script>
                document.write(new Date().getFullYear())
            </script>
            <a >Faiz Aulia Rachman</a>.
        </strong>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>