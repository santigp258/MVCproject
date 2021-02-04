<?php 
require_once('../models/Subjects.php');

if($_POST){
    $name = $_POST['name'];
    $id = $_POST['id'];

    
    $subjectModel = new Subjects();
    $subjectModel->update($id, $name);
}else{
    header('Location ../../index.php');
}
