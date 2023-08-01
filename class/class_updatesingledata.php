<?php
    // session_start();
    class class_updatesingledata extends config {
        
        // fetch single datauser for edit into database
            public function fetchSingleuserById() {
                $id=$_GET['userid'];
                $sql = "SELECT * FROM tbl_users WHERE id=$id";
                $result = $this->conn->query($sql);
                if ($result->num_rows == 1) {
                $row = mysqli_fetch_assoc($result);
                return $row;
                    }
                    else{
                        $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                        <strong>Woops!</strong> Record not found!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                        header("location:../admin/update.php");
                    }
            }
    }
    // $fetchdata = new class_updatesingledata();