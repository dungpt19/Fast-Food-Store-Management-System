<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$message = $_POST["message"];
$conn = mysqli_connect("localhost", "root", "", "sourcecodester_orderingdb") or die("connection failed");
$sql = "INSERT INTO database_table(First_name, Last_name, Email, Mobile, Message) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}','{$message}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/janobeoms/contact/contactform.php");
mysqli_close($conn);
?>