<?php
session_start();
include('../connection.php');
if (isset($_SESSION['token'])) {
  $token = $_SESSION['token'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $sql = "select * from sessionTable where token='$token'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);
  if ($count == 1) {

    echo '
            <!DOCTYPE html>
<html>
  
<head>
    <title>
       CMS-Admin
    </title>
      
    <meta charset="utf-8"> 
      
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
      

      
    <style type="text/css">
  

       .xyz {
            background-size: auto;
            text-align: center;
            }
        
        .btn1 {
 width: 200px;
            height: 200px;
            padding: 20px 32px;
            border-radius: 100px;
            font-size: 14px;
            text-align: center;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  
  position: relative;
  display: inline-block;
}

.btn1:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

    </style>
</head>
  ';

    echo '
<body class="xyz" style="background-image: url(https://www.cassixcom.in/adminsuper/images/bg.jpg);height: 100%; background-position: center; background-repeat: no-repeat;">
<center><h3 id="lblGreetings"></h3></center>
<div style="padding-top: 150px;">
    <button type="button" class="btn1" onclick="location.href = \'./edit/banner.php\';" >Banners</a>
    <button type="button" class="btn1" onclick="location.href = \'./edit/footeredit1.php\';">Footer</button>
    <button type="button" class="btn1" onclick="location.href = \'./edit/headeredit.php\';">Header</button>
    
    
  
     </div>
</body>
<script>
var name="' . $name . '"+" ";
    var myDate = new Date();
    var hrs = myDate.getHours();

    var greet;

    if (hrs < 12)
        greet = "Good Morning";
    else if (hrs >= 12 && hrs <= 17)
        greet = "Good Afternoon";
    else if (hrs >= 17 && hrs <= 24)
        greet = "Good Evening";

    document.getElementById("lblGreetings").innerHTML =
        "<b>Hi "+name+","+ greet + "</b>.";
</script> 
  
</html> 
            ';
  } else {
    echo 'Not allowed to access this page';
    header('Location:../../../../pjim/cmsadmin/');
    exit();
  }
} else {
  echo 'Not allowed to access this page';
  header('Location:../../../../pjim/cmsadmin/');
  exit();
}
