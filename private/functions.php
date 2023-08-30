<?php 
    // session_start();
    include_once "config.php";
    include_once "../class/class_register.php";
    include_once "../class/class_login.php";
    // include_once "../class/class_logout.php";
    include_once "../class/class_display.php";
    include_once "../class/class_delete.php";
    include_once "../class/class_updatesingledata.php";
    include_once "../class/class_update_userdata.php";
    
    
    function validate($inputData) {

        global $conn;

        $validatedData = mysqli_real_escape_string($conn, $inputData); //Validate data
        return trim($validatedData);
    }
    
    function redirect($url, $status) // session alert messages
    {
        $_SESSION['status'] = "$status";
        header('Location: '.$url);
        exit(0);
    }

    function alertMessage() // display alert messages status
    {
        if(isset($_SESSION['status']))
        {
            echo '<div class="alert alert-warning alert-dismissible fade show col-md-12 mb-3" role="alert">
            <h6>'.$_SESSION['status'].'</h6>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
            unset($_SESSION['status']);
        }
    }
    
?> 