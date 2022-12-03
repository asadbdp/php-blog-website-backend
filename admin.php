<?php 
session_start();
if(isset($_SESSION['username'])){

include('backend/dashboard.php');
}
else{
    $msg =  "Please, Sign In at First";
    header('Location: signin.php?msg='.$msg); 
}
?>