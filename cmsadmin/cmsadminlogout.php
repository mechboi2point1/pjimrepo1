<?php
session_start();
include('connection.php');
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $name = $row['name'];
        session_destroy();
        echo "<h1><center>Hi " . $name . " We Are Loging You Out Securely.</center></h1>";
        sleep(1);
        echo "<h4><center>Hi " . $row['name'] . ", Please wait we are destroying you session keys... </center></h4>";
        sleep(1);
        echo "<script>window.location.href='../cmsadmin/';</script>";
        exit;
    }
}
