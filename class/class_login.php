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
                    $_SESSION['username'] = $rows['username'];
                    $_SESSION['password'] = $rows['password'];

                    if ($rows['usertype'] == 'administrator') {
                        $_SESSION['user'] = $rows;
                        
                        redirect('../admin/index.php','Welcome to Admin Dashboard');

                    } if ($rows['usertype'] == 'staff') {
                        $_SESSION['user'] = $rows;
                        
                        redirect('../public/index.php','Welcome to user dashboard');

                    }
                    
                }
                else  {
                    redirect('./login.php','Username or Password is Wrong!');  
                }         
            
        }
    }
