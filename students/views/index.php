<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes System</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>

    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Students</h1>
            <p class="lead">
                <a class="btn btn-primary" href="add.php" role="button">Add Student <i class="fas fa-plus-circle"></i></a>
            </p>
        </div>
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
            <tr>
                <td>1</td>
                <td>Santi</td>
                <td>Guerrero</td>
                <td>10004</td>
                <td>santi@gmail.com</td>
                <td>Math</td>
                <td>Ana</td>
                <td>100%</td>
                <td>20/12/05</td>
                <td>
                    <a href="edit.php"><i class="far fa-edit"></i></a>
                    <a href="delete.php"><i class="far fa-trash-alt"></i></a>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>