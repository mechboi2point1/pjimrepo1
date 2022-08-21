<?php
session_start();
include('../../connection.php');
include('../adminheader.php');
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    echo $sql;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $email = $row['email'];
    if ($count != 1) {
    }
} else {
    echo 'Not allowed to access this page';
    header('Location:../../../../pjim/cmsadmin/');
    exit();
}
if (isset($_POST['operation'])) {
    if ($_POST['operation'] == 'addheader') {
        $link = $_POST['link'];
        $title = $_POST['title'];

        $sqlHeader = "INSERT INTO headernavigation(title, headerlink) VALUES ('" . $title . "','" . $link . "')";
        $result = mysqli_query($con, $sqlHeader);
    } elseif ($_POST['operation'] == 'addsubheader') {
        $link = $_POST['link'];
        $title = $_POST['title'];
        $id = $_POST['headerid'];
        $sqlsubHeader = "INSERT INTO headernavigationsublink(subtitle, link,headerid) VALUES ('" . $title . "','" . $link . "','" . $id . "')";
        $result = mysqli_query($con, $sqlsubHeader);
    } elseif ($_POST['operation'] == 'deletesubheader') {
        $sql1 = "DELETE FROM headernavigationsublink WHERE subid='" . $_POST['headerid'] . "'";

        $result = mysqli_query($con, $sql1);
    } elseif ($_POST['operation'] == 'deleteheader') {
        $sql1 = "DELETE FROM headernavigationsublink WHERE headerid='" . $_POST['headerid'] . "'";
        $sql2 = "DELETE FROM headernavigation WHERE id='" . $_POST['headerid'] . "'";
        $result = mysqli_query($con, $sql1);
        $result = mysqli_query($con, $sql2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PJIM Header Edit</title>
    <!-- Latest compiled and minified CSS -->
    <style>
        /* Remove default bullets */
        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: normal;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-danger {
            color: #fff;
            background-color: #d9534f;
            border-color: #d43f3a;
        }

        ul,
        #myUL {
            list-style-type: none;
        }

        /* Remove margins and padding from the parent ul */
        #myUL {
            margin: 0;
            padding: 0;
        }

        /* Style the caret/arrow */
        .caret {
            cursor: pointer;
            user-select: none;

            /* Prevent text selection */
        }

        /* Create the caret/arrow with a unicode, and style it */
        .caret::before {
            content: "\25B6";
            color: black;
            display: inline-block;
            margin-right: 6px;
        }

        /* Rotate the caret/arrow icon when clicked on (using JavaScript) */
        .caret-down::before {
            transform: rotate(90deg);
        }

        /* Hide the nested list */
        .nested {
            display: none;
        }

        /* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
        .active {
            display: block;
        }
    </style>
</head>

<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr ALIGN=CENTER style="width:100%;">
            <th style="width:30%;">Edit</th>
            <th style="width:70%;">Header View</th>
        </tr>
        <tr VALIGN=TOP style="height:100%">
            <td bgcolor="#3FD1F1" style=" display: block;
  height: 500px;
  overflow-y: scroll;">

                <?php
                include('../../connection.php');
                $sqlHeader = "select * from headernavigation";
                $result = mysqli_query($con, $sqlHeader);
                while ($row = mysqli_fetch_assoc($result)) {
                    $headerTitle = $row['title'];
                    $headerLink = $row['headerlink'];
                    $headerid = $row['id'];
                    echo '<ul id="myUL">
        <li><span class="caret">' . $headerTitle . '(' . $headerLink . ')<form method="POST" action="./headeredit.php" onsubmit="return confirm(\'Are you sure you want to delete header ' . $headerTitle . '? This change cannot be reverted.\');"><input type="text" name="headerid" value="' . $headerid . '" hidden><input type="submit" name="submit" value="Delete ' . $headerTitle . ' from header"><input type="text" name="operation" value="deleteheader" hidden></form></span>';
                    $sqlHeaderSub = "select * from headernavigationsublink where headerid='" . $row['id'] . "'";
                    $result1 = mysqli_query($con, $sqlHeaderSub);

                    echo '<ul class="nested">';
                    $i = 0;
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        $i++;
                        $subheaderTitle = $row1['subtitle'];
                        $subheaderLink = $row1['link'];
                        $subheaderid = $row1['subid'];
                        echo '<li>' . $i . '.' . $subheaderTitle . '(' . $subheaderLink . ')</li><form method="POST" action="./headeredit.php" onsubmit="return confirm(\'Are you sure you want to delete sub-header ' . $subheaderTitle . '? This change cannot be reverted.\');"><input type="text" name="headerid" value="' . $subheaderid . '" hidden><input type="submit" name="submit" value="Delete ' . $subheaderTitle . ' from sub header"><input type="text" name="operation" value="deletesubheader" hidden></form>';
                    }
                    echo '<li><a><b>Add New Sub Header:</b></a><form method="POST" action="./headeredit.php" ><input type="text" name="headerid" value="' . $headerid . '" hidden><input type="text" name="operation" value="addsubheader" hidden><input type="text" name="title" placeholder="Title"><input type="text" placeholder="Link" name="link"><input type="submit" name="submit" value="Add Sub Header"></form></li>';


                    echo '</ul>';
                    echo '</li>
    </ul>';
                }
                //echo '<a>Add New Header:</a><form method="POST" action="./headeredit.php"><input name="title" type="text" placeholder="Title"><input name="link" type="text" placeholder="Link"><input type="text" name="operation" value="addheader" hidden><input type="submit" name="submit" value="Add Header link"></form>';
                ?>
            </td>

            <td><?php
                echo '
                <!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/responsive.css">
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../../../css/slick-theme.css">
    <!-- <link rel="stylesheet" href="../../../css/plyr.css">  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://cassixcom.com/images/Cassixcom-Favicon.png" type="image/x-icon">
    <link rel="icon" href="../../../images/logo-Favicon.png" type="image/x-icon">
    <style>
    </style>
</head>

<body>
    <div class="mainSite">
        <div class="rootWeb relative aos-all" id="transcroller-body">
            <header>
                <div class="top-header">
                    <div class="deep">
                        <img src="../../../images/deep.png" alt="deep" class="img-fluid">
                    </div>
                    <div class="container">
                        <div class="col-md-5 m-auto">
                            <div class="WebLogo">
                                <a href="./"><img src="../../../images/logo.png" alt="Images" class="img-fluid"></a>
                            </div>
                            <!-- <span class="menubar menubarIc cursor"><img src="../../../images/menuIcon.png" alt="menuIcon"></span>							
                                <span class="close cursor fnt17 z100"><i class="fa fa-times-circle-o white" aria-hidden="true"></i></span>   -->
                        </div>
                    </div>
                    <div class="tambu">
                        <img src="../../../images/tambu.png" alt="tambu" class="img-fluid">
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
                '; ?>
                <?php
                include('../../connection.php');
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
                <?php
                echo '
                </div>
                    </div>
                </div>
            </header>
                ';
                ?>
            </td>
        </tr>
        <tr ALIGN=CENTER>
            <td bgcolor="#f4efe7" style="height:100px;"><b>Add New Header:</b></a>

                <form method="POST" action="./headeredit.php">

                    <input name="title" type="text" placeholder="Title"></br></br>
                    <input name="link" type="text" placeholder="Link"></br>
                    <input type="text" name="operation" value="addheader" hidden><br />
                    <input type="submit" name="submit" value="Add Header link">
                </form>
            </td>
        </tr>
    </table>
    <script>
        var toggler = document.getElementsByClassName(" caret");
        var i;
        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }
    </script>
</body>


</html>