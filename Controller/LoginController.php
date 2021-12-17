<?php
include '../includes/connection.php';
$json = file_get_contents('php://input');
$data = json_decode($json,true);
$user = $data['user'];
$pass = $data['pass'];
$query = "SELECT * from user where username='$user' and pass='$pass'";
if(mysqli_num_rows(mysqli_query($conn,$query)) == 0){
    echo "error";
}

