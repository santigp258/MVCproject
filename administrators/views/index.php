<?php
require_once('../models/Administrators.php');
require_once('../../users/models/Users.php');

$usersModel = new Users();
$usersModel->validateSession();


$administratorModel = new Administrator();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System- Administrators</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
<?php include_once('../../includes/nav.php') ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Administrators</h1>
            <p class="lead">
                <a class="btn btn-primary" href="add.php" target="_blank" role="button">Add Administrator <i class="fas fa-plus-circle"></i></a>
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

                $administrator = $administratorModel->get();
                if ($administrator) {

                    foreach ($administrator as $admin) {
                ?>
                        <tr>
                            <td><?php  echo $admin['id_user']; ?></td>
                            <td><?php  echo $admin['name']; ?></td>
                            <td><?php  echo $admin['lastname']; ?></td>
                            <td><?php  echo $admin['user']; ?></td>
                            <td><?php  echo $admin['profile']; ?></td>
                            <td><?php  echo $admin['status']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $admin['id_user'] ?>"><i class="far fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $admin['id_user'] ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php  }
                } ?>
            </table>
        </div>
    </div>
</body>

</html>