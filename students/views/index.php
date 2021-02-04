<?php
require_once('../models/Students.php');
require_once('../../users/models/Users.php');
$userModel = new Users();
$userModel->validateSession();


$studentModel = new Students();
$students = $studentModel->get();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes System</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Students</h1>
            <p class="lead">
                <a class="btn btn-primary" href="add.php" role="button">Add Student <i class="fas fa-plus-circle"></i></a>
            </p>
        </div>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Identification</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Teacher</th>
                    <th>Average</th>
                    <th>Registration Date</th>
                    <th>Actions</th>
                </tr>
                <?php if ($students) {
                    foreach ($students as $student) { ?>
                        <tr>
                            <td><?php echo $student['id_student']; ?> </td>
                            <td><?php echo $student['name']; ?> </td>
                            <td><?php echo $student['lastname']; ?> </td>
                            <td><?php echo $student['identification']; ?> </td>
                            <td><?php echo $student['email']; ?> </td>
                            <td><?php echo $student['subject']; ?> </td>
                            <td><?php echo $student['teacher']; ?> </td>
                            <td><?php echo $student['average']; ?>% </td>
                            <td><?php echo $student['registration_date']; ?> </td>
                            <td>
                                <a href="edit.php"><i class="far fa-edit"></i></a>
                                <a href="delete.php"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                <?php  }
                }else{
                    echo 'No results...';
                } ?>
            </table>
        </div>

    </div>

</body>

</html>