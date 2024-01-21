<?php
require "config.php";

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $NIC = $_POST['NIC'];
    $date = $_POST['date'];
    $hotel = $_POST['hotel'];
    $event = $_POST['event'];
    $request = $_POST['request'];

    $sql = "INSERT INTO reservation (Customer_NIC, CName, Customer_Address, Phone_No, Check_in_Date, Special_Request, Event_Type, Hotel, User_Email)
    VALUES ('$NIC' , '$name' , '$address' , '$phone' , '$date' , '$request' , '$event' , '$hotel' , '$email')";

    if ($conn -> query($sql)) {
        header("Location:payment.php?submited");
        $message = "New item added succeccfully";
    } else {
        $message = "Error: " .$sql. "<br>" .$conn -> error;
    }
    echo $message;
}

?>