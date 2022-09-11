<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="test";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $db);

// Check connection
if($conn->connect_error){
 die("Connection failed");
}

//prepare and bind
$stmt = $mysqli->prepare("INSERT INTO player(firstname, lastname)VALUES(?,?)");

$stmt->bind_param("ss",$firstname,$lastname);

//set parameters and execute
$firstname = "Yash";
$lastname = "Kumar";
$stmt->execute();
$firstname = "Rajesh";
$lastname = "Prajapati";
$stmt->execute();
$firstname = "Ayush";
$lastname = "Chourey";
$stmt->execute();
echo "Records added successfully";
$stmt->close();
$mysqli->close();
?>