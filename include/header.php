<!DOCTYPE html>
<html lang="en">

<head>
    <title>PJIM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <!-- <link rel="stylesheet" href="css/plyr.css">  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://cassixcom.com/images/Cassixcom-Favicon.png" type="image/x-icon">
    <link rel="icon" href="images/logo-Favicon.png" type="image/x-icon">
    <style>
    </style>
</head>

<body>
    <div class="mainSite">
        <div class="rootWeb relative aos-all" id="transcroller-body">
            <header>
                <div class="top-header">
                    <div class="deep">
                        <img src="images/deep.png" alt="deep" class="img-fluid">
                    </div>
                    <div class="container">
                        <div class="col-md-5 m-auto">
                            <div class="WebLogo">
                                <a href="./"><img src="images/logo.png" alt="Images" class="img-fluid"></a>
                            </div>
                            <!-- <span class="menubar menubarIc cursor"><img src="images/menuIcon.png" alt="menuIcon"></span>							
                                <span class="close cursor fnt17 z100"><i class="fa fa-times-circle-o white" aria-hidden="true"></i></span>   -->
                        </div>
                    </div>
                    <div class="tambu">
                        <img src="images/tambu.png" alt="tambu" class="img-fluid">
                    </div>
                </div>
                <div class="bottom_header">
                    <div class="container-fluid">
                        <div class="mb_navHead w100 p-2">
                            <div class="d-flex w100">
                                <div><span class="font-weight-bold">Menu</span></div>
                                <div class="ml-auto menubar"><span><i class="fa fa-bars" aria-hidden="true"></i></span></div>
                                <div class="ml-auto closer"><span><i class="fa fa-close" aria-hidden="true"></i></span></div>
                            </div>
                        </div>
                        <div class="nav_menu text-center">
                            <ul class="pl-0 mb-0">
                                <?php
                                include('./connection.php');
                                $sqlHeader = "select * from headernavigation";
                                $result = mysqli_query($con, $sqlHeader);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $headerTitle = $row['title'];
                                    $headerLink = $row['headerlink'];
                                    echo '<li><a href="' . $headerLink . '">' . $headerTitle . '</a><span class="dropdown_icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span><ul class="ul-submenu pl-0 gurukul">';
                                    $sqlHeaderSub = "select * from headernavigationsublink where headerid=" . $row['id'];
                                    $result1 = mysqli_query($con, $sqlHeaderSub);
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                        $subheaderTitle = $row1['subtitle'];
                                        $subheaderLink = $row1['link'];
                                        echo '<li><a href="' . $subheaderLink . '">' . $subheaderTitle . '</a></li>';
                                    }
                                    echo '</ul></li>';
                                }
                                ?>





                        </div>
                    </div>
                </div>
            </header>