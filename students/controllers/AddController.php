<?php
require_once('../models/Students.php');

if ($_POST) {
    $studentModel = new Students();

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $identification = $_POST['identification'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $teacher = $_POST['teacher'];
    $average = $_POST['average'];
    $date = date('Y-m-d');
    $studentModel->add($name, $lastname, $identification, $email, $subject, $teacher, $average, $date);


} else {
    header('Location: ../../index.php');
}
