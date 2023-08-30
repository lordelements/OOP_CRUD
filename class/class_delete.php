<?php
// session_start();
class class_delete extends config {
    
     // delete datauser into database
     public function deleteuser($deluserid) {
        // $id=$_GET['id'];
        $sql = "DELETE FROM tbl_users WHERE id='$deluserid'";
        $result = $this->conn->query($sql);
        return $result;
      }
}
$del = new class_delete();