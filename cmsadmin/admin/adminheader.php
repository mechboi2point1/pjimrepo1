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
    $link = "";
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
      $link = "https";
    else $link = "http";

    // Here append the common URL characters.
    $link .= "://";

    // Append the host(domain name, ip) to the URL.
    $link .= $_SERVER['HTTP_HOST'];

    // Append the requested resource location to the URL
    //$link .= $_SERVER['REQUEST_URI'];

    // Print the link
    //$link .= '/kalyani2022/pjim/cmsadmin/';
    $link .= '/pjim/cmsadmin/';
    echo '
            <!DOCTYPE html>
<html>
  
<head>
<title>CMS Admin</title>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">

</head>
<body>
 <div class="navbar navbar-inverse nav">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand">CMS</a>
    		
          	<div class="nav-collapse collapse">
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="' . $link . 'admin/home.php"><i class="icon-home icon-white"></i> Home</a></li>
              </ul>
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="' . $link . 'admin/edit/headeredit.php"><i class="icon-edit icon-white"></i> Header</a></li>
              </ul>
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="' . $link . 'admin/edit/footeredit1.php"><i class="icon-edit icon-white"></i> Footer</a></li>
              </ul>
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="' . $link . 'admin/edit/banner.php"><i class="icon-edit icon-white"></i> Banner</a></li>
              </ul>
              <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li><a href="' . $link . 'admin/edit/security.php"><i class="icon-edit icon-white"></i>Security</a></li>
              </ul>
              <div class="pull-right">
                <ul class="nav pull-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, ' . $name . ' <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="/help/support"><i class="icon-envelope"></i>' . $email . '</a></li>
                            <li class="divider"></li>
                            <li><a href="../../cmsadminlogout.php"><i class="icon-off"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
              </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>';
  }
}
