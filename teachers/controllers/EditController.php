<?php
require_once('../models/Teachers.php');

if ($_POST) {
    $teacherModel = new Teachers();

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $id = $_POST['id'];
    $teacherModel->update($id, $name, $lastname, $user, $password, $status);
} else {
    header('Location: ../../index.php');
}
