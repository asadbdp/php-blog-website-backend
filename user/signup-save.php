<?php

 require_once('../libs/database/database.php');

 if(isset($_POST['submit'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_registration WHERE email='$email'";

    $result = $con->query($sql);
    $row = mysqli_num_rows($result);

    if($row > 0){
        $msg =  "Your Email Already Registered!";
        header('Location: ../signup.php?msg='.$msg);
    }
    else{
        $sql = "INSERT INTO user_registration(fullname, email, password) VALUES('$fullname', '$email', '$password')";
        $result = $con->query($sql);

    if($result){
        $msg =  "Your Signup has been Successfully";
        header('Location: ../signin.php?msg='.$msg);

    }
    else{
        $msg =  "Your Signup Not Successfully, Please check again";
    header('Location: ../signup.php?msg='.$msg); 

    }   

    }

 }

 ?>
