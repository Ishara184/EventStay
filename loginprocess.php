<?php
session_start();
require "config.php";

if(isset( $_POST["username"]) && isset($_POST["logpassword"])){

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $log_password = mysqli_real_escape_string($conn, $_POST['logpassword']);


    

    if(empty($username)){
        header("Location:login.php?error=User name is required");
        exit();
    }else if(empty($log_password)){
        header("Location:login.php?error=password is required");
        exit();
    }else{

        $sql = "SELECT * FROM Registered_User WHERE User_Email = '$username' AND User_Password = '$log_password'";
        
        $check = $conn->query($sql);

        if(mysqli_num_rows($check) === 1){
            $data = $check->fetch_assoc();

            if ($data["User_Email"] == $username && $data["User_Password"] == $log_password){
                
                $_SESSION['user_name'] = $_POST['username'];
                $_SESSION['NIC'] = $data['NIC'];

                header("Location:card.html");
                exit();

            }else{
                header("Location:login.php?error=Incorect user name or password");
                exit();
            }
           
        }else{
            header("Location:login.php?error=Incorect user name or password");
            exit();
        }
    }

}else{
    header("Location: login.php");
    exit();
}





/*$result = $conn -> query($sql);

$result1= $result -> fetch_assoc();

if ($username == $result1["User_Email"] && $log_password == $result1["User_Password"]){
    echo 'login sucsess';
}*/

?>