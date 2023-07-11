

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
     <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
  /* .main{
    background-color: LightGray;
    margin-top : 10px;
    max-width: 400px;;
  }
.input{
  margin-top: 10px;
}
.title{
  box-sizing: border-box;

}
.main {
  width: 300px;
  border: 5px solid green;
  padding: 50px;
  margin: 20px;
}

input{
  margin : 10px;
} */
.main{
    background-color: white;
    margin-top : 10px;
    max-width: 500px;
    border-radius: 25px;
    border: 2px solid #73AD21
    
  }
.input{
  margin-top: 10px;
  margin: 7px;
}
.title{
  box-sizing: border-box;
  color: 	dark black;
 

}
.main {
  width: 500px;
  border: 10px solid black;
  padding: 50px;
  margin: 20px;
  font-family: "Times New Roman", Times, serif;

}

img.background {
      position: absolute;
      left: 0px;
      top: 0px;
      z-index: -1;
      width: 100%;
      height: 100%;
      -webkit-filter: blur(5px); /* Safari 6.0 - 9.0 */
      filter: blur(5px);
      }
</style>
</head>
<body>
<!-- PHP -->
<?php

include 'config.php';
$id = $_GET['id'];
$Record = mysqli_query($con,"SELECT * FROM `info` WHERE id = $id");
$data = mysqli_fetch_array($Record);

?>
<!-- nav bar -->
  <!-- NAV BAR -->
  <img class="background" src="image_bg\N_bg.jpg" alt="Aleq">

  <nav style = "padding: 5px; width: 100%; position: sticky; bottom: 700px;" class= " navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" style = "font-family: 'Times New Roman'" href="#">Digital Notice Board</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="notice.php">Previous Page</a>
    </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="signup-check.php">Register</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

  <div class="navbar-collapse collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <!-- <a class="nav-link" href="#"> <img src="profile.png"  width="30" height="30"></a> -->
      </li>
     </ul>
  </div>


      <h3 style = "color: white; font-family: 'Times New Roman', serif; position:relative; left:90px; top:2px;"> JSPM's Jayawantrao Sawant College of Engineering </h3>
    </ul>
  
</nav>


<center>
      <div class = "main">
      <form action="update_1.php" method="POST" enctype="multipart/form-data" >
      <h1  style = "position:relative; bottom:25px;">Modify Notice</h1>
      <div class = "title">
        <b><label for="">Title:</label><br></b>
        <input type="text" value = "<?php echo $data['Title']?>" name ="title"><br><br>
      </div>
      <div class = "dis">
         <b><label for="">Description:</label><br></b>
         <input type="textarea" value = "<?php echo $data['Description']?>" name = "description" id= ""><br><br>
      </div>
      <div class = "date">
        <b><label for="birthday">Date:</label><br></b>
        <input type="date" value = "<?php echo $data['Date']?>" id="" name="date"><br><br>
      </div>
      <div class = "file">
       <b><label for="">Image:</label><br></b>
       <input style = "position:relative; left:90px;" type="file"  value = "<?php echo $data['Image']?>" name="image"><br><br>
      

      </div>
      <div class = "update">
            <a href="notice.php" class="btn btn-success"> CANCEL </a>
             <input type="hidden" name = "id" value = "<?php echo $data['id']?>">
            <button type= "submit" name = "update" class = "btn btn-danger m-2">Update</button>
        
         </div>
      </form>
    </div>
  </center>

  <!-- update code -->
 

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