<?php
session_start();
if(isset($_SESSION['username'])){
 require_once('../libs/database/database.php');


    $id = $_GET['id'];

    $sql = "DELETE FROM user_registration WHERE id=$id";

    $result = $con->query($sql);    

    if($result){
        $msg =  "Your Account has been Deleted";
        header('Location: ../all-users.php?msg='.$msg);
    }
    else{
        $msg =  "Something Wrong!, Try Again";
        header('Location: ../all-users.php?msg='.$msg);

    }   

 }



 ?>