<?php

    /*Campagin Email Send*/

    if(isset($_POST['action']) && $_POST['action']=='quotes'){
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $address = $_POST['address'];
    $email= $_POST['email'];
    $phone = $_POST['phone']; 
    $transaction= $_POST['transaction'];

 
    $template .= '<br />Hmat.' . '<br />';

    $to = 'journal@hmat.org';  
     
    // subject
    $subject = 'Contact-Hmat';
    
    // message
     //$message.="<b>subject</b> : ". $subject . "\r\n";
    $message="<b>Name :</b> ". $name . "\r\n";	
    $message.="<br><b>Occupation</b> : ". $occupation . "\r\n";
    $message.="<br><b>Address :</b> ". $address . "\r\n";
    $message.="<br><b>Email :</b> ". $email . "\r\n";
    $message.="<br><b>Phone :</b> ". $phone . "\r\n";
    $message.="<br><b>Transaction :</b> ". $transaction . "\r\n";
   
    //$message.="Message : ". $tet_message . "\r\n";
    
    $headers = "From: journal@hmat.org\r\n";
    $headers .= "Reply-To: journal@hmat.org\r\n";  
    
    // $headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    
    if(mail($to, $subject, $message, $headers)){
        echo "<div class='alert alert-success'>Your enquire submitted successfully.</div>";
    }else{
        echo "<div class='alert alert-danger'>Some error occured! try again after some time.</div>";
    }
    
    // $name = $_POST['name'];
    // $email= $_POST['email'];
    // $message= $_POST['designation'];
    // $to = "ui-uxdesign@cassixcom.com";
    // $subject = "Mail From website";
    // $txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
    // $headers = "From: ui-uxdesign@cassixcom.com" . "\r\n" .
    // "CC: ui-uxdesign@cassixcom.com";
    // if($email!=NULL){
    //     mail($to,$subject,$txt,$headers);
    // } 
    // if(mail($to, $subject, $template, $headers)){
    //     echo "<div class='alert alert-success'>Your enquire submitted successfully.</div>";
    // }else{
    //     echo "<div class='alert alert-danger'>Some error occured! try again after some time.</div>";
    // }
}


    /*End Campagin*/
?>