<?php
$name = $_POST['name'];
$name = $_POST['surname'];

if(isset($_POST['terms']) == "yes"){
    $terms = 1;
}else{
    $terms = 0;
}

echo "success";