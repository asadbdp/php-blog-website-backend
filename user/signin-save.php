<?php
    session_start();
 require_once('../libs/database/database.php');

 if(isset($_POST['login'])){    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_registration WHERE email='$email' AND password='$password'";

    $result = $con->query($sql);
    $row = mysqli_num_rows($result);

    if($row>0){
        $_SESSION['username'] =$email;
        header('Location: ../admin.php');
    }
    else{
        $msg =  "Your email or Password Does Not Match!, Try Again";
        header('Location: ../signin.php?msg='.$msg); 

    }   

 }

 ?>
