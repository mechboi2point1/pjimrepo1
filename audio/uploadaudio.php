<?php
session_start();
include('../connection.php');
include('../cmsadmin/admin/adminheader.php');
if (isset($_SESSION['token'])) {
    $token = $_SESSION['token'];
    $sql = "select * from sessionTable where token='$token'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $email = $row['email'];
    $count = mysqli_num_rows($result);
    $title = $_POST['title'];

    if ($count == 1) {

        if (isset($_POST['submit'])) {
            echo "<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap' rel='stylesheet'>
  </head>
  <title>File Success</title>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: 'Nunito Sans', 'Helvetica Neue', sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class='card'>
      <div style='border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;'>
        <i class='checkmark'>✓</i>
      </div>
        <h1>Success</h1>";
            // Configure upload directory and allowed file types
            $upload_dir = 'uploads';
            $allowed_types = array('mp3');
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
            $link .= '/kalyani2022/pjim/audio/';
            // Define maxsize for files i.e 2MB
            //$maxsize = 2 * 1024 * 1024;

            // Checks if user sent an empty form
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
                        if (false)
                            echo "Error: File size is larger than the allowed limit.";

                        // If file with name already exist then append time in
                        // front of name of the file to avoid overwriting of file
                        if (file_exists($filepath)) {
                            $filepath = $upload_dir . time() . $file_name;

                            if (move_uploaded_file($file_tmpname, $filepath)) {
                                $linktodata = $link . $filepath;

                                $sql = "INSERT INTO  audio_table (title,link,addedby) VALUES ('" . $title . "','" . $linktodata . "','" . $email . "')";
                                //echo $sql;
                                $result = mysqli_query($con, $sql);
                                echo "<p><b>{$file_name}</b> successfully uploaded.</p>";

                                //echo "{$file_name} successfully uploaded 1 <br />";
                            } else {
                                echo "Error uploading {$file_name} <br />";
                            }
                        } else {
                            $linktodata = $link . $filepath;
                            if (move_uploaded_file($file_tmpname, $filepath)) {

                                $sql = "INSERT INTO  audio_table (title,link,addedby) VALUES ('" . $title . "','" . $linktodata . "','" . $email . "')";
                                // echo $sql;
                                $result = mysqli_query($con, $sql);
                                echo " 
        <p><b>{$file_name}</b> successfully uploaded.</p>";
                            } else {
                                echo "Error uploading {$file_name} <br />";
                            }
                        }
                    } else {

                        // If file extension not valid
                        echo "Error uploading {$file_name} ";
                        echo "({$file_ext} file type is not allowed)<br / >";
                    }
                }
            } else {

                // If no files selected
                echo "No files selected.";
            }
        } else {
            echo '<html>
<head>
<title>No file selected</title>
<style>
*{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: "Lato", sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
</head>
<body>
<div id="main">
    	<div class="fof">
        		<h1>No File Selected.</h1>
    	</div>
</div>
</body>
</html>';
            // If no files selected

        }
    } else {
        echo '<html>
<head>
<title>Error</title>
<style>
*{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: "Lato", sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
</head>
<body>
<div id="main">
    	<div class="fof">
        		<h1>Failed to upload</h1>
    	</div>
</div>
</body>
</html>';
    }
} else {
    echo '<html>
<head>
<title>Not Authorized</title>
<style>
*{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: "Lato", sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
}

.fof h1{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
</style>
</head>
<body>
<div id="main">
    	<div class="fof">
        		<h1>Not Authorized to upload audio</h1>
    	</div>
</div>
</body>
</html>';
}
echo '</div>
    </body>
</html>';

sleep(2);
echo "<script>window.location.href='../pjimcms/admin/edit/footeredit1.php';</script>";
