<?php
require_once('../models/Administrators.php');

if ($_POST) {
    $administratorModel = new Administrator();

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $id = $_POST['id'];
    $administratorModel->update($id, $name, $lastname, $user, $password, $status);
} else {
    header('Location: ../../index.php');
}
