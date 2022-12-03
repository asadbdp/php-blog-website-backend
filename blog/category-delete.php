<?php
session_start();
if(isset($_SESSION['username'])){
 require_once('../libs/database/database.php');


    $id = $_GET['id'];

    $sql = "DELETE FROM blog_category WHERE id=$id";

    $result = $con->query($sql);    

    if($result){
        $msg =  "Your Category has been Deleted";
        header('Location: ../all-category.php?msg='.$msg);
    }
    else{
        $msg =  "Something Wrong!, Try Again";
        header('Location: ../all-category.php?msg='.$msg);

    }   

 }



 ?>