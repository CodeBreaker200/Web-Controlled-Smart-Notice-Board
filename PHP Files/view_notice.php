<?php
include('config.php');
$query="select * from image";
$query_run= mysqli_query($con, $query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
<title>View Notice</title>
 <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">

<!-- // php   -->
<?php 
/*include_once('db_conn.php'); 
// SQL query to retrieve data
$sql = "SELECT * FROM users";
// Execute query and store result set
$result = mysqli_query($conn, $sql);
*/
require_once 'db_conn.php';
require_once 'Account_check.php';

$result = show_data();
?> 

</head>
<body class="bg-dark">

        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <div class="card mt-5">
                        <div calss = "card-header">
                        <a href="home.php" class="btn btn-info" role="button">Back</a> 
                            <h2 class = "display-6 text-center">Notice</h2>
                            <div>
                            <div calss = "card-body">
                              <table class="table table-bordered text-center">
                            <tr class = "bg-dark text-white">
                                <td> ID </td>
                                <td> TITLE </td>
                                <td> DESCRIPTION </td>
                                <td>DATA</td>
                                <td>IMAGE</td>
                            </tr>

                            </tr> 
                            <?php
                            
                            // Loop through result set and output data
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                   
                                    <tr> <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['Title']; ?></td>
                                    <td><?php echo $row['Description']; ?></td>
                                    <td><?php echo $row['Date']; ?></td>
                                    <td><a href="<?php echo $row['Image']; ?>" target="_blank">View Notice</a></td>
                                    
                                   

                                   
                                    
                                </tr>
                         <?php

                                }

                         ?>

                        <?php        
                            } else {
                                echo "0 results";
                            }
                            // Close connection
                            mysqli_close($con);
                            
                            ?>
                            
                            

                            </table>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<script>
       document.addEventListener('DOMContentLoaded', () => {
       var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
   </script>