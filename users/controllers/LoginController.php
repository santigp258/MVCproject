<?php
require_once('../models/Users.php');
if ($_POST) {
    $user = $_POST['user'];
    $password = $_POST['password'];

    $userModel = new Users();
    if($userModel->login($user, $password)){
        header('Location: ../../students/views/index.php');
    }else{
        header('Location: ../../index.php');

    }
} else {
    header('Location: ../../index.php');
}
