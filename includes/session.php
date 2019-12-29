<?php


// 1 include
// 2 session start 
// 3 {if isset check for admin}
// 4 {if isset check for user
//   for uer open connection in variable $conn
//   {then start try catch statement} 
// 5 close pdo connection } 


include 'includes/config.php';
session_start();

if(isset($_SESSION['admin'])){
    header('location: admin/home.php');
}

if(isset($_SESSION['user'])){
    $conn = $pdo->open();

    try{
        $stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(['id'=>$_SESSION['user']]);
        $user = $stmt->fetch();
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }

$pdo->close();
    
}

?>