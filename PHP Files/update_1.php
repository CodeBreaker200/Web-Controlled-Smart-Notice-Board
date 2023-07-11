


<?php
include 'config.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $TITLE = $_POST['title'];
    $DESCRIPTION = $_POST['description'];
    $DATE = $_POST['date'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);
    
    mysqli_query($con,"UPDATE `info` SET `Title`='$TITLE',`Description`='$DESCRIPTION',`Date`='$DATE',`Image`='$img_des' WHERE id = $id  ");
    echo "<script>window.location.href='notice.php';</script>";


}
?>
