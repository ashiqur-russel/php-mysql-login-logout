<?php  require_once 'includes/header.php'?>

<?php

// logout session
 if(isset($_SESSION['sessionId'])){
     echo "Welcome back ". $_SESSION['sessionUser'];
 }else{
     echo "HOME";
 }
?>

<?php require_once 'includes/footer.php' ?>