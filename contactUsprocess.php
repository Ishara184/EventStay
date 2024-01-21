<?php
require "config.php";

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $sql_contact = "INSERT INTO Contact_Us (C_User_Email, User_Name, Phone_Num, User_Message)
            VALUES ('$email' , '$name' , '$phone' , '$message')";

    if ($conn -> query($sql_contact) == TRUE) {
        header("Location:contactUs.html?complete.");
        $message = "New item added succeccfully";
    } else {
        header("Location:contactUs.html?error.");
        $message = "Error: " .$sql. "<br>" .$conn -> error;
    }

    header("Location:contactUs.php");
}

?>