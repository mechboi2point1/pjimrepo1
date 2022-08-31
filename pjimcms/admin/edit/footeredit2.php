<?php
session_start();
include('../../connection.php');
include('../adminheader.php');
echo '
<html>

<head>
    <title>Footer Content Management</title>
    <style>
        h3 {
            font-family: Calibri;
            font-size: 25pt;
            font-style: normal;
            font-weight: bold;
            color: SlateBlue;
            text-align: center;
            text-decoration: underline
        }

        table {
            font-family: Calibri;
            color: white;
            font-size: 11pt;
            font-style: normal;
            font-weight: bold;

            background-color: SlateBlue;
            border-collapse: collapse;
            border: 2px solid navy
        }

        table.inner {
            border: 0px
        }
    </style>

</head>

<body>';
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    $email = $row['email'];
    if ($count == 1) {
        
    }
}

    
echo '</body>

</html>';
