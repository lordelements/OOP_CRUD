<?php 

class class_display extends config {
    
        // Fetching data into database to Display
        public function display_userlist(){
            $sql = "SELECT * FROM tbl_users ORDER BY id DESC";
            $result = $this->conn->query($sql);
            if ($result->num_rows>0) {
                while ($row = mysqli_fetch_assoc($result)){
                    $record[] = $row;
                   
                }
                return $record;
            }
         }
}
$data = new class_display();