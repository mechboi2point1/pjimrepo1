<?php
session_start();
include('../../connection.php');


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
    echo "<h4><center>No Session Active on this device</center></h4>";
    sleep(1);
    echo "<script>window.location.href='../../index.php';</script>";
}
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $email = $row['email'];
    if ($count == 1) {
        if ($_POST['operations'] == 'update_gurukul_icon_delete') {
            $subtitle = $_POST['subtitle'];
            $id = $_POST['id'];
            $sql = "UPDATE headernavigationsublink SET subtitle='$subtitle' WHERE subid=" . $id;
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='headeredit.php';</script>";
        } elseif ($_POST['operations'] == 'update_gurukul_quote') {
            $content = $_POST['content'];
            $id = $_POST['id'];
            $sql = "UPDATE gurukul_content_table SET content='$content' WHERE content_section='about_us3_quote'";
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'delete_subtitle_list') {
            //$content = $_POST['content'];
            $id = $_POST['id'];
            $sql = "DELETE from gurukul_content_table WHERE content_section='about_us3' AND id='$id'";
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'update_subtitle_list_title') {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $sql = "UPDATE gurukul_content_table SET title='$title' where content_section='about_us3' AND id='$id'";
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'update_subtitle_list_content') {
            $id = $_POST['id'];


            $title = $_POST['content'];

            $sql = "UPDATE gurukul_content_table SET content='$title' where content_section='about_us3' AND id='$id'";
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'add_subtitle_list_content') {
            $title = $_POST['title'];


            $content = $_POST['content'];

            $sql = "INSERT into gurukul_content_table (content,title,content_section) values('$content','$title','about_us3')";
            //echo $sql;
            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'update_gurukul_footer_banner_title') {
            $title = $_POST['title'];


            $sql = "UPDATE gurukul_content_table SET title='$title' where content_section='about_us_footer_image'";


            $result = mysqli_query($con, $sql);
            echo "<script>window.location.href='editgurukul.php';</script>";
        } elseif ($_POST['operations'] == 'about_us_image_title') {
            $title = $_POST['title'];



            $sql = "UPDATE gurukul_content_table SET imagetitle='$title' WHERE content_section='about_us1'";

            $result = mysqli_query($con, $sql);
        } elseif ($_POST['operations'] == 'about_us_content_update') {
            $title = htmlspecialchars($_POST['title'], ENT_QUOTES);
            $content = htmlspecialchars($_POST['content'], ENT_QUOTES);


            $sql = "UPDATE gurukul_content_table SET title='$title',content='$content' WHERE content_section='about_us1'";

            $result = mysqli_query($con, $sql);
        }
    } else {
        echo 'error';
        exit;
    }
}

?>
<html>

<head>
    <title>Gurukul Content Management</title>
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

            border: 2px solid navy
        }

        table.inner {
            border: 0px
        }
    </style>

</head>

<body>
    <h3>Gurukul Content Management</h3>


    <table class="table table-responsive" align="center" cellpadding="10">
        <caption style="text-align:center;color:black">
            <h4>About Us Editing Tool</h4>
        </caption>
        <!----- First Name ---------------------------------------------------------->
        <tr>
            <td>Banner</td>
            <td><?php
                include('../../connection.php');
                $currentPage = $_SERVER['SCRIPT_NAME'];

                // To Get the directory name in 
                // which file is stored.
                $currentPage = substr($currentPage, 1);

                // To Show the Current Filename on Page.
                $filename = basename($currentPage, '.php') . '.php';

                $sql = "SELECT * FROM headernavigation WHERE 	headerlink LIKE '%gurukul.php%'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $path = $row['bannerlink'];
                $id = $row['id'];
                echo '<img src="' . $path . '" style="width:200px;height:150px">';
                if ($path) {
                    echo '
                    <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="files[]" accept="image/*">
                    <input type="hidden" name="operations" value="update_gurukul_banner">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="submit" value="Upload New">
                    </form>';
                } else {
                    echo '
                    <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="files[]" accept="image/*">
                    <input type="hidden" name="operations" value="update_gurukul_banner">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="submit" value="Upload New">
                    </form>';
                }
                ?>
            </td>

        </tr>



        <tr>
            <td>Active Icons</td>
            <td>
                <?php
                include('../../connection.php');
                $currentPage = $_SERVER['SCRIPT_NAME'];

                // To Get the directory name in 
                // which file is stored.
                $currentPage = substr($currentPage, 1);

                // To Show the Current Filename on Page.
                $filename = basename($currentPage, '.php') . '.php';

                $sql = "SELECT * FROM headernavigationsublink WHERE link LIKE '%gurukul.php%'";
                $result = mysqli_query($con, $sql);

                echo '<table class="table table-bordered">';

                while ($row = mysqli_fetch_assoc($result)) {
                    $link = $row['link'];
                    $icon = $row['icon'];
                    $subtitle = $row['subtitle'];
                    $id = '#' . explode("#", $link)[1];
                    $id_id = explode("#", $link)[1];
                    $colID = $row['subid'];

                    echo '<tr><td>
                             <form method="POST" action="editgurukul.php">
                    <input type="text" name="subtitle" value="' . $subtitle . '">
                    <input type="hidden" name="operations" value="update_gurukul_icon_delete">
                    <input type="hidden" name="id" value="' . $colID . '">
                    <input type="submit" value="Update Subtitle">
                    </form>
                    </td><td>
                               Icon:<img src="data:image/png;base64,' . base64_encode($icon) . '" style="height:20px;width:30px">
                               <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="file" required>
                    <input type="hidden" name="operations" value="update_gurukul_icon">
                    <input type="hidden" name="id" value="' . $colID . '">
                    <input type="submit" value="Update Icon">
                    </form>
                              
                           
                      </tr> </td> ';
                }

                echo '</table>';
                ?>
            </td>

        </tr>

        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>About Us</td>
            <td>
                <table>
                    <?php
                    include('../../connection.php');
                    mysqli_set_charset( $con, 'utf8');
                    $sql = "SELECT * FROM gurukul_content_table WHERE content_section='about_us1'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    echo '
                                    <td>
                                    <img src="' . $row['image'] . '" style="width:200px;height:150px"><br>Image title<br>
                                    <form method="POST" action="editgurukul.php">
                                    <input type="hidden" name="operations" value="about_us_image_title">
                                    <input type="text"  name="title"value="' . $row['imagetitle'] . '">
                                    <input type="submit" value="Update Image Title">
                                    </form>
                                    <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="files[]" accept="image/*">
                    <input type="hidden" name="operations" value="about_us_image">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="submit" value="Upload New">
                    </form>
                                    <td>
                                    
                               <td>
                               <form method="POST" action="editgurukul.php">
                               <input type="hidden" name="operations" value="about_us_content_update">
                                Text Title<br><textarea name="title" rows="1" cols="50">' .  $row['title'] . '</textarea><br>
                                Content<br>
                                  <textarea name="content" rows="6" cols="50">' . $row['content'] . '</textarea>
                                  <input type="submit" value="Update">
                                  </form>
                               </td> ';

                    ?>
                </table>
            </td>

        </tr>




        <tr>
            <td>Sub content</td>

            <td>
                <table style="border: 2px solid navy">
                    <?php
                    //include('connection.php');
                    $sql = "SELECT * FROM gurukul_content_table WHERE content_section='about_us3'";
                    $result = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($result)) {

                        echo '<tr><td><form method="POST" action="editgurukul.php"><input type="hidden" value="' . $row['id'] . '" name="id"><input type="hidden" name="operations" value="update_subtitle_list_title"><input type="text" name="title" value="' . $row['title'] . '"><br><input type="submit" value="Update Title"></form></td><td><form method="POST" action="editgurukul.php"><input type="hidden" value="' . $row['id'] . '" name="id"><input type="hidden" name="operations" value="update_subtitle_list_content"><textarea name="content" rows="6" cols="50">' . $row['content'] . '</textarea><br><input type="submit" value="Update Content"></form><form method="POST" action="editgurukul.php"><input type="hidden" value="delete_subtitle_list" name="operations"><input type="hidden" value="' . $row['id'] . '" name="id"><input type="submit" value="Delete this content"></form></td></tr>
                        
                                        
                                    ';
                    }
                    echo '<tr>
                    <td>Add New Content</td>
                    <td>
                    <form method="POST" action="editgurukul.php">
                    <input type="hidden" name="operations" value="add_subtitle_list_content">
                    <input name="title" type="text" placeholder="Title of the Content"><br>
                    <textarea name="content" rows="6" cols="50" placeholder="Type your Content"></textarea>
                    <br>
                    <input type="submit" value="Add New Content">
                    </form>
                    </td>
                    </tr>';
                    ?>
                </table>

            </td>

        </tr>
        <tr>
            <td>Quote</td>

            <td>
                <table>

                    <tr>
                        <?php
                        include('../../connection.php');
                        mysqli_set_charset( $con, 'utf8');
                        $sql = "SELECT * FROM gurukul_content_table WHERE content_section='about_us3_quote'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_fetch_array($result);
                        echo '<form method="POST" action="editgurukul.php">
                    <textarea name="content" rows="6" cols="50">' . $row['content'] . '</textarea>
                    <input type="hidden" name="operations" value="update_gurukul_quote">
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <input type="submit" value="Update Quote">
                    </form>';
                        ?>

                    </tr>

                </table>

            </td>

        </tr>
        <tr>
            <td>Footer Image</td>
            <td><?php
                include('../../connection.php');
                $currentPage = $_SERVER['SCRIPT_NAME'];

                // To Get the directory name in 
                // which file is stored.
                $currentPage = substr($currentPage, 1);

                // To Show the Current Filename on Page.
                $filename = basename($currentPage, '.php') . '.php';

                $sql = "SELECT * FROM gurukul_content_table WHERE content_section='about_us_footer_image'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                $path = $row['image'];
                $id = $row['id'];
                echo '<img src="' . $path . '" style="width:200px;height:150px"><br>
                <form method="POST" action="editgurukul.php">
                    <textarea name="title" rows="1" cols="50">' .  $row['title'] . '</textarea>
                    <input type="hidden" name="operations" value="update_gurukul_footer_banner_title">
                    
                    <input type="submit" value="Update Title">
                    </form>
                ';

                if ($path) {
                    echo '
                    <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="files[]" accept="image/*">
                    <input type="hidden" name="operations" value="update_gurukul_footer_banner">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="submit" value="Upload New">
                    </form>';
                } else {
                    echo '
                    <form method="POST" action="../../../images/uploadbannerforfilesystem.php" enctype="multipart/form-data">
                    <input type="file" name="files[]" accept="image/*">
                    <input type="hidden" name="operations" value="update_gurukul_footer_banner">
                    <input type="hidden" name="id" value="' . $id . '">
                    <input type="submit" value="Upload New">
                    </form>';
                }
                ?>
            </td>

        </tr>

    </table>
    <table class="table table-responsive" align="center" cellpadding="10">
        <caption style="text-align:center;color:black">
            <h4>History Editing Tool</h4>
        </caption>


    </table>
    <table class="table table-responsive" align="center" cellpadding="10">
        <caption style="text-align:center;color:black">
            <h4>Mission & Principles Editing Tool</h4>
        </caption>


    </table>
    <table class="table table-responsive" align="center" cellpadding="10">
        <caption style="text-align:center;color:black">
            <h4>Our Unique Glossary Editing Tool</h4>
        </caption>
        <!----- First Name ---------------------------------------------------------->

    </table>



</body>

</html>