<?php
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitlog'])) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $NIC = $_POST['nic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $rePassword = $_POST['re-password'];

    if($password === $rePassword){ // to check the password are match.
        $sql = "INSERT INTO Registered_User (User_Email, P_No, F_Name, L_Name, NIC, User_Password)
            VALUES ('$email' , '$phone' , '$first_name' , '$last_name' , '$NIC' , '$password')";

        if ($conn -> query($sql) == TRUE) {
            header("Location:login.php?now log in");
            exit();
        } else {
            $message = "Error: " .$sql. "<br>" .$conn -> error;
            header("Location:login.php?error=".$message);
            exit();
        }
    }else {
        header("Location:login.php?error=password missmatch");
        exit();
    }

}

?>