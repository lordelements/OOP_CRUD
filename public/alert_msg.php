<?php
    session_start();
    if (isset($_SESSION['alert_msg'])) 
    {
   
    ?>
      
    <?php
    unset($_SESSION['alert_msg']);
    }
   
?>