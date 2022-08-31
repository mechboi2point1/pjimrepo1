 <?php
    session_start();
    include('../../connection.php');
    include('../adminheader.php');
    echo "
            <!DOCTYPE html>
<html>
  
<head>
     <title>Banner Content Management</title>
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
  
<body class='xyz'>"; ?>

 <body>
     <h3>Banner Content Management</h3>


     <table align="center" cellpadding="10">





         <tr>
             <td>Add New Banner</td>
             <?php
                $sql = "select * from suggested_link_table ";
                $result = mysqli_query($con, $sql);

                $count = mysqli_num_rows($result);

                echo '<td>
                <form class="form" action="../../../images/banner/uploadbanner.php" method="POST"
            enctype="multipart/form-data">
 
        
         
         
<p>
            Select files to upload:
             
            <!-- name of the input fields are going to
                be used in our php script-->
            <input class="form-control" type="file" name="files[]" multiple>
             
            <br><br>
             
            <input class="btn btn-success" type="submit" name="submit" value="Upload" >
        </p>
 
    </form>

            </td>';

                ?>

         </tr>


         <tr>
             <td>Active Banners </td>

             <td>
                 <table>


                     <?php
                        $sql = "select * from banner_table";
                        $result = mysqli_query($con, $sql);

                        $count = mysqli_num_rows($result);
                        $i = 0;
                        if ($count > 0) {
                            echo '<tr>
                        <td align="center"><b>Banner No</b></td>
                        <td align="center"><b>Image</b></td>
                        <td align="center"><b>Link</b></td>
                        <td align="center"><b>Added By</b></td>

                    </tr>';
                            while ($row = mysqli_fetch_assoc($result)) {

                                $i++;

                                $path = $row['path'];
                                $bannerid = $row['banner_id'];
                                $by = $row['addedby'];
                                $time = $row['timestamp'];
                                echo '
                        <tr>
                        
                        
                        
                        <td><input type="hidden" name="linkid" value="'  . $id . '" readonly>' . $i . '</td>
                        <td><image src="' . $path . '" alt="..." width="200px" height="150px"></td>
                        <td><input type="text" name="link" value="'  . $path . '" readonly></td>
                        <td><input type="text" name="link" value="'  . $by . '" readonly></td>
                        
                        
                        
                        <td>
                        <form method="POST" action="banner.php">
							<input type="hidden" value="' . $bannerid . '" name="bannerid" readonly>
							<input type="hidden" value="delete" name="operations" readonly>
							<input type="submit" value="Delete This Banner" name="submit">
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