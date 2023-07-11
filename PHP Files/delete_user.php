<?php
ob_start();
$conn = mysqli_connect("localhost","id20715040_login","V1C71z<etX_UGY2b");
$db= mysqli_select_db($conn, "id20715040_test_db");

if(isset($_POST['delete']))
{
    $id= $_POST['id'];

    $query = "DELETE FROM users WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        header("location:Account.php");
        ob_end_flush();
    }
    else
    {
        echo '<script> alert("Data Deleted"); </script>';
    }
}

