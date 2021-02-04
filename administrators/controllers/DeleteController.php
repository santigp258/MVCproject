<?php

require_once('../models/Administrators.php');

if($_POST){
    $administratorModel = new Administrator();
    $id = $_POST['id'];
    $administratorModel->delete($id);
}else{
    header('Location: ../../index.php');
}