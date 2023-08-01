<?php 
     require_once '../private/functions.php';
     
    if (isset($_POST['submit'])) {
      $data = new class_register();
      $insT = $data->registerData();
      var_dump($insT);
    }

?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Create Account</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">

        <link rel="stylesheet" href="../assets/css/style.css">
        <!-- End layout styles -->
        <!-- <link rel="shortcut icon" href="../assets/images/favicon.png" /> -->
      </head>
      <body>

        <div class="container-sm mt-4">
        
            <div class="card-sm shadow p-3 mb-3 bg-body rounded">
            
              <div class="card-body">
                  <!-- alert message -->
                  <?= alertMessage(); ?>

                  <h4 class="card-title mb-3">Create Account</h4>
                    <form class="row" actions="" method="post">
                        <div class="col-md-4 mb-4">
                            <label for="updateInputFirstname" class="form-label">First Name</label>
                            <input type="text" class="form-control form-control-sm"
                                name="firstname" id="InputFirstname" 
                                placeholder="Your Firstname" autocomplete="off">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="updateInputSurename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control form-control-sm"
                                name="surename" id="InputSurename"
                                placeholder="Your Middlename" autocomplete="off">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="updateInputLastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control form-control-sm"
                                name="lastname" id="InputLastname" 
                                placeholder="Your Lastname" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="updateInputLastname" class="form-label">Username</label>
                            <input type="text" class="form-control form-control-sm"
                                name="username" id="InputUsername" 
                                placeholder="Your Username" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="updateInputLastname" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-sm"
                                name="email" id="InputEmail1"
                                placeholder="Email" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="updateInputLastname" class="form-label">Password</label>
                            <input type="password" class="form-control form-control-sm" 
                            name="password" id="InputPassword1" 
                            placeholder="Password" autocomplete="off">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="updateInputLastname" class="form-label">Confrim Your Password</label>
                            <input type="password" class="form-control form-control-sm"
                            name="cpassword" id="InputPassword1" 
                            placeholder="Confrim Password" autocomplete="off">
                        </div>
                        <div class="col-md-12 mb-3">
                            <input id="usertype" class="form-control form-control-sm"
                            type="hidden" name="usertype" value="staff"/>
                        </div>
                      <div class="mb-4">
                        <div class="form-check">
                          <label class="form-check-label text-muted">
                            <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <input type="submit" name="submit" class="btn btn-block btn-primary btn-lg " value="SIGN UP">
                      </div>
                      <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
                      </div>
                    </form>
              </div>

            </div>
          
        </div>
        
              
        <!-- plugins:js -->
        <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- inject:js -->
        <script src="../assets/js/off-canvas.js"></script>
        <script src="../assets/js/hoverable-collapse.js"></script>
        <script src="../assets/js/misc.js"></script>
        <!-- endinject -->
      </body>
    </html>