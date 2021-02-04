<?php 
require_once('../models/Subjects.php');

if($_POST){
    $name = $_POST['name'];

    
    $subjectModel = new Subjects();
    $subjectModel->add($name);
}else{
    header('Location ../../index.php');
}