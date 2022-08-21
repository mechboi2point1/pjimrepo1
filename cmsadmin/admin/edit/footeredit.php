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
            if (isset($_POST['updateemail'])) {

                if ($_POST['updateemail'] == 'updateemail') {
                    $host = "localhost";
                    $user = "cassixcom_aa_user";
                    $password = 'akhilaanimesh.1410';
                    $db_name = "cassixcom_cassixco_AA_db";
                    $con = mysqli_connect($host, $user, $password, $db_name);
                    $emailToUpdate = $_POST['emailupdate'];
                    $sql = "UPDATE email_table SET email='$emailToUpdate' WHERE email='" . $_POST['lastemail'] . "'";
                    //echo $sql;
                    $result = mysqli_query($con, $sql);
                }
            }

            echo '<h2>Edit Email</h2>';
            $host = "localhost";
            $user = "cassixcom_aa_user";
            $password = 'akhilaanimesh.1410';
            $db_name = "cassixcom_cassixco_AA_db";
            $con = mysqli_connect($host, $user, $password, $db_name);
            $sql = "select * from email_table";
            $result = mysqli_query($con, $sql);
            $b = '';
            while ($row = mysqli_fetch_assoc($result)) {
                $b = $row['email'];
            }
            echo '<form class="form" action="./footeredit.php" method="POST"
            enctype="multipart/form-data">
 
        
         
         
<p>
            
                
            <input name="emailupdate" type="text" class="form-control" value="' . $b . '">
             <input type="hidden" value="updateemail" name="operations" readonly>
             <input type="hidden" value="updateemail" name="updateemail" readonly>
             <input type="hidden" value="' . $b . '" name=lastemail readonly>
            <br><br>
             
            <input class="btn btn-success" type="submit" name="submit" value="Update Email" >
        </p>
 
    </form>';
            echo '<hr>';
            echo '<h2 style="text-align:center;">Active Banners</h2>';
            $sql = "select * from suggested_link_table";
            $result = mysqli_query($con, $sql);

            $count = mysqli_num_rows($result);


            $i = 0;
            echo '<div class="">
  <div class="">';
            while ($row = mysqli_fetch_assoc($result)) {
                $path = $row['link'];
                $title = $row['title'];
                $id = $row['linkind'];


                echo '<div class="">
      <div class="">
  <table class="table table-responsive">
  <tr>
  <td>Suggestion Title</td>
  <td>Link</td>
  <td>Edit</td>
  <tr>
  <form method="POST" action="footeredit.php">
  <input type="hidden" value="' . $id . '" name="linkid" readonly>
  <input type="hidden" value="updatelink" name="operations" readonly>
<td><input type="text" value="' . $title . '"</td>
<td><input type="text" value="' . $path . '"</td>

<td>

							
							
							<input type="submit" value="Update" name="submit">
							
</td>
</form>
  </tr>
  </table>
  
  </div>
    </div>';


                $i++;
                echo '<br/>';
            }
            echo '</div></div>';
        } else {
            echo 'Not aurthorised to access this page';
        }
    } else {
        echo 'Not aurthorised to access this page';
        sleep(1);
        header("Location:../../index.php");
    }
    echo '</body></html>';


    ?>