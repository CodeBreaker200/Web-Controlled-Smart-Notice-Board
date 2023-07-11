<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gloock&family=Noto+Sans+TC:wght@500&family=Open+Sans:wght@300;400;500;600&family=Poppins:wght@200;300;400;600&family=Raleway:wght@100;200;300;400&display=swap" rel="stylesheet">
    <script>type="text/javascript" src = "script.js"</script>
    <title>Web Controlled Smart Notice Board</title>
     <link rel="shortcut icon" type="image/png" href="image_bg\Icon.png">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border_box;
        }

        a{
            text-decoration : none;
        }

        a:hover{
            text-decoration: none;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: 'Raleway', sans-serif;  
        }
        section{
            padding: 60px 0;
            overflow: hidden ;
        }
        /* banner */
        #hero{
            width: 100%;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0.6)), url(University.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        #hero .container{
            padding-top: 80px;
        }

        #hero h1{
            font-size:48px;
            font-weight: 700;
            line-height: 56px;
            color: #fff;
            margin:  0 0 10px 0;
        }

        #hero h2{
            color: #eee;
            margin-bottom: 40px;
            font-size: 30px;
            font-weight: 400;
            font-family: font-family: 'Open Sans', sans-serif;
            letter-spacing: 0.5px;
            text-transform: upppercase;

        }

        #hero .btn_get_started{
            font-family: font-family: 'Poppins', sans-serif;
            text-transform:uppercase;
            font-weight: 500;
            font-size: 14px;
            display: inline-block;
            padding: 8px 28px;
            border-radius: 50px;
            margin: 10px;
            border: 2px solid #fff;
            background-color: transparent;
            color: #fff;
            transition: 0.6s all;

        }

        #hero .btn_get_started:hover{
            background-color: #009970;
            border : 2px solid #fff;
        }
    </style>
  </head>
  <body>
    <!-- banner section  -->

    <section id = "hero" class = "d-flex align_item-center">
        <div class = "container text-center">
            <h1>JSPM's Jayawantrao Sawant College of Engineering</h1>
            <h2>WEB CONTROLLED SMART NOTICE BOARD</h2>
            <a href="signin.php" class = "btn_get_started">Get Started</a>
        </div>

    </section>
   <script>
       document.addEventListener('DOMContentLoaded', () => {
       var disclaimer =  document.querySelector("img[alt='www.000webhost.com']");
   if(disclaimer){
       disclaimer.remove();
   }  
 });
   </script>
 
</body>
</html>