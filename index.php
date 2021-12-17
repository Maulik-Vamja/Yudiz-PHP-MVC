<?php
if (isset($_SESSION['user'])) {
    header('location:View/index.php');
}else{
    header('location:View/login.php');
}