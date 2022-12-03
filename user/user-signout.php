<?php
    session_start();
    session_destroy();
    $msg = "Sign out has been Successfully";
    header('Location: ../signin.php?msg='.$msg);
?>