<?php 
include 'config.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$q = "select * from user where email = '$email' && password = '$pass' ";
$result = mysqli_query($conn,$q);

    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "duplicate signup";
       }else{
           $sql = "insert into user(email, password) values('$email', '$pass')";
           mysqli_query($conn,$sql);
       }

header("location:login.php");

?>