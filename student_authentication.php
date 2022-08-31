<?php
session_start();
include('./connection.php');
if (isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['email'];
    $password = $_POST['password'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $sql = "select *from student_info where email = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $agent = $_SERVER['HTTP_USER_AGENT']; //req
        $city = "NA";
        $ip = $_SERVER['REMOTE_ADDR']; //req
        $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
        $city = $details->city; //req
        $date_now = date("Y-m-d H:m:s"); //req
        $date_now = date('Y-m-d H:m:s', strtotime($date_now . '+ 1 days'));
        $token1 = openssl_random_pseudo_bytes(32);
        $token1 = bin2hex($token1); //req
        $sql = "INSERT INTO studnet_session_info(token,expiry,ip,agent,location,email) VALUES ('$token1','$date_now','$ip','$agent','$city','$username')";
        $result = mysqli_query($con, $sql);
        $_SESSION['student_token'] = $token1;
        echo "<script>window.location.href='./student_center_data.php';</script>";
    } else {
        echo '<script>';
        echo 'alert("Login Failed. Student Email/Password Wrong.")';
        echo '</script>';
        echo "<script>window.location.href='./student_center.php';</script>";
    }
}
