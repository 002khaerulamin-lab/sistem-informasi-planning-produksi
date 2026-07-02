<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <script src="/project_amin/assets/sweetalert/sweetalert2.min.js"></script>

  <link rel="stylesheet" href="/project_amin/assets/sweetalert/sweetalert2.min.css">
  <link rel="shortcut icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/id/thumb/0/07/Logo-UMT-Universitas-Muhammadiyah-Tangerang-Original.png/597px-Logo-UMT-Universitas-Muhammadiyah-Tangerang-Original.png" />
  <link rel="stylesheet" href="/project_amin/assets/css/styles.min.css" />
  <?= $__style ?>
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">

    <!-- Sidebar Start -->
    <?php
      include 'sidebar.php';
    ?>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        <?php
          include 'header.php';
        ?>
      <!--  Header End -->

      <div class="body-wrapper-inner">
        <div class="container-fluid">
            <?= $__body ?>
        </div>
      </div>
    </div>
  </div>
  <script src="/project_amin/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="/project_amin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/project_amin/assets/js/sidebarmenu.js"></script>
  <script src="/project_amin/assets/js/app.min.js"></script>
  <script src="/project_amin/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="/project_amin/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="/project_amin/assets/js/dashboard.js"></script>
  <!-- solar icons -->
  <script src="/project_amin/assets/js/iconify-icon.min.js"></script>
</body>

</html>