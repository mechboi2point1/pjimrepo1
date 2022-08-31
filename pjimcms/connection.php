<?php      
    $host = "localhost";  
    $user = "cassixcom_pjim_user_admin";  
    $password = 'pjimadmin123';  
    $db_name = "cassixcom_pjim_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with DataBase");  
    }