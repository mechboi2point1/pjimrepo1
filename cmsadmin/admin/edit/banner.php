 <?php
    session_start();
    include('../../connection.php');
    include('../adminheader.php');
    echo "
            <!DOCTYPE html>
<html>
  
<head>
    <title>
        Banner Edit
    </title>
      
    <meta charset='utf-8'> 
      
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
      
    <link rel='stylesheet' href= 
'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 
        
    <script src= 
'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'> 
    </script> 
        
    <script src= 
'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'> 
    </script> 
        
    <script src= 
'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'> 
    </script> 
    <style>
    :root {
  --gradient: linear-gradient(to left top, #DD2476 10%, #FF512F 90%) !important;
}

body {
  
}

.card {
  background: #222;
  border: 1px solid #dd2476;
  color: rgba(250, 250, 250, 0.8);
  margin-bottom: 2rem;
}

.btn {
  border: 5px solid;
  border-image-slice: 1;
  background: var(--gradient) !important;
  -webkit-background-clip: text !important;
  -webkit-text-fill-color: transparent !important;
  border-image-source:  var(--gradient) !important; 
  text-decoration: none;
  transition: all .4s ease;
}

.btn:hover, .btn:focus {
      background: var(--gradient) !important;
  -webkit-background-clip: none !important;
  -webkit-text-fill-color: #fff !important;
  border: 5px solid #fff !important; 
  box-shadow: #222 1px 0 10px;
  text-decoration: underline;
}
    </style>
      
</head>
  
<body class='xyz'>";
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
            }

            echo '<h2>Upload New Banners</h2>';
            echo '<form class="form" action="../../../images/banner/uploadbanner.php" method="POST"
            enctype="multipart/form-data">
 
        
         
         
<p>
            Select files to upload:
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input class="form-control" type="file" name="files[]" multiple>
             
            <br><br>
             
            <input class="btn btn-success" type="submit" name="submit" value="Upload" >
        </p>
 
    </form>';
            echo '<hr>';
            echo '<h2 style="text-align:center;">Active Banners</h2>';
            $sql = "select * from banner_table";
            $result = mysqli_query($con, $sql);

            $count = mysqli_num_rows($result);


            $i = 0;
            echo '<div class="container mx-auto mt-4">
  <div class="row">';
            while ($row = mysqli_fetch_assoc($result)) {
                $path = $row['path'];
                $bannerid = $row['banner_id'];
                $by = $row['addedby'];
                $time = $row['timestamp'];

                echo '<div class="col-md-4">
      <div class="card" style="width: 18rem;">
  <img src="' . $path . '" class="card-img-top" alt="..." width="200px" height="150px">
  <div class="card-body">
    
        <h6 class="card-subtitle mb-2 text-muted">Banner Added By:' . $by . ' On:' . $time . '</h6>
       
    <form method="POST" action="banner.php">
							<input type="hidden" value="' . $bannerid . '" name="bannerid" readonly>
							<input type="hidden" value="delete" name="operations" readonly>
							<input type="submit" value="Delete This Banner" name="submit">
							</form>
  </div>
  </div>
    </div>';


                $i++;
            }
            echo '</div></div>';
        } else {
            echo 'Not allowed to access this page';
            header('Location:../../../../pjim/cmsadmin/');
            exit();
        }
    } else {
        echo 'Not allowed to access this page';
        header('Location:../../../../pjim/cmsadmin/');
        exit();
    }
    echo '</body></html>';


    ?>