<?php
session_start();
require "config.php";

    $email = $_SESSION['user_name'];

    $sql_d = "DELETE FROM reservation WHERE User_Email = '$email'";

    if($conn->query($sql_d)){
        header("Location: profile.php");
    }else{
        echo "Failed! try again";
    }


?>