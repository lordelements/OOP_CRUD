<?php
// session_start();
class class_updatesingledata extends config
{
    public function fetchSingleuserById($userid) // fetch single datauser for edit into database
    {
        // $userid=$_GET['userid'];
        $sql = "SELECT * FROM tbl_users WHERE id=$userid";
        $result = $this->conn->query($sql);
        if ($result->num_rows == 1) {
            $row = mysqli_fetch_assoc($result);
            return $row;
        } else {
            $_SESSION["alert_msg"] = '<div class="alert alert-danger alert-dismissible fade show col-md-12 mb-3" role="alert">
                <strong>Woops!</strong> Record not found!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
            header("location:../admin/update.php");
        }
    }
}
