<?php
session_start();
include('connection.php');
$username = $_POST['user'];
$password = $_POST['pass'];

//to prevent from mysqli injection  
$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    //$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($count == 1) {
        $count = mysqli_num_rows($result);
        echo "<h1><center> Login successful using session token </center></h1>";
        sleep(1);
        echo "<h4><center>Hi " . $row['name'] . ", Please wait you will be redirected.... </center></h4>";
        sleep(1);
        header("Location:admin/home.php");
        exit;
    } else {
        session_destroy();
        echo "<h1><center>  Login failed. Invalid username or password.</center> </h1>";
        sleep(1);
        echo "<h4><center>Please wait you will be redirected back to the login page.... </center></h4>";
        sleep(1);
        echo "<script>window.location.href='./index.php';</script>";
    }
}
$sql = "select *from super_admin where user_name = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);


if ($count == 1) {
    $date_now = date("Y-m-d H:m:s");
    $token1 = openssl_random_pseudo_bytes(32);
    $token1 = bin2hex($token1);
    $email = $row['email'];
    $sql = "INSERT INTO sessionTable VALUES('$email', '$date_now', '$token1')";
    $result = mysqli_query($con, $sql);



    $_SESSION['name'] = $row['name'];
    $_SESSION['token'] = $token1;
    $_SESSION['email'] = $email;




    echo "<h1><center> Login successful </center></h1>";
    sleep(1);
    echo "<h4><center>Hi " . $row['name'] . ", Please wait you will be redirected.... </center></h4>";
    sleep(1);
    $url = 'https://cassixcom.in/adminsuper/admin/home.php';
    header("Location:admin/home.php");
    //echo "<script>window.location.href='https://cassixcom.in/adminsuper/admin/home.php?key=$token1';</script>";
    exit;
} else {
    session_destroy();
    echo "<h1><center>  Login failed. Invalid username or password.</center> </h1>";
    sleep(1);
    echo "<h4><center>Please wait you will be redirected back to the login page.... </center></h4>";
    sleep(1);
    echo "<script>window.location.href='https://cassixcom.in/adminsuper/';</script>";
}
