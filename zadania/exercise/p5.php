<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = mysqli_connect("localhost","root","","php_practice");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$student_index = $_POST['student_index'];


$sql = "INSERT INTO users VALUES (NULL,'$first_name', '$last_name', '$email', '$student_index',NULL)";



mysqli_query($conn,$sql);


