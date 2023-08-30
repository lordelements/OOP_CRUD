<?php 
     require_once '../private/functions.php';
     session_start();
     error_reporting(0);
     if (isset($_POST['submit'])) {
      $loguser = new class_login();
      $isLogin = $loguser->loginUser();
  }

if (isset($_SESSION['username'])) {
    header("Location: ../admin/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connect Plus</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto mb-5">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="../assets/images/logo-dark.svg">
                </div>
                <h6 class="font-weight-light">Sign in to continue.</h6>
                
                 <!-- alert message -->
                 <?= alertMessage(); ?>

                <form class="pt-3" method="post">
                  <div class="form-group">
                    <label for="InputUsername1" class=" font-weight-medium">Username</label>
                    <input type="text" name="username" class="form-control form-control-lg"
                     id="InputUsername1" placeholder="Your Username here" autocomplete="off" required>
                  </div>
                  <div class="form-group">
                    <label for="InputPassword1" class=" font-weight-medium">Password</label>
                    <input type="password" name="password" class="form-control form-control-lg"
                     id="InputPassword1" placeholder="Your password here" autocomplete="off" required>
                  </div>
                  <div class="mt-3">
                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN IN">
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                    </div>
                    <a href="#" class="auth-link text-black">Forgot password?</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.php" class="text-primary">Create</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>