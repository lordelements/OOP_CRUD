<?php

class class_update_userdata extends config {
        
    // Update record datauser into registrationform table
    public function updateuserRecord($postData) {
        
        $firstname = $this->conn->real_escape_string($_POST['firstname']);
        $surename = $this->conn->real_escape_string($_POST['surename']);
        $lastname = $this->conn->real_escape_string($_POST['lastname']);
        $username = $this->conn->real_escape_string($_POST['username']);
        $email = $this->conn->real_escape_string($_POST['email']);
        $password = $_POST['password'];
        $usertype = $this->conn->real_escape_string($_POST['usertype']);
        $id = $this->conn->real_escape_string($_POST['id']);

        if (!empty($id) && !empty($postData)) {
            $sql = "UPDATE tbl_users SET 
            `firstname`='$firstname',`surename`='$surename',
            `lastname`='$lastname',username='$username',
            email='$email',password='$password',
            usertype='$usertype' WHERE id = '$id'";
            $result = $this->conn->query($sql);

            if ($result) {
                $_SESSION["alert_msg"] = '<div class="alert alert-success alert-dismissible fade show col-md-12 mb-3" role="alert">
                <strong>Hey!</strong> Record is updated successfully
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                // header("Location: ../admin/update.php");
            }else{
                $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                <strong>Hey!</strong> Woops! Failed to update.!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                // header("Location:../admin/update.php");
            }
        }
        
    }

}

// $fetchdata = new class_update_userdata();