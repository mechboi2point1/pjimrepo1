<?php
session_start();
include('../connection.php');

if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $email = $row['email'];
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $id = $_POST['id'];
        //echo $id;

        // Configure upload directory and allowed file types
        $upload_dir = 'uploads';
        $allowed_types = array('jpg', 'png', 'jpeg');
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
        $link .= '/kalyani2022/pjim/images/';
        // Define maxsize for files i.e 2MB
        $maxsize = 2 * 1024 * 1024;

        // Checks if user sent an empty form
        //var_dump($_FILES);
        if ($_POST['operations'] == 'update_gurukul_banner') {


            if (!empty(array_filter($_FILES['files']['name']))) {

                // Loop through each file in files[] array
                foreach ($_FILES['files']['tmp_name'] as $key => $value) {

                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                    $file_name = $_FILES['files']['name'][$key];
                    $file_size = $_FILES['files']['size'][$key];
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                    // Set upload file path
                    $filepath = $upload_dir . $file_name;

                    // Check file type is allowed or not
                    if (in_array(strtolower($file_ext), $allowed_types)) {

                        // Verify file size - 2MB max
                        if (true)


                            // If file with name already exist then append time in
                            // front of name of the file to avoid overwriting of file
                            if (file_exists($filepath)) {
                                $filepath = $upload_dir . time() . $file_name;
                                $linktodata = $link . $filepath;
                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $sql = "UPDATE headernavigation SET bannerlink='$linktodata' WHERE id=" . $id;


                                    $result = mysqli_query($con, $sql);
                                } else {
                                    echo "Error uploading {$file_name} <br />";
                                }
                            } else {

                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $linktodata = $link . $filepath;
                                    $sql = "UPDATE headernavigation SET bannerlink='$linktodata' WHERE id=" . $id;

                                    $result = mysqli_query($con, $sql);
                                } else {
                                }
                            }
                    }
                }
            }
            echo "<script>window.location.href='../pjimcms/admin/edit/editgurukul.php';</script>";
        }
        if ($_POST['operations'] == 'update_gurukul_icon') {

            $id = $_POST['id'];
            $fileName = basename($_FILES["file"]["name"]); //Get File Name 
            $fileType = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION); //Get File Extension

            $fileType = strtolower($fileType); //convert to lowercase
            $uploadFile = $fileName . rand(1000, 10000) . "." . $fileType; //Set File name with Random Number

            //Check File Size greater than 300KB
            if (false) {
                echo "Upload Failed.File Size is too Large!!!";
            }
            //Check File Extension
            else if (false) {
                echo "Upload Failed.Invalid File!!!";
            }

            //Upload File
            else {
                //var_dump($_FILES);
                $imgData = addslashes(file_get_contents($_FILES['file']['tmp_name']));
                $sql = "UPDATE headernavigationsublink SET icon='$imgData' WHERE subid=" . $id;
                $result = mysqli_query($con, $sql);
                echo "<script>window.location.href='../pjimcms/admin/edit/headeredit.php';</script>";
                /*echo $sql = "insert into users(image) values('{$imgData}')";
                if ($con->query($sql)) {
                    echo "{$fileName} Upload Success";
                    
                }*/
            }
            echo "<script>window.location.href='../pjimcms/admin/edit/editgurukul.php';</script>";
        }
        if ($_POST['operations'] == 'update_gurukul_footer_banner') {


            if (!empty(array_filter($_FILES['files']['name']))) {

                // Loop through each file in files[] array
                foreach ($_FILES['files']['tmp_name'] as $key => $value) {

                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                    $file_name = $_FILES['files']['name'][$key];
                    $file_size = $_FILES['files']['size'][$key];
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                    // Set upload file path
                    $filepath = $upload_dir . $file_name;

                    // Check file type is allowed or not
                    if (true) {

                        // Verify file size - 2MB max
                        if (true)


                            // If file with name already exist then append time in
                            // front of name of the file to avoid overwriting of file
                            if (file_exists($filepath)) {
                                $filepath = $upload_dir . time() . $file_name;
                                $linktodata = $link . $filepath;
                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $sql = "UPDATE gurukul_content_table SET image='$linktodata' where content_section='about_us_footer_image'";


                                    $result = mysqli_query($con, $sql);
                                } else {
                                    echo "Error uploading {$file_name} <br />";
                                }
                            } else {

                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $linktodata = $link . $filepath;
                                    $sql = "UPDATE gurukul_content_table SET image='$linktodata' WHERE content_section='about_us_footer_image'";

                                    $result = mysqli_query($con, $sql);
                                } else {
                                }
                            }
                    }
                }
            }
            echo "<script>window.location.href='../pjimcms/admin/edit/editgurukul.php';</script>";
        }
        if ($_POST['operations'] == 'about_us_image') {


            if (!empty(array_filter($_FILES['files']['name']))) {

                // Loop through each file in files[] array
                foreach ($_FILES['files']['tmp_name'] as $key => $value) {

                    $file_tmpname = $_FILES['files']['tmp_name'][$key];
                    $file_name = $_FILES['files']['name'][$key];
                    $file_size = $_FILES['files']['size'][$key];
                    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

                    // Set upload file path
                    $filepath = $upload_dir . $file_name;

                    // Check file type is allowed or not
                    if (true) {

                        // Verify file size - 2MB max
                        if (true)


                            // If file with name already exist then append time in
                            // front of name of the file to avoid overwriting of file
                            if (file_exists($filepath)) {
                                $filepath = $upload_dir . time() . $file_name;
                                $linktodata = $link . $filepath;
                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $sql = "UPDATE gurukul_content_table SET image='$linktodata' where content_section='about_us1'";


                                    $result = mysqli_query($con, $sql);
                                } else {
                                    echo "Error uploading {$file_name} <br />";
                                }
                            } else {

                                if (move_uploaded_file($file_tmpname, $filepath)) {
                                    $linktodata = $link . $filepath;
                                    $sql = "UPDATE gurukul_content_table SET image='$linktodata' WHERE content_section='about_us1'";

                                    $result = mysqli_query($con, $sql);
                                } else {
                                }
                            }
                    }
                }
            }
            echo "<script>window.location.href='../pjimcms/admin/edit/editgurukul.php';</script>";
        }
    }
}
                   
           
/*sleep(2);
*/
