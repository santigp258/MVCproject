<?php

require_once('../models/Students.php');

if($_POST){
    $modelStudent = new Students();
    $id = $_POST['id'];
    $modelStudent->delete($id);
}else{
    header('Location: ../../index.php');
}