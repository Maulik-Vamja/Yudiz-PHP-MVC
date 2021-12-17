<?php
include '../includes/connection.php';

class User {

    public $name,$username,$pass,$is_private;
    public function save()
    {
        global $conn;
        $query = "INSERT INTO user(name,username,pass) Values('$this->name','$this->username','$this->pass')";
        $result = mysqli_query($conn,$query);
        if($result){
            return;
        }else{
            echo "Error";
        }
    }
}