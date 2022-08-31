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
} else{
    echo "<h4><center>No Session Active on this device</center></h4>";
        sleep(1);
        echo "<script>window.location.href='../../../cmsadmin/';</script>";
}
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    $email = $row['email'];
    if ($count == 1) {

        if (isset($_POST['operations'])) {
            if ($_POST['operations'] == 'delete') {

                $sql = "select *from banner_table where banner_id=" . $_POST['bannerid'];
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count > 0) {

                    $sql = "DELETE FROM banner_table where banner_id=" . $_POST['bannerid'];
                    $result = mysqli_query($con, $sql);
                } else {
                    echo '<h4>Banner is already deleted or dosenot exist in Data Base.</h4>';
                    echo '<hr>';
                }
            }



            if ($_POST['operations'] == 'updateemail') {
                
                $con = mysqli_connect($host, $user, $password, $db_name);
                $emailToUpdate = $_POST['emailupdate'];
                $sql = "UPDATE email_table SET email='$emailToUpdate' WHERE email='" . $_POST['lastemail'] . "'";
                //echo $sql;
                $result = mysqli_query($con, $sql);
            }
            if ($_POST['operations'] == 'deletelink') {

                $link = $_POST['linkid'];

                $sql = "DELETE FROM suggested_link_table WHERE linkid='" . $_POST['linkid'] . "'";
                //echo $sql;
                $result = mysqli_query($con, $sql);
            }
            if ($_POST['operations'] == 'addlink') {
                $sql = "select * from suggested_link_table";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);
                if ($count < 7) {
                    $sql = "INSERT INTO suggested_link_table (title, link) VALUES ('" . $_POST['title'] . "','" . $_POST['link'] . "')";
                    //echo $sql;
                    $result = mysqli_query($con, $sql);
                }
            }
            if ($_POST['operations'] == 'deleteaudio') {

                $link = $_POST['linkid'];

                $sql = "DELETE FROM audio_table WHERE linkid='" . $_POST['linkid'] . "'";
                //echo $sql;
                $result = mysqli_query($con, $sql);
            }
        }
    } else {
        echo 'error';
        exit;
    }
}

?>
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

<body>
    <h3>Footer Content Management</h3>


    <table align="center" cellpadding="10">

        <!----- First Name ---------------------------------------------------------->
        <tr>
            <td>Active Email</td>
            <?php
            $con = mysqli_connect($host, $user, $password, $db_name);
            $sql = "select * from email_table";
            $result = mysqli_query($con, $sql);
            $b = '';
            while ($row = mysqli_fetch_assoc($result)) {
                $b = $row['email'];
            }
            echo '<td><form class="form" action="./footeredit1.php" method="POST"
            enctype="multipart/form-data">
 
        
         
         
<p>
            
                
            <input name="emailupdate" type="text" class="form-control" value="' . $b . '">
             <input type="hidden" value="updateemail" name="operations" readonly>
             
             <input type="hidden" value="' . $b . '" name=lastemail readonly>
            <br><br>
             
            <input class="btn btn-success" type="submit" name="submit" value="Update Email" >
        </p>
 
    </form></td>';
            ?>

        </tr>



        <tr>
            <td>Add New Link</td>
            <?php
            $sql = "select * from suggested_link_table";
            $result = mysqli_query($con, $sql);

            $count = mysqli_num_rows($result);
            if ($count <= 5) {
                echo '<td>
                <form method="POST" action="footeredit1.php">
                    <input type="hidden" name="operations" value="addlink">

                    <input type="text" name="title" placeholder="Link Title" />

                    <input type="text" name="link" placeholder="Link" />

                    <input type="submit" name="submit" value="Submit" />
                </form>

            </td>';
            } else {
                echo '<td>
                Link Cannot be added. Only 6 links can be added at max.

            </td>';
            }
            ?>

        </tr>

        <!----- Qualification---------------------------------------------------------->
        <tr>
            <td>Suggested Links </td>

            <td>
                <table>


                    <?php
                    $sql = "select * from suggested_link_table";
                    $result = mysqli_query($con, $sql);

                    $count = mysqli_num_rows($result);
                    $i = 0;
                    if ($count > 0) {
                        echo '<tr>
                        <td align="center"><b>Link No</b></td>
                        <td align="center"><b>Title</b></td>
                        <td align="center"><b>Link</b></td>

                    </tr>';
                        while ($row = mysqli_fetch_assoc($result)) {

                            $i++;

                            $path = $row['link'];
                            $title = $row['title'];
                            $id = $row['linkid'];
                            echo '
                        <tr>
                        
                        
                        
                        <td><input type="hidden" name="linkid" value="'  . $id . '" readonly>' . $i . '</td>
                        <td><input type="text" name="title" value="'  . $title . '" readonly></td>
                        <td><input type="text" name="link" value="'  . $path . '" readonly></td>
                        
                        
                        
                        <td>
                        <form method="POST" action="footeredit1.php">
                        <input type="hidden" name="operations" value="deletelink">
                        <input type="hidden" name="linkid" value="'  . $id . '">
                        <input type="submit" value="Delete" name="submit">
                        </form></td>
                    </tr>';
                        }
                    } else {
                        echo '<td>No Suggestion Link in Data Base</td>';
                    }
                    ?>



                </table>

            </td>

        </tr>
        <tr>
            <td>Add New Audio</td>
            <?php
            $sql = "select * from suggested_link_table ";
            $result = mysqli_query($con, $sql);

            $count = mysqli_num_rows($result);

            echo '<td>
                <form method="POST" action="../../../audio/uploadaudio.php" enctype="multipart/form-data" >
                    


                 <a>Only .mp3 Exepted</a>   
<input type="file" name="files[]" multiple accept="audio/*">
<input type="text" name="title" placeholder="Audio Title">

                    <input type="submit" name="submit" value="Upload" />
                </form>

            </td>';

            ?>

        </tr>


        <tr>
            <td>Audio Links </td>

            <td>
                <table>


                    <?php
                    $sql = "select * from audio_table ORDER BY linkid DESC";
                    $result = mysqli_query($con, $sql);

                    $count = mysqli_num_rows($result);
                    $i = 0;
                    if ($count > 0) {
                        echo '<tr>
                        <td align="center"><b>Link No</b></td>
                        <td align="center"><b>Audio Title</b></td>
                        <td align="center"><b>Audio</b></td>

                    </tr>';
                        while ($row = mysqli_fetch_assoc($result)) {

                            $i++;

                            $path = $row['link'];
                            $title = $row['title'];
                            $id = $row['linkid'];
                            echo '
                        <tr>
                        
                        
                        
                        <td><input type="hidden" name="linkid" value="'  . $id . '" readonly>' . $i . '</td>
                        <td><input type="text" name="title" value="'  . $title . '" readonly></td>
                        <td><audio controls class="w100">
             							<source src="' . $path . '" type="audio/mp3">
             						</audio></td>
                        
                        
                        
                        <td>
                        <form method="POST" action="footeredit1.php">
                        <input type="hidden" name="operations" value="deleteaudio">
                        <input type="hidden" name="linkid" value="'  . $id . '">
                        <input type="submit" value="Delete" name="submit">
                        </form></td>
                    </tr>';
                        }
                    } else {
                        echo '<td>No Audio in Data Base</td>';
                    }
                    ?>



                </table>

            </td>

        </tr>

    </table>



</body>

</html>