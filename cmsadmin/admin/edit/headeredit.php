<?php
session_start();
include('../../connection.php');
include('../adminheader.php');
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
    } elseif ($_POST['operation'] == 'updateheader') {
        $title = $_POST['title'];
        $link = $_POST['link'];
        $id = $_POST['headerid'];
        $sql = "UPDATE headernavigation SET title='" . $title . "',headerlink='" . $link . "' WHERE id= " . $id;
        $result = mysqli_query($con, $sql);
    } elseif ($_POST['operation'] == 'updatesubheader') {
        $title = $_POST['subheadertitle'];
        $link = $_POST['subheaderlink'];
        $id = $_POST['subheaderid'];
        $sql = "UPDATE headernavigationsublink SET subtitle='" . $title . "',link='" . $link . "' WHERE subid= " . $id;
        $result = mysqli_query($con, $sql);
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
            margin: 2;
            padding: 0;
        }

        /* Style the careter/arrow */
        .careter {
            cursor: pointer;
            user-select: none;

            /* Prevent text selection */
        }

        /* Create the careter/arrow with a unicode, and style it */
        .careter::before {
            content: "\25B6";
            color: black;
            display: inline-block;
            margin-right: 6px;
        }

        /* Rotate the careter/arrow icon when clicked on (using JavaScript) */
        .careter-down::before {
            transform: rotate(90deg);
        }

        /* Hide the nested list */
        .nested {
            display: none;
        }

        /* Show the nested list when the user clicks on the careter/arrow (with JavaScript) */
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
        <li><span class="careter">' . $headerTitle . '</span>';

                    $sqlHeaderSub = "select * from headernavigationsublink where headerid='" . $row['id'] . "'";
                    $result1 = mysqli_query($con, $sqlHeaderSub);

                    echo '<ul class="nested">';
                    $i = 0;
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        $i++;
                        $subheaderTitle = $row1['subtitle'];
                        $subheaderLink = $row1['link'];
                        $subheaderid = $row1['subid'];
                        echo '<li><span class="careter">' . $i . '.' . $subheaderTitle . '</span><ul class="nested">
                    <li>
                    <b>Update Sub Header</b>
                    <form method="POST" action="./headeredit.php">Title:<input type="text" name="operation" value="updatesubheader" hidden><input type="text" name="subheaderid" value="' . $subheaderid . '" hidden><input type="text" name="subheadertitle" value="' . $subheaderTitle . '"><br/>Link:<input type="text" name="subheaderlink" value="' .  $subheaderLink . '"><input type="submit" value="Update"></form>
                    </li>
                    <li>
                    <b>Delete Sub Header:-' . $subheaderTitle . '</b>
                    <form method="POST" action="./headeredit.php" onsubmit="return confirm(\'Are you sure you want to delete sub-header ' . $subheaderTitle . '? This change cannot be reverted.\');"><input type="text" name="headerid" value="' . $subheaderid . '" hidden><input type="submit" name="submit" value="Delete"><input type="text" name="operation" value="deletesubheader" hidden></form>
                    </li>
                    </ul></li>';
                    }
                    echo '<li><a><b>Update Header:</a></b><form method="POST" action="./headeredit.php" ><input type="text" name="headerid" value="' . $headerid . '" hidden><input type="text" name="operation" value="updateheader" hidden><br/>Title:<input type="text" name="title" value="' . $headerTitle . '"><br/>Link:<input type="text" value="' . $headerLink . '" name="link"><input type="submit" name="submit" value="Update"></form></li>';
                    echo '<li><a><b>Delete Header:</a></b></b><form method="POST" action="./headeredit.php" onsubmit="return confirm(\'Are you sure you want to delete header ' . $headerTitle . '? This change cannot be reverted.\');"><input type="text" name="headerid" value="' . $headerid . '" hidden><input type="submit" name="submit" value="Delete"><input type="text" name="operation" value="deleteheader" hidden></form></li>';
                    echo '<li><a><b>Add New Sub Header:</a></b></b><form method="POST" action="./headeredit.php" ><input type="text" name="headerid" value="' . $headerid . '" hidden><input type="text" name="operation" value="addsubheader" hidden><input type="text" name="title" placeholder="Title"><input type="text" placeholder="Link" name="link"><input type="submit" name="submit" value="Add Sub Header"></form></li>';


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
   
    
    <style>
    body{ 
    
    background-repeat: repeat;
    background-size: contain;
}
a{
    cursor: pointer;
}
a:hover{
	text-decoration:none!important; 
}
.bgNone {
    background: inherit!important;
}
.borderNone{
	border:none!important;
}
.bgWhite{
	background:#fff!important;
}
 .bgBlack{
	background:#000!important;
} 
.brt{
	border-right:2px solid #ccc;
}
.mbNone{
	display:none;
}
.dt{
    display:block;
}
.bgNone{
    background: none!important;
}
.w100{
    width:100%!important;
}
.fnt11{
	font-size:11px!important;
}
.fnt12{
	font-size:12px!important;
}
.fnt13{
	font-size:13px!important;
}
.fnt17{
	font-size:17px!important;
}
.fnt15{
	font-size:15px!important;
}
.fnt23{
    font-size: 23px!important;
}
.fnt40{
    font-size:40px!important;
}
.h100{
	height:100%!important;
}
.white{
	color:#fff!important;
}
.black{
	color:#000!important;
}
.pink{
	color:#ab1c75!important;
}
.skyblue{
    color:#2c7596!important;
}
.red{
    color:#f00!important;
}
.bgskyblue{
    background: #3fbcea!important;
}
.bgDrblue{
    background: #196098!important;
}
.brblackgray{
    background: #222 !important;
}
.darkblue{
    color:#242f3e;
}
.leterSpaceTitle{
	letter-spacing: 3px;
}
.relative{
	position:relative;
} 
.fixed{
    position:fixed;
}
.cursor{
    cursor: pointer!important;
}
.orngTxt{
    color:#ef6e08;
}  
.logoCor{ 
    color:#f2620d;
}
/*Header*/
.top-header {
    padding: 6px 10px;
}
.bottom_header {
    border: 2px solid #ccc;
    border-right: none;
    border-left: none;
    background: #fff;
}
.nav_menu ul li {
    display: inline-flex;
    padding: 5px 0; 
    margin: 0 5px;
    font-family: "Rubik", sans-serif;
    position: relative;
}
.nav_menu ul li a{
    color:#000;
    text-transform: uppercase;
    cursor:pointer;
    font-size:14px;
}
.nav_menu ul li.active a{
    color:#f07f2e;
}
.nav_menu ul li.active span{
    display: none;
}
.ul-submenu {
    position: absolute;
    width: 250px;
    z-index: 9;
    background: #fff; 
    top: 30px;  
    display: none; 
}
.ul-submenu li{
    width:100%; 
    padding:15px;
}
.ul-submenu li {
    width: 100%;
    padding: 15px!important; 
    display: block!important;
    text-align: left;
}
.ul-submenu li a { 
    display: block;
}
.nav_menu ul li a:hover {
    color:#f2620d;
}
.nav_menu ul li:hover .ul-submenu{
    display:block;
}
ul.ul-submenu li a {
    color: #6a1520;
}
.nav_menu .ul-submenu li:hover  {
    background: linear-gradient(#f2620d,#e69843);
}
.nav_menu .ul-submenu li:hover a {
    color:#fff;
}
.dropdown_icon {
    margin-left: 4px;
    font-weight: 100;
    font-size: 11px;
    display: flex;
    align-items: center;
    color:#ef6e08;
}
.sliderBanners {
    /* height: 550px; */
    height: 70vh;
}

.carousel-indicators li { 
    width: 10px!important;
    height: 10px!important;
    border-radius: 50%; 

    border-top: 3px solid #ffffffbf!important;
    border-bottom: 2px solid #ffffffbf!important; 
    border: 3px solid #ccc;
}
.carousel-indicators li.active{ 
    background-color: #f2620d!important; 
}

.carousel-item{
    height:100%;
}

/*Footer*/
.footr h3{
    font-family: "Macondo", cursive;
    font-size: 22px; 
    font-weight:500;
}
.footr h4{
    font-family: "Macondo", cursive;  
    font-weight:500;
    font-size: 22px;
}
.footr p{
    font-family: "Rubik", sans-serif;
    font-size: 14px;
}
.footr a {
    color: #000;
    font-size: 13px;
    font-family: "Rubik", sans-serif;
}
.footr a:hover {
    color: #f2620d;
}
.social_media span { 
    box-sizing: border-box;
    padding: 5px 2px;
    border-radius: 50px;
    margin-right: -2px;
    background: #fff;
    /* box-shadow: 3px 2px 13px 2px #e0dbdb; */
    font-size: 14px;
    color: #000;
}
.social_media img {
    width: 30px;
}
.subscribe span {
    margin-left: 5px;
    border: 1px solid #ccc;
    padding: 5px 10px;
    border-radius: 9px;
    background: #939595;
}
.subscribe span a{
    color:#fff;
    font-family: "Rubik", sans-serif;
}
.subscribe input {
    border-radius: 10px;
    border-color: #762630;
    font-family: "Rubik", sans-serif;
    height: 28px;
}

.deep {
    position: absolute;
    top: 5px;
    width: 75px;
    left: 0;
    transform: rotate(2deg);
} 
.tambu {
    position: absolute;
    right: 10px;
    top: 5px;
    width: 100px;
}
/*Innerpage*/
.inner_pg ul { 
    border-radius: 55px;
}
.inner_pg ul li {
    display: inline-block;
    box-sizing: border-box;
    padding: 10px 0px;
    width: 19.5%;
    border-radius: 50px;
    margin-right: 0px;
    font-family: "Macondo", cursive;
    font-size: 17px;
    cursor: pointer;
    transform: scale(0.8);
}
.innt_5 ul li { 
    padding: 10px 4px;
    width: 19.5%;    
    transform: scale(0.8);
} 
.tab_titl h4{
    font-family: "Macondo", cursive;
    font-size:19px;
    font-weight:bold;
}
.tab_titl p{
    font-size: 13px;
    text-align: justify;
    font-family: "Rubik", sans-serif;
}
.tabs h4{
    font-family: "Macondo", cursive;
}
.content_tabs{
    display:none;
}
.footr {
    border-top: 1px solid #ccc;
    padding-top: 22px;
}
.inner_pg li.active {
    transform: scale(1.2);
}
.inner_pg li.active a{
    color: #f2620d!important; 
}
.inner_pg li a {
    color: #000!important;
    display: block; 
    font-size: 15px;
}
i.fa.fa-music.p-2 {
    padding: 0 !important;
    padding-right: 10px!important;
}
.vertical_line {
    border-right: 3px solid #595454;
    height: 100%;
    text-align: center;
    width: 5px;
    margin: 0 auto;
}
.dummy_imag {
    background: #ccc;
    display: block;
    width: 90%;
    height: 350px;
    border-radius: 15px;
}
.img_tag img{
    margin-bottom: 10px;
}
.row_img img {
    height: 200px;
    width: 100%;
}
.img_heading {
    background: #ccc; 
}
.audio_list audio{
    height:30px;
}

audio::-webkit-media-controls-time {
    display: none;
}
audio::-webkit-media-controls-time-remaining-display,
audio::-webkit-media-controls-current-time-display {
  color: white;
  display:none;
}
audio::-webkit-media-controls-volume-slider {
	display: none;
}
div#contact_us1 a:hover {
    color: #f00!important;
} 
.btn-primary {
    color: #fff;
    background-color: #e79834!important;
    border-color: #e79834!important;
}
.inner_pg:before {
    content: "";
    background: url(../images/music-notes.png);
    display: block;
    width: 100%;
    left: 0;
    position: absolute;
    height: 42px;
    z-index: -1;
    background-repeat: no-repeat;
    opacity: 0.7;
    background-size: cover;
    top: 40%;
    transform: translateY(-40%);
}
.inner_pg {
    position: relative;
}
.drop_down_list select {
    background: #ef6e08;
    color: #fff;
    box-sizing: border-box;
    padding: 0 20px; 
    height: 45px;
    display: none;
}
.drop_down_list select:focus {
    color: #fff;
    background-color: #ef6e08;
    border-color: #ef6e08;
    outline: 0;
    box-shadow: none;
}
.mb_navHead {
    display:none;
}
.btn_logo{
    color: #fff;
    background-color: #ef6e08!important;
    border-color: #ef6e08!important;
}
.inner_pg li.active a:after {
    content: "";
    background: #f2620d;
    width: 44px;
    height: 1px;
    display: block;
    text-align: center;
    margin: 0 auto;
}
.body_fixed {
    position: fixed;
    width: 100%;
}
.testi_icons {
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    padding: 12px 3px;
    margin: 6px auto;
    box-shadow: 1px 0px 6px #49484885;
    background: #fff;
}
.testicodes1 {
    position: absolute;
}
.testicodes1 img {
    position: relative;
    top: -26px;
    left: -8px;
    width: 18px;
}
.testicodes2 img {
    position: absolute;
    bottom: -6px;
    right: -1px;
}
.mb_device{
    display:none;
}
.tab_titl td {
    font-size: 13px;
    font-family: "Rubik", sans-serif;
}

/* .float_left {
    column-count: 3;
    -moz-column-gap: 50px;
    column-gap: 8px;
    padding: 5px 10px;
} */
.card{
    margin-bottom:10px;
}
.card-header {
    padding: 0.5rem 1.25rem!important;
    position:relative;
}
#accordion .card-header:after {
    font-family: "FontAwesome";  
    content: "\f107";  
    position: absolute;
    right: 14px;
    top: 50%;
    transform: translateY(-50%);
}
#accordion .card-header .show:after { 
    content: "\f107"; 
}
.bg_img_layou {
    height: 100%;
    background: url(../images/Callouts-plain.jpg);
    background-size: cover;
    padding: 111px 21px 47px;
    min-height: 330px;
    background-repeat: no-repeat;
    margin-bottom: 10px; 
    background-position: center;
}
.callout_fnt { 
    padding-top: 13px;
    text-align: center;
    color:#681c00;  
    font-weight: bolder;
    font-size: 19px;
   
}
.call_auth{
    color:#3f3f3f;
    font-weight: bolder;
    font-size: 12px;
}
.slick-dots li button {
    font-size: 0;
    line-height: 0;
    display: block!important;
    width: 12px;
    height: 12px;
    padding: 5px;
    cursor: pointer;
    color: #000000f7;
    border: 0;
    outline: none;
    background: #000000ba;
    border-radius: 50px;
}
li.slick-active button {
    background: #f2620d;
}
.slick-prev, .slick-next { 
    display: none!important;
}
    </style>
</head>


    <div class="">
        <div class="" id="">
            <header>
               
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
                    echo '<li><a>' . $headerTitle . '</a><span class="dropdown_icon"><i class="fa fa-chevron-down" aria-hidden="true"></i></span><ul class="ul-submenu pl-0 gurukul">';
                    $sqlHeaderSub = "select * from headernavigationsublink where headerid=" . $row['id'];
                    $result1 = mysqli_query($con, $sqlHeaderSub);
                    while ($row1 = mysqli_fetch_assoc($result1)) {
                        $subheaderTitle = $row1['subtitle'];
                        $subheaderLink = $row1['link'];
                        echo '<li><a>' . $subheaderTitle . '</a></li>';
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
        var toggler = document.getElementsByClassName("careter");
        var i;
        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("careter-down");
            });
        }
    </script>



</html>