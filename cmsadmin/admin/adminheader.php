<?php
session_start();
include('../../connection.php');
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
        How to get circular buttons
        in bootstrap 4 ?
    </title>
      
    <link rel="stylesheet" href= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
        
    <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
        
    <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> 
    </script> 
        
    <script src= 
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> 
    </script> 
      
    <style type="text/css">
    /* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
        h1 {
            color:green;
        }
        .xyz {
            background-size: auto;
            text-align: center;
            
        }
        .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
        }
        .btn-circle.btn-md {
            width: 50px;
            height: 50px;
            padding: 7px 10px;
            border-radius: 25px;
            font-size: 10px;
            text-align: center;
        }
        .btn-circle.btn-xl {
            width: 200px;
            height: 200px;
            padding: 20px 32px;
            border-radius: 100px;
            font-size: 14px;
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
  color: #fff;
  position: relative;
  display: inline-block;
}

.btn1:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}


.green {

  
  box-shadow: 3px 5px 5px #888888;
  border-radius: 100px;
  transition: all 1s ease;
  transform: scale(1);
}

.green:hover {
  background-color: #000;
/*  Making button bigger on hover  */
  transform: scale(1.5) perspective(1px)
}
    </style>
</head>
<body>
  <div class="topnav">
  <a class="active">Admin Name:' . $name . '|Email:' . $email . '</a>
  
</div>
</body>
  
</html>';
  }
}
