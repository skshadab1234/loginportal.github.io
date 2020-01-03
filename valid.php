<?php 
include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$q = "select * from user where email = '$email' && password = '$pass' ";
$result = mysqli_query($conn,$q);
    $num = mysqli_num_rows($result);
    if($num){
        $_SESSION['email'] = $email;
        header("location:home.php");
    }else{
          
       }

header("location:index.php")

?>