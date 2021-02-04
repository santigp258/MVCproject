<?php
require_once('../../users/models/Users.php');
require_once('../models/Teachers.php');

$usersModel = new Users();
$usersModel->validateSession();


$teachersModel = new Teachers();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes System - Teachers</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Teachers</h1>
            <p class="lead">
                <a class="btn btn-primary" href="add.php" target="_blank" role="button">Add Teacher <i class="fas fa-plus-circle"></i></a>
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>User</th>
                    <th>Profile</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <?php

                $teachers = $teachersModel->get();
                if ($teachers) {

                    foreach ($teachers as $teacher) {
                ?>
                        <tr>
                            <td> <?php echo $teacher['id_user']; ?> </td>
                            <td> <?php echo $teacher['name']; ?> </td>
                            <td> <?php echo $teacher['lastname']; ?> </td>
                            <td> <?php echo $teacher['user']; ?> </td>
                            <td> <?php echo $teacher['profile']; ?> </td>
                            <td> <?php echo $teacher['status']; ?> </td>
                            <td>
                                <a href="edit.php?id=<?php echo $teacher['id_user']; ?>"><i class="far fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $teacher['id_user']; ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php  }
                } ?>
            </table>
        </div>
    </div>
</body>

</html>