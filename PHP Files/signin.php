<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Login</title>
	<link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="script" href="script.js">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Email ID</label>
     	<input type="text" name="uname" placeholder="Email ID"><br>

     	<label>Password</label>
         <input type="password"  name="password" autocomplete="current-password" required="" id="id_password" placeholder="Password"><br>

        <!-- An element to toggle between password visibility -->
        <label>Show Password</label>
        		
        <input style= "position: relative; left: -44px; top:-24px;" type="checkbox" onclick="myFunction()">
        		
     	<!-- <input type="password" name="password"  placeholder="Password"> -->
		<!--<input type="password" name="password" autocomplete="current-password" required="" id="id_password">
		<!--<i class="far fa-eye" id="togglePassword" -->
		<!--style="position: absolute; top: 60%; right: 37%; cursor: pointer; color: C6B8BB;    "></i><br>-->

     	<button type="submit">Login</button>
		
          <a href="signup.php" class="ca">Create an account</a>
		
     </form>
	 
</body>
</html>

 <script>
		function myFunction() {
		var x = document.getElementById("id_password");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		}
</script>
<script>
       document.addEventListener('DOMContentLoaded', () => {
       var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
   </script>