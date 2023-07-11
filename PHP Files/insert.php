

<?php

// include db connection
include 'config.php';

if(isset($_POST['upload'])){
    $TITLE = $_POST['title'];
    $DESCRIPTION = $_POST['description'];
    $DATE = $_POST['date'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);
// insert data
mysqli_query($con, "INSERT INTO `info`( `Title`, `Description`, `Date`, `Image`) VALUES ('$TITLE','$DESCRIPTION','$DATE','$img_des')");
echo "<script>window.location.href='notice.php';</script>";
}

?>