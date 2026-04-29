<?php

$conn = mysqli_connect("localhost","root","","php_practice");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$student_index = $_POST['student_index'];
$send = $_POST['send'];


$sql = "INSERT INTO users VALUES (NULL,'$first_name', '$last_name', '$email', '$student_index',NULL)";


    mysqli_query($conn,$sql);
