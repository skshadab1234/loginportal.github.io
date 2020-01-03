<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<?php  

include 'header.php';
include 'config.php'

?>
<body style="background:#c2c2c2;"> 

        <div class="container"  style="padding:20px 20px;background:rgba(0,0,0,0.5);margin:100px auto;width:300px" >
            <h5 class="login">Signup </h5>
            <hr>
           <form action="register.php" method="post">
           <div class="container-fluid" >
           <label for="">EMAIL</label><br>
           <input type="email" name="email" placeholder="email" required>

           <label for="">Password</label><br>
           <input type="password" name="pass" placeholder="password" required>
           
           <button type=submit id="login1" name="submit" class="btn btn-success btn-default form-control">LOGIN</button>
           </div>
           
           </form>
        </div>




</body>
</html>
