<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>UPDATE</title>
     <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">


</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","id20715040_login","V1C71z<etX_UGY2b");
    $db = mysqli_select_db($conn, 'id20715040_test_db');

    $id = $_POST['id'];

    $query = "SELECT * FROM users WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run ))
        {
            ?>
    <div class= "container">
        <div class = "jumbotron">
           
            <h2>UPDATE DATA</h2>
            <hr>
            <form style= "  position: relative; left: 260px;" action="" method= "post">
                <input type="hidden" name= "id" value= "<?php echo $row['id'] ?>">
                <div>
                    <label for="">Name</label>
                    <input type="text" name= "name" class= "form-control"  value= "<?php echo $row['name'] ?>" placeholder="Enter Name" required>
                </div>
                
                <div>
                    <label for="">Email</label>
                    <input type="text" name= "user_name" class= "form-control"  value= "<?php echo $row['user_name'] ?>" placeholder="Enter Email" required>
                </div> 
            
            <!-- <button type="submit" name="update" class="btn btn-primary">UPDATE</button> -->
                <br><button type= "submit" name= "update" class= "btn btn-primary"> UPDATE </button>

                <a href="Account.php" class="btn btn-danger"> CANCEL </a>
            </form>
            <hr>
            <!-- update php -->
            <?php
            if(isset($_POST['update']))
            {
                $name = $_POST['name'];
                $user_name = $_POST['user_name'];

                $query = "UPDATE users SET name='$name', user_name='$user_name' WHERE id='$id'";
                $query_run = mysqli_query($conn, $query);
                if($query_run)
                {
                    echo '<script> alert("Data Updated"); <?script>';   
                    header("location:Account.php");
                }
                else
                {
                    echo '<script> alert("Data Not Updated"); <?script>';   

                }

            }
            ?>

        </div>

    </div>
    

            <?php
        }
    }
    else
    {
        echo '<script> alert("No Record Found"); <?script>';
    }

    ?>
</body>
</html>