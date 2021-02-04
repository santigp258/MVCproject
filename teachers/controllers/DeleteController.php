<?php

require_once('../models/Teachers.php');

if($_POST){
    $teachersModel = new Teachers();
    $id = $_POST['id'];
    $teachersModel->delete($id);
}else{
    header('Location: ../../index.php');
}