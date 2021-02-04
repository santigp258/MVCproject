<?php
require_once('../../users/models/Users.php');
require_once('../models/Subjects.php');

$usersModel = new Users();
$usersModel->validateSession();


$subjectModel = new Subjects();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System-Subjects</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
<?php include_once('../../includes/nav.php') ?>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Subjects</h1>
            <p class="lead">
                <a class="btn btn-primary" href="add.php" role="button">Add Subject <i class="fas fa-plus-circle"></i></a>
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
                <?php

                $subjects = $subjectModel->get();
                if ($subjects) {

                    foreach ($subjects as $subject) {
                ?>
                        <tr>
                            <td><?php echo $subject['id_subject']; ?></td>
                            <td><?php echo $subject['subject']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $subject['id_subject'] ?>"><i class="far fa-edit"></i></a>
                                <a href="delete.php?id=<?php echo $subject['id_subject'] ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php  }
                } ?>
            </table>
        </div>
    </div>
</body>

</html>