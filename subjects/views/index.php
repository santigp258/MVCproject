<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes System -Subjects</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>

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
            <tr>
                <td>1</td>
                <td>Math</td>
                <td>
                    <a href="edit.php"><i class="far fa-edit"></i></a>
                    <a href="delete.php"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
        </table>
        </div>
    </div>
</body>

</html>