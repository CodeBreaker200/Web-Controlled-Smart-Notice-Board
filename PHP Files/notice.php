<!--firebase-->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notice</title>
   <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">
   <link rel="stylesheet" href="./index.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<style>
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
<body>
  <!-- NAV BAR -->
  <img class="background" src="image_bg\N_bg.jpg" alt="Aleq">

  <nav style = "padding: 5px; width: 100%; position: sticky; bottom: 700px;" class= " navbar navbar-expand-lg navbar-dark bg-dark">
  <!-- Navbar content -->
  <a class="navbar-brand" style = "font-family: 'Times New Roman'" href="#">Digital Notice Board</a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="home.php">Previous Page</a>
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
  <!-- TABLE  -->
  <center>
      <div class = "main">
      <form   action="insert.php" method="POST" enctype="multipart/form-data" >
        <h1  style = "position:relative; bottom:25px;">Modify Notice</h1>
      <div class = "title">
        <b><label for="">Title:</label><br></b>
        <input type="text" name ="title" m-5><br><br>
      </div>
      <div class = "dis">
         <b><label for="">Description:</label><br></b>
         <input type="textarea" name = "description" id= "" m-5><br><br>
      </div>
      <div class = "date">
        <b><label for="birthday">Date:</label><br></b>
        <input type="date" id="" name="date"><br><br>
      </div>
      <div class = "file">
       <b><label for="">Image:</label><br></b>
        <input style = "position:relative; left:90px;" type="file" name="image" id = ""><br><br>
      </div>
      <div class = "save">
        <button class = "btn btn-primary " name = "upload">Upload </button>
      </div>
    </form>
</div>
  </center>
  
  <!-- firebase -->
<center>
  
  <div class = "fire">
  <h1  style = "font-size: 20px;  font-family: Times New Roman, Times, serif; font-weight: bold;">Upload File On Cloud</h1><br>
    <div class="plus">
    <input
      type="file"
      class="inputFile"
      id="fileInp"
      onchange="getFile(event)"
      accept="image/png, image/jpeg, video/mp4"
    />
    <label for="fileInp"></label>
    <span class="fileText"></span>
    </div>
  
    <div>
    <button onclick="upImage()">UPLOAD FILE</button><br><br>
    </div>
  
    <div class="bar">
      <div class="progress"></div>
    </div>
    <div class="uploadPercentage">0%</div>
  
    <!-- <div class="imageUploaded">
      <img alt="" class="img" />
    </div>
   -->
  </div>
</center>

  
<!-- fetch data -->
<div class="container">
<table class="table">
  <thead>
    <tr  style="color:#000000;">
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
      <th scope="col">Image</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody style="color:#000000;">
  <?php
        include 'config.php';
        $pic = mysqli_query($con,"SELECT * FROM `info`");
        while($row = mysqli_fetch_array($pic)){
        echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[Title]</td>
                <td>$row[Description]</td>
                <td>$row[Date]</td>
                <td>$row[Image]</td>
                <td><a href='delete.php? id= $row[id]' class = 'btn btn-danger'>Delete</a></td>
                <td><a href='update.php? id= $row[id]' class = 'btn btn-danger'>Update</a></td>
                <td></td>
                
                
                
            </tr>
            ";
        }
        
        ?>
  </tbody>
</table>
</div>

<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
<script src="./index.js"></script>
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