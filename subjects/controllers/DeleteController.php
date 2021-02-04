<?php

require_once('../models/Subjects.php');

if($_POST){
    $modelSubject = new Subjects();
    $id = $_POST['id'];
    $modelSubject->delete($id);
}else{
    header('Location: ../../index.php');
}

?><pre><?php var_dump($_POST) ?></pre>