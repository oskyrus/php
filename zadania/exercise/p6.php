<?php
$conn = mysqli_connect("localhost","root","","php_practice");

$user_id = $_POST['user_id'];
$title = $_POST['title'];
$subject = $_POST['subject'];
$description = $_POST['description'];
$due_data = $_POST['due_data'];
$status = $_POST['status'];


$sql = "INSERT INTO users VALUES (NULL,'$first_name', '$last_name', '$email', '$student_index',NULL)";

if($send = 1){
    mysqli_query($conn,$sql);
}else{
    echo "error";
}
