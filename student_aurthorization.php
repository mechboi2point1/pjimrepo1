<?php
session_start();
include('connection.php');
if (isset($_SESSION['student_token'])) {
    $token = $_SESSION['student_token'];
    $sql = "select * from studnet_session_info where token='$token'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $date_now = date("Y-m-d H:m:s");
        $row = mysqli_fetch_array($result);
        if ($date_now > $row['expiry']) {
            //session expired
            echo '<script>';
            echo 'alert("Your key has expired please login again.")';
            echo '</script>';
            echo "<script>window.location.href='./student_center.php';</script>";
            exit;
        } else {
        }
    } else {
        //not good session
        echo '<script>';
        echo 'alert("Bad key used. Using Bad key to access student\'s personal information is offensive.")';
        echo '</script>';
        echo "<script>window.location.href='./student_center.php';</script>";
        exit;
    }
} else {
    //unauthorised
    echo '<script>';
    echo 'alert("You Are not Authorized to Access this page.")';
    echo '</script>';
    echo "<script>window.location.href='./student_center.php';</script>";
    exit;
}
