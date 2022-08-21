<?php      
    $host = "localhost";  
    $user = "cassixcom_aa_user";  
    $password = 'akhilaanimesh.1410';  
    $db_name = "cassixcom_cassixco_AA_db";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with Data Base");  
    }
