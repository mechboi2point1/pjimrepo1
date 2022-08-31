<?php
session_start();
include('include/header.php');
include('./connection.php');
if (isset($_POST['name']) && isset($_POST['password'])) {
    $username = $_POST['name'];
    $password = $_POST['password'];
    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $sql = "select *from jasbala_manjari_user where email = '$username' and password = '$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $_SESSION['jasbala_manjari_user'] = 'true';
    if ($count == 1) {
    } else {
        echo '<script>';
        echo 'alert("Login Failed.Email/Password Wrong.")';
        echo '</script>';
        echo "<script>window.location.href='./Treasured_legacy.php';</script>";
    }
} else {
    if (isset($_SESSION['jasbala_manjari_user']) && $_SESSION['jasbala_manjari_user'] = 'true') {
    } else {
        echo '<script>';
        echo 'alert("Not allowed to acces this site directly.")';
        echo '</script>';
        echo "<script>window.location.href='./Treasured_legacy.php';</script>";
        exit();
    }
}
?>
<div class="pagecontent z100">
    <div class="container">
        <div class="slide_banner">
            <img src="images/Treasured_legacy.jpg" alt="Treasured_legacy" class="img-fluid w100">
        </div>
        <section class="col-md-12 tabs mt-5 p-0">
            <h4 class="orngTxt mb-3"><b>जसबाला मंजरी</b> (JasBala Manjari): </h4>
            <div class="col-md-6 ">
                <div id="mewati_rachana_sankalan_abhilekh" class="mewati_rachana_sankalan_abhilekh1 active">
                    <div class="tab_titl">
                        <p>New creations </p>
                        <p>Audio reference</p>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
<?php
include('include/footer.php');
?>