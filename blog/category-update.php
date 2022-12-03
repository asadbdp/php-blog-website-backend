<?php
session_start();
if(isset($_SESSION['username'])){
 require_once('../libs/database/database.php');

 if(isset($_POST['update'])){ 
    $cat_name = $_POST['cat_name'];
    $cat_short_des = $_POST['cat_short_des'];
    $id = $_POST['id'];

    $sql = "UPDATE blog_category SET cat_name='$cat_name', cat_short_des='$cat_short_des' WHERE id=$id";

    $result = $con->query($sql);    

    if($result){
        $msg =  "Your Category has been Updated";
        header('Location: ../all-category.php?msg='.$msg);
    }
    else{
        $msg =  "Something Wrong!, Try Again";
        header('Location: ../all-category?msg='.$msg);

    }   

 }


}
 ?>