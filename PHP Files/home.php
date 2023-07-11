<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Web Controlled Smart Notice Board</title>
    <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">
	
	<link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<style>

html{
    font-size: 62.5%;
}

input{
  margin: 1.0rem;
}

 /* three box */

 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

/* .container{
    background:linear-gradient(45deg, blueviolet, lightgreen);
    padding:15px 9%;
    padding-bottom: 100px;
    position : absolute;
    
} */

.container .heading{
    text-align: center;
    padding-bottom: 1.5rem;
    color:#fff;
    text-shadow: 0 .5rem 1.0rem rgba(0,0,0,.2);
    font-size: 5.0rem;
}

.container .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:1.5rem;
}

.container .box-container .box{
    box-shadow: 0 .5rem 1.0rem rgba(0,0,0,.2);
    border-radius: .5rem;
    background: #fff;
    text-align: center;
    padding:3.0rem 2.0rem;
}

.container .box-container .box img{
    height: 8.0rem;
}

.container .box-container .box h3{
    color:#444;
    font-size: 2.2rem;
    padding:1.0rem 0;
}

.container .box-container .box p{
    color:#777;
    font-size: 1.5rem;
    line-height: 1.8;
}

.container .box-container .box .btn{
    margin-top: 1.0rem;
    display: inline-block;
    background:#333;
    color:#fff;
    font-size: 1.7rem;
    border-radius: .5rem;
    padding: .8rem 2.5rem;
}

.container .box-container .box .btn:hover{
    letter-spacing: .1rem;
}

.container .box-container .box:hover{
    box-shadow: 0 1.0rem 1.5rem rgba(0,0,0,.3);
    transform: scale(1.03);
}

@media (max-width:76.8rem){
    .container{
        padding:2.0rem;
    }
}

img.background {
      position: absolute;
      left: 0rem;
      top: 0rem;
      z-index: -1;
      width: 100%;
      height: 100%;
      -webkit-filter: blur(.5rem); /* Safari 6.0 - 9.0 */
      filter: blur(.5rem);
      }

      /* code for resposive header */
@media(max-width:99.8rem) {
    html{
        font-size: 55%;
    }
}

@media(max-width:76.8rem) {
    html{
        font-size: 45%;
    }
}

 </style>

</head>
<body>

<!-- THREE BOX  -->
<!-- BOX 1 -->
<img class="background" src="image_bg\Blue_bg.jpg" alt="Aleq">

<div class="container">

<!-- <h1 class="heading">our services</h1> -->

<div class="box-container">

    <div class="box">
        <img src="image_bg\Account.png" alt="">
        <h3>Account</h3>
        <p>Edit Or Update Account</p>
        <a href="Account.php" class="btn">Click Here</a>
    </div>

    <div class="box">
        <img src="image_bg\Modify.png" alt="">
        <h3>Modify Notice </h3>
        <p>Add, Delete, Update Notice</p>
        <a href="notice.php" class="btn">Click Here</a>
    </div>

    <div class="box">
        <img src="image_bg\View.png" alt="">
        <h3>View Notice</h3>
        <p>Display Notice</p>
        <a href="view_notice.php" class="btn">Click Here</a>
    </div>

    <!-- <div class="box">
        <img src="image/icon-4.png" alt="">
        <h3>SASS</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">read more</a>
    </div> -->

    <!-- <div class="box">
        <img src="image/icon-5.png" alt="">
        <h3>JQuery</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">read more</a>
    </div> -->
<!-- 
    <div class="box">
        <img src="image/icon-6.png" alt="">
        <h3>React.js</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">read more</a>
    </div> -->

</div>

</div>

<nav style = "padding: 5px; width: 100%; position: sticky; bottom: 700px;" class= " navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" style = "font-family:  font-size: 40px; 'Times New Roman'" href="#">Digital Notice Board</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul style = " font-size: 15px;  position:relative; top:5px; " class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="signup-check.php">Register</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="signin.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <h3 style = "color: white; font-family: 'Times New Roman', serif; position:relative; left:20rem; top:.2rem;  font-size: 30px;;"> JSPM's Jayawantrao Sawant College of Engineering </h3>
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href=""> <img src="image_bg\profile.png"  width="30" height="30"> <?php echo "Welcome ". $_SESSION['name']?></a>
  </li>
  </ul>
  </div>

  </div>
</nav>

</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<!-- CRUD OPERATION CODE  -->

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 
 <script>
       document.addEventListener('DOMContentLoaded', () => {
       var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
   </script>