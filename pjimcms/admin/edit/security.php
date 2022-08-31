<?php
session_start();
include('../../connection.php');
function clean($string)
{
    $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}
function randomPassword()
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
function randomAdmin($text)
{
    $text = clean($text);
    $alphabet = $text;
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    //echo $sql;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $email = $row['email'];
    if ($count != 1) {
    }
} else {
    echo "<h4><center>No Session Active on this device</center></h4>";
    sleep(1);
    echo "<script>window.location.href='../../index.php';</script>";
}

$token = $_SESSION['token'];
$sql = "select * from sessionTable where token='$token'";
$result = mysqli_query($con, $sql);
//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
$currentUser = $_SESSION['user'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
if ($count == 1) {
    try{
    if (isset($_POST['operation'])) {
        if ($_POST['operation'] == 'addnewuser') {
            $newname = $_POST['name'];
            $newemail = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $admin = $_POST['username'];
            $sqltmp = "INSERT INTO super_admin(email,user_name,password,phone,name) VALUES ('$newemail','$admin','$password','$phone','$newname')";
            $result1 = mysqli_query($con, $sqltmp);
            $to      = $newemail;
            $subject = 'Admin name and password for PJIM';
            $message = 'Hi ' . $newname . ', your Admin name is ' . $admin . ' and your password is ' . $password . '. Please change this as soon as possible.';
            $headers = 'From: noreply@noreply.com';

           if (mail($to, $subject, $message, $headers)) {
                
            }
            echo '<script>';
            echo 'alert("New User added successfully.")';
            echo '</script>';
        } elseif ($_POST['operation'] == 'changemypassword') {
            $currentpassword = $_POST['cpassword'];
            $newpassword = $_POST['npassword'];

            $sqlTemp = "UPDATE super_admin SET password='$newpassword' WHERE user_name='$currentUser' and password = '$currentpassword'";
            $result1 = mysqli_query($con, $sql);
            echo '<script>';
            echo 'alert("Password changed Successfully.")';
            echo '</script>';
        } elseif ($_POST['operation'] == 'changemyusername') {
            if ($_SESSION['user'] == $_POST['newusername']) {
                echo '<script>';
                echo 'alert("All is updated nothing to change.")';
                echo '</script>';
            } else {
                //print_r($_POST);
                $currentpassword = $_POST['cpassword'];
                $newusername = $_POST['newusername'];
                $_SESSION['user']  = $newusername;
                $currentUser = $_SESSION['user'];
                $sqlTemp = "UPDATE super_admin SET user_name='$newusername' WHERE user_name='$currentUser' AND password='$currentpassword'";
                $result1 = mysqli_query($con, $sql);
                echo '<script>';
                echo 'alert("User Name changes Successfully.")';
                echo '</script>';
            }
        }
        elseif ($_POST['operation'] =='addnewjasbala_manjari_user'){
            $newname = $_POST['name'];
            $newemail = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            
            $sqltmp = "INSERT INTO jasbala_manjari_user(email,password,phone,name) VALUES ('$newemail','$password','$phone','$newname')";
            $result1 = mysqli_query($con, $sqltmp);
            $to      = $newemail;
            $subject = 'Added as new jasbala manjari user PJIM';
            $message = 'Hi ' . $newname . ', your email is ' . $newemail . ' and your password is ' . $password . '. Please change this as soon as possible.';
            $headers = 'From: noreply@noreply.com';

           if (mail($to, $subject, $message, $headers)) {
                
            }
            echo '<script>';
            echo 'alert("New jasbala manjari User added successfully.")';
            echo '</script>';
        }
        elseif ($_POST['operation'] =='addnewmewati_rachana_user'){
            $newname = $_POST['name'];
            $newemail = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            
            $sqltmp = "INSERT INTO mewati_rachana_user(email,password,phone,name) VALUES ('$newemail','$password','$phone','$newname')";
            $result1 = mysqli_query($con, $sqltmp);
            $to      = $newemail;
            $subject = 'Added as new Mewati rachna user PJIM';
            $message = 'Hi ' . $newname . ', your email is ' . $newemail . ' and your password is ' . $password . '. Please change this as soon as possible.';
            $headers = 'From: noreply@noreply.com';

           if (mail($to, $subject, $message, $headers)) {
                
            }
            echo '<script>';
            echo 'alert("New Mewati rachna User added successfully.")';
            echo '</script>';
        }
    }
}
catch(Exception $e){
    echo '<script>alert("Failed to conduct this operation")</script>';
}
} else {
    echo "<h4><center>No Session Active on this device</center></h4>";
    sleep(1);
    echo "<script>window.location.href='../../index.php';</script>";
}


//Find all admin details
$sqlForAdmin = "select * from super_admin";
$resultForAdmin = mysqli_query($con, $sqlForAdmin);
//$rowForAdmin = mysqli_fetch_array($resultForAdmin);
$countForAdmin = mysqli_num_rows($resultForAdmin);
//Find all Audio details
$sqlForAudio = "select * from audio_table";
$resultForAudio = mysqli_query($con, $sqlForAudio);
//$rowForAudio = mysqli_fetch_array($resultForAudio);
$countForAudio = mysqli_num_rows($resultForAudio);
//Find all Image details
$sqlForImage = "select * from banner_table";
$resultForImage = mysqli_query($con, $sqlForImage);
//$rowForImage = mysqli_fetch_array($resultForImage);
$countForImage = mysqli_num_rows($resultForImage);
//Find all Video details
//$sqlForVideo ="select * from video_table";
//$result = mysqli_query($con, $sqlForVideo);
echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to "auto" for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CMS Security</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li><a>Age</a></li>
                    <li><a>Gender</a></li>
                    <li><a href="./banner.php">Go Back To CMS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>CMS Security</h2>
                <ul class="nav nav-pills nav-stacked">
                    
                    <li><a href="#section2"><b>Name:-</b> ' . $name . '</a></li>
                    <li><a href="#section2"><b>Email:-</b> ' . $email . '</a></li>
                    <li><a href="#section2"><b>User:-</b> ' . $_SESSION["user"] . '</a></li>
                    <li><a href="./banner.php">Go Back To CMS</a></li>
                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well">
                    <h4>Dashboard</h4>
                    
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Admins</h4>
                            <p>' . $countForAdmin . '</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Active Banners</h4>
                            <p>' . $countForImage . '</p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="well">
                            <h4>Active Audio</h4>
                            <p>' . $countForAudio . '</p>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="well">
                        <h5>Add New Admin</h5>
                            <form class="form-group" method="POST" action="security.php">
                            <input type="hidden" name="operation" value="addnewuser">
                            
<div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="number" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="text" name="username" placeholder="User Name">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                            <input class="btn btn-success form-control" type="submit" name="submit" value="Add New Admin">
                            </form>
                            <p class="text-danger">Email Will be triggered to the user with generated admin/password.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                        <h5>Change My User Name</h5>
                            <form class="form-group" method="POST" action="security.php">
                            <input type="hidden" name="operation" value="changemyusername">
                            <div class="form-group">

                            <input class="form-control" type="text" name="newusername" value="' . $_SESSION["user"] . '">
                            </div>
<div class="form-group">

                            <input class="form-control" type="password" name="cpassword" placeholder="Current Password">
                            </div>
                            
                           <input class="btn btn-success form-control" type="submit" value="Change User Name">
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="well">
                        <h5>Change My Passoword</h5>
                            <form class="form-group" method="POST" action="security.php">
                            <input type="hidden" name="operation" value="changemypassword">
                            <div class="form-group">

                            <input class="form-control" type="password" name="cpassword" placeholder="Current Password">
                            </div>
<div class="form-group">
                            <input class="form-control" type="password" name="npassword" placeholder="New Password">
                            </div>
                            
                            <input class="btn btn-success form-control" type="submit" value="Change Password">
                            </form>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <h3>All Admin List</h3>
                            <table class="table table-responsive-sm table-striped">
                            <tr><th>Admin Name</th><th>Admin Email</th><th>User Name</th></tr>
                            ';

while ($row = mysqli_fetch_assoc($resultForAdmin)) {
    $name = $row['name'];
    $email = $row['email'];
    $username=$row['user_name'];
    echo '<tr>';
    echo '<td>' . $name . '</td><td>' . $email . '</td><td>'.$username.'</td>';
    echo '</tr>';
}
echo '
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <h3>All Jasbala Manjari Users</h3>
                            <table class="table table-responsive-sm table-striped">
                            <tr><th>Name</th><th>Email</th><th>Phone</th><th>Password</th></tr>
                            ';
$sqlForjasbala_manjari_user = "select * from jasbala_manjari_user";
$resultForjasbala_manjari_user  = mysqli_query($con, $sqlForjasbala_manjari_user );
while ($row = mysqli_fetch_assoc($resultForjasbala_manjari_user)) {
    $name = $row['name'];
    $email = $row['email'];
    $username=$row['phone'];
    $password=$row['password'];
    echo '<tr>';
    echo '<td>' . $name . '</td><td>' . $email . '</td><td>'.$username.'</td><td>'.$password.'</td>';
    echo '</tr>';
}
echo '<tr>
<table>
<tr><h5>Add Jasbala Manjari User</h5>
<td>
<form class="form-group" method="POST" action="security.php">
<input type="hidden" name="operation" value="addnewjasbala_manjari_user">
                            
<div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="number" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                            <input class="form-control" type="password" name="password" value="Pjim@12345">
                            </div>
                            <input class="btn btn-success form-control" type="submit" name="submit" value="Add User">
                            </form>
                            <p class="text-danger">Email Will be triggered to the user with generated admin/password.</p>
                        </div>
                        </form>
</td>
</tr>
</table>
</tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <h3>All Mewati Rachana Users</h3>
                            <table class="table table-responsive-sm table-striped">
                            <tr><th>Name</th><th>Email</th><th>Phone</th><th>Password</th></tr>
                            ';
$sqlFormewati_rachana_user = "select * from mewati_rachana_user";
$resultFormewati_rachana_user  = mysqli_query($con,$sqlFormewati_rachana_user);
while ($row = mysqli_fetch_assoc($resultFormewati_rachana_user)) {
    $name = $row['name'];
    $email = $row['email'];
    $username=$row['phone'];
    $password=$row['password'];
    echo '<tr>';
    echo '<td>' . $name . '</td><td>' . $email . '</td><td>'.$username.'</td><td>'.$password.'</td>';
    echo '</tr>';
}
echo '<tr>
<table>
<tr><h5>Add Mewati Rachna User</h5>
<td>
<form class="form-group" method="POST" action="security.php">
<input type="hidden" name="operation" value="addnewmewati_rachana_user">
                            
<div class="form-group">
                            <input class="form-control" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="number" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                            
                            <div class="form-group">
                            <input class="form-control" type="password" name="password" value="Pjim@12345">
                            </div>
                            <input class="btn btn-success form-control" type="submit" name="submit" value="Add User">
                            </form>
                            <p class="text-danger">Email Will be triggered to the user with generated admin/password.</p>
                        </div>
                        </form>
</td>
</tr>
                            </table>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well">
                            <h3>All Student List</h3>
                            <table class="table table-responsive-sm table-striped">
                            <tr><th>Name</th><th>Email</th><th>Phone</th><th>Password</th></tr>
                            ';
$sqlForstudent_info = "select * from student_info";
$resultForstudent_info  = mysqli_query($con,$sqlForstudent_info);
while ($row = mysqli_fetch_assoc($resultForstudent_info)) {
    $name = $row['name'];
    $email = $row['email'];
    $username=$row['phone'];
    $password=$row['password'];
    echo '<tr>';
    echo '<td>' . $name . '</td><td>' . $email . '</td><td>'.$username.'</td><td>'.$password.'</td>';
    echo '</tr>';
}
echo '
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>

</body>

</html>';
