<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&display=swap" rel="stylesheet">
</head>
<body>
   <div class="overlay"></div>

   <form action="../menu/menu.php" method="post" class="box">
   <div class="header">
           <center>
           <h2>Login To Your Account</h2>
           </center>
           <center>
           <h5>A Better Life For You</h5>
           </center>
       </div>
       <div class="login-area">
           <input type="text" class="username" placeholder="Username" name="nama">
           <input type="password" class="password" placeholder="Password" name="password">
           
           <button class="submit" name="submit">login</button>
           <!-- <input type="submit" class="submit" value="login" name="submit"> -->
           
          
           <!-- <a href="homecare_menu/index.html" class="submit">Log in</a> -->
           <!-- <a href="homecare_menu/index.html"></a> -->
       </div>
   </form> 
</body>
</html>