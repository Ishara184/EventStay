<?php
session_start();
require "config.php";

$email = $_SESSION['user_name'];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitRefund'])) {

    $accholdername = $_POST['acc_hold_name'];
    $bankname = $_POST['bank_name'];
    $branchname = $_POST['branch_name'];
    $accnumber = $_POST['acc_no'];

    
    $sql = "INSERT INTO refund (Acc_holder_name, Bank, Branch, Acc_number, email)
        VALUES ('$accholdername' , '$bankname' , '$branchname' , '$accnumber' , '$email')";

    if ($conn -> query($sql) == TRUE) {
        header("Location:refund.php?message=update succsessfully!");
        exit();
    } else {                            //need update
        $message = "Error: " .$sql. "<br>" .$conn -> error;
        header("Location:refund.php?message=".$message);
        exit();
    }
    

}

?>