<?php
session_start();
if(isset($_SESSION['username'])){
 require_once('../libs/database/database.php');

 if(isset($_POST['update'])){ 
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE user_registration SET fullname='$fullname', email='$email' WHERE id=$id";

    $result = $con->query($sql);    

    if($result){
        $msg =  "Your Account has been Updated";
        header('Location: ../all-users.php?msg='.$msg);
    }
    else{
        $msg =  "Something Wrong!, Try Again";
        header('Location: ../all-users.php?msg='.$msg);

    }   

 }


}
 ?>