<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= isset($title) ? $title : 'Default Title'; ?></title>
  <?php include "plugin_header.php"?>
  <!-- style bantuan -->
  <style>
    .grid-container {
      display: grid;
      grid-template-columns: 50px repeat(6, 1fr);
      padding: 15px;
      background-color: #f8f9fa;
      border: 1px solid #00CF75;
    }

    .grid-item {
      padding: 10px;
      border: 1px solid #dee2e6;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="http://<?= $_SERVER['HTTP_HOST']?>/bk-poliklinik/dist/img/Logo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php include "header.php"?>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= isset($main_title) ? $main_title : ''; ?></h1>
          </div>
          <div class="col-sm-6">
            <?= isset($breadcrumb) ? $breadcrumb : ''; ?>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
      <?= $content; ?>
      </div>
    </section>
  </div>
  <?php include "footer.php"; ?>
</div>
  <?php include "pluginsexport.php"; ?>
  <?= isset($js) ? $js : ''; ?>
</body>
</html>
