
<?php
ob_start();
include 'config.php';
echo $id = $_GET['id'];
mysqli_query($con,"DELETE FROM `info` WHERE Id = $id");

echo "<script>window.location.href='notice.php';</script>";
ob_end+flush();

?>



