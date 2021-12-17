<?php
include '../Models/User.php';
$json = file_get_contents('php://input');
$data = json_decode($json,true);

if($_GET['function']){
    if($_GET['function'] == 'signup')
        SignController::signup($data);
}

class SignController {

    public function signup($data)
    {
        $user = new User();
        // $user->mobile = $data['mobile'];
        $user->name = $data['name'];
        $user->username = $data['username'];
        $user->pass = password_hash($data['password'],PASSWORD_DEFAULT);
        $user->save();
    }
}



