<?php
  session_start();
  if(isset($_SESSION['username']) && isset($_SESSION['level'])){
    header('location: index.php');
  }else{
    // do nothing
  }
?>
<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Login gagal! Username dan password salah!";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UMT</title>
  <script src="./assets/sweetalert/sweetalert2.min.js"></script>

  <link rel="stylesheet" href="./assets/sweetalert/sweetalert2.min.css">
  <link rel="shortcut icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/id/thumb/0/07/Logo-UMT-Universitas-Muhammadiyah-Tangerang-Original.png/597px-Logo-UMT-Universitas-Muhammadiyah-Tangerang-Original.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <script>
    function simpleAlert(icon, title, text){
      let value_alert = {
        icon: icon,
        title: title,
        text: text
      }
      return Swal.fire(value_alert)
    }
  </script>
  <?php
    if(isset($_SESSION['fail_login'])){
      $fail_login_msg = $_SESSION['fail_login_msg'];

      echo "<script>simpleAlert(`warning`, `Login Gagal`, `$fail_login_msg`)</script>";
      unset($_SESSION['fail_login']);
    }
  ?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden text-bg-light min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="/project_amin/assets/images/logo_pelangi.png" alt="" style="width: 100%;">
                </a>
                <p class="text-center">Login Your Account</p>
                <form method="POST" action="login_function.php">
                  <div class="mb-3">
                    <label for="usernameInput" class="form-label">Username</label>
                    <input type="text" class="form-control" id="usernameInput" name="username" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                  </div>
                  <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="./assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- solar icons -->
  <script src="/project_amin/assets/js/iconify-icon.min.js"></script>
</body>

</html>