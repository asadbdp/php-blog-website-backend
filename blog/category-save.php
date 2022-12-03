<?php
session_start();
if(isset($_SESSION['username'])){
 require_once('../libs/database/database.php');

 if(isset($_POST['create'])){
    $cat_name = $_POST['cat_name'];
    $cat_short_des = $_POST['cat_short_des'];
    

    $sql = "SELECT * FROM blog_category WHERE cat_name='$cat_name'";

    $result = $con->query($sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
        $msg =  "Your Category name Already saved!";
        header('Location: ../all-category.php?msg='.$msg);
    }
    else{
        $sql = "INSERT INTO blog_category(cat_name, cat_short_des) VALUES('$cat_name', '$cat_short_des')";
        $result = $con->query($sql);

    if($result){
        $msg =  "Your Category Name has been Successfully";
        header('Location: ../all-category.php?msg='.$msg);

    }
    else{
        $msg =  "Your Category Name Not Successfully, Please check again";
    header('Location: ../all-category.php?msg='.$msg); 

    }   

    }

 }

}

 ?>
