<?php 

class class_view extends config {
    
        // Fetching data into database to Display
        public function view($viewuserid){
            $id=$_GET['viewuserid'];
            $sql = "SELECT firstname, surename, lastname, username, password, usertype FROM tbl_users WHERE  id=$id";
            $result = $this->conn->query($sql);
            if ($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result)){
                    $record[] = $row;
                   
                }
                return $record;
            }
         }
}
// $data = new class_view();