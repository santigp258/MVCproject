<?php
require_once('../models/Teachers.php');

if ($_POST) {
    $teacherModel = new Teachers();

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $user = $_POST['user'];
    $password = $_POST['password'];
    $teacherModel->add( $name, $lastname, $user, $password);
} else {
    header('Location: ../../index.php');
}
