<?php
require "config.php";

if(isset($_POST['updateprofile'])){

    $new_firstname = $_POST['fname'];
    $new_lasttname = $_POST['lname'];
    $new_email = $_POST['email'];
    $new_nic = $_POST['nic'];
    $new_phone = $_POST['phonenumber'];
    $new_password = $_POST['password'];

    $sql = "UPDATE Registered_User
    SET P_No = '$new_phone',
        F_Name = '$new_firstname',
        L_Name = '$new_lasttname',
        NIC = '$new_nic',
        User_Password = '$new_password'
    WHERE User_Email = '$new_email'";

    if($conn -> query($sql)){

        header("Location:profile.php?update=update successfully!");
        exit();
    }else{
        header("Location:profile.php?update=Failed! try again");
        exit();
    }
}

if(isset($_POST['deleteaccount'])){

    $email = $_POST['email'];

    $sql_d = "DELETE FROM Registered_User WHERE User_Email = '$email'";

    if($conn->query($sql_d)){
        header("Location:login.php");
        exit();
    }else{
        echo "Failed! try again";
    }
}
?>