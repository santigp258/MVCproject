<?php
require_once('../../users/models/Users.php');

$userModel = new Users();
$userModel->validateSession();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
</head>
<?php include_once('../../includes/cdn.php') ?>

<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Add Teacher</h1>
        </div>
        <form method="POST" action="../controllers/AddController.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>

            <div class="form-group">
                <label for="lastname">Lastname:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Lastname" required>
            </div>

            <div class="form-group">
                <label for="user">User:</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="User" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Add</button>
        </form>
    </div>
</body>

</html>