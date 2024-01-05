<<<<<<< HEAD
<div class="content-wrapper">
=======
<div class="content-wrapper" style="background-image: url('https://royalinstituteofnursing.com/wp-content/uploads/2022/05/5-syarat-jawib-kamu-tahu.jpg'); background-size: cover; background-position: center;">
>>>>>>> d0cab92 (revisi uiux)
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Poliklinik BK</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <?php 
                                include "../../../config/connection.php";

                                $query = "SELECT COUNT(*) AS total_obat FROM obat";
                                $result = $connect->query($query);
                                $pasien = $result->fetch_assoc();
                            ?>
                            <h3><?= $pasien['total_obat']  ?></h3>
                            <p>Total Obat</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="<?= $BASE_ADMIN_PAGES . '?page=obat' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>