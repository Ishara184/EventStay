<?php
session_start();
require "config.php";

    $email = $_SESSION['user_name'];

    $sql_d = "DELETE FROM contact_us WHERE C_User_Email = '$email'";

    if($conn->query($sql_d)){
        header("Location: contactUs.php");
    }else{
        echo "Failed! try again";
    }


?>