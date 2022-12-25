<?php 
error_reporting(0);

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$connection = mysqli_connect("localhost","root", "","webatharva") or die ("connection failed");
$sql = "INSERT INTO atharva(name,  email , subject , message) VALUES ('{$name}', '{$email}', '{$subject}', '{$message}' ) ";

$result = mysqli_query($connection, $sql) or die ("query failed");

// header("location: http://localhost/vamtech/contact.php");   
mysqli_close($connection)

?>




