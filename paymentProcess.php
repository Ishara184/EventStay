<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitPayment'])) {

    $name = $_POST['name_on_card'];
    $amount = $_POST['amount'];
    $cardnumber = $_POST['cardNumber'];

    $email = $_SESSION['user_name'];

    
    $sql = "INSERT INTO payment (Name_on_card, Amount, Card_number, Cus_email)
        VALUES ('$name' , '$amount' , '$cardnumber' , '$email')";

    if ($conn -> query($sql) == TRUE) {

        header("Location:payment.php?message=update succsessfully!");
        exit();
        

    } else {                          
        $message = "Error: " .$sql. "<br>" .$conn -> error;
        header("Location:payment.php?message=".$message);
        exit();
    }
    

}
?>