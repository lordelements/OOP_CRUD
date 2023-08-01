<?php 

   class class_register extends config {

        public function registerData() {
            
            $firstname = $_POST['firstname'];
            $surename = $_POST['surename'];
            $lastname = $_POST['lastname'];
            $username = $_POST['username'];
            $emailInput = $_POST['email'];
            $passwordInput = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            $usertype = $_POST['usertype'];

            $email = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
            $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);


            if (!empty($firstname) || !empty($lastname) || !empty($surename) 
            || !empty($email) || !empty($password) || !empty($cpassword)) {
                
                if ($password == $cpassword) {
                    $sql = "SELECT * FROM tbl_users WHERE email='$email'";
                    $result = $this->conn->query($sql);
                    
                    if (!$result->num_rows > 0) {

                        $sql = "INSERT INTO `tbl_users`(`firstname`, `surename`, `lastname`, `username`, `email`, `password`, `usertype`)
                        VALUES ('$firstname', '$surename', '$lastname','$username', '$email', '$password', '$usertype')";
                        $result = $this->conn->query($sql);

                        if ($result) {

                            redirect('./register.php','Your registration is completed successfully');
                            $username = "";
                            $email = "";
                            $_POST['password'] = "";
                            $_POST['cpassword'] = "";

                        } else {

                            redirect('./register.php','Error registration not completed! Please try again.');

                        }
                        
                    }
                     else {

                        redirect('./register.php','Email Already Exist');

                    }
                    
                }
                 else {

                    redirect('./register.php','Password did not match! Please try again.');

                }
                
            } 
            else {

                redirect('./register.php', 'Please fill all input fields');

            }
            
        }
    }
