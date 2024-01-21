<?php
$servername =  "localhost";
$username = "root";
$password = "";
$database = "eventstay";

$conn = new mysqli($servername, $username, $password, $database);

if($conn-> connect_error) {
    die("Connection Faild: " .$conn->connect_error);
}
echo "Connected successfully";

?>