<?php
$name = $_POST ['name'];
$gender = $_POST ['gender'];
$email = $_POST ['email'];
$address = $_POST ['address'];
$birthday = $_POST ['birthday'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_db";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: " .$conn->connect_error);
}
$sql = "INSERT INTO students (full_name, gender, email, birthday, address) VALUES ('".$name."','".$gender."','".$email."','".$birthday."','".$address."')";
if ($conn->query($sql) === TRUE){
    echo "Success!!";
}else{
    echo "Error: ". $sql . "<br>" . $conn->connect_error;
}
$conn->close();
?>
