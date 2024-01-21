<?php
session_start();

require "config.php";

if(isset($_POST['Update'])){

    $new_fullname = $_POST['fullname'];
    $new_address = $_POST['address'];
    $new_phone = $_POST['phone'];
    $new_request = $_POST['request'];
    $email = $_POST['email'];
    

    $sql = "UPDATE reservation
    SET CName = '$new_fullname',
        Customer_Address = '$new_address',
        Phone_No = '$new_phone',
        Special_Request = '$new_request',
    WHERE User_Email = '$email'";

    if($conn -> query($sql)){

        header("Location:Reservation-Details.php?upadte=successfull!");
        exit();
    }else{
        header("Location:Reservation-Details.php?update=Failed! try again");
        exit();
    }
}

if(isset($_POST['Delete'])){

    $email = $_POST['email'];

    $sql_d = "DELETE FROM Reservation WHERE User_Email = '$email'";

    if($conn->query($sql_d)){
        header("Location:refund.php");
        exit();
    }else{
        echo "Failed! try again";
    }
}
?>