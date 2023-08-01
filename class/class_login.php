<?php 
//    session_start();
   class class_login extends config {

        public function loginUser() {
            
            $username = $this->conn->real_escape_string($_POST['username']);
            $password = $this->conn->real_escape_string($_POST['password']);

            $sql = "SELECT * FROM tbl_users WHERE username='$username' AND password='$password' LIMIT 1";
            $user = $this->conn->query($sql);
            
            if (mysqli_num_rows($user) == 1) {  
                $rows  = mysqli_fetch_assoc($user);
                if ($rows['usertype'] == 'administrator') {
                    $_SESSION['user'] = $rows;
                    $_SESSION["alert_msg"] = '<div class="alert alert-success alert-dismissible fade show col-md-12 mb-3" role="alert">
                    <strong>Hey!</strong> Welcome to Admin Dashboard
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header('location: ../admin/index.php');		  
                }
                if ($rows['usertype'] == 'staff') {
                    $_SESSION['user'] = $rows;
                    $_SESSION["alert_msg"] = '<div class="alert alert-success alert-dismissible fade show col-md-12 mb-3" role="alert">
                    <strong>Hey!</strong> Welcome to user dashboard
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header("Location: ../public/index.php");		  
                }
                else if ($rows['usertype'] != 'administrator' || $rows['usertype'] != 'staff'){
                    $_SESSION['user'] = $rows;
                    $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                    <strong>Hey!</strong> Username or Password is Wrong!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    header('location: ./login.php');	  
                }
              
               
            }
        }
    }
    $loguser = new class_login();
?> 